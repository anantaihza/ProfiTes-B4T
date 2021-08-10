<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\PengujianModel;
use App\Models\ParameterModel;
use App\Models\PengirimanModel;
use App\Models\AdministrasiModel;
use App\Models\UjiProfisiensiModel;

class Admin extends BaseController
{
    function __construct()
    {
        $this->users = new UsersModel();
        $this->paket = new PengujianModel();
        $this->parameter = new ParameterModel();
        $this->pengiriman = new PengirimanModel();
        $this->administrasi = new AdministrasiModel();
        $this->trPengujian = new UjiProfisiensiModel();
    }

    public function dashboardAdmin()
    {
        $data = [
            'userJml' => count($this->administrasi->getUserAdministrasi()),
            'paketJml' => count($this->paket->getPaket()),
            'pengirimanSampleJml' => count($this->administrasi->getAdministrasiResiSudah()),
            'hasilUjiJml' => count($this->administrasi->getAdministrasiStatusPengujian()),
            'diterimaJml' => count($this->pengiriman->getStatusPengirimanDiterima()),
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
            'pengiriman' => $this->pengiriman->getPengiriman(),
            'administrasi' => $this->administrasi->getAdministrasiPengujian()
        ];
        return view('admin/lihatPerusahaan', $data);
    }

    public function parameter($id_paket)
    {
        $data = [
            'paket' => $this->paket->getIdPaket($id_paket),
            'parameters' => $this->parameter->getPaketParameter($id_paket)
        ];
        return view('admin/lihatParameter', $data);
    }

    public function buatLunas($id_administrasi)
    {
        $this->administrasi->updateStatusPembayaran($id_administrasi);
        return redirect()->to("listPerusahaan");
    }

    public function tambahPaket()
    {
        return view('admin/tambahPaket');
    }

    public function inputPengiriman($id_administrasi)
    {
        $data = [
            'id_administrasi' => $id_administrasi
        ];
        return view('admin/inputPengiriman', $data);
    }

    public function insertPengiriman($id_adm)
    {
        $nomor_resi = $this->request->getVar('nomor_resi');
        $catatan_pengiriman = $this->request->getVar('catatan_pengiriman');
        $nama_barang = $this->administrasi->getIdMasPengujian($id_adm);

        $this->pengiriman->addPengiriman($id_adm, $nomor_resi, $catatan_pengiriman, $nama_barang->nama_pengujian);
        $this->administrasi->updateStatusResi($id_adm);
        return redirect()->to("/listPerusahaan");
    }

    public function detailPengujian($id_administrasi)
    {
        $pengujian = $this->trPengujian->getTrPengujian($id_administrasi);
        $paket = $this->paket->getIdPaket($pengujian[0]->id_pengujian);
        $data = [
            'pengujian' => $pengujian,
            'paket' => $paket

        ];
        return view('admin/lihatPengujian', $data);
    }
}
