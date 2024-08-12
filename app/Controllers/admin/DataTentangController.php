<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\DataTentangModel;

class DataTentangController extends BaseController
{
    protected $dataTentangModel;

    public function __construct()
    {
        $this->dataTentangModel = new DataTentangModel();
    }

    // Daftar Tentang
    public function index()
    {
        $data = [
            'title' => 'Data Tentang',
            'data_about' => $this->dataTentangModel->orderBy('id_about', 'DESC')->findAll()
        ];

        return view('admin/dataabout/index', $data);
    }

    public function form_create()
    {
        $data = [
            'title' => 'Tambah About',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/dataabout/create', $data);
    }

    public function create_dataabout()
    {
        // Aturan validasi input
        $rules = $this->validate([
            'isi_about' => 'required',
            'foto_about' => 'uploaded[foto_about]|is_image[foto_about]|mime_in[foto_about,image/jpg,image/jpeg,image/png]',
            'tanggal_input' => 'required',
        ]);

        // Jika validasi gagal
        if (!$rules) {
            session()->setFlashdata('failed', 'Data About Gagal Ditambahkan');
            // return redirect()->back()->withInput();
        }

        // Ambil file
        $gambar = $this->request->getFile('foto_about');

        // Ambil nama acak
        $namaGambar = $gambar->getRandomName();

        // Pindahkan file
        $gambar->move(WRITEPATH . '../public/asset-admin/img/', $namaGambar);

        // Jika data valid
        $this->dataTentangModel->insert([
            'isi_about' => $this->request->getPost('isi_about'),
            'no_kontak' => $this->request->getPost('no_kontak'),
            'video_about' => $this->request->getPost('video_about'),
            'tanggal_input' => $this->request->getPost('tanggal_input'),
            'foto_about' => $namaGambar
        ]);

        return redirect()->to(base_url('dataabout'))->with('success', 'Data About Berhasil Ditambahkan');
    }

    // Ubah data about
    public function update($id_about)
    {
        // Ambil slug
        $slug = url_title($this->request->getPost('isi_about'), '-', TRUE);

        // Simpan data ke database
        $data = [
            'isi_about' => esc($this->request->getPost('isi_about')),
            'no_kontak' => esc($this->request->getPost('no_kontak')),
            'video_about' => esc($this->request->getPost('video_about')),
            'slug_about' => $slug
        ];

        $this->dataTentangModel->update($id_about, $data);

        return redirect()->back()->with('success', 'Data About Berhasil Diubah');
    }

    // Hapus data about
    public function destroy($id_about)
    {
        $this->dataTentangModel->where('id_about', $id_about)->delete();
        return redirect()->back()->with('success', 'Data About Berhasil Dihapus');
    }
}
