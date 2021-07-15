<?php

namespace App\Models;

use CodeIgniter\Model;

class PengujianModel extends Model
{
    protected $table = 'mas_pengujian';
    protected $primaryKey = 'id_pengujian';
    protected $returnType = 'object';
    protected $useTimestamps = false;
    protected $allowedFields = [
        'id_pengujian', 'nama_pengujian', 'biaya', 'keterangan'
    ];
}
