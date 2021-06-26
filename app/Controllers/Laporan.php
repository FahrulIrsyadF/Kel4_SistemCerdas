<?php

namespace App\Controllers;

// use App\Models\LoginModel;

class Laporan extends BaseController
{
    public function index()
    {
        $pager = \Config\Services::pager();
        $model = new \App\Models\TestingModel();

        $data = [
            'title' => 'Laporan Hasil',
            'class' => $model->paginate(5, 'bootstrap'),
            'pager' => $model->pager
        ];
        $data['nomor'] = nomor($this->request->getVar('page_bootstrap'), 5);

        return view('v_laporan', $data);
    }

    public function printPDF()
    {
        $dompdf = new \Dompdf\Dompdf();
        $dompdf->loadHtml(view('v_printLaporan'));
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();

        return view('v_laporan');
    }
}
