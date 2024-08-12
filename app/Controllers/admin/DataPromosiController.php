<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\DataPromosiModel;

class DataPromosiController extends BaseController
{
    protected $datapromosiModel;

    public function __construct()
    {
        $this->datapromosiModel = new DataPromosiModel();
    }

    // Daftar promosi
    public function index()
    {
        $data = [
            'title' => 'Data promosi',
            'data_promosi' => $this->datapromosiModel->orderBy('id_promosi', 'DESC')->findAll()
        ];

        return view('admin/datapromosi/index', $data);
    }

    public function form_create()
    {
        $data = [
            'title' => 'Tambah promosi',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/datapromosi/create', $data);
    }

    public function create_datapromosi()
    {
        // Aturan validasi input
        $rules = $this->validate([
            'isi_promosi' => 'required',
            'judul_promosi' => 'required',
            'tanggal_input' => 'required',
        ]);

        // Jika validasi gagal
        if (!$rules) {
            session()->setFlashdata('failed', 'Data promosi Gagal Ditambahkan');
            // return redirect()->back()->withInput();
        }

        // Jika data valid
        $this->datapromosiModel->insert([
            'isi_promosi' => $this->request->getPost('isi_promosi'),
            'judul_promosi' => $this->request->getPost('judul_promosi'),
        ]);

        return redirect()->to(base_url('datapromosi'))->with('success', 'Data promosi Berhasil Ditambahkan');
    }

    // Ubah data promosi
    public function update($id_promosi)
    {
        // Ambil slug
        $slug = url_title($this->request->getPost('isi_promosi'), '-', TRUE);

        // Simpan data ke database
        $data = [
            'isi_promosi' => esc($this->request->getPost('isi_promosi')),
            'judul_promosi' => esc($this->request->getPost('judul_promosi')),
            'slug_promosi' => $slug
        ];

        $this->datapromosiModel->update($id_promosi, $data);

        return redirect()->back()->with('success', 'Data promosi Berhasil Diubah');
    }

    // Hapus data promosi
    public function destroy($id_promosi)
    {
        $this->datapromosiModel->where('id_promosi', $id_promosi)->delete();
        return redirect()->back()->with('success', 'Data promosi Berhasil Dihapus');
    }
}
