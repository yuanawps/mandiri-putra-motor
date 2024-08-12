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
                                Data Hero
                            </div>

                            <div class="card-body">
                                <a href="<?= base_url('datahero/tambah') ?>" class="btn btn-primary btn-sm mb-2">
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
                                            <th>Konten</th>
                                            <th>Foto</th>
                                            <th>Video</th> 
                                            <th>Fungsi</th>
                                        </tr>
                                    </thead>
                                  <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($data_hero as $hero) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= date('d/m/Y H:i:s', strtotime($hero->tanggal_input)); ?></td>
                                            <td ><?= $hero->konten_hero; ?></td>
                                            <td><img src="<?= base_url('asset-admin/img/' . $hero->foto_hero) ?>" alt="Foto Berita" style="max-width: 100px; max-height: 100px;"></td>
                                            <td ><?= $hero->video_hero; ?></td>
                                            <td width="15%" class="text-center">
                                                <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#ubahModal<?= $hero->id_hero; ?>"><i class="fas
                                                fa-edit"></i> Ubah</button>

                                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $hero->id_hero; ?>"><i class="fas
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
<?php foreach ($data_hero as $hero) : ?>
<div class="modal fade" id="ubahModal<?= $hero->id_hero; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit"></i>Ubah Data Hero</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('datahero/ubah/'.$hero->id_hero) ?>" method="post">
            <?=csrf_field() ?>

            <input type="hidden" name="_method" value="PUT">

            <div class="mb-3">
                <label for="konten_hero">Nama hero</label>
                <input type="text" name="konten_hero" id="konten_hero" class="form-control"value="<?=$hero->konten_hero; ?>" required>
            </div>
            <div class="mb-3">
                <label for="video_hero">video hero</label>
                <input type="text" name="video_hero" id="video_hero" class="form-control"value="<?=$hero->video_hero; ?>" required>
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
<?php foreach ($data_hero as $hero) : ?>
<div class="modal fade" id="hapusModal<?= $hero->id_hero; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-trash-alt"></i>Hapus Data Hero</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('datahero/hapus/'.$hero->id_hero) ?>" method="post">
        <input type="hidden" name="_method" value="DELETE">
            <?=csrf_field() ?>

            <p>Yakin Data Hero : <?= $hero->konten_hero; ?>, Akan Dihapus?</p>
       
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