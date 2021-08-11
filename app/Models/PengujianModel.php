<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;

class PengujianModel extends Model
{
    protected $table = 'mas_pengujian';
    protected $primaryKey = 'id_pengujian';
    protected $returnType = 'object';
    protected $useTimestamps = false;
    protected $allowedFields = [
        'id_pengujian', 'nama_pengujian', 'biaya', 'biaya_terbilang', 'keterangan', 'tgl_paket'
    ];

    // GET
    public function getPaket()
    {
        $now = date("Y");
        return $this->db->table('mas_pengujian')
            ->where("DATE_FORMAT(tgl_paket,'%Y')", $now)
            ->get()->getResult();
    }
    public function getIdPaket($id)
    {
        $now = date("Y");
        return $this->db->table('mas_pengujian')
            ->where("id_pengujian", $id)
            ->where("DATE_FORMAT(tgl_paket,'%Y')", $now)
            ->get()->getRow();
    }


    // ADD
    public function addPaket($nama_pengujian, $biaya, $biaya_terbilang, $keterangan)
    {
        $now = new Time('now');
        $this->db->table('mas_pengujian')
            ->insert([
                'nama_pengujian' => $nama_pengujian,
                'biaya' => $biaya,
                'biaya_terbilang' => $biaya_terbilang,
                'keterangan' => $keterangan,
                'tgl_paket' => $now
            ]);
    }


    // Update
    public function updatePengujian($data, $id_pengujian)
    {
        $this->db->table('mas_pengujian')
            ->update($data, [
                'id_pengujian' => $id_pengujian
            ]);
    }

    // Delete
    public function delPaket($id_pengujian)
    {
        return $this->db->table('mas_pengujian')
            ->delete([
                'id_pengujian' => $id_pengujian
            ]);
    }
}
