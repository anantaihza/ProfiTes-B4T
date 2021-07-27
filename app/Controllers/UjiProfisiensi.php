<?php

namespace App\Controllers;

use App\Models\PengujianModel;
use App\Models\AdministrasiModel;
use App\Models\ParameterModel;
use App\Models\UjiProfisiensiModel;
use Dompdf\Dompdf;

class UjiProfisiensi extends BaseController
{
    protected $pengujian;
    protected $administrasi;
    protected $ujiprofisiensi;
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
        $data = [
            'administrasi' => $this->administrasi->getMasPengujian()
        ];
        return view('ujiProfisiensi/landing', $data);
    }

    public function pilihBaru()
    {
        $pengujian = $this->pengujian;
        $data['pengujian'] = $pengujian->findAll();

        return view('ujiProfisiensi/ujiProfisiensiBaruPilih', $data);
    }


    public function pengujian($id_administrasi)
    {
        $dataAdministrasi = $this->administrasi->getIdMasPengujian($id_administrasi);
        $dataParameter = $this->parameter->getPaketParameter($dataAdministrasi[0]->id_pengujian);
        $data = [
            'dataAdm' => $dataAdministrasi,
            'dataParam' => $dataParameter
        ];
        session()->set([
            'dataAdministrasi' => $dataAdministrasi
        ]);
        return view('ujiProfisiensi/pengujian', $data);
    }

    public function insertPengujian($id_administrasi)
    {
        $dataAdministrasi = $this->administrasi->getIdMasPengujian($id_administrasi);
        $dataParameter = $this->parameter->getPaketParameter($dataAdministrasi[0]->id_pengujian);
        $i = count($dataParameter);
        $idParam = $dataParameter[0]->id_parameter;

        for ($j = 1; $j <= $i; $j++) {
            $tgl_pengujian = $this->request->getVar('tgl_pengujian');
            $hasilUji_A = $this->request->getVar("hasilUji_A_$j");
            $hasilUji_B = $this->request->getVar("hasilUji_B_$j");
            $rerata = $this->request->getVar("rerata_$j");
            $u95 = $this->request->getVar("u95_$j");
            $standar_acuan = $this->request->getVar("standar_acuan_$j");

            $this->ujiprofisiensi->insert([
                'id_administrasi' => $id_administrasi,
                'id_parameter' => $idParam,
                'tgl_pengujian' => $tgl_pengujian,
                'hasilUji_A' => $hasilUji_A,
                'hasilUji_B' => $hasilUji_B,
                'rerata' => $rerata,
                'u95' => $u95,
                'standar_acuan' => $standar_acuan,
            ]);
            $idParam++;
        }
        $this->administrasi->update($id_administrasi, [
            'status_pengujian'      => 'Sudah'
        ]);
        // passing data post
        return redirect()->to("UjiProfisiensi/pengujian/$id_administrasi");
    }

    public function profisiensiBaru($id)
    {
        $pengujian = $this->pengujian->where([
            'id_pengujian' => $id
        ])->first();
        session()->set([
            'id_pengujian'         => $pengujian->id_pengujian,
            'biaya'             => $pengujian->biaya,
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

        $this->administrasi->insert([
            'id_pengujian' => $id_pengujian,
            'id_user' => $id,
            'penanggung_jawab_lab' => $penanggung_jawab_lab,
            'status_akreditasi' => $status_akreditasi,
            'nama_laboratorium' => $nama_laboratorium,
            'telpon_laboratorium' => $telpon_laboratorium,
            'fax_laboratorium' => $fax_laboratorium,
            'alamat_laboratorium' => $alamat_laboratorium,
            'alamat_pengiriman' => $alamat_pengiriman,
            'nama_pic' => $nama_pic,
            'jabatan_pic' => $jabatan_pic,
            'telpon_pic' => $telpon_pic,
            'email_pic' => $email_pic,
            'no_va' => '9908214569873',
            'no_refrensi' => '336598',
        ]);
        $id_administrasi = $this->administrasi->getInsertID();
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
    public function invoicePembayaran()
    {
        $idUser = session()->get('dataAdministrasi')[0]->id_user;
        $idAdministrasi = session()->get('dataAdministrasi')[0]->id_administrasi;
        $dataAdministrasi = $this->administrasi->getUser($idUser, $idAdministrasi);
        $data = [
            'dataAdministrasi' => $dataAdministrasi
        ];
        return view('ujiProfisiensi/pembayaranpdf2', $data);
    }
    function generatePDF()
    {
        $idUser = session()->get('dataAdministrasi')[0]->id_user;
        $idAdministrasi = session()->get('dataAdministrasi')[0]->id_administrasi;
        $dataAdministrasi = $this->administrasi->getUser($idUser, $idAdministrasi);

        $data = [
            'dataAdministrasi' => $dataAdministrasi,
        ];

        $dompdf = new Dompdf();

        $dompdf->loadHtml(view('ujiProfisiensi/pembayaranPdf2', $data));
        $dompdf->setPaper('A4', 'potrait'); //ukuran kertas dan orientasi
        $dompdf->render();
        $dompdf->stream('Invoice_Uji'); //nama file pdf

        return view('ujiProfisiensi/requestPembayaran'); //arahkan ke list-iklan setelah laporan di unduh
    }
    public function LaporanAkhir()
    {
        // $idAdministrasi = session()->get('dataAdministrasi')[0]->id_administrasi;
        // $dataAdministrasi = $this->administrasi->getIdMasPengujian($idAdministrasi);
        // $dataParameter = $this->ujiprofisiensi->getPaketParameter($dataAdministrasi[0]->id_pengujian);
        // $data = [
        //     'dataAdm' => $dataAdministrasi,
        //     'dataParam' => $dataParameter
        // ];

        return view('ujiProfisiensi/laporanAkhirPDF');
    }
    function generateLaporanAkhirPDF()
    {
        $id_tr_pengujian = session()->get('dataAdministrasi')[0]->id_administrasi;
        $dataAdministrasi = $this->ujiprofisiensi->getIdAdministrasi($id_tr_pengujian);

        $data = [
            'dataAdministrasi' => $dataAdministrasi,
        ];

        $dompdf = new Dompdf();

        $dompdf->loadHtml(view('ujiProfisiensi/laporanAkhirPDF', $data));
        $dompdf->setPaper('A4', 'potrait'); //ukuran kertas dan orientasi
        $dompdf->render();
        $dompdf->stream('Laporan Akhir'); //nama file pdf

        return view('ujiProfisiensi/requestPembayaran'); //arahkan ke list-iklan setelah laporan di unduh
    }
}
