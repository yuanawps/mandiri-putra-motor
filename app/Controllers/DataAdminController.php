<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DataAdminModel;
use CodeIgniter\HTTP\ResponseInterface;

class DataAdminController extends BaseController
{
    protected $dataAdminModel;

    public function __construct()
    {
        $this->dataAdminModel = new DataAdminModel();
    }

    // Daftar data admin
    public function index()
    {
        $data = [
            'title' => 'Data Admin',
            'data_admin' => $this->dataAdminModel->orderBy('id_admin', 'DESC')->findAll()
        ];

        return view('admin/dataadmin/index', $data);
    }

    public function form_create()
    {
        $data = [
            'title' => 'Tambah Admin',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/dataadmin/create', $data);
    }

    public function create_status()
    {
        // Aturan validasi input
        $rules = $this->validate([
            'tanggal_input' => 'required',
            'nama_admin' => 'required',
            'email_admin' => 'required|valid_email',
            'password' => 'required|min_length[6]',
        ]);

        // Jika validasi gagal
        if (!$rules) {
            session()->setFlashdata('failed', 'Data Admin Gagal Ditambahkan');
            return redirect()->back()->withInput();
        }

        // Ambil id_admin dari sesi
        $id_admin = session()->get('id_admin');

        // jika data valid
        $this->dataAdminModel->insert([
            'tanggal_input' => $this->request->getPost('tanggal_input'),
            'nama_admin' => $this->request->getPost('nama_admin'),
            'email_admin' => $this->request->getPost('email_admin'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'id_admin' => $id_admin
        ]);

        return redirect()->to(base_url('dataadmin'))->with('success', 'Data admin Berhasil Ditambahkan');
    }

    // Ubah data admin
    public function update($id_admin)
    {
        $nama_admin = $this->request->getPost('nama_admin');
        $email_admin = $this->request->getPost('email_admin');
        $password = $this->request->getPost('password');

        // Periksa jika nilai-nilai tidak null sebelum membuat slug
        if ($nama_admin !== null && $email_admin !== null && $password !== null) {
            // ambil slug
            $slug = url_title($nama_admin, '-', TRUE);
        } else {
            $slug = '';
        }

        // Simpan data ke database
        $data = [
            'nama_admin' => esc($nama_admin),
            'email_admin' => esc($email_admin),
            'password' => password_hash(esc($password), PASSWORD_DEFAULT),
            'kategori_slug' => $slug
        ];

        $this->dataAdminModel->update($id_admin, $data);

        return redirect()->back()->with('success', 'Data Admin Berhasil Diubah');
    }

    // Hapus data admin
    public function destroy($id_admin)
    {
        $this->dataAdminModel->where('id_admin', $id_admin)->delete();
        return redirect()->back()->with('success', 'Data Admin Berhasil Dihapus');
    }
}
