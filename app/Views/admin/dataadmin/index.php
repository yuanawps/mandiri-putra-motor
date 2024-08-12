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
                                Data Admin
                            </div>

                            <div class="card-body">
                                <a href="<?= base_url('dataadmin/tambah') ?>" class="btn btn-primary btn-sm mb-2">
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
                                            <th>Nama Admin</th>
                                            <th>Email Admin</th>
                                            <th>Fungsi</th>
                                        </tr>
                                    </thead>
                                  <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($data_admin as $admin) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td ><?= $admin->nama_admin; ?></td>
                                            <td ><?= $admin->email_admin; ?></td>
                                            <td width="15%" class="text-center">
                                              <div class="flex flex-col justify-center items-center space-y-2 h-full">
                                                  <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#ubahModal<?= $admin->id_admin; ?>">
                                                      <i class="fas fa-edit"></i> Ubah
                                                  </button>

                                                  <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $admin->id_admin; ?>">
                                                      <i class="fas fa-trash-alt"></i> Hapus
                                                  </button>
                                              </div>
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
<?php foreach ($data_admin as $admin) : ?>
<div class="modal fade" id="ubahModal<?= $admin->id_admin; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit"></i>Ubah Data Admin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('dataadmin/ubah/'.$admin->id_admin) ?>" method="post">
            <?=csrf_field() ?>

            <input type="hidden" name="_method" value="PUT">

            <div class="mb-3">
                <label for="nama_admin">Nama Admin</label>
                <input type="text" name="nama_admin" id="nama_admin" class="form-control"value="<?=$admin->nama_admin; ?>" required>
            </div>

            <div class="mb-3">
                <label for="email_admin">Email Admin</label>
                <input type="text" name="email_admin" id="email_admin" class="form-control"value="<?=$admin->email_admin; ?>" required>
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
<?php foreach ($data_admin as $admin) : ?>
<div class="modal fade" id="hapusModal<?= $admin->id_admin; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-trash-alt"></i>Hapus Data Admin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('dataadmin/hapus/'.$admin->id_admin) ?>" method="post">
        <input type="hidden" name="_method" value="DELETE">
            <?=csrf_field() ?>

            <p>Yakin Data Admin : <?= $admin->nama_admin; ?>, Akan Dihapus?</p>
       
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