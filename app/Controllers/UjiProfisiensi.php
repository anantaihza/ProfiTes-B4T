<?php

namespace App\Controllers;

class UjiProfisiensi extends BaseController
{
    public function index()
    {
        return view('ujiProfisiensi/landing');
    }

    public function pilihBaru()
    {
        return view('ujiProfisiensi/ujiProfisiensiBaruPilih');
    }
}
