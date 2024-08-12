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
                                Data Tentang
                            </div>

                            <div class="card-body">
                                <a href="<?= base_url('dataabout/tambah') ?>" class="btn btn-primary btn-sm mb-2">
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
                                            <th>Isi</th>
                                            <th>Nomor Kontak</th>
                                            <th>Foto</th>
                                            <th>Video</th> 
                                            <th>Fungsi</th>
                                        </tr>
                                    </thead>
                                  <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($data_about as $about) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= date('d/m/Y H:i:s', strtotime($about->tanggal_input)); ?></td>
                                            <td ><?= $about->isi_about; ?></td>
                                            <td ><?= $about->no_kontak; ?></td>
                                            <td><img src="<?= base_url('asset-admin/img/' . $about->foto_about) ?>" alt="Foto Berita" style="max-width: 100px; max-height: 100px;"></td>
                                            <td ><?= $about->video_about; ?></td>
                                            <td width="15%" class="text-center">
                                                <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#ubahModal<?= $about->id_about; ?>"><i class="fas
                                                fa-edit"></i> Ubah</button>

                                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $about->id_about; ?>"><i class="fas
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
<?php foreach ($data_about as $about) : ?>
<div class="modal fade" id="ubahModal<?= $about->id_about; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit"></i>Ubah Data Tentang</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('dataabout/ubah/'.$about->id_about) ?>" method="post">
            <?=csrf_field() ?>

            <input type="hidden" name="_method" value="PUT">

            <div class="mb-3">
                <label for="isi_about">Isi</label>
                <input type="text" name="isi_about" id="isi_about" class="form-control"value="<?=$about->isi_about; ?>" required>
            </div>
            <div class="mb-3">
                <label for="no_kontak">Nomor Kontak</label>
                <input type="text" name="no_kontak" id="no_kontak" class="form-control"value="<?=$about->no_kontak; ?>" required>
            </div>
            <div class="mb-3">
                <label for="video_about">Video Tentang</label>
                <input type="text" name="video_about" id="video_about" class="form-control"value="<?=$about->video_about; ?>" required>
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
<?php foreach ($data_about as $about) : ?>
<div class="modal fade" id="hapusModal<?= $about->id_about; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-trash-alt"></i>Hapus Data Mobil</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('dataabout/hapus/'.$about->id_about) ?>" method="post">
        <input type="hidden" name="_method" value="DELETE">
            <?=csrf_field() ?>

            <p>Yakin Data Mobil : <?= $about->isi_about; ?>, Akan Dihapus?</p>
       
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