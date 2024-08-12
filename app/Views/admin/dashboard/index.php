<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h2 class="mt-3 text-center">Dashboard Admin Mandiri Putra Motor</h2>
                <ol class="breadcrumb mb-4"></ol>
                <div class="d-flex justify-content-center">
                    <div class="card" style="max-width: 600px; width: 100%;">
                        <div class="card-body text-center">
                            <img src="<?= base_url('assets/img/logo.png') ?>" alt="Deskripsi Gambar" class="img-fluid" style="max-width: 37%; height: auto;">
                            <p class="mt-3" style="text-align: justify;">Mandiri Putra Motor merupakan perusahaan dealer mobil yang menjual mobil baru dan bekas, termasuk merek terkenal seperti Toyota, Suzuki, Nissan, Daihatsu, dan Honda. Melayani baik konsumen perorangan maupun perusahaan atau institusi tertentu, Mandiri Putra Motor menawarkan berbagai layanan tambahan seperti tukar tambah mobil dan over kredit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
<?= $this->endSection() ?>
