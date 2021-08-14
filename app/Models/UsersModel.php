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


    public function getUser()
    {
        $now = date("Y");
        return $this->db->table('users')
            ->where('role', 'user')
            ->where("DATE_FORMAT(tgl_user,'%Y')", $now)
            ->get()->getResult();
    }

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

    public function getAdmin()
    {
        return $this->db->table('users')
            ->where('role', 'admin')
            ->get()->getResult();
    }

    public function addAdmin($username, $email, $password, $nama_user, $detail_alamat, $no_telepon)
    {
        $now = new Time('now');
        $this->db->table('users')
            ->insert([
                'username' => $username,
                'email' => $email,
                'password' => $password,
                'nama_user' => $nama_user,
                'detail_alamat' => $detail_alamat,
                'no_telepon' => $no_telepon,
                'tgl_user' => $now,
                'role' => 'admin'
            ]);
    }

    public function updateAdmin($data, $id_user)
    {
        $this->db->table('users')
            ->update($data, [
                'id_user' => $id_user
            ]);
    }
}
