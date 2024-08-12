<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\DataKontakModel;
use App\Models\DataAdminModel;

class DataKontakController extends BaseController
{
    protected $dataKontakModel;
    protected $dataAdminModel;

    public function __construct()
    {
        $this->dataKontakModel = new DataKontakModel();
        $this->dataAdminModel = new DataAdminModel();
    }

    //daftar hero
    public function index()
    {
        $data = [
            'title' => 'Data Kontak',
            'data_kontak' => $this->dataKontakModel->orderBy('id_kontak', 'DESC')->findAll()
        ];

        return view('admin/datakontak/index', $data);
    }

    public function form_create()
    {
        $data = [
            'title' => 'Tambah Kontak',
            'data_kontak' => $this->dataKontakModel->findAll(),
            'validation' => \Config\Services::validation()
        ];

        return view('admin/datakontak/create', $data);
    }

    public function create_kontak()
    {
        // Aturan validasi input
        $rules = $this->validate([
            'email_kontak' => 'required',
            'alamat_kontak' => 'required',
            'nomor_kontak' => 'required',
            'jam_operasional' => 'required',
            'tanggal_input' => 'required',
        ]);

        // Jika validasi gagal
        if (!$rules) {
            session()->setFlashdata('failed', 'Data Hero Gagal Ditambahkan');
            // return redirect()->back()->withInput(); 
        }

                            // Ambil id_admin dari sesi
        $id_admin = session()->get('id_admin');

        // jika data valid
        $this->dataKontakModel->insert([
            'tanggal_input' => $this->request->getPost('tanggal_input'),
            'email_kontak' => $this->request->getPost('email_kontak'),
             'nomor_kontak' => $this->request->getPost('nomor_kontak'),
              'alamat_kontak' => $this->request->getPost('alamat_kontak'),
               'jam_operasional' => $this->request->getPost('jam_operasional'),
               'id_admin' => $id_admin
        ]);

        return redirect()->to(base_url('datakontak'))->with('success', 'Data hero Berhasil Ditambahkan');
    }

    // Ubah data kontak
    public function update($id_kontak)
    {
        // Ambil slug
        $slug = url_title($this->request->getPost('email_kontak'), '-', TRUE);

        // Simpan data ke database
        $data = [
            'email_kontak' => esc($this->request->getPost('email_kontak')),
            'nomor_kontak' => esc($this->request->getPost('nomor_kontak')),
            'jam_operasional' => esc($this->request->getPost('jam_operasional')),
            'alamat_kontak' => esc($this->request->getPost('alamat_kontak')),
        ];

        $this->dataKontakModel->update($id_kontak, $data);

        return redirect()->back()->with('success', 'Data kontak Berhasil Diubah');
    }

    // hapus data hero
    public function destroy($id_kontak)
    {
        $this->dataKontakModel->where('id_kontak', $id_kontak)->delete();
        return redirect()->back()->with('success', 'Data Hero Berhasil Di hapus');
    }
}
