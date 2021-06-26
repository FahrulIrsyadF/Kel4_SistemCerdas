<?php 

namespace App\Models;

use CodeIgniter\Model;

class ClassModel extends Model
{
    protected $table      = 'class';
    protected $primaryKey = 'id_class';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['name_class', 'code_class'];

    protected $useTimestamps = false;
    protected $createdField  = 'timestamp_class';
}
?>