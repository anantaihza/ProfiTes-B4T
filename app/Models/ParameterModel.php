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

    // GET
    public function getMasParameter()
    {
        return $this->db->table('mas_parameter')
            ->join('mas_pengujian', 'mas_pengujian.id_pengujian=mas_parameter.id_pengujian')
            ->get()->getResult();
    }
    public function getParameterYear()
    {
        $now = date("Y");
        return $this->db->table('mas_parameter')
            ->join('mas_pengujian', 'mas_pengujian.id_pengujian=mas_parameter.id_pengujian')
            ->where("DATE_FORMAT(tgl_paket,'%Y')", $now)
            ->get()->getResult();
    }


    public function getPaketParameter($id_pengujian)
    {
        return $this->db->table('mas_parameter')
            ->join('mas_pengujian', 'mas_pengujian.id_pengujian=mas_parameter.id_pengujian')
            ->where('mas_parameter.id_pengujian', $id_pengujian)
            ->get()->getResult();
    }

    // ADD
    public function addParameter($id_pengujian, $nama_parameter, $satuan)
    {
        $this->db->table('mas_parameter')
            ->insert([
                'id_pengujian' => $id_pengujian,
                'nama_parameter' => $nama_parameter,
                'satuan' => $satuan,
            ]);
    }

    // Edit
    public function updateParameter($data, $id_parameter)
    {
        $this->db->table('mas_parameter')
            ->update($data, [
                'id_parameter' => $id_parameter
            ]);
    }

    //Delete 
    public function delParameter($id_parameter)
    {
        return $this->db->table('mas_parameter')
            ->delete([
                'id_parameter' => $id_parameter
            ]);
    }
    public function delAllParameterByFk($id_pengujian)
    {
        return $this->db->table('mas_parameter')
            ->delete([
                'id_pengujian' => $id_pengujian
            ]);
    }
}
