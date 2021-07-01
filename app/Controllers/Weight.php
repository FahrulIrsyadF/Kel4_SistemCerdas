<?php

namespace App\Controllers;

use App\Models\TrainingModel;
use App\Models\WeightModel;
use App\Models\ClassModel;

class Weight extends BaseController
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
            'title' => 'Data Klasifikasi LVQ',
            'weight' => $this->weightModel->findAll(),
        ];

        echo view('v_weight', $data);
    }

    public function latih()
    {
        d($this->request->getPost());

        $alpha = $this->request->getPost('alpha');
        $max_epoch = $this->request->getPost('max_epoch');
        $classPerhitungan = 0;

        for ($i=1; $i <= $max_epoch; $i++) :
            $train = $this->TrainingModel->findAll();
            $numrow = $this->TrainingModel->countAll();
            $j = 1;
            foreach ($train as $row ) :
                $tr_behaviour_sexualrisk = $row['tr_behaviour_sexualrisk'];
                $tr_behavior_eating = $row['tr_behavior_eating'];
                $tr_behavior_personalhygine = $row['tr_behavior_personalhygine'];
                $tr_intention_aggregation = $row['tr_intention_aggregation'];
                $tr_intention_commitment = $row['tr_intention_commitment'];
                $tr_attitude_consistency = $row['tr_attitude_consistency'];
                $tr_attitude_spontaneity = $row['tr_attitude_spontaneity'];
                $tr_norm_significantperson = $row['tr_norm_significantperson'];
                $tr_norm_fulfillment = $row['tr_norm_fulfillment'];
                $tr_perception_vulnerability = $row['tr_perception_vulnerability'];
                $tr_perception_severity = $row['tr_perception_severity'];
                $tr_motivation_strength = $row['tr_motivation_strength'];
                $tr_motivation_willingness = $row['tr_motivation_willingness'];
                $tr_socialsupport_emotionality = $row['tr_socialsupport_emotionality'];
                $tr_socialsupport_appreciation = $row['tr_socialsupport_appreciation'];
                $tr_socialsupport_instrumental = $row['tr_socialsupport_instrumental'];
                $tr_empowerment_knowledge = $row['tr_empowerment_knowledge'];
                $tr_empowerment_abilities = $row['tr_empowerment_abilities'];
                $tr_empowerment_desires = $row['tr_empowerment_desires'];

                $classDatabase = $this->classModel->where('id_class', $row['id_class'])->findAll();
                // dd($classDatabase[0]['code_class']);
                $classDatabase = $classDatabase[0]['code_class'];

                if(($i == 1) && ($j ==1)){
                    $wa_behaviour_sexualrisk = rand(0,1);
                    $wa_behavior_eating = rand(0,1);
                    $wa_behavior_personalhygine = rand(0,1);
                    $wa_intention_aggregation = rand(0,1);
                    $wa_intention_commitment = rand(0,1);
                    $wa_attitude_consistency = rand(0,1);
                    $wa_attitude_spontaneity = rand(0,1);
                    $wa_norm_significantperson = rand(0,1);
                    $wa_norm_fulfillment = rand(0,1);
                    $wa_perception_vulnerability = rand(0,1);
                    $wa_perception_severity = rand(0,1);
                    $wa_motivation_strength = rand(0,1);
                    $wa_motivation_willingness = rand(0,1);
                    $wa_socialsupport_emotionality = rand(0,1);
                    $wa_socialsupport_appreciation = rand(0,1);
                    $wa_socialsupport_instrumental = rand(0,1);
                    $wa_empowerment_knowledge = rand(0,1);
                    $wa_empowerment_abilities = rand(0,1);
                    $wa_empowerment_desires = rand(0,1);
                    
                    $wb_behaviour_sexualrisk = rand(0,1);
                    $wb_behavior_eating = rand(0,1);
                    $wb_behavior_personalhygine = rand(0,1);
                    $wb_intention_aggregation = rand(0,1);
                    $wb_intention_commitment = rand(0,1);
                    $wb_attitude_consistency = rand(0,1);
                    $wb_attitude_spontaneity = rand(0,1);
                    $wb_norm_significantperson = rand(0,1);
                    $wb_norm_fulfillment = rand(0,1);
                    $wb_perception_vulnerability = rand(0,1);
                    $wb_perception_severity = rand(0,1);
                    $wb_motivation_strength = rand(0,1);
                    $wb_motivation_willingness = rand(0,1);
                    $wb_socialsupport_emotionality = rand(0,1);
                    $wb_socialsupport_appreciation = rand(0,1);
                    $wb_socialsupport_instrumental = rand(0,1);
                    $wb_empowerment_knowledge = rand(0,1);
                    $wb_empowerment_abilities = rand(0,1);
                    $wb_empowerment_desires = rand(0,1);

                    $result_a = sqrt(
                        pow(($tr_behaviour_sexualrisk - $wa_behaviour_sexualrisk) , 2) + 
                        pow(($tr_behavior_eating - $wa_behavior_eating),  2) +
                        pow(($tr_behavior_personalhygine - $wa_behavior_personalhygine),  2) +
                        pow(($tr_intention_aggregation - $wa_behavior_eating),  2) +
                        pow(($tr_intention_commitment - $wa_intention_commitment),  2) +
                        pow(($tr_attitude_consistency - $wa_attitude_consistency),  2) +
                        pow(($tr_attitude_spontaneity - $wa_attitude_spontaneity),  2) +
                        pow(($tr_norm_significantperson - $wa_norm_significantperson),  2) +
                        pow(($tr_norm_fulfillment - $wa_norm_fulfillment),  2) +
                        pow(($tr_perception_vulnerability - $wa_perception_vulnerability),  2) +
                        pow(($tr_perception_severity - $wa_perception_severity),  2) +
                        pow(($tr_motivation_strength - $wa_motivation_strength),  2) +
                        pow(($tr_motivation_willingness - $wa_motivation_willingness),  2) +
                        pow(($tr_socialsupport_emotionality - $wa_socialsupport_emotionality),  2) +
                        pow(($tr_socialsupport_appreciation - $wa_socialsupport_appreciation) , 2) + 
                        pow(($tr_socialsupport_instrumental - $wa_socialsupport_instrumental),  2) +
                        pow(($tr_empowerment_knowledge - $wa_empowerment_knowledge),  2) +
                        pow(($tr_empowerment_abilities - $wa_empowerment_abilities),  2) +
                        pow(($tr_empowerment_desires - $wa_empowerment_desires),  2));

                    $result_b = sqrt(
                        pow(($tr_behaviour_sexualrisk - $wb_behaviour_sexualrisk) ,2) + 
                        pow(($tr_behavior_eating - $wb_behavior_eating), 2) +
                        pow(($tr_behavior_personalhygine - $wb_behavior_personalhygine), 2) +
                        pow(($tr_intention_aggregation - $wb_behavior_eating), 2) +
                        pow(($tr_intention_commitment - $wb_intention_commitment), 2) +
                        pow(($tr_attitude_consistency - $wb_attitude_consistency), 2) +
                        pow(($tr_attitude_spontaneity - $wb_attitude_spontaneity), 2) +
                        pow(($tr_norm_significantperson - $wb_norm_significantperson), 2) +
                        pow(($tr_norm_fulfillment - $wb_norm_fulfillment), 2) +
                        pow(($tr_perception_vulnerability - $wb_perception_vulnerability), 2) +
                        pow(($tr_perception_severity - $wb_perception_severity), 2) +
                        pow(($tr_motivation_strength - $wb_motivation_strength), 2) +
                        pow(($tr_motivation_willingness - $wb_motivation_willingness), 2) +
                        pow(($tr_socialsupport_emotionality - $wb_socialsupport_emotionality), 2) +
                        pow(($tr_socialsupport_appreciation - $wb_socialsupport_appreciation) ,2) + 
                        pow(($tr_socialsupport_instrumental - $wb_socialsupport_instrumental), 2) +
                        pow(($tr_empowerment_knowledge - $wb_empowerment_knowledge), 2) +
                        pow(($tr_empowerment_abilities - $wb_empowerment_abilities), 2) +
                        pow(($tr_empowerment_desires - $wb_empowerment_desires), 2));

                    if ($result_a > $result_b) {
                        $classPerhitungan = 1;
                    }else{
                        $classPerhitungan = 0;
                    }
                    

                }else if(($i == $max_epoch) && ($j == $numrow)){
                    $insert = [
                        'alpha' => $alpha,
                        'max_epoch' => $max_epoch,
                        'datetime_weight' => date('Y-m-d H:i:s'),
                        'status_weight' => 0,
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

                    dd($insert);
        
                    // echo '<pre>';
                    // print_r($insert); exit;
                    $this->weightModel->insert($insert);
                    return redirect()->to("/weight"); 
                }else{

                    if($classPerhitungan == 1){
                        $wa_behaviour_sexualrisk = $this->hitungWeight($classPerhitungan, $classDatabase, $wa_behaviour_sexualrisk, $tr_behaviour_sexualrisk, $alpha);
                        $wa_behavior_eating = $this->hitungWeight($classPerhitungan, $classDatabase, $wa_behavior_eating, $tr_behavior_eating, $alpha);
                        $wa_behavior_personalhygine = $this->hitungWeight($classPerhitungan, $classDatabase, $wa_behavior_personalhygine, $tr_behavior_personalhygine, $alpha);
                        $wa_intention_aggregation = $this->hitungWeight($classPerhitungan, $classDatabase, $wa_intention_aggregation, $tr_intention_aggregation, $alpha);
                        $wa_intention_commitment = $this->hitungWeight($classPerhitungan, $classDatabase, $wa_intention_commitment, $tr_intention_commitment, $alpha);
                        $wa_attitude_consistency = $this->hitungWeight($classPerhitungan, $classDatabase, $wa_attitude_consistency, $tr_attitude_consistency, $alpha);
                        $wa_attitude_spontaneity = $this->hitungWeight($classPerhitungan, $classDatabase, $wa_attitude_spontaneity, $tr_attitude_spontaneity, $alpha);
                        $wa_norm_significantperson = $this->hitungWeight($classPerhitungan, $classDatabase, $wa_norm_significantperson, $tr_norm_significantperson, $alpha);
                        $wa_norm_fulfillment = $this->hitungWeight($classPerhitungan, $classDatabase, $wa_norm_fulfillment, $tr_norm_fulfillment, $alpha);
                        $wa_perception_vulnerability = $this->hitungWeight($classPerhitungan, $classDatabase, $wa_perception_vulnerability, $tr_perception_vulnerability, $alpha);
                        $wa_perception_severity = $this->hitungWeight($classPerhitungan, $classDatabase, $wa_perception_severity, $tr_perception_severity, $alpha);
                        $wa_motivation_strength = $this->hitungWeight($classPerhitungan, $classDatabase, $wa_motivation_strength, $tr_motivation_strength, $alpha);
                        $wa_motivation_willingness = $this->hitungWeight($classPerhitungan, $classDatabase, $wa_motivation_willingness, $tr_motivation_willingness, $alpha);
                        $wa_socialsupport_emotionality = $this->hitungWeight($classPerhitungan, $classDatabase, $wa_socialsupport_emotionality, $tr_socialsupport_emotionality, $alpha);
                        $wa_socialsupport_appreciation = $this->hitungWeight($classPerhitungan, $classDatabase, $wa_socialsupport_appreciation, $tr_socialsupport_appreciation, $alpha);
                        $wa_socialsupport_instrumental = $this->hitungWeight($classPerhitungan, $classDatabase, $wa_socialsupport_instrumental, $tr_socialsupport_instrumental, $alpha);
                        $wa_empowerment_knowledge = $this->hitungWeight($classPerhitungan, $classDatabase, $wa_empowerment_knowledge, $tr_empowerment_knowledge, $alpha);
                        $wa_empowerment_abilities = $this->hitungWeight($classPerhitungan, $classDatabase, $wa_empowerment_abilities, $tr_empowerment_abilities, $alpha);
                        $wa_empowerment_desires = $this->hitungWeight($classPerhitungan, $classDatabase, $wa_empowerment_desires, $tr_empowerment_desires, $alpha);    
                    } else {
                        $wb_behaviour_sexualrisk = $this->hitungWeight($classPerhitungan, $classDatabase, $wb_behaviour_sexualrisk, $tr_behaviour_sexualrisk, $alpha);
                        $wb_behavior_eating = $this->hitungWeight($classPerhitungan, $classDatabase, $wb_behavior_eating, $tr_behavior_eating, $alpha);
                        $wb_behavior_personalhygine = $this->hitungWeight($classPerhitungan, $classDatabase, $wb_behavior_personalhygine, $tr_behavior_personalhygine, $alpha);
                        $wb_intention_aggregation = $this->hitungWeight($classPerhitungan, $classDatabase, $wb_intention_aggregation, $tr_intention_aggregation, $alpha);
                        $wb_intention_commitment = $this->hitungWeight($classPerhitungan, $classDatabase, $wb_intention_commitment, $tr_intention_commitment, $alpha);
                        $wb_attitude_consistency = $this->hitungWeight($classPerhitungan, $classDatabase, $wb_attitude_consistency, $tr_attitude_consistency, $alpha);
                        $wb_attitude_spontaneity = $this->hitungWeight($classPerhitungan, $classDatabase, $wb_attitude_spontaneity, $tr_attitude_spontaneity, $alpha);
                        $wb_norm_significantperson = $this->hitungWeight($classPerhitungan, $classDatabase, $wb_norm_significantperson, $tr_norm_significantperson, $alpha);
                        $wb_norm_fulfillment = $this->hitungWeight($classPerhitungan, $classDatabase, $wb_norm_fulfillment, $tr_norm_fulfillment, $alpha);
                        $wb_perception_vulnerability = $this->hitungWeight($classPerhitungan, $classDatabase, $wb_perception_vulnerability, $tr_perception_vulnerability, $alpha);
                        $wb_perception_severity = $this->hitungWeight($classPerhitungan, $classDatabase, $wb_perception_severity, $tr_perception_severity, $alpha);
                        $wb_motivation_strength = $this->hitungWeight($classPerhitungan, $classDatabase, $wb_motivation_strength, $tr_motivation_strength, $alpha);
                        $wb_motivation_willingness = $this->hitungWeight($classPerhitungan, $classDatabase, $wb_motivation_willingness, $tr_motivation_willingness, $alpha);
                        $wb_socialsupport_emotionality = $this->hitungWeight($classPerhitungan, $classDatabase, $wb_socialsupport_emotionality, $tr_socialsupport_emotionality, $alpha);
                        $wb_socialsupport_appreciation = $this->hitungWeight($classPerhitungan, $classDatabase, $wb_socialsupport_appreciation, $tr_socialsupport_appreciation, $alpha);
                        $wb_socialsupport_instrumental = $this->hitungWeight($classPerhitungan, $classDatabase, $wb_socialsupport_instrumental, $tr_socialsupport_instrumental, $alpha);
                        $wb_empowerment_knowledge = $this->hitungWeight($classPerhitungan, $classDatabase, $wb_empowerment_knowledge, $tr_empowerment_knowledge, $alpha);
                        $wb_empowerment_abilities = $this->hitungWeight($classPerhitungan, $classDatabase, $wb_empowerment_abilities, $tr_empowerment_abilities, $alpha);
                        $wb_empowerment_desires = $this->hitungWeight($classPerhitungan, $classDatabase, $wb_empowerment_desires, $tr_empowerment_desires, $alpha);
                    }

                    $result_a = sqrt(
                        pow(($tr_behaviour_sexualrisk - $wa_behaviour_sexualrisk) , 2) + 
                        pow(($tr_behavior_eating - $wa_behavior_eating),  2) +
                        pow(($tr_behavior_personalhygine - $wa_behavior_personalhygine),  2) +
                        pow(($tr_intention_aggregation - $wa_behavior_eating),  2) +
                        pow(($tr_intention_commitment - $wa_intention_commitment),  2) +
                        pow(($tr_attitude_consistency - $wa_attitude_consistency),  2) +
                        pow(($tr_attitude_spontaneity - $wa_attitude_spontaneity),  2) +
                        pow(($tr_norm_significantperson - $wa_norm_significantperson),  2) +
                        pow(($tr_norm_fulfillment - $wa_norm_fulfillment),  2) +
                        pow(($tr_perception_vulnerability - $wa_perception_vulnerability),  2) +
                        pow(($tr_perception_severity - $wa_perception_severity),  2) +
                        pow(($tr_motivation_strength - $wa_motivation_strength),  2) +
                        pow(($tr_motivation_willingness - $wa_motivation_willingness),  2) +
                        pow(($tr_socialsupport_emotionality - $wa_socialsupport_emotionality),  2) +
                        pow(($tr_socialsupport_appreciation - $wa_socialsupport_appreciation) , 2) + 
                        pow(($tr_socialsupport_instrumental - $wa_socialsupport_instrumental),  2) +
                        pow(($tr_empowerment_knowledge - $wa_empowerment_knowledge),  2) +
                        pow(($tr_empowerment_abilities - $wa_empowerment_abilities),  2) +
                        pow(($tr_empowerment_desires - $wa_empowerment_desires),  2));

                    $result_b = sqrt(
                        pow(($tr_behaviour_sexualrisk - $wb_behaviour_sexualrisk) ,2) + 
                        pow(($tr_behavior_eating - $wb_behavior_eating), 2) +
                        pow(($tr_behavior_personalhygine - $wb_behavior_personalhygine), 2) +
                        pow(($tr_intention_aggregation - $wb_behavior_eating), 2) +
                        pow(($tr_intention_commitment - $wb_intention_commitment), 2) +
                        pow(($tr_attitude_consistency - $wb_attitude_consistency), 2) +
                        pow(($tr_attitude_spontaneity - $wb_attitude_spontaneity), 2) +
                        pow(($tr_norm_significantperson - $wb_norm_significantperson), 2) +
                        pow(($tr_norm_fulfillment - $wb_norm_fulfillment), 2) +
                        pow(($tr_perception_vulnerability - $wb_perception_vulnerability), 2) +
                        pow(($tr_perception_severity - $wb_perception_severity), 2) +
                        pow(($tr_motivation_strength - $wb_motivation_strength), 2) +
                        pow(($tr_motivation_willingness - $wb_motivation_willingness), 2) +
                        pow(($tr_socialsupport_emotionality - $wb_socialsupport_emotionality), 2) +
                        pow(($tr_socialsupport_appreciation - $wb_socialsupport_appreciation) ,2) + 
                        pow(($tr_socialsupport_instrumental - $wb_socialsupport_instrumental), 2) +
                        pow(($tr_empowerment_knowledge - $wb_empowerment_knowledge), 2) +
                        pow(($tr_empowerment_abilities - $wb_empowerment_abilities), 2) +
                        pow(($tr_empowerment_desires - $wb_empowerment_desires), 2));

                    if ($result_a > $result_b) {
                        $classPerhitungan = 1;
                    }else{
                        $classPerhitungan = 0;
                    }
                }

                echo 'iterasi ke ' . $i . ' - datalatih ke ' . $j . ' - result a = ' . $result_a . ' - result b = ' . $result_b;
                echo '<br>';
                echo 'iterasi ke ' . $i . ' - datalatih ke ' . $j . ' - result a = ' . is_infinite($result_a) . ' - result b = ' . is_infinite($result_b);
                echo '<br>';

                $j++;
            endforeach;
        endfor;
    }

    public function hitungWeight($ClassPerhitunganSebelumnya, $ClassDatasetSebelumnya, $weightSebelumnya, $weightDataset, $alpha)
    {
        if ($ClassDatasetSebelumnya == $ClassPerhitunganSebelumnya) {
            $resultWeight = $weightSebelumnya + ( $alpha * ( $weightDataset - $weightSebelumnya) );
        }else{
            $resultWeight = $weightSebelumnya - ( $alpha * ( $weightDataset - $weightSebelumnya) );
        }

        return $resultWeight;
    }

}