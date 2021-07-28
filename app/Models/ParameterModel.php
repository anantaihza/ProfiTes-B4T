<?php

namespace App\Models;

use CodeIgniter\Model;

class ParameterModel extends Model
{
    protected $table = 'mas_parameter';
    protected $primaryKey = 'id_parameter';
    protected $returnType = 'object';
    protected $useTimestamps = false;
    protected $allowedFields = [
        'id_parameter', 'id_pengujian', 'id_teknik',
        'nama_parameter', 'satuan'
    ];

    public function getMasParameter()
    {
        return $this->db->table('mas_parameter')
            ->join('mas_pengujian', 'mas_pengujian.id_pengujian=mas_parameter.id_pengujian')
            ->join('mas_mas_teknik', 'mas_mas_teknik.id_teknik=mas_parameter.id_teknik')
            ->get()->getResult();
    }

    public function getPaketParameter($id_pengujian)
    {
        return $this->db->table('mas_parameter')
            ->join('mas_pengujian', 'mas_pengujian.id_pengujian=mas_parameter.id_pengujian')
            ->join('mas_mas_teknik', 'mas_mas_teknik.id_teknik=mas_parameter.id_teknik')
            ->where('mas_parameter.id_pengujian', $id_pengujian)
            ->get()->getResult();
    }
}
