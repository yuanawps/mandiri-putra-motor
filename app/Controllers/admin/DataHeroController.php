<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\DataHeroModel; // Pastikan model diimport
use App\Models\DataAdminModel;

class DataHeroController extends BaseController
{
    protected $dataHeroModel;
    protected $dataAdminModel;

    public function __construct()
    {
        $this->dataHeroModel = new DataHeroModel();
        $this->dataAdminModel = new DataAdminModel();
    }

    //daftar hero
    public function index()
    {
        $data = [
            'title' => 'Data Hero',
            'data_hero' => $this->dataHeroModel->orderBy('id_hero', 'DESC')->findAll()
        ];

        return view('admin/datahero/index', $data);
    }

    public function form_create()
    {
        $data = [
            'title' => 'Tambah Hero',
            'data_hero' => $this->KategoriModel->findAll(),
            'validation' => \Config\Services::validation()
        ];

        return view('admin/datahero/create', $data);
    }

    public function create_hero()
    {
        // Aturan validasi input
        $rules = $this->validate([
            'konten_hero' => 'required',
            'video_hero' => 'required',
            'foto_hero' => 'uploaded[foto_hero]|is_image[foto_hero]|mime_in[foto_hero,image/jpg,image/jpeg,image/png]',
            'tanggal_input' => 'required',
        ]);

        // Jika validasi gagal
        if (!$rules) {
            session()->setFlashdata('failed', 'Data Hero Gagal Ditambahkan');
            // return redirect()->back()->withInput(); 
        }

        // ambil file
        $gambar = $this->request->getFile('foto_hero');

        //ambil random
        $namaGambar = $gambar->getRandomName();

        //pindahkan file
        $gambar->move(WRITEPATH . '../public/asset-admin/img/', $namaGambar);

        // Ambil id_admin dari sesi
        $id_admin = session()->get('id_admin');

        // jika data valid
        $this->dataHeroModel->insert([
            'konten_hero' => $this->request->getPost('konten_hero'),
            'video_hero' => $this->request->getPost('video_hero'),
            'tanggal_input' => $this->request->getPost('tanggal_input'),
            'foto_hero' => $namaGambar,
            'id_admin' => $id_admin
        ]);

        return redirect()->to(base_url('datahero'))->with('success', 'Data hero Berhasil Ditambahkan');
    }

    // ubah data hero
    public function update($id_hero)
    {
        // ambil slug
        $slug = url_title($this->request->getPost('konten_hero'), '-', TRUE);

        // simpan data ke database
        $data = [
            'konten_hero' => esc($this->request->getPost('konten_hero')),
            'video_hero' => esc($this->request->getPost('video_hero')),
            'slug_hero' => $slug
        ];

        $this->dataHeroModel->update($id_hero, $data);

        return redirect()->back()->with('success', 'Data Hero Berhasil Di ubah');
    }

    // hapus data hero
    public function destroy($id_hero)
    {
        $this->dataHeroModel->where('id_hero', $id_hero)->delete();
        return redirect()->back()->with('success', 'Data Hero Berhasil Di hapus');
    }
}
