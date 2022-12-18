<?php

namespace App\Models;

use CodeIgniter\Model;
//inisialisai untuk tangkap data
use CodeIgniter\HTTP\RequestInterface;

class AdminModel extends Model
{  //membuat variable multi  fuction dan turunan
    protected $db;
    protected $request;
    public function __construct()
    { //iniliasisais koneksi
        $this->db = \Config\Database::connect();
        $this->request = \Config\Services::request();
    }

    //menampilkan data
    public function selectadminblog()
    {
        //pembuatan query
        $sql = "SELECT * FROM blogpost";

        //eksekusi
        $query = $this->db->query($sql);
        //uraikan hasil query dalam bentuk array
        $data = $query->getResultArray();
        //memngemballiksan hasil ke controler
        return $data;
    }
    public function insertdatablog()
    {
        //tangkap data
        $nama = $this->request->getPost('nama');
        $link = $this->request->getPost('link');
        //menangkap gambar
        // $foto = $this->request->getFile('foto');
        // $name = $foto->getName();
        // //memindahkan foto ke direcktory
        // $foto->move('public/images', $name);

        //buat query
        $sql = "INSERT INTO blogpost(nama, foto, link)
        VALUES ('$nama','','$link')";
        //eksekusi
        $this->db->query($sql);


        return;
    }
}
