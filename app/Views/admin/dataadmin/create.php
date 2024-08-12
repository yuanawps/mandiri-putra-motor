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
                                Tambah Data admin
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
                                
                              <form action="<?= base_url('dataadmin/create-dataadmin'); ?>" method="post" enctype="multipart/form-data">
                                <?= csrf_field(); ?>

                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <label for="nama_admin">nama admin</label>
                                        <input type="text" name="nama_admin" id="nama_admin"
                                        class="form-control <?= $validation->hasError('nama_admin') ? 'is-invalid' : null ?>"required>
                                        
                                        <?php if($validation->hasError('nama_admin')) :?>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nama_admin'); ?>
                                        </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="mb-3 col-6">
                                        <label for="email_admin">email admin</label>
                                        <input type="text" name="email_admin" id="email_admin"
                                        class="form-control <?= $validation->hasError('email_admin') ? 'is-invalid' : null ?>"required>
                                        
                                        <?php if($validation->hasError('email_admin')) :?>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('email_admin'); ?>
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
        const gambar = document.querySelector('foto_about');
        const imgPreview = document.querySelector('.preview-img');

        const fileGambar = new FileReader();
        fileGambar.readAsDataURL(gambar.files[0]);

        fileGambar.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>
<?=$this->endSection(); ?>