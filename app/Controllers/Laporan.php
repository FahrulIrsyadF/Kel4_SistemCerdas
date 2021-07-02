<?php

namespace App\Controllers;

use App\Models\ClassModel;
use App\Models\TestingModel;

class Laporan extends BaseController
{
    public function __construct()
    {
        $this->TestingModel = new TestingModel;
        $this->classModel = new ClassModel;
    }

    public function index()
    {
        $data = [
            'title' => 'Laporan Hasil',
            'test' => $this->TestingModel->findAll(),
            'class' => $this->classModel->findAll()
        ];

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
