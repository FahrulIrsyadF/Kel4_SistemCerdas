<?php

namespace App\Controllers;

class Informasi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Deteksi Dini Kanker Serviks Menggunakan Metode LVQ'
        ];
        return view('v_about', $data);
    }
}
