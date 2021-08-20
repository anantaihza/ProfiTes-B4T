<?php

namespace App\Controllers;

use App\Models\PengujianModel;
use App\Models\AdministrasiModel;
use App\Models\ParameterModel;
use App\Models\UjiProfisiensiModel;
use Dompdf\Dompdf;
use CodeIgniter\I18n\Time;


class GeneratePdf extends BaseController
{
    protected $administrasi;
    protected $trPengujian;

    function __construct()
    {
        $this->administrasi = new AdministrasiModel();
        $this->trPengujian = new UjiProfisiensiModel();
        $this->parameter = new ParameterModel();
    }

    // public function invoicePembayaran()
    // {
    //     $idUser = session()->get('dataAdministrasi')[0]->id_user;
    //     $idAdministrasi = session()->get('dataAdministrasi')[0]->id_administrasi;
    //     $dataAdministrasi = $this->administrasi->getUser($idUser, $idAdministrasi);
    //     $data = [
    //         'dataAdministrasi' => $dataAdministrasi
    //     ];
    //     return view('ujiProfisiensi/pembayaranpdf2', $data);
    // }

    function generatePDF()
    {
        $idUser = session()->get('dataAdministrasi')->id_user;
        $idAdministrasi = session()->get('dataAdministrasi')->id_administrasi;
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

        $idAdministrasi = session()->get('dataAdministrasi')->id_administrasi;
        $dataTrPengujian = $this->trPengujian->getTrPengujian($idAdministrasi);
        // $teknik = $this->trPengujian->getTeknik();
        $data = [
            'dataTrPengujian' => $dataTrPengujian,
        ];

        return view('ujiProfisiensi/laporanAkhirPDF', $data);
    }


    function generateLaporanAkhirPDF()
    {
        $idAdministrasi = session()->get('dataAdministrasi')->id_administrasi;
        $dataTrPengujian = $this->trPengujian->getTrPengujian($idAdministrasi);
        // $teknik = $this->trPengujian->getTeknik();
        $data = [
            'dataTrPengujian' => $dataTrPengujian,
        ];

        $dompdf = new Dompdf();

        $dompdf->loadHtml(view('ujiProfisiensi/laporanAkhirPDF', $data));
        $dompdf->setPaper('A4', 'potrait'); //ukuran kertas dan orientasi
        $dompdf->render();
        $dompdf->stream('Laporan Akhir'); //nama file pdf

        return view('ujiProfisiensi/requestPembayaran'); //arahkan ke list-iklan setelah laporan di unduh
    }
}
