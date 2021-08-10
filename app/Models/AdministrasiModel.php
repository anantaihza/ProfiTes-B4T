<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;

class AdministrasiModel extends Model
{
    protected $table = 'tr_administrasi';
    protected $primaryKey = 'id_administrasi';
    protected $returnType = 'object';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id_user', 'id_pengujian', 'pengujian',
        'penanggung_jawab_lab', 'status_akreditasi', 'nama_laboratorium',
        'telpon_laboratorium', 'fax_laboratorium', 'alamat_laboratorium',
        'alamat_pengiriman', 'nama_pic', 'jabatan_pic', 'telpon_pic',
        'email_pic', 'no_va', 'no_refrensi', 'sistem_pembayaran',
        'status_pembayaran', 'status_pengujian', 'tgl_administrasi'
    ];

    // Function GET
    public function getAdministrasi()
    {
        $now = date("Y");
        return $this->db->table('tr_administrasi')
            ->where("DATE_FORMAT(tgl_administrasi,'%Y')", $now)
            ->get()->getResult();
    }
    public function getAdministrasiPengujian()
    {
        $now = date("Y");
        return $this->db->table('tr_administrasi')
            ->join('mas_pengujian', 'mas_pengujian.id_pengujian=tr_administrasi.id_pengujian')
            ->where("DATE_FORMAT(tgl_administrasi,'%Y')", $now)
            ->get()->getResult();
    }
    public function getAdministrasiLunas()
    {
        $now = date("Y");
        return $this->db->table('tr_administrasi')
            ->where("DATE_FORMAT(tgl_administrasi,'%Y')", $now)
            ->where('status_pembayaran', 'Sudah Lunas')
            ->get()->getResult();
    }
    public function getAdministrasiBelumLunas()
    {
        $now = date("Y");
        return $this->db->table('tr_administrasi')
            ->where("DATE_FORMAT(tgl_administrasi,'%Y')", $now)
            ->where('status_pembayaran', 'Belum Lunas')
            ->get()->getResult();
    }
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

    public function getUserAdministrasi()
    {
        $now = date("Y");
        return $this->db->table('tr_administrasi')
            ->groupBy('id_user')
            ->where("DATE_FORMAT(tgl_administrasi,'%Y')", $now)
            ->get()->getResult();
    }

    public function getIdMasPengujian($id_administrasi)
    {
        return $this->db->table('tr_administrasi')
            ->join('mas_pengujian', 'mas_pengujian.id_pengujian=tr_administrasi.id_pengujian')
            ->where('id_administrasi', $id_administrasi)
            ->get()->getRow();
    }
    public function getAdministrasiResiSudah()
    {
        $now = date("Y");
        return $this->db->table('tr_administrasi')
            ->where("DATE_FORMAT(tgl_administrasi,'%Y')", $now)
            ->where('status_resi', 'Sudah')
            ->get()->getResult();
    }
    public function getAdministrasiStatusPengujian()
    {
        $now = date("Y");
        return $this->db->table('tr_administrasi')
            ->where("DATE_FORMAT(tgl_administrasi,'%Y')", $now)
            ->where('status_pengujian', 'Sudah')
            ->get()->getResult();
    }


    // Function ADD
    public function addAdministrasi($id_pengujian, $id, $penanggung_jawab_lab, $status_akreditasi, $nama_laboratorium, $telpon_laboratorium, $fax_laboratorium, $alamat_laboratorium, $alamat_pengiriman, $nama_pic, $jabatan_pic, $telpon_pic, $email_pic)
    {
        $now = new Time('now');
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
                'tgl_administrasi' => $now
            ]);
        return $this->db->insertID();
    }

    // UPDATE
    public function updateStatusPengujian($id_administrasi)
    {
        $data = [
            'status_pengujian'  => "Sudah"
        ];
        $this->db->table('tr_administrasi')
            ->where('id_administrasi', $id_administrasi)
            ->update($data);
    }
    public function updateStatusPembayaran($id_administrasi)
    {
        $data = [
            'status_pembayaran'  => "Sudah Lunas"
        ];
        $this->db->table('tr_administrasi')
            ->where('id_administrasi', $id_administrasi)
            ->update($data);
    }
    public function updateStatusResi($id_administrasi)
    {
        $data = [
            'status_resi'  => "Sudah"
        ];
        $this->db->table('tr_administrasi')
            ->where('id_administrasi', $id_administrasi)
            ->update($data);
    }
}
