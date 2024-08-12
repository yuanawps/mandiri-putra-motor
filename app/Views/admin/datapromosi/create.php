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
                                Tambah Data Promosi
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
                                
                              <form action="<?= base_url('datapromosi/create-datapromosi'); ?>" method="post" enctype="multipart/form-data">
                                <?= csrf_field(); ?>

                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <label for="judul_promosi">Judul promosi</label>
                                        <input type="text" name="judul_promosi" id="judul_promosi"
                                        class="form-control <?= $validation->hasError('judul_promosi') ? 'is-invalid' : null ?>"required>
                                        
                                        <?php if($validation->hasError('judul_promosi')) :?>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('judul_promosi'); ?>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="isi_promosi">isi promosi</label>
                                        <input type="text" name="isi_promosi" id="isi_promosi"
                                        class="form-control <?= $validation->hasError('isi_promosi') ? 'is-invalid' : null ?>"required>
                                        
                                        <?php if($validation->hasError('isi_promosi')) :?>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('isi_promosi'); ?>
                                        </div>
                                        <?php endif; ?>
                                    </div>
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
<?=$this->endSection(); ?>