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

    public function getTrPengujian($id_administrasi)
    {
        return $this->db->table('tr_pengujian')
            ->join('tr_administrasi', 'tr_administrasi.id_administrasi=tr_pengujian.id_administrasi')
            ->join('mas_parameter', 'mas_parameter.id_parameter=tr_pengujian.id_parameter')
            ->where('tr_pengujian.id_administrasi', $id_administrasi)
            ->get()->getResult();
    }

    public function getTeknik()
    {
        return $this->db->table('mas_mas_teknik')->get()->getResult();
    }

    public function addPengujian($id_administrasi, $idParam, $tgl_pengujian, $hasilUji_A, $hasilUji_B, $rerata, $u95, $standar_acuan)
    {
        $this->db->table('tr_pengujian')
            ->insert([
                'id_administrasi' => $id_administrasi,
                'id_parameter' => $idParam,
                'tgl_pengujian' => $tgl_pengujian,
                'hasilUji_A' => $hasilUji_A,
                'hasilUji_B' => $hasilUji_B,
                'rerata' => $rerata,
                'u95' => $u95,
                'standar_acuan' => $standar_acuan,
            ]);
    }
}
