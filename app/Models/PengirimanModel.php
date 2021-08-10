<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;

class PengirimanModel extends Model
{
    protected $table = 'tr_pengiriman';
    protected $primaryKey = 'id_tr_pengiriman';
    protected $returnType = 'object';
    protected $useTimestamps = false;
    protected $allowedFields = [
        'id_administrasi', 'nomor_resi', 'catatan_pengiriman',
        'status_pengiriman', 'nama_barang', 'kondisi_barang',
        'keterangan', 'nama_penerima', 'tgl_penerimaan'
    ];


    // GET
    public function getPengiriman()
    {
        return $this->db->table('tr_pengiriman')
            ->get()->getResult();
    }

    public function getPengirimanById($id_administrasi)
    {
        return $this->db->table('tr_pengiriman')
            ->where('id_administrasi', $id_administrasi)
            ->get()->getRow();
    }

    public function getStatusPengirimanDiterima()
    {
        $now = date("Y");
        return $this->db->table('tr_pengiriman')
            ->where('status_pengiriman', 'Diterima')
            ->get()->getResult();
    }

    // ADD 
    public function addPengiriman($id_administrasi, $nomor_resi, $catatan_pengiriman, $nama_barang)
    {
        $now = new Time('now');
        $this->db->table('tr_pengiriman')
            ->insert([
                'id_administrasi' => $id_administrasi,
                'nomor_resi' => $nomor_resi,
                'catatan_pengiriman' => $catatan_pengiriman,
                'nama_barang' => $nama_barang,
                'tgl_pengiriman' => $now
            ]);
    }

    //UPDATE
    public function updatePenerimaan($id_tr_pengiriman, $kondisiBarang, $keterangan, $penerima)
    {
        $now = new Time('now');
        $data = [
            'status_pengiriman'  => "Diterima",
            'kondisi_barang'     => $kondisiBarang,
            'keterangan'         => $keterangan,
            'nama_penerima'      => $penerima,
            'tgl_penerimaan'     => $now
        ];
        $this->db->table('tr_pengiriman')
            ->where('id_tr_pengiriman', $id_tr_pengiriman)
            ->update($data);
    }
}
