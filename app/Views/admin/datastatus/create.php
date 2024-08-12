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
                                Tambah Data Status
                            </div>

                            <div class="card-body">

                                <!-- Notifikasi berhasil tambah produk-->
                                <?php if(session('success')) : ?>
                                    <div class="alert alert-success" role="alert">
                                    <?= session('success') ?>
                                </div>
                                <?php endif; ?>

                                <!-- Notifikasi gagal tambah produk-->
                                <?php if(session('failed')) : ?>
                                    <div class="alert alert-danger" role="alert">
                                    <?= session('failed') ?>
                                </div>
                                <?php endif; ?>
                                
                              <form action="<?= base_url('datastatus/create-datastatus'); ?>" method="post" enctype="multipart/form-data">
                                <?= csrf_field(); ?>

                                <div class="row">
                                <div class="mb-3 col-6">
                                        <label for="stok_mobil">Stok Mobil</label>
                                        <input type="text" name="stok_mobil" id="stok_mobil"
                                        class="form-control <?= $validation->hasError('stok_mobil') ? 'is-invalid' : null ?>"required>
                                        
                                        <?php if($validation->hasError('stok_mobil')) :?>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('stok_mobil'); ?>
                                        </div>
                                        <?php endif; ?>
                                </div>
                                <div class="mb-3 col-6">
                                        <label for="jumlah_cabang">Jumlah Cabang</label>
                                        <input type="text" name="jumlah_cabang" id="jumlah_cabang"
                                        class="form-control <?= $validation->hasError('jumlah_cabang') ? 'is-invalid' : null ?>"required>
                                        
                                        <?php if($validation->hasError('jumlah_cabang')) :?>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('jumlah_cabang'); ?>
                                        </div>
                                        <?php endif; ?>
                                </div>
                                <div class="mb-3 col-6">
                                        <label for="jumlah_karyawan">Jumlah Karyawan</label>
                                        <input type="text" name="jumlah_karyawan" id="jumlah_karyawan"
                                        class="form-control <?= $validation->hasError('jumlah_karyawan') ? 'is-invalid' : null ?>"required>
                                        
                                        <?php if($validation->hasError('jumlah_karyawan')) :?>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('jumlah_karyawan'); ?>
                                        </div>
                                        <?php endif; ?>
                                </div>
                                <div class="mb-3 col-6">
                                        <label for="unit_terjual">Unit Terjual</label>
                                        <input type="text" name="unit_terjual" id="unit_terjual"
                                        class="form-control <?= $validation->hasError('unit_terjual') ? 'is-invalid' : null ?>"required>
                                        
                                        <?php if($validation->hasError('unit_terjual')) :?>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('unit_terjual'); ?>
                                        </div>
                                        <?php endif; ?>
                                </div>

                                <div class="justify-content-end d-flex">
                                    <button class="btn btn-primary btn-sm">Tambah</button>
                                </div>
                              </form>
                            </div>
                        </div>
                            </div>
                        </div>
                     </div>
                </main>
            </div>
<?= $this->endsection() ?>

<?= $this->Section('script');?>
<script>
    function previewImg() {
        const gambar = document.querySelector('foto_status');
        const imgPreview = document.querySelector('.preview-img');

        const fileGambar = new FileReader();
        fileGambar.readAsDataURL(gambar.files[0]);

        fileGambar.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>
<?=$this->endSection(); ?>