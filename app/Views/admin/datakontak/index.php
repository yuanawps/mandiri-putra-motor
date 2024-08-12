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
                                Data Kontak
                            </div>

                            <div class="card-body">
                                <a href="<?= base_url('datakontak/tambah') ?>" class="btn btn-primary btn-sm mb-2">
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
                                            <th>Alamat Kontak</th> 
                                            <th>Nomor Kontak</th> 
                                            <th>Jam Operasional</th> 
                                            <th>Email Kontak</th> 
                                            <th>Fungsi</th>
                                        </tr>
                                    </thead>
                                  <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($data_kontak as $kontak) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= date('d/m/Y H:i:s', strtotime($kontak->tanggal_input)); ?></td>
                                            <td ><?= $kontak->alamat_kontak; ?></td>
                                            <td ><?= $kontak->nomor_kontak; ?></td>
                                            <td ><?= $kontak->jam_operasional; ?></td>
                                            <td ><?= $kontak->email_kontak; ?></td>
                                            <td width="15%" class="text-center">
                                                <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#ubahModal<?= $kontak->id_kontak; ?>"><i class="fas
                                                fa-edit"></i> Ubah</button>

                                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $kontak->id_kontak; ?>"><i class="fas
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
<?php foreach ($data_kontak as $kontak) : ?>
<div class="modal fade" id="ubahModal<?= $kontak->id_kontak; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit"></i>Ubah Data Kontak</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('datakontak/ubah/'.$kontak->id_kontak) ?>" method="post">
            <?=csrf_field() ?>

            <input type="hidden" name="_method" value="PUT">

            <div class="mb-3">
                <label for="alamat_kontak">Alamat Kontak</label>
                <input type="text" name="alamat_kontak" id="alamat_kontak" class="form-control"value="<?=$kontak->alamat_kontak; ?>" required>
            </div>
            <div class="mb-3">
                <label for="nomor_kontak">Nomor Kontak</label>
                <input type="text" name="nomor_kontak" id="nomor_kontak" class="form-control"value="<?=$kontak->nomor_kontak; ?>" required>
            </div>
            <div class="mb-3">
                <label for="jam_operasional">Jam Operasional</label>
                <input type="text" name="jam_operasional" id="jam_operasional" class="form-control"value="<?=$kontak->jam_operasional; ?>" required>
            </div>
            <div class="mb-3">
                <label for="email_kontak">Email Kontak</label>
                <input type="text" name="email_kontak" id="email_kontak" class="form-control"value="<?=$kontak->email_kontak; ?>" required>
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
<?php foreach ($data_kontak as $kontak) : ?>
<div class="modal fade" id="hapusModal<?= $kontak->id_kontak; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-trash-alt"></i>Hapus Data Kontak</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('datakontak/hapus/'.$kontak->id_kontak) ?>" method="post">
        <input type="hidden" name="_method" value="DELETE">
            <?=csrf_field() ?>

            <p>Yakin Data Kontak : <?= $kontak->id_kontak; ?>, Akan Dihapus?</p>
       
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