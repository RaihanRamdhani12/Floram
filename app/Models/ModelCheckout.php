<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelCheckout extends Model
{
    protected $table = 'checkout';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'nama', 'alamat', 'no_telp'];

    public function checkout($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }
}
