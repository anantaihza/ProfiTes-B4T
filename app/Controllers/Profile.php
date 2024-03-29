<?php

namespace App\Controllers;

use App\Models\UsersModel;
use CodeIgniter\Validation\Rules;

class Profile extends BaseController
{
    protected $user;
    function __construct()
    {
        $this->user = new UsersModel();
    }

    public function index()
    {
        $dataUsers = $this->user->where([
            'username' => session()->get('username')
        ])->first();
        $data = [
            'user' => $dataUsers
        ];
        return view('profile/profilku', $data);
    }

    public function update($id)
    {
        $valid = [
            'nama_user' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'detail_alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'repassword' => [
                'rules' => 'matches[password-new]',
                'errors' => [
                    'matches' => '{field} tidak sama dengan Password'
                ]
            ],
            'no_telepon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'no_fax' => [
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
        $nama_user = $this->request->getVar('nama_user');
        $detail_alamat = $this->request->getVar('detail_alamat');
        $no_telepon = $this->request->getVar('no_telepon');
        $no_fax = $this->request->getVar('no_fax');
        $password = $this->request->getVar('password-old');


        $dataUser = $this->user->where([
            'id_user' => $id
        ])->first();

        if ($this->request->getVar('password-new')) {
            if (password_verify($password, $dataUser->password)) {
                $this->user->update($id, [
                    'password'      => password_hash($this->request->getVar('password-new'), PASSWORD_BCRYPT),
                    'nama_user'     => $nama_user,
                    'detail_alamat' => $detail_alamat,
                    'no_telepon'    => $no_telepon,
                    'no_fax'        => $no_fax
                ]);
                session()->setFlashdata('message', 'Update Data Anda Berhasil');
                return redirect()->to(base_url('/profilku'));
            } else {
                session()->setFlashdata('message', 'Periksa kembali password lama anda');
                return redirect()->to(base_url('/profilku'));
            }
        }


        $this->user->update($id, [
            'nama_user'     => $nama_user,
            'detail_alamat' => $detail_alamat,
            'no_telepon'    => $this->request->getVar('no_telepon'),
            'no_fax'        => $no_fax
        ]);
        session()->setFlashdata('message', 'Update Data Anda Berhasil');
        return redirect()->to(base_url('/profilku'));
    }
}
