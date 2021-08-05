<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Admin extends BaseController
{
    public function dashboardAdmin()
    {
        return view('admin/dashboardAdmin');
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
