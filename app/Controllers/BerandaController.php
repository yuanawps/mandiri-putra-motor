<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BerandaController extends BaseController
{
    public function index()
    {
        // Mengambil instance dari Database
        $db = \Config\Database::connect();

        // Mengambil data hero dari tabel 'data_hero'
        $query = $db->query('SELECT * FROM data_hero');
        $data['data_hero'] = $query->getResult();

        // Mengambil data hero dari tabel 'data_status'
        $query = $db->query('SELECT * FROM data_status');
        $data['data_status'] = $query->getResult();

        // Mengambil data hero dari tabel 'data_mobil'
        $query = $db->query('SELECT * FROM produk');
        $data['produk'] = $query->getResult();

        // Mengambil data hero dari tabel 'data_galeri'
        $query = $db->query('SELECT * FROM data_galeri');
        $data['data_galeri'] = $query->getResult();

        // Mengambil data hero dari tabel 'data_kontak'
        $query = $db->query('SELECT * FROM data_kontak');
        $data['data_kontak'] = $query->getResult();

        // Tambahkan judul ke data array tanpa menimpa data yang ada
        $data['title'] = 'Mandiri Putra Motor';

        return view('user/beranda/index', $data);
    }
}
