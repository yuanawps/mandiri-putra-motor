<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\DataStatusModel;
use App\Models\DataAdminModel;

class DataStatusController extends BaseController
{
    protected $datastatusModel;
    protected $dataAdminModel;

    public function __construct()
    {
        $this->datastatusModel = new DataStatusModel();
        $this->dataAdminModel = new DataAdminModel();
    }

    //daftar hero
    public function index()
    {
        $data = [
            'title' => 'Data Status',
            'data_status' => $this->datastatusModel->orderBy('id_status', 'DESC')->findAll()
        ];

        return view('admin/datastatus/index', $data);
    }

    public function form_create()
    {
        $data = [
            'title' => 'Tambah Status',
            'data_status' => $this->datastatusModel->findAll(),
            'validation' => \Config\Services::validation()
        ];

        return view('admin/datastatus/create', $data);
    }

    public function create_status()
    {
        // Aturan validasi input
        $rules = $this->validate([
            'tanggal_input' => 'required',
            'stok_mobil' => 'required',
            'jumlah_cabang' => 'required',
            'jumlah_karyawan' => 'required',
            'unit_terjual' => 'required',
        ]);

        // Jika validasi gagal
        if (!$rules) {
            session()->setFlashdata('failed', 'Data Hero Gagal Ditambahkan');
            // return redirect()->back()->withInput(); 
        }

                    // Ambil id_admin dari sesi
        $id_admin = session()->get('id_admin');

        // jika data valid
        $this->datastatusModel->insert([
            'unit_terjual' => $this->request->getPost('unit_terjual'),
            'tanggal_input' => $this->request->getPost('tanggal_input'),
             'jumlah_cabang' => $this->request->getPost('jumlah_cabang'),
              'stok_mobil' => $this->request->getPost('stok_mobil'),
               'jumlah_karyawan' => $this->request->getPost('jumlah_karyawan'),
               'id_admin' => $id_admin
        ]);

        return redirect()->to(base_url('datastatus'))->with('success', 'Data hero Berhasil Ditambahkan');
    }

    // Ubah data status
    public function update($id_status)
    {
        // Simpan data ke database
        $data = [
            'stok_mobil' => esc($this->request->getPost('stok_mobil')),
            'jumlah_cabang' => esc($this->request->getPost('jumlah_cabang')),
            'jumlah_karyawan' => esc($this->request->getPost('jumlah_karyawan')),
            'unit_terjual' => esc($this->request->getPost('unit_terjual')),
        ];

        $this->datastatusModel->update($id_status, $data);

        return redirect()->back()->with('success', 'Data status Berhasil Diubah');
    }

    // hapus data hero
    public function destroy($id_status)
    {
        $this->datastatusModel->where('id_status', $id_status)->delete();
        return redirect()->back()->with('success', 'Data Hero Berhasil Di hapus');
    }
}
