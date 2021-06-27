<?php

namespace App\Controllers;

use App\Models\TrainingModel;
use App\Models\WeightModel;
use App\Models\ClassModel;

class Training extends BaseController
{
    protected $TrainingModel;

    public function __construct()
    {
        $this->TrainingModel = new TrainingModel;
        $this->weightModel = new WeightModel;
        $this->classModel = new ClassModel;
    }

    public function index()
    {

        $data = [
            'title' => 'Data Training',
            'train' => $this->TrainingModel->findAll(),
            'class' => $this->classModel->findAll()
        ];

        echo view('v_training', $data);
    }

    public function done($id)
    {
        $data = [
            'title' => 'Form diagnosis kanker serviks',
            'train' => $this->trainingModel->where('id_train', $id)->findAll(),
            'class' => $this->classModel->findAll(),
        ];

        echo view('v_testing_done', $data);
    }

    public function delete($id_train)
    {
        $data = [
            'title' => 'Data Training',
            'train' => $this->TrainingModel->findAll(),
            'class' => $this->classModel->findAll()
        ];
        $hapus = $this->TrainingModel->deleteData($id_train);
        // mengirim pesan berhasil dihapus
        if ($hapus) {
            $this->session->set_flashdata('pesan', $this->notify('Selamat!', 'Berhasil menghapus data.', 'success', 'success'));
            echo view('v_training', $data);
        } else {
            $this->session->set_flashdata('pesan', $this->notify('Perhatian!', 'Gagal menghapus data.', 'danger', 'error'));
            echo view('v_training', $data);
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

    public function create()
    {
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules(['name' => 'required']);
        $validation->setRules(['age' => 'required']);

        $validation->setRules(['behavior_sexualrisk' => 'required']);
        $validation->setRules(['behavior_eating' => 'required']);
        $validation->setRules(['behavior_personalHygine' => 'required']);
        $validation->setRules(['intention_aggregation' => 'required']);
        $validation->setRules(['intention_commitment' => 'required']);
        $validation->setRules(['attitude_consistency' => 'required']);
        $validation->setRules(['attitude_spontaneity' => 'required']);
        $validation->setRules(['norm_significantPerson' => 'required']);
        $validation->setRules(['norm_fulfillment' => 'required']);
        $validation->setRules(['perception_vulnerability' => 'required']);
        $validation->setRules(['perception_severity' => 'required']);
        $validation->setRules(['motivation_strength' => 'required']);
        $validation->setRules(['motivation_willingness' => 'required']);
        $validation->setRules(['socialSupport_emotionality' => 'required']);
        $validation->setRules(['socialSupport_appreciation' => 'required']);
        $validation->setRules(['socialSupport_instrumental' => 'required']);
        $validation->setRules(['empowerment_knowledge' => 'required']);
        $validation->setRules(['empowerment_abilities' => 'required']);
        $validation->setRules(['empowerment_desires' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, lakukan perhitungan
        if ($isDataValid) {
            echo '<pre>';
            print_r($_POST);

            // menyimpan variabel testing
            $test_name = $this->request->getPost('name');
            $test_age = $this->request->getPost('age');

            $test_behaviour_sexualrisk = $this->request->getPost('behavior_sexualrisk');
            $test_behavior_eating = $this->request->getPost('behavior_eating');
            $test_behavior_personalhygine = $this->request->getPost('behavior_personalHygine');
            $test_intention_aggregation = $this->request->getPost('intention_aggregation');
            $test_intention_commitment = $this->request->getPost('intention_commitment');
            $test_attitude_consistency = $this->request->getPost('attitude_consistency');
            $test_attitude_spontaneity = $this->request->getPost('attitude_spontaneity');
            $test_norm_significantperson = $this->request->getPost('norm_significantPerson');
            $test_norm_fulfillment = $this->request->getPost('norm_fulfillment');
            $test_perception_vulnerability = $this->request->getPost('perception_vulnerability');
            $test_perception_severity = $this->request->getPost('perception_severity');
            $test_motivation_strength = $this->request->getPost('motivation_strength');
            $test_motivation_willingness = $this->request->getPost('motivation_willingness');
            $test_socialsupport_emotionality = $this->request->getPost('socialSupport_emotionality');
            $test_socialsupport_appreciation = $this->request->getPost('socialSupport_appreciation');
            $test_socialsupport_instrumental = $this->request->getPost('socialSupport_instrumental');
            $test_empowerment_knowledge = $this->request->getPost('empowerment_knowledge');
            $test_empowerment_abilities = $this->request->getPost('empowerment_abilities');
            $test_empowerment_desires = $this->request->getPost('empowerment_desires');

            // mengambil weight terpilih
            $weight = $this->weightModel->where('status_weight', 1)->find();
            echo '<pre>';
            print_r($weight);
            $status_weight = $weight[0]['status_weight'];
            $wa_behaviour_sexualrisk = $weight[0]['wa_behaviour_sexualrisk'];
            $wa_behavior_eating = $weight[0]['wa_behavior_eating'];
            $wa_behavior_personalhygine = $weight[0]['wa_behavior_personalhygine'];
            $wa_intention_aggregation = $weight[0]['wa_intention_aggregation'];
            $wa_intention_commitment = $weight[0]['wa_intention_commitment'];
            $wa_attitude_consistency = $weight[0]['wa_attitude_consistency'];
            $wa_attitude_spontaneity = $weight[0]['wa_attitude_spontaneity'];
            $wa_norm_significantperson = $weight[0]['wa_norm_significantperson'];
            $wa_norm_fulfillment = $weight[0]['wa_norm_fulfillment'];
            $wa_perception_vulnerability = $weight[0]['wa_perception_vulnerability'];
            $wa_perception_severity = $weight[0]['wa_perception_severity'];
            $wa_motivation_strength = $weight[0]['wa_motivation_strength'];
            $wa_motivation_willingness = $weight[0]['wa_motivation_willingness'];
            $wa_socialsupport_emotionality = $weight[0]['wa_socialsupport_emotionality'];
            $wa_socialsupport_appreciation = $weight[0]['wa_socialsupport_appreciation'];
            $wa_socialsupport_instrumental = $weight[0]['wa_socialsupport_instrumental'];
            $wa_empowerment_knowledge = $weight[0]['wa_empowerment_knowledge'];
            $wa_empowerment_abilities = $weight[0]['wa_empowerment_abilities'];
            $wa_empowerment_desires = $weight[0]['wa_empowerment_desires'];

            $wb_behaviour_sexualrisk = $weight[0]['wb_behaviour_sexualrisk'];
            $wb_behavior_eating = $weight[0]['wb_behavior_eating'];
            $wb_behavior_personalhygine = $weight[0]['wb_behavior_personalhygine'];
            $wb_intention_aggregation = $weight[0]['wb_intention_aggregation'];
            $wb_intention_commitment = $weight[0]['wb_intention_commitment'];
            $wb_attitude_consistency = $weight[0]['wb_attitude_consistency'];
            $wb_attitude_spontaneity = $weight[0]['wb_attitude_spontaneity'];
            $wb_norm_significantperson = $weight[0]['wb_norm_significantperson'];
            $wb_norm_fulfillment = $weight[0]['wb_norm_fulfillment'];
            $wb_perception_vulnerability = $weight[0]['wb_perception_vulnerability'];
            $wb_perception_severity = $weight[0]['wb_perception_severity'];
            $wb_motivation_strength = $weight[0]['wb_motivation_strength'];
            $wb_motivation_willingness = $weight[0]['wb_motivation_willingness'];
            $wb_socialsupport_emotionality = $weight[0]['wb_socialsupport_emotionality'];
            $wb_socialsupport_appreciation = $weight[0]['wb_socialsupport_appreciation'];
            $wb_socialsupport_instrumental = $weight[0]['wb_socialsupport_instrumental'];
            $wb_empowerment_knowledge = $weight[0]['wb_empowerment_knowledge'];
            $wb_empowerment_abilities = $weight[0]['wb_empowerment_abilities'];
            $wb_empowerment_desires = $weight[0]['wb_empowerment_desires'];

            $result_a = sqrt(
                pow(($test_behaviour_sexualrisk - $wa_behaviour_sexualrisk), 2) +
                    pow(($test_behavior_eating - $wa_behavior_eating),  2) +
                    pow(($test_behavior_personalhygine - $wa_behavior_personalhygine),  2) +
                    pow(($test_intention_aggregation - $wa_behavior_eating),  2) +
                    pow(($test_intention_commitment - $wa_intention_commitment),  2) +
                    pow(($test_attitude_consistency - $wa_attitude_consistency),  2) +
                    pow(($test_attitude_spontaneity - $wa_attitude_spontaneity),  2) +
                    pow(($test_norm_significantperson - $wa_norm_significantperson),  2) +
                    pow(($test_norm_fulfillment - $wa_norm_fulfillment),  2) +
                    pow(($test_perception_vulnerability - $wa_perception_vulnerability),  2) +
                    pow(($test_perception_severity - $wa_perception_severity),  2) +
                    pow(($test_motivation_strength - $wa_motivation_strength),  2) +
                    pow(($test_motivation_willingness - $wa_motivation_willingness),  2) +
                    pow(($test_socialsupport_emotionality - $wa_socialsupport_emotionality),  2) +
                    pow(($test_socialsupport_appreciation - $wa_socialsupport_appreciation), 2) +
                    pow(($test_socialsupport_instrumental - $wa_socialsupport_instrumental),  2) +
                    pow(($test_empowerment_knowledge - $wa_empowerment_knowledge),  2) +
                    pow(($test_empowerment_abilities - $wa_empowerment_abilities),  2) +
                    pow(($test_empowerment_desires - $wa_empowerment_desires),  2)
            );

            $result_b = sqrt(
                pow(($test_behaviour_sexualrisk - $wb_behaviour_sexualrisk), 2) +
                    pow(($test_behavior_eating - $wb_behavior_eating), 2) +
                    pow(($test_behavior_personalhygine - $wb_behavior_personalhygine), 2) +
                    pow(($test_intention_aggregation - $wb_behavior_eating), 2) +
                    pow(($test_intention_commitment - $wb_intention_commitment), 2) +
                    pow(($test_attitude_consistency - $wb_attitude_consistency), 2) +
                    pow(($test_attitude_spontaneity - $wb_attitude_spontaneity), 2) +
                    pow(($test_norm_significantperson - $wb_norm_significantperson), 2) +
                    pow(($test_norm_fulfillment - $wb_norm_fulfillment), 2) +
                    pow(($test_perception_vulnerability - $wb_perception_vulnerability), 2) +
                    pow(($test_perception_severity - $wb_perception_severity), 2) +
                    pow(($test_motivation_strength - $wb_motivation_strength), 2) +
                    pow(($test_motivation_willingness - $wb_motivation_willingness), 2) +
                    pow(($test_socialsupport_emotionality - $wb_socialsupport_emotionality), 2) +
                    pow(($test_socialsupport_appreciation - $wb_socialsupport_appreciation), 2) +
                    pow(($test_socialsupport_instrumental - $wb_socialsupport_instrumental), 2) +
                    pow(($test_empowerment_knowledge - $wb_empowerment_knowledge), 2) +
                    pow(($test_empowerment_abilities - $wb_empowerment_abilities), 2) +
                    pow(($test_empowerment_desires - $wb_empowerment_desires), 2)
            );

            echo $result_a;
            echo '<br>';
            echo $result_b;
            echo '<br>';
            // echo $wa_behaviour_sexualrisk . ' + ' . $test_behaviour_sexualrisk;
            // echo '<br>';
            // echo $wa_behavior_eating . ' + ' . $test_behavior_eating;
            // echo '<br>';
            // echo $wa_behavior_personalhygine . ' + ' . $test_behavior_personalhygine;
            // echo '<br>';
            // echo $wa_intention_aggregation . ' + ' . $test_intention_aggregation;
            // echo '<br>';
            // echo $wa_intention_commitment . ' + ' . $test_intention_commitment;
            // echo '<br>';
            // echo $wa_attitude_consistency . ' + ' . $test_attitude_consistency;
            // echo '<br>';
            // echo $wa_attitude_spontaneity . ' + ' . $test_attitude_spontaneity;
            // echo '<br>';
            // echo $wa_norm_significantperson . ' + ' . $test_norm_significantperson;
            // echo '<br>';
            // echo $wa_norm_fulfillment . ' + ' . $test_norm_fulfillment;
            // echo '<br>';
            // echo $wa_perception_vulnerability . ' + ' . $test_perception_vulnerability;
            // echo '<br>';
            // echo $wa_perception_severity . ' + ' . $test_perception_severity;
            // echo '<br>';
            // echo $wa_motivation_strength . ' + ' . $test_motivation_strength;
            // echo '<br>';
            // echo $wa_motivation_willingness . ' + ' . $test_motivation_willingness;
            // echo '<br>';
            // echo $wa_socialsupport_emotionality . ' + ' . $test_socialsupport_emotionality;
            // echo '<br>';
            // echo $wa_socialsupport_appreciation . ' + ' . $test_socialsupport_appreciation;
            // echo '<br>';
            // echo $wa_socialsupport_instrumental . ' + ' . $test_socialsupport_instrumental;
            // echo '<br>';
            // echo $wa_empowerment_knowledge . ' + ' . $test_empowerment_knowledge;
            // echo '<br>';
            // echo $wa_empowerment_abilities . ' + ' . $test_empowerment_abilities;
            // echo '<br>';
            // echo $wa_empowerment_desires . ' + ' . $test_empowerment_desires;
            // echo '<br>';
            if ($result_a > $result_b) {
                $class = $this->classModel->where('code_class', 1)->findAll();
                $class = $class[0]['id_class'];
            } else {
                $class = $this->classModel->where('code_class', 0)->findAll();
                $class = $class[0]['id_class'];
            }

            // exit;

            $insert = [
                'id_class' => $class,
                'id_weight' => $weight[0]['id_weight'],
                'name_test' => $test_name,
                'age_test' => $test_age,
                'ts_behaviour_sexualrisk' => $test_behaviour_sexualrisk,
                'ts_behavior_eating' => $test_behavior_eating,
                'ts_behavior_personalhygine' => $test_behavior_personalhygine,
                'ts_intention_aggregation' => $test_intention_aggregation,
                'ts_intention_commitment' => $test_intention_commitment,
                'ts_attitude_consistency' => $test_attitude_consistency,
                'ts_attitude_spontaneity' => $test_attitude_spontaneity,
                'ts_norm_significantperson' => $test_norm_significantperson,
                'ts_norm_fulfillment' => $test_norm_fulfillment,
                'ts_perception_vulnerability' => $test_perception_vulnerability,
                'ts_perception_severity' => $test_perception_severity,
                'ts_motivation_strength' => $test_motivation_strength,
                'ts_motivation_willingness' => $test_motivation_willingness,
                'ts_socialsupport_emotionality' => $test_socialsupport_emotionality,
                'ts_socialsupport_appreciation' => $test_socialsupport_appreciation,
                'ts_socialsupport_instrumental' => $test_socialsupport_instrumental,
                'ts_empowerment_knowledge' => $test_empowerment_knowledge,
                'ts_empowerment_abilities' => $test_empowerment_abilities,
                'ts_empowerment_desires' => $test_empowerment_desires,
                'ts_timestamp' => date('Y-m-d H:i:s'),
                'result_a' => $result_a,
                'result_b' => $result_b,
            ];

            // echo '<pre>';
            // print_r($insert); exit;
            $this->testingModel->insert($insert);
            $id = $this->testingModel->getInsertID();
            return redirect()->to("/testing/done/$id");
        }

        // tampilkan form klasifikasi kembali
        $data = [
            'title'     => 'Form diagnosis kanker serviks',
        ];

        echo view('v_testing', $data);
    }
}
