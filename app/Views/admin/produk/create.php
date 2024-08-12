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
                                Tambah Data Mobil
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
                                
                              <form action="<?= base_url('daftar-produk/create-produk'); ?>" method="post" enctype="multipart/form-data">
                                <?= csrf_field(); ?>

                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <label for="nama_produk">Nama Produk </label>
                                        <input type="text" name="nama_produk" id="nama_produk"
                                        class="form-control <?= $validation->hasError('nama_produk') ? 'is-invalid' : null ?>"required>
                                        
                                        <?php if($validation->hasError('nama_produk')) :?>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nama_produk'); ?>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="deskripsi_produk">Deskripsi Produk</label>
                                        <textarea name="deskripsi_produk" id="deskripsi_produk" cols="30" rpws="10" class="form-control <?= $validation->hasError('deskripsi_produk') ? 'is-invalid' : null ?>"></textarea>
                                        <?php if($validation->hasError('deskripsi_produk')) :?>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('deskripsi_produk'); ?>
                                        </div>
                                        <?php endif; ?>
                                </div>
                                <div class="mb-3">
                                        <label for="harga_produk">Harga Produk</label>
                                        <input type="text" name="harga_produk" id="harga_produk" class="form-control ">
                                </div>
                                </div>
                                <div class="mb-3">
                                        <label for="gambar_produk">Gambar Produk</label>
                                        <input type="file" name="gambar_produk" id="gambar_produk" class="form-control 
                                        <?=$validation->hasError('gambar_produk') ? 'is-invalid' : null ?>" onchange="previewImg()">
                                
                                        <?php if($validation->hasError('gambar_produk')) :?>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('gambar_produk'); ?>
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
        const gambar = document.querySelector('gambar_produk');
        const imgPreview = document.querySelector('.preview-img');

        const fileGambar = new FileReader();
        fileGambar.readAsDataURL(gambar.files[0]);

        fileGambar.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>
<?=$this->endSection(); ?>