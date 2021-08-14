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

    // Dashboard
    public function dashboardAdmin()
    {
        $data = [
            'paketJml'               => count($this->paket->getPaket()),
            'administrasiJml'        => count($this->administrasi->getAdministrasi()),
            'userJml'                => count($this->administrasi->getUserAdministrasi()),
            'administrasiLunas'      => count($this->administrasi->getAdministrasiLunas()),
            'pengirimanSampleJml'    => count($this->administrasi->getAdministrasiResiSudah()),
            'diterimaJml'            => count($this->pengiriman->getStatusPengirimanDiterima()),
            'administrasiBelumLunas' => count($this->administrasi->getAdministrasiBelumLunas()),
            'hasilUjiJml'            => count($this->administrasi->getAdministrasiStatusPengujian()),
        ];
        return view('admin/dashboardAdmin', $data);
    }

    // Admin
    public function admin()
    {
        $data = [
            'admins'        => $this->users->getAdmin()
        ];
        return view('admin/listAdmin', $data);
    }

    public function insertAdmin()
    {
        $username = $this->request->getVar('username');
        $email = $this->request->getVar('email');
        $password = password_hash($this->request->getVar('password'), PASSWORD_BCRYPT);
        $nama_user = $this->request->getVar('nama_lengkap');
        $detail_alamat = $this->request->getVar('alamat');
        $no_telepon = $this->request->getVar('telepon');

        $this->users->addAdmin($username, $email, $password, $nama_user, $detail_alamat, $no_telepon);
        return redirect()->to("/listAdmin");
    }

    public function editAdmin($id_user)
    {
        $valid = [
            'repassword' => [
                'rules' => 'matches[password_new]',
                'errors' => [
                    'matches' => '{field} tidak sama dengan Password'
                ]
            ],
        ];
        if (!$this->validate($valid)) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        if ($this->request->getVar('password_new')) {
            $data = [
                'username' => $this->request->getVar('username'),
                'nama_user' => $this->request->getVar('nama_lengkap'),
                'email' => $this->request->getVar('email'),
                'no_telepon' => $this->request->getVar('no_telepon'),
                'detail_alamat' => $this->request->getVar('alamat'),
                'password' => password_hash($this->request->getVar('password_new'), PASSWORD_BCRYPT)
            ];
            $this->users->updateAdmin($data, $id_user);
            session()->setFlashdata('message', 'Password anda berhasil diubah');
            return redirect()->to('/listAdmin');
        }

        $data = [
            'username' => $this->request->getVar('username'),
            'nama_user' => $this->request->getVar('nama_lengkap'),
            'email' => $this->request->getVar('email'),
            'no_telepon' => $this->request->getVar('no_telepon'),
            'detail_alamat' => $this->request->getVar('alamat')
        ];

        $this->users->updateAdmin($data, $id_user);
        return redirect()->to("listAdmin");
    }


    // Paket
    public function paket()
    {
        $data = [
            'pakets'     => $this->paket->getPaket(),
            'parameters' => $this->parameter->getParameterYear()
        ];
        return view('admin/lihatPaket', $data);
    }

    public function tambahPaket()
    {
        return view('admin/tambahPaket');
    }

    public function insertPaket()
    {
        $nama_pengujian = $this->request->getVar('nama_pengujian');
        $biaya = $this->request->getVar('biaya');
        $biaya_terbilang = $this->request->getVar('biaya_terbilang');
        $keterangan = $this->request->getVar('keterangan');

        $this->paket->addPaket($nama_pengujian, $biaya, $biaya_terbilang, $keterangan);
        return redirect()->to("/listPaket");
    }

    public function editPaket($id_paket)
    {
        $data = [
            'nama_pengujian' => $this->request->getVar('nama_pengujian'),
            'biaya' => $this->request->getVar('biaya'),
            'biaya_terbilang' => $this->request->getVar('biaya_terbilang'),
            'keterangan' => $this->request->getVar('keterangan')
        ];

        $this->paket->updatePengujian($data, $id_paket);
        return redirect()->to("listPaket");
    }

    public function deletePaket($id_paket)
    {
        $this->parameter->delAllParameterByFk($id_paket);
        $this->paket->delPaket($id_paket);
        return redirect()->to("listPaket");
    }



    // Parameter
    public function parameter($id_paket)
    {
        $data = [
            'paket'      => $this->paket->getIdPaket($id_paket),
            'parameters' => $this->parameter->getPaketParameter($id_paket)
        ];
        return view('admin/lihatParameter', $data);
    }

    public function insertParameter($id_paket)
    {
        $nama_parameter = $this->request->getVar('nama_parameter');
        $satuan = $this->request->getVar('satuan');

        $this->parameter->addParameter($id_paket, $nama_parameter, $satuan);
        return redirect()->to("listParameter/$id_paket");
    }

    public function updateParameter($id_parameter, $id_paket)
    {

        $data = [
            'nama_parameter' => $this->request->getVar('nama_parameter'),
            'satuan' => $this->request->getVar('satuan')
        ];

        $this->parameter->updateParameter($data, $id_parameter);
        return redirect()->to("listParameter/$id_paket");
    }

    public function deleteParameter($id_parameter, $id_paket)
    {
        $this->parameter->delParameter($id_parameter);
        return redirect()->to("listParameter/$id_paket");
    }


    // Perusahaan
    public function perusahaan()
    {
        $data = [
            'users'        => $this->users->getUser(),
            'pengiriman'   => $this->pengiriman->getPengiriman(),
            'administrasi' => $this->administrasi->getAdministrasiPengujian()
        ];
        return view('admin/lihatPerusahaan', $data);
    }

    public function buatLunas($id_administrasi)
    {
        $this->administrasi->updateStatusPembayaran($id_administrasi);
        return redirect()->to("listPerusahaan");
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
        $nama_barang = $this->administrasi->getIdMasPengujian($id_adm);
        $catatan_pengiriman = $this->request->getVar('catatan_pengiriman');

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
            'paket'     => $paket

        ];
        return view('admin/lihatPengujian', $data);
    }
}
