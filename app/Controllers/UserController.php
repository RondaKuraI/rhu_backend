<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;
use App\Controllers\BaseController;

class UserController extends ResourceController
{
    public function login(){
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $user = new UserModel();
        $data = $user->where('username', $username)->first();
        if ($data) {
            return $this->respond(['msg' => 'okay'], 200);
        }
        else {
            return $this->respond(['msg' => 'no user found'], 200);
        }
        
    }

    public function index()
    {

    }
}
