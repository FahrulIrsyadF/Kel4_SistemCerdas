<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Auth extends BaseController
{
    protected $loginModel;

    public function __construct()
    {
        $this->loginModel = new LoginModel;
    }

    public function index()
    {
        $data = [
            'title' => 'Login Admin',
        ];

        echo view('v_login', $data);
    }

    public function insert()
    {
        $this->loginModel->save([
            'nama_user' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
        ]);

        return redirect()->to('/auth');
    }

    public function login()
    {
        $nama_user = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $login = $this->loginModel->where(['nama_user' => $nama_user])->first();

        if ($login) {
            if (password_verify($password, $login['password'])) {
                $data = [
                    'username' => $login['nama_user']
                ];
                session()->set($data);
                return redirect()->to('/');
            } else {
                session()->setFlashdata('password', '<small class="form-text text-danger">
                Password salah
                </small>');
                return redirect()->to('/auth');
            }
        } else {
            session()->setFlashdata('username', '<small class="form-text text-danger">
            Username belum terdaftar
            </small>');
            return redirect()->to('/auth');
        }
    }

    public function logout()
    {
        session()->destroy(true);
        return redirect()->to('/auth');
    }
}