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
        // lakukan validasi
            $validation =  \Config\Services::validation();
            $validation->setRules([
                'nama' => 'required',
                'password' => 'required',
                'passconf' => 'required|matches[password]',
                'passconf' => [
                    'rules' => 'required|matches[password]',
                    'errors' => [
                        'matches' => 'salah bodo'
                    ]
                ]
            ]);
            $isDataValid = $validation->withRequest($this->request)->run();

            // Jika data valid
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
                return redirect()->back();
            }
    }

    public function delete($id_user)
    {
        $data = [
            'title' => 'Data Latih',
            'train' => $this->TrainingModel->findAll(),
            'class' => $this->classModel->findAll()
        ];
        $hapus = $this->TrainingModel->deleteData($id_user);
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
