<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id_user';
    protected $returnType = 'object';
    protected $useTimestamps = false;
    protected $allowedFields = [
        'id_user', 'username', 'email',
        'password', 'nama_user', 'detail_alamat',
        'no_telepon', 'no_fax', 'tgl_user', 'role'
    ];

    public function addUser($username, $email, $password)
    {
        $now = new Time('now');
        $this->db->table('users')
            ->insert([
                'username' => $username,
                'email' => $email,
                'password' => $password,
                'tgl_user' => $now,
                'role' => "user"
            ]);
    }
}
