<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\PengujianModel;
use App\Models\ParameterModel;
use App\Models\AdministrasiModel;

class Admin extends BaseController
{
    function __construct()
    {
        $this->users = new UsersModel();
        $this->paket = new PengujianModel();
        $this->parameter = new ParameterModel();
        $this->administrasi = new AdministrasiModel();
    }

    public function dashboardAdmin()
    {
        $data = [
            'userJml' => count($this->administrasi->getUserAdministrasi()),
            'paketJml' => count($this->paket->getPaket()),
            'administrasiJml' => count($this->administrasi->getAdministrasi()),
            'administrasiLunas' => count($this->administrasi->getAdministrasiLunas()),
            'administrasiBelumLunas' => count($this->administrasi->getAdministrasiBelumLunas()),
        ];

        return view('admin/dashboardAdmin', $data);
    }
    public function paket()
    {
        $data = [
            'pakets' => $this->paket->getPaket(),
            'parameters' => $this->parameter->getParameterYear()
        ];
        return view('admin/lihatPaket', $data);
    }

    public function perusahaan()
    {
        $data = [
            'users' => $this->users->getUser(),
            'administrasi' => $this->administrasi->getAdministrasiPengujian()
        ];
        return view('admin/lihatPerusahaan', $data);
    }

    public function tambahPaket()
    {
        return view('admin/tambahPaket');
    }

    public function inputPengiriman()
    {
        return view('admin/inputPengiriman');
    }

    public function detailPengujian()
    {
        return view('admin/lihatPengujian');
    }

    public function parameter()
    {
        return view('admin/lihatParameter');
    }
}
