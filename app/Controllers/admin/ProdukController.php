<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProdukModel;
use App\Models\DataAdminModel;

class ProdukController extends BaseController
{

    protected $dataAdminModel;
    protected $produkModel;

        public function __construct()
    {
        $this->dprodukModel = new ProdukModel();
        $this->dataAdminModel = new DataAdminModel();
    }

    //daftar produk
    public function index()
    {
        $data = [
            'title'=> 'Data Mobil',
            'produk'=> $this->ProdukModel->orderBy('id_produk', 'DESC')->findAll()
        ];

        return view ('admin/produk/index', $data);
    }

    public function form_create()
    {
        $data = [
            'title'      =>'Tambah Data Mobil',
            'kategori_produk' => $this->KategoriModel->findAll(),
            'validation' => \Config\Services::validation()
        ];

        return view('admin/produk/create', $data);
    }

    public function create_produk()
        {
            // Aturan validasi input
            $rules = $this->validate([
            'nama_produk'       => 'required',
            'deskripsi_produk'  => 'required',
            'harga_produk'      => 'required',
            'gambar_produk'     => 'uploaded[gambar_produk]|is_image[gambar_produk]|mime_in[gambar_produk,image/jpg,image/jpeg,image/png]',
            'tanggal_input'     => 'required',
            ]);

            // Jika validasi gagal
            if (!$rules) {
               session()->setFlashdata('failed', 'Data Produk Gagal Ditambahkan');
            //    return redirect()->back()->withInput();
            }

             // ambil file
            $gambar = $this->request->getFile('gambar_produk');

            //ambil random
            $namaGambar = $gambar->getRandomName();

            //pindahkan file
            $gambar->move(WRITEPATH. '../public/asset-admin/img/', $namaGambar);

                    // Ambil id_admin dari sesi
        $id_admin = session()->get('id_admin');

             // jika data valid
            $this->ProdukModel->insert([
                'nama_produk' => $this->request->getPost('nama_produk'),
                'kategori_slug' => $this->request->getPost('kategori_slug'),
                'deskripsi_produk' => $this->request->getPost('deskripsi_produk'),
                'harga_produk' => $this->request->getPost('harga_produk'),
                'tanggal_input' => $this->request->getPost('tanggal_input'),
                'gambar_produk' => $namaGambar,
                'id_admin' => $id_admin
            ]);
             
            return redirect()->to(base_url('daftar-produk'))->with('success', 'Data Produk Berhasil Ditambahkan');
        }

            // ubah data mobil
    public function update($id_produk)
    {
         // ambil slug
        $slug = url_title($this->request->getPost('nama_produk'), '-', TRUE);
        $slug = url_title($this->request->getPost('harga_produk'), '-', TRUE);
        $slug = url_title($this->request->getPost('deskripsi_produk'), '-', TRUE);

        // simpan data ke database
        $data = [
            'nama_produk' => esc( $this->request->getPost('nama_produk')),
            'harga_produk' => esc( $this->request->getPost('harga_produk')),
            'deskripsi_produk' => esc( $this->request->getPost('deskripsi_produk')),
            'kategori_slug' => $slug
        ];

        $this->ProdukModel->update($id_produk, $data);

        return redirect()->back()->with('success', 'Data produk Produk Berhasil Di ubah');
    }

        // hapus data mobil
    public function destroy($id_produk)
    {
        $this->ProdukModel->where('id_produk', $id_produk)->delete();
        return redirect()->back()->with('success', 'Data Mobil Berhasil Di hapus');
    }
} 
