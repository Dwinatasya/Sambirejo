<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\HTTP\RequestInterface;

class LoginModel extends Model
{  //membuat variable multi  fuction dan turunan
    protected $db;
    protected $request;
    public function __construct()
    { //iniliasisais koneksi
        $this->db = \Config\Database::connect();

        //menangkap data
        $this->request = \Config\Services::request();
    }

    //menampilkan data
    public function ceklogin()
    {
        $username = $this->request->getPost('username');
        $pass = $this->request->getPost('pass');

        //pembuatan query
        $sql = "SELECT * FROM admin_login WHERE username='$username' AND username='$username'";
        // $sql = "SELECT * FROM admin_login WHERE username=' $username' AND pass='$pass' ";

        //eksekusi
        $query = $this->db->query($sql);
        // echo $query->getNumRows();
        // die;
        if($query->getNumRows() > 0){
            $hasil = array(
                'username' => $username,
                'pass' => $pass
            );
        }else{
            $hasil = "Login Gagal, Ulangi Lagi";
        }
        return $hasil;
    }
}
