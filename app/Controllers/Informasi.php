<?php

namespace App\Controllers;

class Informasi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Informasi'
        ];
        return view('v_about', $data);
    }
}
