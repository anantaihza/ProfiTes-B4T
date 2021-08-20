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
        'hasilUji_B', 'rerata', 'u95', 'standar_acuan', 'nama_teknik', 'tgl_pengujian'
    ];




    // GET
    public function getTrPengujian($id_administrasi)
    {
        return $this->db->table('tr_pengujian')
            ->join('tr_administrasi', 'tr_administrasi.id_administrasi=tr_pengujian.id_administrasi')
            ->join('mas_parameter', 'mas_parameter.id_parameter=tr_pengujian.id_parameter')
            ->where('tr_pengujian.id_administrasi', $id_administrasi)
            ->get()->getResult();
    }

    // ADD
    public function addPengujian($id_administrasi, $idParam, $tgl_pengujian, $hasilUji_A, $hasilUji_B, $rerata, $u95, $standar_acuan, $nama_teknik)
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
                'nama_teknik' => $nama_teknik,
            ]);
    }

    // DELETE
    public function deletePengujianByIdAdministrasi($id_administrasi)
    {
        return $this->db->table('tr_pengujian')
            ->delete([
                'id_administrasi' => $id_administrasi
            ]);
    }
}
