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
        'id_tr_pengujian', 'id_administrasi', 'id_teknik', 'hasilUji_A',
        'hasilUji_B', 'rerata', 'u95', 'standar_acuan', 'tgl_pengujian'
    ];
}
