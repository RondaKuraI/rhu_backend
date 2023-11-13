<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UsersController extends BaseController
{
    public function index()
    {
        $data = [];
        helper(['form']);

        return view('login');
    }

    public function register()
    {
        $data = [];
        helper(['form']);

        return view('register');
    }
}
