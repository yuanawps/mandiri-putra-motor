<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content'); ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"><?= $title; ?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active"><?= $title; ?></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                               <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Mobil
                            </div>

                            <div class="card-body">
                                <a href="<?= base_url('daftar-produk/tambah') ?>" class="btn btn-primary btn-sm mb-2">
                                <i class="fas fa-plus"></i>Tambah
                                </a>

                                <!-- Notifikasi berhasil -->
                                <?php if(session('success')) : ?>
                                    <div class="alert alert-success" role="alert">
                                    <?= session('success') ?>
                                </div>
                                <?php endif; ?>
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal Input</th>
                                            <th>Nama Mobil</th>
                                            <th>Gambar</th>
                                            <th>Tipe Mobil</th>
                                            <th>Harga Mobil</th>   
                                            <th>Fungsi</th>
                                        </tr>
                                    </thead>
                                  <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($produk as $p) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= date('d/m/Y H:i:s', strtotime($p->tanggal_input)); ?></td>
                                            <td ><?= $p->nama_produk; ?></td>
                                            <td><img src="<?= base_url('asset-admin/img/' . $p->gambar_produk) ?>" alt="Foto Berita" style="max-width: 100px; max-height: 100px;"></td>
                                            <td><?= $p->deskripsi_produk; ?></td>
                                            <td><?= $p->harga_produk; ?></td>
                                            <td width="15%" class="text-center">
                                                <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#ubahModal<?= $p->id_produk; ?>"><i class="fas
                                                fa-edit"></i> Ubah</button>

                                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $p->id_produk; ?>"><i class="fas
                                                fa-trash-alt"></i> Hapus</button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                  </tbody>
                                </table>
                                
                            </div>
                        </div>
                            </div>
                        </div>
                     </div>
                </main>

                <!-- Modal Ubah -->
<?php foreach ($produk as $p) : ?>
<div class="modal fade" id="ubahModal<?= $p->id_produk; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit"></i>Ubah produk Produk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('daftar-produk/ubah/'.$p->id_produk) ?>" method="post">
            <?=csrf_field() ?>

            <input type="hidden" name="_method" value="PUT">

            <div class="mb-3">
                <label for="nama_produk">Nama produk</label>
                <input type="text" name="nama_produk" id="nama_produk" class="form-control"value="<?=$p->nama_produk; ?>" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi_produk">Deskripsi produk</label>
                <input type="text" name="deskripsi_produk" id="deskripsi_produk" class="form-control"value="<?=$p->deskripsi_produk; ?>" required>
            </div>
            <div class="mb-3">
                <label for="harga_produk">Harga produk</label>
                <input type="text" name="harga_produk" id="harga_produk" class="form-control"value="<?=$p->harga_produk; ?>" required>
            </div>
       
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary btn-sm">Ubah</button>
            </div>
       </form>
    </div>
  </div>
</div>
<?php endforeach ?>


<!-- Modal Hapus -->
<?php foreach ($produk as $p) : ?>
<div class="modal fade" id="hapusModal<?= $p->id_produk; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-trash-alt"></i>Hapus Data Mobil</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('daftar-produk/hapus/'.$p->id_produk) ?>" method="post">
        <input type="hidden" name="_method" value="DELETE">
            <?=csrf_field() ?>

            <p>Yakin Data Mobil : <?= $p->nama_produk; ?>, Akan Dihapus?</p>
       
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
            </div>
       </form>
    </div>
  </div>
</div>
<?php endforeach ?>
                

<?= $this->endsection() ?>