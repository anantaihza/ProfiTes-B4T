<?php

namespace App\Models;

use CodeIgniter\Model;

class UjiProfisiensiModel extends Model
{
    protected $table = 'tr_pengujian';
    protected $primaryKey = 'id_tr_pengujian';
    protected $returnType = 'object';
    protected $useTimestamps = false;
    protected $allowedFields = [
        'id_tr_pengujian', 'id_administrasi', 'id_parameter', 'hasilUji_A',
        'hasilUji_B', 'rerata', 'u95', 'standar_acuan', 'tgl_pengujian'
    ];

    public function getIdAdministrasi($id_tr_pengujian)
    {
        return $this->db->table('tr_pengujian')
            ->join('tr_administrasi', 'tr_administrasi.id_administrasi=tr_pengujian.id_administrasi')
            ->where('id_tr_pengujian', $id_tr_pengujian)
            ->get()->getResult();
    }
}
