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

    // Halaman Admin
    public function admin()
    {
        echo view('admin');
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
            ],
        ]);
        if ($periksa_foto) {
            $file = $request->getFile('userfile');
            $newName = $file->getRandomName();
            $file->move('images', $newName);
            $data = array(
                'gambar' => $newName,
                'nama_jenis_buah'   => $request->getPost('nama_jenis_buah'),
                'harga'  => $request->getPost('harga'),
            );
            $this->ModelJenisBuah->input_buah($data);
            session()->setFlashdata("success", "Anda berhasil menambahkan");
            return redirect()->to(base_url('input_buah'));
        } elseif ($periksa_foto) {
            $data = array(
                'gambar' => 'gambar_tidak_ada.png',
                'nama_jenis_buah'   => $request->getPost('nama_jenis_buah'),
                'harga'  => $request->getPost('harga'),
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

    public function ubah_buah($id)
    {
        $dapatkan_buah = $this->ModelJenisBarang->dapatkan_buah($id)->getRow();
        $data = array(
            'id_jenis_barang' => $dapatkan_buah->id_jenis_barang,
            'nama_jenis_buah' => $dapatkan_buah->nama_jenis_buah,
            'harga'           => $dapatkan_buah->harga,
        );
        echo view('ubah_buah', $data);
    }

    public function ubah_buah_proses()
    {
        $request = \Config\Services::request();
        $konfirmasi_foto = $request->getPost('konfirmasi_foto');
        $periksa_foto = $this->validate([
            'userfile' => [
                'uploaded[userfile]',
                'mime_in[userfile,image/jpeg,image/png,image/gif]',
                'max_size[userfile,5000]',
            ],
        ]);
        if ($periksa_foto && $konfirmasi_foto == "ya") {
            $file = $request->getFile('userfile');
            $newName = $file->getRandomName();
            $file->move('images', $newName);
            $data = array(
                'gambar'  => $newName,
                'nama_jenis_barang'    => $request->getPost('nama_jenis_buah'),
                'harga'   => $request->getPost('harga'),
            );
            $id = $request->getPost('id_jenis_barang');
            $this->ModelBarang->ubah_barang($data, $id);
            session()->setFlashdata("success", "Berhasil Mengubah Berikut Foto..");
            return redirect()->to(base_url('list_buah'));
        } elseif ($konfirmasi_foto == "tidak") {
            $data = array(
                'nama_jenis_barang' => $request->getPost('nama_jenis_barang'),
                'harga' => $request->getPost('harga'),
            );
            $id = $request->getPost('id_jenis_barang');
            $this->ModelBarang->ubah_barang($data, $id);
            session()->setFlashdata("success", "Berhasil Mengubah..");
            return redirect()->to(base_url('list_buah'));
        } else {
            $data = array(
                'gambar' => 'gambar_tidak_ada.png',
                'nama_jenis_barang' => $request->getPost('nama_jenis_barang'),
                'harga' => $request->getPost('harga'),
            );
            $id = $request->getPost('id_jenis_barang');
            $this->ModelJenisBuah->ubah_barang($data, $id);
            session()->setFlashdata("success", "Berhasil Menambahkan");
            return redirect()->to(base_url('list_buah'));
        }
    }

    public function hapus_buah($id)
    {
        $dapatkan_buah = $this->ModelJenisBuah->dapatkan_buah($id)->getRow();
        if (isset($dapatkan_buah)) {
            if ($dapatkan_buah->gambar != 'gambar_tidak_ada.png') {
                $img = '.gambar' . $dapatkan_buah->gambar;
                unlink($img);
                $this->ModelJenisBuah->hapus_buah($id);
                return redirect()->to(base_url('list_buah'));
            } else {
                $this->ModelJenisBuah->hapus_buah($id);
                return redirect()->to(base_url('list_buah'));
            }
        } else {
            return redirect()->to(base_url('list_buah'));
        }
    }



    // index
    public function index()
    {
        $status_login = session()->get('status_login');
        $username = session()->get('username');
        $data = [
            'status_login' => $status_login,
            'semua_jenis_buah' => $this->ModelJenisBuah->semua_jenis_buah(),
            'username' => $username
        ];
        echo view('index', $data);
    }
    // End Index



    public function about()
    {
        echo view('about');
    }

    public function blog()
    {
        echo view('blog');
    }



    // Login / Logout
    public function contact()
    {
        echo view('contact');
    }

    public function contact_proses()
    {
        $request = \Config\Services::request();
        $username = $request->getPost('username');
        $password = $request->getPost('password');
        $data = [
            'username' => $username,
            'password' => password_hash($password, PASSWORD_BCRYPT),
        ];
        $this->ModelLogin->contact($data);
        return redirect()->to(base_url('login'));
    }

    public function login()
    {
        echo view('login');
    }

    public function proses_login()
    {
        $request  = \Config\Services::request();
        $username = $request->getVar('username');
        $password = $request->getVar('password');
        $dataUser = $this->ModelLogin->where([
            'username' => $username,
        ])->first();

        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                session()->set([
                    'username' => $dataUser->username,
                    'status_login' => TRUE,
                ]);
                if ($dataUser->level == 'Admin') {
                    session()->setFlashdata('success', 'Anda Berhasil Login');
                    return redirect()->to(base_url('admin'));
                } else {
                    return redirect()->to(base_url('index'));
                }
            } else {
                session()->setFlashdata('error', 'Username/Password Salah');
                return redirect()->to(base_url('login'));
            }
        } else {
            session()->setFlashdata('error', 'Username/Password Salah');
            return redirect()->to(base_url('login'));
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('index'));
    }
    // End Login / Logout


    public function fruit()
    {
        $status_login = session()->get('status_login');
        $username = session()->get('username');
        $data = [
            'status_login' => $status_login,
            'semua_jenis_buah' => $this->ModelJenisBuah->semua_jenis_buah(),
            'username' => $username,
        ];
        echo view('fruit', $data);
    }

    public function editprofil()
    {

        $username = session()->get('username');
        $password = session()->get('password');
        $data = [
            'username' => $username,
            'password' => password_hash($password, PASSWORD_BCRYPT),
        ];
        echo view('editprofil', $data);
    }

    public function ubah_username($id)
    {
        $dapatkan_username = $this->ModelLogin->dapatkan_username($id)->getRow();
        $data = [
            'username' => $dapatkan_username->username,
        ];
        echo view('editprofil', $data);
    }

    public function ubah_username_proses()
    {
        $request = \Config\Services::request();
        $id = $request->getPost('username');
        $data = [
            'username' => $request->getPost('username'),
        ];
        $this->ModelLogin->ubah_username($data, $id);
        return redirect()->to(base_url('editprofil'));
    }




    // Error
    public function error()
    {
        echo view('404');
    }
    // End Error
}