<?php 

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'user';
    protected $allowedFields = ['nama_user', 'password'];
    // protected $primariKey = 'id_user';
}
?>