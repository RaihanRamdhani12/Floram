<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Response;

class RajaOngkir extends BaseController
{
    private $url = "https://api.rajaongkir.com/starter/";
    private $apiKey = "6176972398763bef4ab99c982d09ca06";

    public function cart()
    {
        $provinsi = $this->raja_ongkir('province');
        $status_login = session()->get('status_login');
        $username = session()->get('username');
        $bekasi = $this->bekasi('province');
        $data = [
            'cart' => \Config\Services::cart(),
            'status_login' => $status_login,
            'username' => $username,
            'bekasi' => json_decode($bekasi)->rajaongkir->results,
            'provinsi' => json_decode($provinsi)->rajaongkir->results,
        ];
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/city",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key:6176972398763bef4ab99c982d09ca06"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            // echo "cURL Error #:" . $err;
            $data['kota'] = array('error' => true);
        } else {
            // echo $response;
            $data['kota'] = json_decode($response);
        }
        // print_r($data['kota']);
        echo view('cart', $data);
    }

    public function cek_ongkir()
    {
        $request = \Config\Services::request();
        $asal = $request->getPost('asal');
        // $asal = 12;
        $tujuan = $request->getPost('tujuan');
        $berat = $request->getPost('berat');
        $kurir = $request->getPost('kurir');
        $data = array(
            'asal' => $asal,
            'tujuan' => $tujuan,
            'berat' => $berat,
            'kurir' => $kurir,
        );
        $curl = curl_init();
        // var_dump($asal);
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "origin=" . $asal . "&destination=" . $tujuan . "&weight=" . $berat . "&courier=" . $kurir,
            CURLOPT_HTTPHEADER => array(
                "content-type: application/x-www-form-urlencoded",
                "key: 6176972398763bef4ab99c982d09ca06"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            // echo "cURL Error #:" . $err;
            $data['hasil'] = array('error' => true);
        } else {
            // echo $response;
            $data['hasil'] = json_decode($response);
        }
        // print_r($data['hasil']);
        echo view('hasil', $data);
    }

    private function bekasi()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/city?id=54&province=9",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key:$this->apiKey"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        return $response;
    }

    public function add()
    {
        $cart = \Config\Services::cart();
        $cart->insert(array(
            'id'      => $this->request->getpost('id'),
            'qty'     => 1,
            'price'   => $this->request->getpost('price'),
            'name'    => $this->request->getpost('name'),
            'options' => array(
                'berat' => $this->request->getpost('berat'),
                'gambar' => $this->request->getpost('gambar'),
            )
        ));
        session()->setFlashdata("success", "Berhasil Menambahkan!");
        return redirect()->to(base_url('fruit'));
    }

    public function update()
    {
        $cart = \Config\Services::cart();
        $i = 1;
        foreach ($cart->contents() as $key => $value) {
            $cart->update(array(
                'rowid'   =>  $value['rowid'],
                'qty'     => $this->request->getPost('qty' . $i++),
            ));
        }
        session()->setFlashdata("success", "Data Keranjang berhasil di ubah");
        return redirect()->to(base_url('cart'));
    }

    public function clear()
    {
        $cart = \Config\Services::cart();
        $cart->destroy();
        return redirect()->to(base_url('cart'));
    }

    public function delete($rowid)
    {
        $cart = \Config\Services::cart();
        $cart->remove($rowid);
        session()->setFlashdata("success", "Data Berhasil Dihapus");
        return redirect()->to(base_url('cart'));
    }

    private function raja_ongkir($method, $id_province = null)
    {
        $endPoint = $this->url . $method;
        if ($id_province != null) {
            $endPoint = $endPoint . "?province=" . $id_province;
        }
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $endPoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key:$this->apiKey"
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        return $response;
    }

    private function raja_ongkir_cost($origin, $destination, $weight, $courier)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "origin=" . $origin . "&destination=" . $destination . "&weight=" . $weight . "&courier=" . $courier,
            CURLOPT_HTTPHEADER => array(
                "content-type: application/x-www-form-urlencoded",
                "key:$this->apiKey"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        // if ($err) {
        //     echo "cURL Error #:" . $err;
        // } else {
        //     echo $response;
        // }

        return $response;
    }

    public function getCost()
    {
        if ($this->request->isAJAX()) {
            $origin = $this->request->getGet('origin');
            $destination = $this->request->getGet('destination');
            $weight = $this->request->getGet('weight');
            $courier = $this->request->getGet('courier');
            $data = $this->raja_ongkir_cost($origin, $destination, $weight, $courier);
            return $this->response->setJSON($data);
        }
    }

    public function getCity()
    {
        if ($this->request->isAJAX()) {
            $id_province = $this->request->getGET('id_province');
            $data = $this->raja_ongkir('city', $id_province);
            return $this->response->setJSON($data);
        }
    }

    public function data_kurir()
    {
        echo "<option value=''> -- > Pilih Kurir <-- </option>";
        echo "<option kurirx='jne' value='jne'> JNE</option>";
        echo "<option kurirx='pos' value='pos'> POS </option>";
        echo "<option kurirx='tiki' value='tiki'> TIKI</option>";
    }
}
