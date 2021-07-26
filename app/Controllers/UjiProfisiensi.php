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

        return view('ujiProfisiensi/pengujian', $data);
    }

    public function insertPengujian()
    {
        $valid = [
            'hasilUji_A_1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'hasilUji_B_1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'rerata_1' => [
                'rules' => 'required',
                'errors' => [
                    'matches' => '{field} Harus diisi'
                ]
            ],
            'u95_1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'standar_acuan_1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'tgl_pengujian' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ];
        // for ($j = 1; $j <= 4; $j++) {
        //     echo $i;
        // }
        // if (!$this->validate($valid)) {
        //     session()->setFlashdata('error', $this->validator->listErrors());
        //     return redirect()->back();
        // }
        // passing data post
        $tgl_pengujian = $this->request->getVar('tgl_pengujian');
        $hasilUji_A = $this->request->getVar('hasilUji_A_1');
        $hasilUji_B = $this->request->getVar('hasilUji_B_1');
        $rerata = $this->request->getVar('rerata_1');
        $u95 = $this->request->getVar('u95_1');
        $standar_acuan = $this->request->getVar('standar_acuan_1');

        $this->ujiprofisiensi->insert([
            'id_administrasi' => 1,
            'id_parameter' => 1,
            'tgl_pengujian' => $tgl_pengujian,
            'hasilUji_A' => $hasilUji_A,
            'hasilUji_B' => $hasilUji_B,
            'rerata' => $rerata,
            'u95' => $u95,
            'standar_acuan' => $standar_acuan,
        ]);
        return redirect()->to('/ujiProfisiensi');
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
        $valid = [
            'metode_pengujian' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'nama_laboratorium' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'telpon_laboratorium' => [
                'rules' => 'required',
                'errors' => [
                    'matches' => '{field} Harus diisi'
                ]
            ],
            'fax_laboratorium' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'alamat_laboratorium' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'status_akreditasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'alamat_pengiriman' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'nama_pic' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jabatan_pic' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'telpon_pic' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'email_pic' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ];
        if (!$this->validate($valid)) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        // passing data post
        $metode_pengujian = $this->request->getVar('metode_pengujian');
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
            'metode_pengujian' => $metode_pengujian,
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
}
