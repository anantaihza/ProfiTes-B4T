<?php

namespace App\Controllers;

use App\Models\PengujianModel;
use App\Models\AdministrasiModel;
use App\Models\ParameterModel;
use App\Models\UjiProfisiensiModel;

class UjiProfisiensi extends BaseController
{
    // Variable Construct
    protected $pengujian;
    protected $administrasi;
    protected $ujiprofisiensi;
    protected $parameter;

    function __construct()
    {
        $this->pengujian = new PengujianModel();
        $this->administrasi = new AdministrasiModel();
        $this->ujiprofisiensi = new UjiProfisiensiModel();
        $this->parameter = new ParameterModel();
    }

    public function index()
    {
        session()->remove('dataAdministrasi');
        $id_user = session()->get('id');
        $data = [
            'administrasi' => $this->administrasi->getMasPengujian($id_user)
        ];
        return view('ujiProfisiensi/landing', $data);
    }

    public function pilihBaru()
    {
        $data['pengujian'] = $this->pengujian->findAll();
        return view('ujiProfisiensi/ujiProfisiensiBaruPilih', $data);
    }

    public function pengujian($id_administrasi)
    {
        $dataAdministrasi = $this->administrasi->getIdMasPengujian($id_administrasi);
        $dataParameter = $this->parameter->getPaketParameter($dataAdministrasi->id_pengujian);
        session()->set([
            'dataAdministrasi' => $dataAdministrasi
        ]);
        $data = [
            'dataAdm' => $dataAdministrasi,
            'dataParam' => $dataParameter
        ];
        return view('ujiProfisiensi/pengujian', $data);
    }

    public function insertPengujian($id_administrasi)
    {
        $dataAdministrasi = $this->administrasi->getIdMasPengujian($id_administrasi);
        $dataParameter = $this->parameter->getPaketParameter($dataAdministrasi->id_pengujian);
        $i = count($dataParameter);
        $idParam = $dataParameter[0]->id_parameter;

        for ($j = 1; $j <= $i; $j++) {
            $tgl_pengujian = $this->request->getVar('tgl_pengujian');
            $hasilUji_A = $this->request->getVar("hasilUji_A_$j");
            $hasilUji_B = $this->request->getVar("hasilUji_B_$j");
            $rerata = $this->request->getVar("rerata_$j");
            $u95 = $this->request->getVar("u95_$j");
            $standar_acuan = $this->request->getVar("standar_acuan_$j");

            $this->ujiprofisiensi->addPengujian(
                $id_administrasi,
                $idParam,
                $tgl_pengujian,
                $hasilUji_A,
                $hasilUji_B,
                $rerata,
                $u95,
                $standar_acuan
            );

            $idParam++;
        }
        $this->administrasi->updateStatusPengujian($id_administrasi);

        return redirect()->to("UjiProfisiensi/pengujian/$id_administrasi");
    }

    public function profisiensiBaru($id)
    {
        $pengujian = $this->pengujian->where([
            'id_pengujian' => $id
        ])->first();
        session()->set([
            'id_pengujian' => $pengujian->id_pengujian,
            'biaya'        => $pengujian->biaya,
        ]);
        $data['pengujian'] = $pengujian;
        return view('ujiProfisiensi/ujiProfisiensiBaru', $data);
    }

    public function getAdministrasi($id_administrasi)
    {
        $dataAdministrasi = $this->administrasi->getIdMasPengujian($id_administrasi);
        session()->set([
            'dataAdministrasi' => $dataAdministrasi
        ]);
        return redirect()->to('/ujiProfisiensi/requestPembayaran');
    }

    public function administrasi($id, $id_pengujian)
    {
        // passing data post
        $penanggung_jawab_lab = $this->request->getVar('penanggung_jawab_lab');
        $status_akreditasi = $this->request->getVar('status_akreditasi');
        $nama_laboratorium = $this->request->getVar('nama_laboratorium');
        $telpon_laboratorium = $this->request->getVar('telpon_laboratorium');
        $fax_laboratorium = $this->request->getVar('fax_laboratorium');
        $alamat_laboratorium = $this->request->getVar('alamat_laboratorium');
        $alamat_pengiriman = $this->request->getVar('alamat_pengiriman');
        $nama_pic = $this->request->getVar('nama_pic');
        $jabatan_pic = $this->request->getVar('jabatan_pic');
        $telpon_pic = $this->request->getVar('telpon_pic');
        $email_pic = $this->request->getVar('email_pic');

        $id_administrasi = $this->administrasi->addAdministrasi(
            $id_pengujian,
            $id,
            $penanggung_jawab_lab,
            $status_akreditasi,
            $nama_laboratorium,
            $telpon_laboratorium,
            $fax_laboratorium,
            $alamat_laboratorium,
            $alamat_pengiriman,
            $nama_pic,
            $jabatan_pic,
            $telpon_pic,
            $email_pic
        );

        $dataAdministrasi = $this->administrasi->getIdMasPengujian($id_administrasi);
        session()->set([
            'dataAdministrasi' => $dataAdministrasi
        ]);
        return redirect()->to('/ujiProfisiensi/requestPembayaran');
    }

    public function requestPembayaran()
    {
        return view('ujiProfisiensi/requestPembayaran');
    }
}
