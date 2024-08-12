<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\DataAdminModel;

class AdminController extends BaseController
{
    protected $dataAdminModel;

    public function __construct()
    {
        $this->dataAdminModel = new DataAdminModel();
    }

    public function index()
    {
        return view('admin/login');
    }

    public function login()
    {
        $session = session();
        $username = $this->request->getPost('nama_admin');
        $password = $this->request->getPost('password');

        // Cari admin berdasarkan nama pengguna
        $admin = $this->dataAdminModel->where('nama_admin', $username)->first();

        if ($admin) {
            // Verifikasi password menggunakan password_verify
            if (password_verify($password, $admin->password)) {
                // Set session untuk admin yang berhasil login
                $session->set([
                    'id_admin' => $admin->id_admin,
                    'nama_admin' => $admin->nama_admin,
                    'logged_in' => true,
                ]);
                return redirect()->to('/dashboard');
            } else {
                // Password tidak valid
                $session->setFlashdata('error', 'Invalid Password');
            }
        } else {
            // Pengguna tidak ditemukan
            $session->setFlashdata('error', 'Username not found');
        }

        return redirect()->back()->withInput();
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
