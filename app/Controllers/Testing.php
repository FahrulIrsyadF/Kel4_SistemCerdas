<?php

namespace App\Controllers;

// use App\Models\LoginModel;

class Testing extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Form diagnosis kanker serviks'
        ];

        echo view('v_testing', $data);
    }
}
