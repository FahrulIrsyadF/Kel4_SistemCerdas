<?php

namespace App\Models;

use CodeIgniter\Model;

class TrainingModel extends Model
{
    protected $table      = 'train';
    protected $primaryKey = 'id_train';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_class', 'tr_behaviour_sexualrisk', 'tr_behavior_eating', 'tr_behavior_personalhygine', 'tr_intention_aggregation', 'tr_intention_commitment', 'tr_attitude_consistency', 'tr_attitude_spontaneity', 'tr_norm_significantperson', 'tr_norm_fulfillment', 'tr_perception_vulnerability', 'tr_perception_severity', 'tr_motivation_strength', 'tr_motivation_willingness', 'tr_socialsupport_emotionality', 'tr_socialsupport_appreciation', 'tr_socialsupport_instrumental', 'tr_empowerment_knowledge', 'tr_empowerment_abilities', 'tr_empowerment_desires', 'tr_timestamp'];
}
