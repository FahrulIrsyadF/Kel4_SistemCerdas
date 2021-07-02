<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Dashboard extends BaseController
{
	protected $loginModel;
	public function __construct()
	{
		$this->loginModel = new LoginModel;
	}

	public function index()
	{
		$username = $this->loginModel->where(['nama_user' => session()->get('username')])->first();
		$data = [
			'nama' => $username,
			'title' => 'Dashboard'
		];

		if ($username == NULL) {
			return redirect()->to('/auth');
		} else {
			echo view('dashboard', $data);
		}
	}
}
