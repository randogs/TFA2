<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserAccounts extends BaseController
{
    public function index(): string
    {
        $userModel = new UserModel();

        return view('user_accounts/index', [
            'title' => 'User Accounts',
            'users' => $userModel
                ->orderBy('id', 'ASC')
                ->findAll(),
        ]);
    }
}