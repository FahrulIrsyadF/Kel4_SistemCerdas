<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'id_user';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_user', 'nama_user', 'password'];

    public function deleteData($id_user)
    {
        return $this->db->table($this->table)->delete(['id_user' => $id_user]);
    }

    public function add($insert)
    {
        $this->db->table('user')->insert($insert);
    }
}
