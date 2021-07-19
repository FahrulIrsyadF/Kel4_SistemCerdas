<?php

namespace App\Controllers;

use App\Models\TestingModel;
use App\Models\WeightModel;
use App\Models\ClassModel;

class Testing extends BaseController
{
    protected $testingModel;

    public function __construct()
    {
        $this->testingModel = new TestingModel;
        $this->weightModel = new WeightModel;
        $this->classModel = new ClassModel;
    }

    public function index()
    {
        $data = [
            'title' => 'Form diagnosis kanker serviks',
            'weight' => $this->weightModel->where('status_weight', 1)->find(),
            'validation' => [],
            'old' => [],
        ];

        echo view('v_testing', $data);
    }

    public function done($id)
    {
        $data = [
            'title' => 'Hasil diagnosis kanker serviks',
            'test' => $this->testingModel->where('id_test', $id)->findAll(),
            'class' => $this->classModel->findAll(),
            'weight' => $this->weightModel->where('status_weight', 1)->find()
        ];

        echo view('v_testing_done', $data);
    }

    public function create()
    {
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRule('name','Nama','required|min_length[2]|max_length[100]');
        $validation->setRule('age','Umur','required|numeric|greater_than[0]');

        $validation->setRule('behavior_sexualrisk','column or','required');
        $validation->setRule('behavior_eating','column or','required');
        $validation->setRule('behavior_personalHygine','column or','required');
        $validation->setRule('intention_aggregation','column or','required');
        $validation->setRule('intention_commitment','column or','required');
        $validation->setRule('attitude_consistency','column or','required');
        $validation->setRule('attitude_spontaneity','column or','required');
        $validation->setRule('norm_significantPerson','column or','required');
        $validation->setRule('norm_fulfillment','column or','required');
        $validation->setRule('perception_vulnerability','column or','required');
        $validation->setRule('perception_severity','column or','required');
        $validation->setRule('motivation_strength','column or','required');
        $validation->setRule('motivation_willingness','column or','required');
        $validation->setRule('socialSupport_emotionality','column or','required');
        $validation->setRule('socialSupport_appreciation','column or','required');
        $validation->setRule('socialSupport_instrumental','column or','required');
        $validation->setRule('empowerment_knowledge','column or','required');
        $validation->setRule('empowerment_abilities','column or','required');
        $validation->setRule('empowerment_desires','column or','required');
        $isDataValid = $validation->withRequest($this->request)->run();

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
        // dd($validation->getErrors());

        // jika data valid, lakukan perhitungan
        if ($isDataValid) {

            // mengambil weight terpilih
            $weight = $this->weightModel->where('status_weight', 1)->find();

            $status_weight = doubleval($weight[0]['status_weight']);
            $wa_behaviour_sexualrisk = doubleval($weight[0]['wa_behaviour_sexualrisk']);
            $wa_behavior_eating = doubleval($weight[0]['wa_behavior_eating']);
            $wa_behavior_personalhygine = doubleval($weight[0]['wa_behavior_personalhygine']);
            $wa_intention_aggregation = doubleval($weight[0]['wa_intention_aggregation']);
            $wa_intention_commitment = doubleval($weight[0]['wa_intention_commitment']);
            $wa_attitude_consistency = doubleval($weight[0]['wa_attitude_consistency']);
            $wa_attitude_spontaneity = doubleval($weight[0]['wa_attitude_spontaneity']);
            $wa_norm_significantperson = doubleval($weight[0]['wa_norm_significantperson']);
            $wa_norm_fulfillment = doubleval($weight[0]['wa_norm_fulfillment']);
            $wa_perception_vulnerability = doubleval($weight[0]['wa_perception_vulnerability']);
            $wa_perception_severity = doubleval($weight[0]['wa_perception_severity']);
            $wa_motivation_strength = doubleval($weight[0]['wa_motivation_strength']);
            $wa_motivation_willingness = doubleval($weight[0]['wa_motivation_willingness']);
            $wa_socialsupport_emotionality = doubleval($weight[0]['wa_socialsupport_emotionality']);
            $wa_socialsupport_appreciation = doubleval($weight[0]['wa_socialsupport_appreciation']);
            $wa_socialsupport_instrumental = doubleval($weight[0]['wa_socialsupport_instrumental']);
            $wa_empowerment_knowledge = doubleval($weight[0]['wa_empowerment_knowledge']);
            $wa_empowerment_abilities = doubleval($weight[0]['wa_empowerment_abilities']);
            $wa_empowerment_desires = doubleval($weight[0]['wa_empowerment_desires']);

            $wb_behaviour_sexualrisk = doubleval($weight[0]['wb_behaviour_sexualrisk']);
            $wb_behavior_eating = doubleval($weight[0]['wb_behavior_eating']);
            $wb_behavior_personalhygine = doubleval($weight[0]['wb_behavior_personalhygine']);
            $wb_intention_aggregation = doubleval($weight[0]['wb_intention_aggregation']);
            $wb_intention_commitment = doubleval($weight[0]['wb_intention_commitment']);
            $wb_attitude_consistency = doubleval($weight[0]['wb_attitude_consistency']);
            $wb_attitude_spontaneity = doubleval($weight[0]['wb_attitude_spontaneity']);
            $wb_norm_significantperson = doubleval($weight[0]['wb_norm_significantperson']);
            $wb_norm_fulfillment = doubleval($weight[0]['wb_norm_fulfillment']);
            $wb_perception_vulnerability = doubleval($weight[0]['wb_perception_vulnerability']);
            $wb_perception_severity = doubleval($weight[0]['wb_perception_severity']);
            $wb_motivation_strength = doubleval($weight[0]['wb_motivation_strength']);
            $wb_motivation_willingness = doubleval($weight[0]['wb_motivation_willingness']);
            $wb_socialsupport_emotionality = doubleval($weight[0]['wb_socialsupport_emotionality']);
            $wb_socialsupport_appreciation = doubleval($weight[0]['wb_socialsupport_appreciation']);
            $wb_socialsupport_instrumental = doubleval($weight[0]['wb_socialsupport_instrumental']);
            $wb_empowerment_knowledge = doubleval($weight[0]['wb_empowerment_knowledge']);
            $wb_empowerment_abilities = doubleval($weight[0]['wb_empowerment_abilities']);
            $wb_empowerment_desires = doubleval($weight[0]['wb_empowerment_desires']);

            // =============================

            $weight_arr = [
                'wa_behaviour_sexualrisk' => $wa_behaviour_sexualrisk,
                'wa_behavior_eating' => $wa_behavior_eating,
                'wa_behavior_personalhygine' => $wa_behavior_personalhygine,
                'wa_intention_aggregation' => $wa_intention_aggregation,
                'wa_intention_commitment' => $wa_intention_commitment,
                'wa_attitude_consistency' => $wa_attitude_consistency,
                'wa_attitude_spontaneity' => $wa_attitude_spontaneity,
                'wa_norm_significantperson' => $wa_norm_significantperson,
                'wa_norm_fulfillment' => $wa_norm_fulfillment,
                'wa_perception_vulnerability' => $wa_perception_vulnerability,
                'wa_perception_severity' => $wa_perception_severity,
                'wa_motivation_strength' => $wa_motivation_strength,
                'wa_motivation_willingness' => $wa_motivation_willingness,
                'wa_socialsupport_emotionality' => $wa_socialsupport_emotionality,
                'wa_socialsupport_appreciation' => $wa_socialsupport_appreciation,
                'wa_socialsupport_instrumental' => $wa_socialsupport_instrumental,
                'wa_empowerment_knowledge' => $wa_empowerment_knowledge,
                'wa_empowerment_abilities' => $wa_empowerment_abilities,
                'wa_empowerment_desires' => $wa_empowerment_desires,

                'wb_behaviour_sexualrisk' => $wb_behaviour_sexualrisk,
                'wb_behavior_eating' => $wb_behavior_eating,
                'wb_behavior_personalhygine' => $wb_behavior_personalhygine,
                'wb_intention_aggregation' => $wb_intention_aggregation,
                'wb_intention_commitment' => $wb_intention_commitment,
                'wb_attitude_consistency' => $wb_attitude_consistency,
                'wb_attitude_spontaneity' => $wb_attitude_spontaneity,
                'wb_norm_significantperson' => $wb_norm_significantperson,
                'wb_norm_fulfillment' => $wb_norm_fulfillment,
                'wb_perception_vulnerability' => $wb_perception_vulnerability,
                'wb_perception_severity' => $wb_perception_severity,
                'wb_motivation_strength' => $wb_motivation_strength,
                'wb_motivation_willingness' => $wb_motivation_willingness,
                'wb_socialsupport_emotionality' => $wb_socialsupport_emotionality,
                'wb_socialsupport_appreciation' => $wb_socialsupport_appreciation,
                'wb_socialsupport_instrumental' => $wb_socialsupport_instrumental,
                'wb_empowerment_knowledge' => $wb_empowerment_knowledge,
                'wb_empowerment_abilities' => $wb_empowerment_abilities,
                'wb_empowerment_desires' => $wb_empowerment_desires,
            ];

            d($weight_arr);

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

            if ($result_a < $result_b) {
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

            // dd($insert);
            $this->testingModel->insert($insert);
            $id = $this->testingModel->getInsertID();
            return redirect()->to("/testing/done/$id");
        }
        // else{
        //     session()->setFlashdata('pesan', $this->notify('Perhatian!', 'Gagal menambah data. Harap cek kembali masukkan Anda', 'danger', 'error'));
        //     return redirect()->to("/testing")->withInput()->with('validation', $validation);
        // }

        $input = [
            'name' => $test_name,
            'age' => $test_age,
            'behaviour_sexualrisk' => $test_behaviour_sexualrisk,
            'behavior_eating' => $test_behavior_eating,
            'behavior_personalhygine' => $test_behavior_personalhygine,
            'intention_aggregation' => $test_intention_aggregation,
            'intention_commitment' => $test_intention_commitment,
            'attitude_consistency' => $test_attitude_consistency,
            'attitude_spontaneity' => $test_attitude_spontaneity,
            'norm_significantperson' => $test_norm_significantperson,
            'norm_fulfillment' => $test_norm_fulfillment,
            'perception_vulnerability' => $test_perception_vulnerability,
            'perception_severity' => $test_perception_severity,
            'motivation_strength' => $test_motivation_strength,
            'motivation_willingness' => $test_motivation_willingness,
            'socialsupport_emotionality' => $test_socialsupport_emotionality,
            'socialsupport_appreciation' => $test_socialsupport_appreciation,
            'socialsupport_instrumental' => $test_socialsupport_instrumental,
            'empowerment_knowledge' => $test_empowerment_knowledge,
            'empowerment_abilities' => $test_empowerment_abilities,
            'empowerment_desires' => $test_empowerment_desires,
        ];

        // tampilkan form klasifikasi kembali
        $data = [
            'title'     => 'Form diagnosis kanker serviks',
            'weight' => $this->weightModel->where('status_weight', 1)->find(),
            'validation' => $validation->getErrors(),
            'old' => $input,
        ];

        // dd($input);
        echo view('v_testing', $data);
    }
}
