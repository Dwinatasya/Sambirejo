<?php

namespace App\Controllers;

use App\Models\BlogpostModel;

class Pages extends BaseController
{
    //multi fungsi variable
    protected $BlogpostModel;
    public function __construct()
    { //menggunakan model
        $this->BlogpostModel = new BlogpostModel();
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
}
