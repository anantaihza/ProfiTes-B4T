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
        'metode_pengujian', 'status_akreditasi', 'nama_laboratorium',
        'telpon_laboratorium', 'fax_laboratorium', 'alamat_laboratorium',
        'alamat_pengiriman', 'nama_pic', 'jabatan_pic', 'telpon_pic',
        'email_pic', 'no_va', 'no_refrensi', 'sistem_pembayaran',
        'status_pembayaran'
    ];

    public function getMasPengujian()
    {
        return $this->db->table('tr_administrasi')
            ->join('mas_pengujian', 'mas_pengujian.id_pengujian=tr_administrasi.id_pengujian')
            ->get()->getResult();
    }
}
