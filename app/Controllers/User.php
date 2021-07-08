<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\TrainingModel;
use App\Models\LoginModel;

class User extends BaseController
{
    protected $UserModel;

    public function __construct()
    {
        $this->UserModel = new UserModel;
        $this->TrainingModel = new TrainingModel;
        $this->loginModel = new LoginModel;
    }

    public function index()
    {
        $username = $this->loginModel->where(['nama_user' => session()->get('username')])->first();
        if ($username == NULL) {
            session()->setFlashdata('pesan', $this->notify('Peringatan!', 'Untuk mengakses halaman data training, login terlebih dahulu!', 'warning', 'error'));
            return redirect()->to("/auth");
        }

        $data = [
            'title' => 'Manajemen Admin',
            'user' => $this->UserModel->findAll(),
            'validation' => \Config\Services::validation()
        ];

        echo view('v_user', $data);
    }

    public function create()
    {
        // konfigurasi validasi (membuat rules)
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harap isi kolom ini'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harap isi kolom ini'
                ]
            ],
            'passconf' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Harap isi kolom ini',
                    'matches' => 'Kata sandi tidak sama'
                ]
            ]
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        // Jika data lolos validasi
        if ($isDataValid) {
            // menyimpan data yang diinputkan
            $nama = $this->request->getPost('nama');
            $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
            $insert = [
                'nama_user' => $nama,
                'password' => $password
            ];

            // dd($insert);
            $this->UserModel->insert($insert);
            session()->setFlashdata('pesan', $this->notify('Selamat!', 'Berhasil menambah data.', 'success', 'success'));
            return redirect()->back();
        } else {
            //Jika data tidak lolos validasi
            session()->setFlashdata('pesan', $this->notify('Perhatian!', 'Gagal menambah data. Harap cek kembali masukkan Anda', 'danger', 'error'));
            return redirect()->to("/user")->withInput()->with('validation', $validation);
        }
    }

    public function delete($id_user)
    {
        $hapus = $this->UserModel->deleteData($id_user);
        // mengirim pesan berhasil dihapus
        if ($hapus) {
            session()->setFlashdata('pesan', $this->notify('Selamat!', 'Berhasil menghapus data.', 'success', 'success'));
            return redirect()->back();
        } else {
            session()->setFlashdata('pesan', $this->notify('Perhatian!', 'Gagal menghapus data.', 'danger', 'error'));
            return redirect()->back();
        }
    }

    function notify($title, $message, $type, $icon)
    {
        $pesan = "$.notify({
            icon: 'flaticon-$icon',
            title: '$title',
            message: '$message',
        },{
            type: '$type',
            placement: {
                from: 'top',
                align: 'center'
            },
            time: 1000,
        });";
        return $pesan;
    }
}
