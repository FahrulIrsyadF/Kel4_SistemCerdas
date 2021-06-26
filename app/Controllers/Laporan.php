<?php

namespace App\Controllers;

// use App\Models\LoginModel;

class Laporan extends BaseController
{
    public function index()
    {
        $pager = \Config\Services::pager();
        $model = new \App\Models\ClassModel();

        $data = [
            'title' => 'Laporan Hasil',
            'class' => $model->paginate(5, 'bootstrap'),
            'pager' => $model->pager
        ];
        $data['nomor'] = nomor($this->request->getVar('page_bootstrap'), 5);

        return view('v_laporan', $data);
    }
}
