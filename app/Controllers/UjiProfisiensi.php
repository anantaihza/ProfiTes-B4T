<?php

namespace App\Controllers;

use App\Models\PengujianModel;
use App\Models\AdministrasiModel;
use App\Models\UjiProfisiensiModel;

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
    }

    public function index()
    {

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
    public function pengujian()
    {
        return view('ujiProfisiensi/pengujian');
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
        return redirect()->to('/ujiProfisiensi');
    }
}
