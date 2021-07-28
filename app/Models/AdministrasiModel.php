<?php

namespace App\Models;

use CodeIgniter\Model;

class AdministrasiModel extends Model
{
    protected $table = 'tr_administrasi';
    protected $primaryKey = 'id_administrasi';
    protected $returnType = 'object';
    protected $useTimestamps = false;
    protected $allowedFields = [
        'id_administrasi', 'id_user', 'id_pengujian', 'pengujian',
        'penanggung_jawab_lab', 'status_akreditasi', 'nama_laboratorium',
        'telpon_laboratorium', 'fax_laboratorium', 'alamat_laboratorium',
        'alamat_pengiriman', 'nama_pic', 'jabatan_pic', 'telpon_pic',
        'email_pic', 'no_va', 'no_refrensi', 'sistem_pembayaran',
        'status_pembayaran', 'status_pengujian'
    ];

    // Function GET
    public function getMasPengujian($id_user)
    {
        return $this->db->table('tr_administrasi')
            ->join('mas_pengujian', 'mas_pengujian.id_pengujian=tr_administrasi.id_pengujian')
            ->where('id_user', $id_user)
            ->get()->getResult();
    }

    public function getUser($id_user, $id_administrasi)
    {
        return $this->db->table('tr_administrasi')
            ->join('users', 'users.id_user=tr_administrasi.id_user')
            ->join('mas_pengujian', 'mas_pengujian.id_pengujian=tr_administrasi.id_pengujian')
            ->where('tr_administrasi.id_user', $id_user)
            ->where('id_administrasi', $id_administrasi)
            ->get()->getRow();
    }

    public function getIdMasPengujian($id_administrasi)
    {
        return $this->db->table('tr_administrasi')
            ->join('mas_pengujian', 'mas_pengujian.id_pengujian=tr_administrasi.id_pengujian')
            ->where('id_administrasi', $id_administrasi)
            ->get()->getRow();
    }

    // Function ADD
    public function addAdministrasi($id_pengujian, $id, $penanggung_jawab_lab, $status_akreditasi, $nama_laboratorium, $telpon_laboratorium, $fax_laboratorium, $alamat_laboratorium, $alamat_pengiriman, $nama_pic, $jabatan_pic, $telpon_pic, $email_pic)
    {
        $this->db->table('tr_administrasi')
            ->insert([
                'id_pengujian' => $id_pengujian,
                'id_user' => $id,
                'penanggung_jawab_lab' => $penanggung_jawab_lab,
                'status_akreditasi' => $status_akreditasi,
                'nama_laboratorium' => $nama_laboratorium,
                'telpon_laboratorium' => $telpon_laboratorium,
                'fax_laboratorium' => $fax_laboratorium,
                'alamat_laboratorium' => $alamat_laboratorium,
                'alamat_pengiriman' => $alamat_pengiriman,
                'nama_pic' => $nama_pic,
                'jabatan_pic' => $jabatan_pic,
                'telpon_pic' => $telpon_pic,
                'email_pic' => $email_pic,
                'no_va' => '9908214569873',
                'no_refrensi' => '336598',
            ]);
        return $this->db->insertID();
    }

    public function updateStatusPengujian($id_administrasi)
    {
        $data = [
            'status_pengujian'  => "Sudah"
        ];
        $this->db->table('tr_administrasi')
            ->where('id_administrasi', $id_administrasi)
            ->update($data);
    }
}
