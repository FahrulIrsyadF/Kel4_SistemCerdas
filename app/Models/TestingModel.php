<?php 

namespace App\Models;

use CodeIgniter\Model;

class TestingModel extends Model
{
    protected $table      = 'test';
    protected $primaryKey = 'id_test';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_class', 'id_weight', 'name_test', 'age_test', 'ts_behaviour_sexualrisk', 'ts_behavior_eating', 'ts_behavior_personalhygine', 'ts_intention_aggregation', 'ts_intention_commitment', 'ts_attitude_consistency', 'ts_attitude_spontaneity', 'ts_norm_significantperson', 'ts_norm_fulfillment', 'ts_perception_vulnerability', 'ts_perception_severity', 'ts_motivation_strength', 'ts_motivation_willingness', 'ts_socialsupport_emotionality', 'ts_socialsupport_appreciation', 'ts_socialsupport_instrumental', 'ts_empowerment_knowledge', 'ts_empowerment_abilities', 'ts_empowerment_desires', 'ts_timestamp', 'result_a', 'result_b'];
}
?>