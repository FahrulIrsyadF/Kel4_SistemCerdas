<?php

namespace App\Controllers;

use App\Models\TrainingModel;
use App\Models\WeightModel;
use App\Models\ClassModel;
use App\Models\LoginModel;

class Training extends BaseController
{
    protected $TrainingModel;

    public function __construct()
    {
        $this->TrainingModel = new TrainingModel;
        $this->weightModel = new WeightModel;
        $this->classModel = new ClassModel;
        $this->loginModel = new LoginModel;

    }

    public function index()
    {
        $username = $this->loginModel->where(['nama_user' => session()->get('username')])->first();
        if ($username == NULL) {
            session()->setFlashdata('pesan', $this->notify('Peringatan!', 'Untuk mengakses halaman data training, login terlebih dahulu!', 'warning', 'error'));
            return redirect()->to("/auth");
        }
        
        $data = [
            'title' => 'Data Latih',
            'train' => $this->TrainingModel->findAll(),
            'class' => $this->classModel->findAll()
        ];

        echo view('v_training', $data);
    }

    public function prosesExcel()
    {
        $file = $this->request->getFile('file_excel');
        $ext = $file->getClientExtension();
        if ('csv' == $ext) {
            $excelreader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
        } else if ('xlsx' == $ext) {
            $excelreader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        } else {
            $excelreader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        }
        //baca file
        $spreadsheet = $excelreader->load($file);
        //ambil sheet active
        $sheet    = $spreadsheet->getActiveSheet()->toArray();

        $i = 0;
        //looping untuk mengambil data
        foreach ($sheet as $data) {
            //skip index 3 karena title excel
            if ($i >= 4) {
                // continue;
                $classDatabase = $this->classModel->where('code_class', $data['19'])->findAll();
                // dd($classDatabase[0]['code_class']);
                $classDatabase = $classDatabase[0]['id_class'];
                $insert = [
                    'id_user' => 1,
                    'tr_behaviour_sexualrisk' => $data['0'],
                    'tr_behavior_eating' => $data['1'],
                    'tr_behavior_personalhygine' => $data['2'],
                    'tr_intention_aggregation' => $data['3'],
                    'tr_intention_commitment' => $data['4'],
                    'tr_attitude_consistency' => $data['5'],
                    'tr_attitude_spontaneity' => $data['6'],
                    'tr_norm_significantperson' => $data['7'],
                    'tr_norm_fulfillment' => $data['8'],
                    'tr_perception_vulnerability' => $data['9'],
                    'tr_perception_severity' => $data['10'],
                    'tr_motivation_strength' => $data['11'],
                    'tr_motivation_willingness' => $data['12'],
                    'tr_socialsupport_emotionality' => $data['13'],
                    'tr_socialsupport_appreciation' => $data['14'],
                    'tr_socialsupport_instrumental' => $data['15'],
                    'tr_empowerment_knowledge' => $data['16'],
                    'tr_empowerment_abilities' => $data['17'],
                    'tr_empowerment_desires' => $data['18'],
                    'id_class' => $classDatabase,
                    'tr_timestamp' => date('Y-m-d H:i:s')
                ];
                $this->TrainingModel->add($insert);
                // dd($data);
            }
            $i++;
        }

        session()->setFlashdata('pesan', $this->notify('Selamat!', 'Berhasil mengimport data.', 'success', 'success'));
        return redirect()->back();
    }

    public function delete($id_train)
    {
        $data = [
            'title' => 'Data Latih',
            'train' => $this->TrainingModel->findAll(),
            'class' => $this->classModel->findAll()
        ];
        $hapus = $this->TrainingModel->deleteData($id_train);
        // mengirim pesan berhasil dihapus
        if ($hapus) {
            session()->setFlashdata('pesan', $this->notify('Selamat!', 'Berhasil menghapus data.', 'success', 'success'));
            return redirect()->back();
        } else {
            session()->setFlashdata('pesan', $this->notify('Perhatian!', 'Gagal menghapus data.', 'danger', 'error'));
            return redirect()->back();
        }
    }

    public function deleteAll()
    {
        $data = [
            'title' => 'Data Latih',
            'train' => $this->TrainingModel->findAll(),
            'class' => $this->classModel->findAll()
        ];
        $db = \Config\Database::connect();
        $builder = $db->table('train');
        $hapus = $builder->emptyTable('train');
        // mengirim pesan berhasil dihapus
        if ($hapus) {
            session()->setFlashdata('pesan', $this->notify('Selamat!', 'Berhasil menghapus data.', 'success', 'success'));
            return redirect()->back();
        } else {
            session()->setFlashdata('pesan', $this->notify('Perhatian!', 'Gagal menghapus data.', 'danger', 'error'));
            return redirect()->back();
        }
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
