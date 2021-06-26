<?php 

namespace App\Models;

use CodeIgniter\Model;

class WeightModel extends Model
{
    protected $table      = 'weight';
    protected $primaryKey = 'id_weight';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['wa_behaviour_sexualrisk', 'wa_behaviour_eating', 'wa_behaviour_personalhygine', 'wa_intention_agregation', 'wa_intention_commitment', 'wa_attitude_consistency', 'wa_attitude_spontaneity', 'wa_norm_significantperson', 'wa_norm_fulfillment', 'wa_perception_vulnerability', 'wa_perception_severity', 'wa_motivation_strength', 'wa_motivation_willingness', 'wa_socialsupport_emotionality', '	wa_socialsupport_appreciation', 'wa_socialsupport_instrumental', 'wa_empowerment_knowledge', 'wa_empowerment_abilities', 'wa_empowerment_desires', 'wb_behaviour_sexualrisk', 'wb_behaviour_eating', 'wb_behaviour_personalhygine', 'wb_intention_agregation', 'wb_intention_commitment', 'wb_attitude_consistency', 'wb_attitude_spontaneity', 'wb_norm_significantperson', 'wb_norm_fulfillment', 'wb_perception_vulnerability', 'wb_perception_severity', 'wb_motivation_strength', 'wb_motivation_willingness', 'wb_socialsupport_emotionality', '	wb_socialsupport_appreciation', 'wb_socialsupport_instrumental', 'wb_empowerment_knowledge', 'wb_empowerment_abilities', 'wb_empowerment_desires', 'alpha', 'max_epoch', 'status_weight'];

    protected $useTimestamps = false;
    protected $createdField  = 'datetime_weight';
}
?>