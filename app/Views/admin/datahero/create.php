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
                                Tambah Data Hero
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
                                
                              <form action="<?= base_url('datahero/create-datahero'); ?>" method="post" enctype="multipart/form-data">
                                <?= csrf_field(); ?>

                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <label for="konten_hero">Konten Hero</label>
                                        <input type="text" name="konten_hero" id="konten_hero"
                                        class="form-control <?= $validation->hasError('konten_hero') ? 'is-invalid' : null ?>"required>
                                        
                                        <?php if($validation->hasError('konten_hero')) :?>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('konten_hero'); ?>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="video_hero">Video Hero</label>
                                        <textarea name="video_hero" id="video_hero" cols="30" rpws="10" class="form-control <?= $validation->hasError('video_hero') ? 'is-invalid' : null ?>"></textarea>
                                        <?php if($validation->hasError('video_hero')) :?>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('video_hero'); ?>
                                        </div>
                                        <?php endif; ?>
                                </div>
                                </div>
                                <div class="mb-3">
                                        <label for="foto_hero">Foto Hero</label>
                                        <input type="file" name="foto_hero" id="foto_hero" class="form-control 
                                        <?=$validation->hasError('foto_hero') ? 'is-invalid' : null ?>" onchange="previewImg()">
                                
                                        <?php if($validation->hasError('foto_hero')) :?>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('foto_hero'); ?>
                                        </div>
                                        <?php endif; ?>
                                        <img src="" alt="" class="preview-img mt-2" width="100px">
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
        const gambar = document.querySelector('foto_hero');
        const imgPreview = document.querySelector('.preview-img');

        const fileGambar = new FileReader();
        fileGambar.readAsDataURL(gambar.files[0]);

        fileGambar.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>
<?=$this->endSection(); ?>