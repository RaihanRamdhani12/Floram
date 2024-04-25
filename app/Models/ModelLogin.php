<?php


namespace App\Models;

use CodeIgniter\Model;


class ModelLogin extends Model

{
    protected $table = 'tb_user';
    protected $primaryKey = 'username';
    protected $returnType = 'object';
    protected $allowedFields = ['username', 'level', 'password'];
    public function contact($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function dapatkan_username($id = false)
    {
        if ($id === false) {
            return $this->findall();
        } else {
            return $this->getWhere(['username' => $id]);
        }
    }

    public function ubah_username($data, $id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('username', $id);
        return $builder->insert($data);
    }
}