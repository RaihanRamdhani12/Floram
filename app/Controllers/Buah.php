<?php

namespace App\Controllers;

use App\Models\ModelLogin;
use App\Models\ModelJenisBuah;
use App\Models\ModelCheckout;
use Kint\Zval\Value;

class Home extends BaseController
{
    public function __construct()
    {
        $this->ModelLogin = new ModelLogin();
        $this->ModelJenisBuah = new ModelJenisBuah();
        $this->ModelCheckout = new ModelCheckout();
        helper('number');
        helper('form');
    }
    

    public function fasf()
    {
        echo view ('ada');
    }


    public function input_buah()
    {
        echo view('input_buah');
    }

    public function input_buah_proses()
    {
        $request = \Config\Services::request();
        $periksa_foto = $this->validate([
            'userfile' => [
                'uploaded[userfile]',
                'mime_in[userfile,image/jpeg,image/png,image/gif]',
                'max_size[userfile,5000]',
''
            ],
        ]);
        if ($periksa_foto) {
            $file = $request->getFile('userfile');
            $newName = $file->getRandomName();
            $file->move('images', $newName);
            $data = array(
                'gambar' => $newName,
                'nama_jenis_buah' => $request->getPost('nama_jenis_buah'),
                'harga' => $request->getPost('harga'),
            );
            $this->ModelJenisBuah->input_buah($data);
            session()->setFlashdata("success", "Anda berhasil menambahkan");
            return redirect()->to(base_url('input_buah'));
        } elseif ($periksa_foto) {
            $data = array(
                'gambar' => 'gambar_tidak_ada.png',
                'nama_jenis_buah' => $request->getPost('nama_jenis_buah'),
                'harga' => $request->getPost('harga'),

            );
            $this->ModelJenisBuah->input_buah($data);
            session()->setFlashdata("success", "Anda berhasil menambahkan");
            return redirect()->to(base_url('list_buah'));
        }
    }

    public function list_buah()
    {
        $data = array(
            'semua_jenis_buah' => $this->ModelJenisBuah->semua_buah(),
        );
        echo view('list_buah', $data);
    }
}