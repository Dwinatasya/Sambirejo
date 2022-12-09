<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogpostModel extends Model
{  //membuat variable multi  fuction dan turunan
    protected $db;
    public function __construct()
    { //iniliasisais koneksi
        $this->db = \Config\Database::connect();
    }

    //menampilkan data
    public function selectdatablog()
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
}
