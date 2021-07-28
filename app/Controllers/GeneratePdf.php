<?php

namespace App\Controllers;

use App\Models\PengujianModel;
use App\Models\AdministrasiModel;
use App\Models\ParameterModel;
use App\Models\UjiProfisiensiModel;
use Dompdf\Dompdf;

class GeneratePdf extends BaseController
{
    protected $administrasi;

    function __construct()
    {
        $this->administrasi = new AdministrasiModel();
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
