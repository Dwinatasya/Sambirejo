<?php

namespace App\Controllers;

use App\Models\LoginModel;
use CodeIgniter\Controller;

class Login extends BaseController
{
    protected $LoginModel;
    public function __construct()
    {
        $this->LoginModel = new LoginModel();
    }
    public function index()
    {
        return view('pages/login');
    }
    public function login_aksi()
    {
        $login = $this->LoginModel->ceklogin();
        if ($login != 'Login Gagal, Ulangi Lagi') {
            //hasil login
            // $this->session->set('data_login', $login);
            return redirect()->to('/admin');
        } else {
            //gagal login
            return $login;
        }
    }
}
