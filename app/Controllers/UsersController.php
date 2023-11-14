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

        if ($this->request->getMethod() == 'post') {
            #Validation
            $rules = [
                'firstname' => 'required|min_length[3]|max_length[20]',
                'lastname' => 'required|min_length[3]|max_length[20]',
                'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[8]|max_length[255]',
                'conpassword' => 'matches[password]',
            ];

            if (! $this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                # code...
            }
            
        }

        return view('register');
    }
}
