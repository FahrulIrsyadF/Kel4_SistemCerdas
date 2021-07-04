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

    public function printDetail($id_test)
    {
        //dd($id_test);
        $dompdf = new \Dompdf\Dompdf();
        $dompdf->loadHtml(view('v_printDetail', $data = ['id_test' => $id_test]));
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $dompdf->stream();

        return view('v_laporan');
    }
}
