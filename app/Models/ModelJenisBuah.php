<?php


namespace App\Models;

use CodeIgniter\Model;


class ModelJenisBuah extends Model

{
    protected $table = 'tb_jenis_buah';
    protected $primaryKey = 'id_jenis_buah';
    protected $returnType = 'object';
    protected $allowedFields = ['id_jenis_buah', 'nama_jenis_buah', 'keterangan_jenis_buah'];


    public function semua_jenis_buah()
    {
        $query = $this->db->table($this->table);
        $batasan = $query->select('*')
            ->get()->getResultArray();
        return $batasan;
    }

    public function dapatkan_jenis_buah($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_jenis_buah' => $id]);
        }
    }

    public function input_buah($data)
    {
        $builder =  $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function semua_buah()
    {
        $query = $this->db->table($this->table);
        $batasan = $query->select('*')
            ->get()->getResultArray();
        return $batasan;
    }

    public function dapatkan_buah($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_jenis_buah' => $id]);
        }
    }

    public function ubah_buah($data, $id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id_jenis_buah', $id);
        return $builder->update($data);
    }

    public function hapus_buah($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id_jenis_buah' => $id]);
    }
}
