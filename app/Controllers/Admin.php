<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\PengujianModel;
use App\Models\AdministrasiModel;

class Admin extends BaseController
{
    function __construct()
    {
        $this->users = new UsersModel();
        $this->paket = new PengujianModel();
        $this->administrasi = new AdministrasiModel();
    }

    public function dashboardAdmin()
    {
        $data = [
            'userJml' => count($this->users->getUser()),
            'paketJml' => count($this->paket->getPaket()),
            'administrasiJml' => count($this->administrasi->getAdministrasi()),
            'administrasiLunas' => count($this->administrasi->getAdministrasiLunas()),
            'administrasiBelumLunas' => count($this->administrasi->getAdministrasiBelumLunas()),
        ];
        return view('admin/dashboardAdmin', $data);
    }
    public function paket()
    {
        return view('admin/lihatPaket');
    }
    public function tambahPaket()
    {
        return view('admin/tambahPaket');
    }
    public function perusahaan()
    {
        return view('admin/lihatPerusahaan');
    }
    public function inputPengiriman()
    {
        return view('admin/inputPengiriman');
    }
    public function detailPengujian()
    {
        return view('admin/lihatPengujian');
    }
}
