<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Profile extends BaseController
{
    public function index()
    {
        $usersModel = new UsersModel();
        $usersModel = $usersModel->where([
            'username' => session()->get('username')
        ])->first();
        $data = [
            'user' => $usersModel
        ];
        return view('profile/profilku', $data);
    }
}
