<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\DataAlamatModel;

class DataAlamatController extends BaseController
{
    protected $dataAlamatModel;

    public function __construct()
    {
        $this->dataAlamatModel = new DataAlamatModel();
    }

    //daftar Alamat
    public function index()
    {
        $data = [
            'title' => 'Data Alamat',
            'data_alamat' => $this->dataAlamatModel->orderBy('id_alamat', 'DESC')->findAll()
        ];

        return view('admin/dataalamat/index', $data);
    }

    public function form_create()
    {
        $data = [
            'title' => 'Tambah Alamat',
            'data_alamat' => $this->KategoriModel->findAll(),
            'validation' => \Config\Services::validation()
        ];

        return view('admin/dataalamat/create', $data);
    }

    public function create_alamat()
    {
        // Aturan validasi input
        $rules = $this->validate([
            'maps_alamat' => 'required',
        ]);

        // Jika validasi gagal
        if (!$rules) {
            session()->setFlashdata('failed', 'Data alamat Gagal Ditambahkan');
            // return redirect()->back()->withInput(); 
        }

        // jika data valid
        $this->dataAlamatModel->insert([
            'maps_alamat' => $this->request->getPost('maps_alamat'),
        ]);

        return redirect()->to(base_url('dataalamat'))->with('success', 'Data Alamat Berhasil Ditambahkan');
    }

    // ubah data alamat
    public function update($id_alamat)
    {
        // ambil slug
        $slug = url_title($this->request->getPost('maps_alamat'), '-', TRUE);

        // simpan data ke database
        $data = [
            'maps_alamat' => esc($this->request->getPost('maps_alamat')),
        ];

        $this->dataAlamatModel->update($id_alamat, $data);

        return redirect()->back()->with('success', 'Data alamat Berhasil Di ubah');
    }

    // hapus data alamat
    public function destroy($id_alamat)
    {
        $this->dataAlamatModel->where('id_alamat', $id_alamat)->delete();
        return redirect()->back()->with('success', 'Data alamat Berhasil Di hapus');
    }
}
