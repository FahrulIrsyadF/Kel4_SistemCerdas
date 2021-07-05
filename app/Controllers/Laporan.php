<?php

namespace App\Controllers;

use App\Models\ClassModel;
use App\Models\TestingModel;
use App\Models\LoginModel;

class Laporan extends BaseController
{
    public function __construct()
    {
        $this->TestingModel = new TestingModel;
        $this->classModel = new ClassModel;
        $this->loginModel = new LoginModel;

        $username = $this->loginModel->where(['nama_user' => session()->get('username')])->first();
        if ($username == NULL) {
            session()->setFlashdata('pesan', $this->notify('Peringatan!', 'Untuk mengakses halaman laporan, login terlebih dahulu!', 'warning', 'error'));
            return redirect()->to("/auth");
        }
    }

    public function index()
    {
        $username = $this->loginModel->where(['nama_user' => session()->get('username')])->first();
        $data = [
            'title' => 'Laporan Hasil',
            'test' => $this->TestingModel->findAll(),
            'class' => $this->classModel->findAll()
        ];

        echo view('v_laporan', $data);
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
