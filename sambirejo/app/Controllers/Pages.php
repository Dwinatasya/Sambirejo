<?php

namespace App\Controllers;

use App\Models\BlogpostModel;
use App\Models\AdminModel;
//inisialisai untuk menerima data
use CodeIgniter\Controller;

class Pages extends BaseController
{
    //multi fungsi variable
    protected $BlogpostModel;
    protected $AdminModel;
    public function __construct()
    { //menggunakan model
        $this->BlogpostModel = new BlogpostModel();
        $this->AdminModel = new AdminModel();
    }
    public function index()
    {
        $data['blog'] = $this->BlogpostModel->selectdatablog();
        echo view('layout/header');
        echo view('pages/home', $data);
        echo view('layout/footer');
    }
    public function about()
    {
        echo view('layout/header');
        echo view('pages/about');
        echo view('layout/footer');
    }
    public function blog()
    {
        $data['blog'] = $this->BlogpostModel->selectdatablog();
        echo view('layout/header');
        echo view('pages/blog', $data);
        echo view('layout/footer');
    }
    public function contact()
    {
        echo view('layout/header');
        echo view('pages/contact');
        echo view('layout/footer');
    }
    public function admin()
    {
        $data['blogadmin'] = $this->AdminModel->selectadminblog();
        return view('pages/admin', $data);
    }
    public function tambah_aksi()
    {
        $data['blog'] = $this->AdminModel->insertdatablog();
        return redirect()->to('/admin');
    }
}
