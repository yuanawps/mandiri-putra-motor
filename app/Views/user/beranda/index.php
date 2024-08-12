<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mandiri Putra Motor</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/img/logo.png') ?>" rel="icon">
  <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
4
  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/css/main.css') ?>" rel="stylesheet">

  <!-- Custom CSS for smaller search section -->
  <style>
    .search-form {
      display: flex;
      align-items: center;
      gap: 5px;
    }

    .search-form input {
      width: 120px; /* Perkecil lebar input */
      padding: 2px 5px;
      font-size: 12px; /* Perkecil ukuran font */
    }

    .search-form button {
      padding: 2px 10px;
      font-size: 12px; /* Perkecil ukuran font */
    }

    .navbar-custom {
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: 100%;
    }

    .navbar-links {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .navbar-right {
      display: flex;
      align-items: center;
      gap: 10px;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <img src="assets/img/logo.png" width="150" height="150">
      </a>

      <nav id="navbar" class="navbar navbar-custom">
        <ul class="navbar-links">
          <li><a href="#hero">Beranda</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#menu">Daftar Mobil</a></li>
          <li><a href="#gallery">Showroom</a></li>
          <li><a href="#contact">Kontak</a></li>
          <li><a href="#book-a-table">Alamat</a></li>
        </ul>
      </nav>
     
<style>
    .btn-book-a-table,
    .navbar-right {
        margin-right: 13px; /* Atur margin kanan sesuai kebutuhan */
    }
</style>

<!-- Bagian pertama -->
<a class="btn-book-a-table" href="login">Login</a>
<i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
<i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

<!-- Bagian kedua -->
<div class="navbar-right">
    <form class="d-flex search-form" action="search_results.php" method="post">
    <input class="form-control form-control-sm me-2" type="search" placeholder="Cari" name="keyword" aria-label="Search">
    <button class="btn btn-outline-success btn-sm" type="submit">Cari</button>
  </form>
  <!-- Bagian dalam loop foreach untuk menampilkan hasil pencarian -->
<?php if (!empty($search_results)) : ?>
    <?php foreach ($search_results as $result) : ?>
        <!-- Tampilkan data hasil pencarian sesuai dengan struktur HTML Anda -->
        <div>
            <h4><?= $result->nama_field; ?></h4>
            <p><?= $result->deskripsi_field; ?></p>
            <!-- Tambahkan lebih banyak konten yang ingin Anda tampilkan -->
        </div>
    <?php endforeach; ?>
<?php else : ?>
    
<?php endif; ?>
</div>

  </header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
        <?php if (!empty($data_hero)) : ?>
            <?php foreach ($data_hero as $hero) : ?>
                <div class="row justify-content-between gy-5">
                    <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                        <h2 data-aos="fade-up">MANDIRI PUTRA MOTOR<br>FOR YOUR TRANSPORTATION</h2>
                        <p data-aos="fade-up" data-aos-delay="100"><?= $hero->konten_hero; ?></p>
                        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                            <a href="https://wa.me/6287861405673?text=Halo,%20saya%20tertarik%20dengan%20layanan%20Anda." class="btn-book-a-table">Hubungi WhatsApp Kami</a>
                            <a href="<?= $hero->video_hero; ?>" class="glightbox btn-watch-video d-flex align-items-center">
                                <i class="bi bi-play-circle"></i><span>Watch Video</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                        <img src="<?= base_url('asset-admin/img/' . $hero->foto_hero) ?>" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="400">
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="col-md-12">
                <p>Tidak ada data hero yang tersedia.</p>
            </div>
        <?php endif; ?>
    </div>
</section>
<!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Tentang Kami</h2>
          <p>MANDIRI PUTRA <span>MOTOR</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/about4.png) ;">
            <div class="call-us position-absolute">
              <h4>Hubungi Kami</h4>
              <p>+62-878-6140-5673</p>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic justify-text">
        Mandiri Putra Motor, dealer mobil bekas di Banjar, menawarkan berbagai merek mobil seperti Toyota, Suzuki, Nissan,
        Daihatsu, Honda, dan lainnya.
    </p>
    <ul class="justify-text">
        <li><i class="bi bi-check2-all"></i> Mandiri Putra Motor (MPM) menyediakan berbagai tipe mobil bekas di bawah 50 juta dan 100 juta.</li>
        <li><i class="bi bi-check2-all"></i> Setiap mobil yang dijual di MPM telah melalui pengecekan kualitas untuk memastikan kondisi prima, dilengkapi dengan
        surat-surat lengkap dan pajak baru.</li>
        <li><i class="bi bi-check2-all"></i> Anda dapat memilih untuk membayar tunai atau menggunakan opsi kredit dengan potongan harga dan DP ringan.</li>
    </ul>
    <p class="justify-text">
        Kunjungi Mandiri Putra Motor untuk mobil yang Anda butuhkan. Hubungi kami untuk informasi lebih lanjut tentang
        spesifikasi, over kredit, tukar tambah, dan lainnya.
    </p>

              <div class="position-relative mt-4">
                <img src="assets/img/about3.png" class="img-fluid" alt="">
                <a href="https://youtu.be/L0uGuatEcDk?si=K67wEDjAVO7l5Ece" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
<!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Kenapa Harus MPM?</h3>
              <p>
                MPM menonjol dalam menyediakan layanan yang tidak hanya ramah, tetapi juga profesional. Tim kami siap membantu Anda
                dengan berbagai informasi yang Anda perlukan, mulai dari spesifikasi mobil hingga proses over kredit dan tukar tambah.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-center">
            <div class="row gy-4">

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4>Harga Terjangkau</h4>
                  <p>MPM menawarkan harga yang kompetitif, dengan opsi mobil yang tersedia dengan harga di bawah 50 juta dan 100
                  juta</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>Pilihan Lengkap</h4>
                  <p>Dari Toyota, Suzuki, Nissan, Daihatsu, hingga Honda, MPM memiliki beragam merek mobil yang dapat dipilih sesuai
                  kebutuhan</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4>Kualitas Terjamin</h4>
                  <p>Setiap mobil yang dijual oleh MPM telah melalui pengecekan kualitas untuk memastikan kondisi prima</p>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->
<!-- ======= Stats Counter Section ======= -->
<section id="stats-counter" class="stats-counter">
  <div class="container" data-aos="zoom-out">

    <div class="row gy-4">
      <?php if (!empty($data_status)) : ?>
        <?php foreach ($data_status as $status) : ?>
          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="<?= $status->stok_mobil ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Stok Mobil</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="<?= $status->jumlah_cabang ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Cabang Showroom</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="<?= $status->jumlah_karyawan ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Jumlah Karyawan</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="<?= $status->unit_terjual ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Unit Terjual</p>
            </div>
          </div><!-- End Stats Item -->

        <?php endforeach; ?>
      <?php else : ?>
        <div class="col-md-12">
          <p>Tidak ada data status yang tersedia.</p>
        </div>
      <?php endif; ?>
    </div>

  </div>
</section>


    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Stok Mobil</h2>
          <p>Cek Stok <span>Mobil Kami</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4>1</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
              <h4>2</h4>
            </a><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
              <h4>3</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
              <h4>4</h4>
            </a>
          </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
          
          <!-- Menu Starters -->
          <div class="tab-pane fade active show" id="menu-starters">
            <div class="tab-header text-center">
            </div>
            <div class="row gy-5">
              <?php $count = 0; ?>
              <?php foreach ($produk as $mobil) : ?>
                <?php if ($count < 6) : ?>
                  <div class="col-lg-4 menu-item">
                    <a href="asset-admin/img/<?= $mobil->gambar_produk; ?>" class="glightbox"><img src="asset-admin/img/<?= $mobil->gambar_produk; ?>" class="menu-img img-fluid" alt=""></a>
                    <h4><?= $mobil->nama_produk; ?></h4>
                    <p class="ingredients"><?= $mobil->deskripsi_produk; ?></p>
                    <p class="price"><?= $mobil->harga_produk; ?></p>
                  </div><!-- Menu Item -->
                  <?php $count++; ?>
                <?php endif; ?>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- Menu Breakfast -->
          <div class="tab-pane fade" id="menu-breakfast">
            <div class="tab-header text-center">
            </div>
            <div class="row gy-5">
              <?php $count = 0; ?>
              <?php foreach ($produk as $mobil) : ?>
                <?php if ($count >= 6 && $count < 12) : ?>
                  <div class="col-lg-4 menu-item">
                    <a href="asset-admin/img/<?= $mobil->gambar_produk; ?>" class="glightbox"><img src="asset-admin/img/<?= $mobil->gambar_produk; ?>" class="menu-img img-fluid" alt=""></a>
                    <h4><?= $mobil->nama_produk; ?></h4>
                    <p class="ingredients"><?= $mobil->deskripsi_produk; ?></p>
                    <p class="price"><?= $mobil->harga_produk; ?></p>
                  </div><!-- Menu Item -->
                <?php endif; ?>
                <?php $count++; ?>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- Menu Lunch -->
          <div class="tab-pane fade" id="menu-lunch">
            <div class="tab-header text-center">
            </div>
            <div class="row gy-5">
              <?php $count = 0; ?>
              <?php foreach ($produk as $mobil) : ?>
                <?php if ($count >= 12 && $count < 18) : ?>
                  <div class="col-lg-4 menu-item">
                    <a href="asset-admin/img/<?= $mobil->gambar_produk; ?>" class="glightbox"><img src="asset-admin/img/<?= $mobil->gambar_produk; ?>" class="menu-img img-fluid" alt=""></a>
                    <h4><?= $mobil->nama_produk; ?></h4>
                    <p class="ingredients"><?= $mobil->deskripsi_produk; ?></p>
                    <p class="price"><?= $mobil->harga_produk; ?></p>
                  </div><!-- Menu Item -->
                <?php endif; ?>
                <?php $count++; ?>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- Menu Dinner -->
          <div class="tab-pane fade" id="menu-dinner">
            <div class="tab-header text-center">
            </div>
            <div class="row gy-5">
              <?php $count = 0; ?>
              <?php foreach ($produk as $mobil) : ?>
                <?php if ($count >= 18 && $count < 24) : ?>
                  <div class="col-lg-4 menu-item">
                    <a href="asset-admin/img/<?= $mobil->gambar_produk; ?>" class="glightbox"><img src="asset-admin/img/<?= $mobil->gambar_produk; ?>" class="menu-img img-fluid" alt=""></a>
                    <h4><?= $mobil->nama_produk; ?></h4>
                    <p class="ingredients"><?= $mobil->deskripsi_produk; ?></p>
                    <p class="price"><?= $mobil->harga_produk; ?></p>
                  </div><!-- Menu Item -->
                <?php endif; ?>
                <?php $count++; ?>
              <?php endforeach; ?>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Menu Section -->

<!-- ======= Book A Table Section ======= -->
<section id="book-a-table" class="book-a-table">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
          <h2>Alamat</h2>
          <p>Kunjungi <span>Alamat</span>Kami</p>
        </div>
<div class="mb-3">
  <iframe style="border:0; width: 100%; height: 350px;"
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63309.137055842264!2d108.49662625401976!3d-7.373942414574073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f63fefdf61bcb%3A0x27e11b7d950951e7!2smandiri%20putra%20motor!5e0!3m2!1sid!2sid!4v1714990552704!5m2!1sid!2sid"
    frameborder="0" allowfullscreen></iframe>
    </div><!-- End Google Maps -->

  </div>
</section><!-- End Book A Table Section -->

<!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Showroom</h2>
      <p>Cek <span>Showroom Kami</span></p>
    </div>

    <div class="gallery-slider swiper">
      <div class="swiper-wrapper align-items-center">
        <?php if (!empty($data_galeri)) : ?>
          <?php foreach ($data_galeri as $galeri) : ?>
            <div class="swiper-slide">
              <a class="glightbox" data-gallery="images-gallery" href="<?= base_url('asset-admin/img/' . $galeri->foto_galeri) ?>">
                <img src="<?= base_url('asset-admin/img/' . $galeri->foto_galeri) ?>" class="img-fluid" alt="">
              </a>
            </div>
          <?php endforeach; ?>
        <?php else : ?>
          <p>Tidak ada data galeri yang tersedia.</p>
        <?php endif; ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End Gallery Section -->


<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Kontak Kami</h2>
      <p>Berminat? <span>Hubungi Kami</span></p>
    </div>

    <div class="row gy-4">
      <?php if (!empty($data_kontak)) : ?>
        <?php foreach ($data_kontak as $kontak) : ?>
          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Alamat Kami</h3>
                <p><?= $kontak->alamat_kontak; ?></p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Kami</h3>
                <p><?= $kontak->email_kontak; ?></p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Kontak Kami</h3>
                <p><?= $kontak->nomor_kontak; ?></p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Jam Operasional</h3>
                <div><strong>Senin-Minggu:</strong> <?= $kontak->jam_operasional; ?></div>
              </div>
            </div>
          </div><!-- End Info Item -->
        <?php endforeach; ?>
      <?php else : ?>
        <p>Tidak ada data kontak.</p>
      <?php endif; ?>
    </div>

  </div>
</section><!-- End Contact Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Alamat</h4>
            <p>
              Jl. Siliwangi No.92, Raharja, Purwaharja, <br>
              Kota Banjar, Jawa Barat 50152, Indonesia<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Kontak</h4>
            <p>
              <strong>Phone:</strong> +62-878-6140-5673<br>
              <strong>Email:</strong> hermansibarani823@gmail.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Jam Operasional</h4>
            <p>
              <strong>Senin-Minggu</strong> <br>
              07.30 - 17.00 WIB
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex align-items-center ">
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <h4 style="padding-bottom: 0; margin-bottom: 0;">Mandiri Putra Motor Banjar</h4>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Mandiri Putra Motor</span></strong>. <br>All Rights Reserved
      </div>
      <div class="credits">
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/aos/aos.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/purecounter/purecounter_vanilla.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/php-email-form/validate.js') ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>

</html>