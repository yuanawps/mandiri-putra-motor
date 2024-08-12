
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mandiri Putra Motor</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('asset'); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url('asset'); ?>/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url('asset'); ?>/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url('asset'); ?>/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url('asset'); ?>/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="assets/img/logo.png" width="150" height="150">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Beranda</a></li>
          <li><a href="#about">Tentang kami</a></li>
          <li><a href="#menu">Daftar Mobil</a></li>
          <li><a href="#gallery">Showroom</a></li>
          <li><a href="#contact">Kontak</a></li>
            </ul>
        </ul>
      </nav><!-- .navbar -->

      <a class="btn-book-a-table" href="#book-a-table">Alamat Kami</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">MANDIRI PUTRA MOTOR<br>FOR YOUR TRANSPORTATION</h2>
          <p data-aos="fade-up" data-aos-delay="100">Salah satu dealer mobil bekas di Kota Banjar yang menawarkan beragam pilihan kendaraan bekas dari merek ternama seperti
          Toyota, Suzuki, Nissan, Daihatsu, Honda, dan lainnya.</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#book-a-table" class="btn-book-a-table">Kunjungi Alamat Kami</a>
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/fortuner.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="400">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

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
               <style>
        .justify-text {
            text-align: justify;
        }
    </style>
</head>
<body>
    <?php
    echo '<p class="fst-italic justify-text">
        Mandiri Putra Motor, dealer mobil bekas di Banjar, menawarkan berbagai merek mobil seperti Toyota, Suzuki, Nissan,
        Daihatsu, Honda, dan lainnya.
    </p>';
    
    echo '<ul class="justify-text">
        <li><i class="bi bi-check2-all"></i> Mandiri Putra Motor (MPM) menyediakan berbagai tipe mobil bekas di bawah 50 juta dan 100 juta.</li>
        <li><i class="bi bi-check2-all"></i> Setiap mobil yang dijual di MPM telah melalui pengecekan kualitas untuk memastikan kondisi prima, dilengkapi dengan
        surat-surat lengkap dan pajak baru.</li>
        <li><i class="bi bi-check2-all"></i> Anda dapat memilih untuk membayar tunai atau menggunakan opsi kredit dengan potongan harga dan DP ringan.</li>
    </ul>';
    
    echo '<p class="justify-text">
        Kunjungi Mandiri Putra Motor untuk mobil yang Anda butuhkan. Hubungi kami untuk informasi lebih lanjut tentang
        spesifikasi, over kredit, tukar tambah, dan lainnya.
    </p>';
    ?>
</body>

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

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="60" data-purecounter-duration="1" class="purecounter"></span>
              <p>Stok Mobil</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
              <p>Cabang Showroom</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Waktu Dukungan</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="246" data-purecounter-duration="1" class="purecounter"></span>
              <p>Unit Terjual</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

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

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/avanza2018.png" class="glightbox"><img src="assets/img/menu/avanza2018.png" class="menu-img img-fluid" alt=""></a>
                <h4>Toyota Avanza 2018</h4>
                <p class="ingredients">
                  Type G Barong Manual
                </p>
                <p class="price">
                  Rp. 160.000.000,00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/brio2019.png" class="glightbox"><img src="assets/img/menu/brio2019.png" class="menu-img img-fluid" alt=""></a>
                <h4>Honda Brio 2019</h4>
                <p class="ingredients">
                  Type RS Manual
                </p>
                <p class="price">
                  Rp. 165.000.000,00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/avanza2019.png" class="glightbox"><img src="assets/img/menu/avanza2019.png" class="menu-img img-fluid" alt=""></a>
                <h4>Toyota Avanza 2019</h4>
                <p class="ingredients">
                  Type G Manual
                </p>
                <p class="price">
                 Rp. 210.000.000,00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/grandmax2021.png" class="glightbox"><img src="assets/img/menu/grandmax2021.png" class="menu-img img-fluid" alt=""></a>
                <h4>Daihatsu Granmax 2021</h4>
                <p class="ingredients">
                  Type Pickup
                </p>
                <p class="price">
                  Rp. 125.000.000,00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/blindvan2020.png" class="glightbox"><img src="assets/img/menu/blindvan2020.png" class="menu-img img-fluid" alt=""></a>
                <h4>Daihatsu Blindvan 2020</h4>
                <p class="ingredients">
                  Type Pick Up Blindvan
                </p>
                <p class="price">
                  Rp. 125.000.000,00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/agya2015.png" class="glightbox"><img src="assets/img/menu/agya2015.png" class="menu-img img-fluid" alt=""></a>
                <h4>Toyota Agya 2015</h4>
                <p class="ingredients">
                  Type TRD Manual
                </p>
                <p class="price">
                  Rp. 105.000.000,00
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Starter Menu Content -->

          <div class="tab-pane fade" id="menu-breakfast">

            <div class="tab-header text-center">
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/Xenia2015.png" class="glightbox"><img src="assets/img/menu/Xenia2015.png" class="menu-img img-fluid" alt=""></a>
                <h4>Daihatsu Xenia 2015</h4>
                <p class="ingredients">
                  Type M
                </p>
                <p class="price">
                  Rp. 110.000.000,00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/brio2018.png" class="glightbox"><img src="assets/img/menu/brio2018.png" class="menu-img img-fluid" alt=""></a>
                <h4>Honda Brio 2018</h4>
                <p class="ingredients">
                  Type E Satya, Tanmisi Manual
                </p>
                <p class="price">
                  Rp. 130.000.000,00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/xtrail2012.png" class="glightbox"><img src="assets/img/menu/xtrail2012.png" class="menu-img img-fluid" alt=""></a>
                <h4>Nisan Xtrail 2012</h4>
                <p class="ingredients">
                  Type XV Matic
                </p>
                <p class="price">
                  Rp. 130.000.000,00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/inova2008.png" class="glightbox"><img src="assets/img/menu/inova2008.png" class="menu-img img-fluid" alt=""></a>
                <h4>t\Toyota Kijang Inova 2008</h4>
                <p class="ingredients">
                  Type G Manual
                </p>
                <p class="price">
                  Rp. 130.000.000,00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/civic2010.png" class="glightbox"><img src="assets/img/menu/civic2010.png" class="menu-img img-fluid" alt=""></a>
                <h4>Honda Civic 2010</h4>
                <p class="ingredients">
                  Type FD Matic
                </p>
                <p class="price">
                  Rp. 145.000.000,00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/futura2018.png" class="glightbox"><img src="assets/img/menu/futura2018.png" class="menu-img img-fluid" alt=""></a>
                <h4>Suzuki Futura 2018</h4>
                <p class="ingredients">
                  Type Pick Up
                </p>
                <p class="price">
                  Rp. 95.000.000,00
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Breakfast Menu Content -->

          <div class="tab-pane fade" id="menu-lunch">

            <div class="tab-header text-center">
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/truckengkol.png" class="glightbox"><img src="assets/img/menu/truckengkol.png" class="menu-img img-fluid" alt=""></a>
                <h4>Truck</h4>
                <p class="ingredients">
                  Type Engkel
                </p>
                <p class="price">
                  Rp. 130.000.000,00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/truck2023.png" class="glightbox"><img src="assets/img/menu/truck2023.png" class="menu-img img-fluid" alt=""></a>
                <h4>Mitsubishi Truck Doble 2023</h4>
                <p class="ingredients">
                  Type HDV Canter
                </p>
                <p class="price">
                  Rp. 435.000.000,00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/truck2010.png" class="glightbox"><img src="assets/img/menu/truck2010.png" class="menu-img img-fluid" alt=""></a>
                <h4>Mitsubishi Truck Doble 2018</h4>
                <p class="ingredients">
                  Type HDV Canter
                </p>
                <p class="price">
                  Rp. 230.000.000,00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/ss2015.png" class="glightbox"><img src="assets/img/menu/ss2015.png" class="menu-img img-fluid" alt=""></a>
                <h4>Mitsubishi SS 2015</h4>
                <p class="ingredients">
                  Pick Up T120 SS
                </p>
                <p class="price">
                  Rp. 75.000.000,00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/truckdump2023.png" class="glightbox"><img src="assets/img/menu/truckdump2023.png" class="menu-img img-fluid" alt=""></a>
                <h4>Mitsubishi Truck Dump 2023</h4>
                <p class="ingredients">
                  Type SHDX Canter
                </p>
                <p class="price">
                  Rp. 450.000.000,00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/truckengkel2020.png" class="glightbox"><img src="assets/img/menu/truckengkel2020.png" class="menu-img img-fluid" alt=""></a>
                <h4>Mitsubishi Truck 2020</h4>
                <p class="ingredients">
                  Type Engkel
                </p>
                <p class="price">
                  Rp. 330.000.000,00
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Lunch Menu Content -->

          <div class="tab-pane fade" id="menu-dinner">

            <div class="tab-header text-center">
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/xenia2011.png" class="glightbox"><img src="assets/img/menu/xenia2011.png" class="menu-img img-fluid" alt=""></a>
                <h4>Daihatsu Xenia 2011</h4>
                <p class="ingredients">
                  Type li Manual
                </p>
                <p class="price">
                  Rp. 90.000.000,00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/fortuner2019.png" class="glightbox"><img src="assets/img/menu/fortuner2019.png" class="menu-img img-fluid" alt=""></a>
                <h4>Toyota Fortuner 2019</h4>
                <p class="ingredients">
                  Type VRZ Matic
                </p>
                <p class="price">
                  Rp. 460.000.000,00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/granmax2017.png" class="glightbox"><img src="assets/img/menu/granmax2017.png" class="menu-img img-fluid" alt=""></a>
                <h4>Daihatsu Grandmax 2017</h4>
                <p class="ingredients">
                  Type Pick Up AC PS
                </p>
                <p class="price">
                  Rp. 115.000.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/avanza2020.png" class="glightbox"><img src="assets/img/menu/avanza2020.png" class="menu-img img-fluid" alt=""></a>
                <h4>Toyota Avanza Facelife 2020</h4>
                <p class="ingredients">
                  Type G Manual
                </p>
                <p class="price">
                  Rp. 235.000.000,00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/trucksasis2023.png" class="glightbox"><img src="assets/img/menu/trucksasis2023.png" class="menu-img img-fluid" alt=""></a>
                <h4>Mitsubishi Truck Sasis 2023</h4>
                <p class="ingredients">
                  Type Engkel
                </p>
                <p class="price">
                  Rp. 330.000.000,00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/apv2011.png" class="glightbox"><img src="assets/img/menu/apv2011.png" class="menu-img img-fluid" alt=""></a>
                <h4>Suzuki APV 2011</h4>
                <p class="ingredients">
                  Type GX
                </p>
                <p class="price">
                  Rp. 105.000.000,00
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Dinner Menu Content -->

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

          </div><!-- End Reservation Form -->

        </div>

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
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/galeri1.jpg"><img src="assets/img/gallery/galeri1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/galeri2.jpg"><img src="assets/img/gallery/galeri2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/galeri3.jpg"><img src="assets/img/gallery/galeri3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/galeri4.jpg"><img src="assets/img/gallery/galeri4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/galeri5.jpg"><img src="assets/img/gallery/galeri5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/galeri6.jpg"><img src="assets/img/gallery/galeri6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/galeri2.jpg"><img src="assets/img/gallery/galeri2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/galeri3.jpg"><img src="assets/img/gallery/galeri3.jpg" class="img-fluid" alt=""></a></div>
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

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Alamat Kami</h3>
                <p>Jl. Siliwangi No.92, Raharja, Purwaharja, Kota Banjar, Jawa Barat 50152, Indonesia</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Kami</h3>
                <p>hermansibarani823@gmail.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Kontak Kami</h3>
                <p>+62-878-6140-5673</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Jam Operasional</h3>
                <div><strong>Senin-Minggu:</strong> 07.30 - 17.00 WIB
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

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
          <div class="social-links d-flex">
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <h5>Mandiri Putra Motor Banjar</h5>
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
  <script src="<?php echo base_url('asset'); ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url('asset'); ?>/aos/aos.js"></script>
  <script src="<?php echo base_url('asset'); ?>/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url('asset'); ?>/purecounter/purecounter_vanilla.js"></script>
  <script src="<?php echo base_url('asset'); ?>/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url('asset'); ?>/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>