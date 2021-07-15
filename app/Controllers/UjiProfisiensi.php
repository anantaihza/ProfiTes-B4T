<?php

namespace App\Controllers;

use App\Models\PengujianModel;

class UjiProfisiensi extends BaseController
{
    protected $pengujian;
    function __construct()
    {
        $this->pengujian = new PengujianModel();
    }

    public function index()
    {
        return view('ujiProfisiensi/landing');
    }

    public function pilihBaru()
    {
        $pengujian = $this->pengujian;
        $data['pengujian'] = $pengujian->findAll();

        return view('ujiProfisiensi/ujiProfisiensiBaruPilih', $data);
    }
    public function pengujian()
    {
        return view('ujiProfisiensi/pengujian');
    }
    public function profisiensiBaru($id)
    {
        $pengujian = $this->pengujian->where([
            'id_pengujian' => $id
        ])->first();
        $data['pengujian'] = $pengujian;

        return view('ujiProfisiensi/ujiProfisiensiBaru', $data);
    }
}
