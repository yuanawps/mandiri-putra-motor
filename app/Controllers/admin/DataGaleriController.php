<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\DataGaleriModel;
use App\Models\DataAdminModel; 

class DataGaleriController extends BaseController
{
    protected $dataGaleriModel;
    protected $dataAdminModel;

    public function __construct()
    {
        $this->dataGaleriModel = new DataGaleriModel();
        $this->dataAdminModel = new DataAdminModel();
    }

    //daftar hero
    public function index()
    {
        $data = [
            'title' => 'Data Galeri',
            'data_galeri' => $this->dataGaleriModel->orderBy('id_galeri', 'DESC')->findAll()
        ];

        return view('admin/datagaleri/index', $data);
    }

    public function form_create()
    {
        $data = [
            'title' => 'Tambah galeri',
            'data_galeri' => $this->KategoriModel->findAll(),
            'validation' => \Config\Services::validation()
        ];

        return view('admin/datagaleri/create', $data);
    }

    public function create_galeri()
    {
        // Aturan validasi input
        $rules = $this->validate([
            'foto_galeri' => 'uploaded[foto_galeri]|is_image[foto_galeri]|mime_in[foto_galeri,image/jpg,image/jpeg,image/png]',
            'tanggal_input' => 'required',
        ]);

        // Jika validasi gagal
        if (!$rules) {
            session()->setFlashdata('failed', 'Data Hero Gagal Ditambahkan');
            // return redirect()->back()->withInput(); 
        }

        // ambil file
        $gambar = $this->request->getFile('foto_galeri');

        //ambil random
        $namaGambar = $gambar->getRandomName();

        //pindahkan file
        $gambar->move(WRITEPATH . '../public/asset-admin/img/', $namaGambar);

        // Ambil id_admin dari sesi
        $id_admin = session()->get('id_admin');

        // jika data valid
        $this->dataGaleriModel->insert([
            'tanggal_input' => $this->request->getPost('tanggal_input'),
            'foto_galeri' => $namaGambar,
            'id_admin' => $id_admin
        ]);

        return redirect()->to(base_url('datagaleri'))->with('success', 'Data hero Berhasil Ditambahkan');
    }

    // hapus data hero
    public function destroy($id_galeri)
    {
        $this->dataGaleriModel->where('id_galeri', $id_galeri)->delete();
        return redirect()->back()->with('success', 'Data Hero Berhasil Di hapus');
    }
}
