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
                                Data Promosi
                            </div>

                            <div class="card-body">
                                <a href="<?= base_url('datapromosi/tambah') ?>" class="btn btn-primary btn-sm mb-2">
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
                                            <th>Judul Promosi</th>
                                            <th>Isi Promosi</th> 
                                            <th>Fungsi</th>
                                        </tr>
                                    </thead>
                                  <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($data_promosi as $promosi) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= date('d/m/Y H:i:s', strtotime($promosi->tanggal_input)); ?></td>
                                            <td ><?= $promosi->judul_promosi; ?></td>
                                            <td ><?= $promosi->isi_promosi; ?></td>
                                            <td width="15%" class="text-center">
                                                <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#ubahModal<?= $promosi->id_promosi; ?>"><i class="fas
                                                fa-edit"></i> Ubah</button>

                                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $promosi->id_promosi; ?>"><i class="fas
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
<?php foreach ($data_promosi as $promosi) : ?>
<div class="modal fade" id="ubahModal<?= $promosi->id_promosi; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit"></i>Ubah Data promosi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('datapromosi/ubah/'.$promosi->id_promosi) ?>" method="post">
            <?=csrf_field() ?>

            <input type="hidden" name="_method" value="PUT">
            <div class="mb-3">
                <label for="judul_promosi">judul promosi</label>
                <input type="text" name="judul_promosi" id="judul_promosi" class="form-control"value="<?=$promosi->judul_promosi; ?>" required>
            </div>
            <div class="mb-3">
                <label for="isi_promosi">Isi promosi</label>
                <input type="text" name="isi_promosi" id="isi_promosi" class="form-control"value="<?=$promosi->isi_promosi; ?>" required>
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
<?php foreach ($data_promosi as $promosi) : ?>
<div class="modal fade" id="hapusModal<?= $promosi->id_promosi; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-trash-alt"></i>Hapus Data Mobil</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('datapromosi/hapus/'.$promosi->id_promosi) ?>" method="post">
        <input type="hidden" name="_method" value="DELETE">
            <?=csrf_field() ?>

            <p>Yakin Data Mobil : <?= $promosi->isi_promosi; ?>, Akan Dihapus?</p>
       
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