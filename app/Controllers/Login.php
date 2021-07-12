<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Login extends BaseController
{
	public function index()
	{
		return view('login/login');
	}
	public function login()
	{
		$users = new UsersModel();
		$username = $this->request->getVar('username');
		$password = $this->request->getVar('password');
		$dataUser = $users->where([
			'username' => $username,
		])->first();
		if ($dataUser) {
			if (password_verify($password, $dataUser->password)) {
				session()->set([
					'username' => $dataUser->username,
					'logged_in' => TRUE
				]);

				return redirect()->to(base_url('/uji-profisiensi'));
			} else {
				session()->setFlashdata('error', 'Username & Password Salah');
				return redirect()->back();
			}
		} else {
			session()->setFlashdata('error', 'Username & Password Salah');
			return redirect()->back();
		}
	}
	public function register()
	{
		if (!$this->validate([
			'username' => [
				'rules' => 'required|min_length[4]|max_length[50]|is_unique[users.username]',
				'errors' => [
					'required' => '{field} Harus diisi',
					'min_length' => '{field} Minimal 4 Karakter',
					'max_length' => '{field} Maksimal 50 Karakter',
					'is_unique' => 'Username sudah digunakan sebelumnya'
				]
			],
			'password' => [
				'rules' => 'required|min_length[4]|max_length[50]',
				'errors' => [
					'required' => '{field} Harus diisi',
					'min_length' => '{field} Minimal 4 Karakter',
					'max_length' => '{field} Maksimal 50 Karakter',
				]
			],
			'email' => [
				'rules' => 'required|max_length[64]',
				'errors' => [
					'required' => '{field} Harus diisi',
					'max_length' => '{field} Maksimal 64 Karakter'
				]
			],
		])) {
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->back()->withInput();
		}
		$users = new UsersModel();
		$users->insert([
			'username' => $this->request->getVar('username'),
			'email' => $this->request->getVar('email'),
			'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT)

		]);
		return redirect()->to('/');
	}
	public function logout()
	{
		session()->destroy();
		return redirect()->to('/');
	}
}
