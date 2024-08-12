<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mobil Menu</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.1.0/css/glightbox.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
  <style>
    .menu-item {
      text-align: center;
      margin-bottom: 20px; /* Mengurangi jarak antar item */
    }

    .menu-img {
      width: 60%; /* Memperkecil gambar menjadi 60% dari ukuran kontainer */
      height: auto;
      border-radius: 8px;
    }

    .price {
      font-weight: bold;
      color: red; /* Mengubah warna harga menjadi merah */
      font-size: 1.5rem; /* Menyelaraskan ukuran teks harga dengan nama mobil */
    }

    .section-header {
      text-align: center;
      margin-bottom: 20px; /* Mengurangi jarak di bawah header */
    }

    .section-header h2 {
      font-size: 32px;
      font-weight: bold;
      margin-bottom: 0;
      font-family: 'Roboto', sans-serif; /* Menggunakan font khusus untuk judul */
    }

    .nav-tabs {
      border-bottom: none; /* Menghilangkan garis di bawah nav-tabs */
    }
  </style>
</head>

<body>

<section id="menu" class="menu">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h2>Hasil Pencarian</h2>
    </div>

    <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
      <li class="nav-item">
        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
          <div class="tab-pane fade active show" id="menu-starters">
            <div class="row gy-2"> <!-- Mengurangi jarak antar baris -->
              <!-- Mobil 1 -->
              <div class="col-lg-4 col-md-4 col-sm-6 menu-item">
                <a href="assets/img/menu/avanza2018.png" class="glightbox">
                  <img src="assets/img/menu/avanza2018.png" class="menu-img img-fluid" alt="">
                </a>
                <h4>Toyota Avanza 2018</h4>
                <p class="ingredients">Type G Barong Manual</p>
                <p class="price">Rp. 160.000.000,00</p>
              </div><!-- End Mobil 1 -->

              <!-- Mobil 2 -->
              <div class="col-lg-4 col-md-4 col-sm-6 menu-item">
                <a href="assets/img/menu/avanza2019.png" class="glightbox">
                  <img src="assets/img/menu/avanza2019.png" class="menu-img img-fluid" alt="">
                </a>
                <h4>Toyota Avanza 2019</h4>
                <p class="ingredients">Type G Manual</p>
                <p class="price">Rp. 210.000.000,00</p>
              </div><!-- End Mobil 2 -->

              <!-- Mobil 3 -->
              <div class="col-lg-4 col-md-4 col-sm-6 menu-item">
                <a href="assets/img/menu/avanza2020.png" class="glightbox">
                  <img src="assets/img/menu/avanza2020.png" class="menu-img img-fluid" alt="">
                </a>
                <h4>Toyota Avanza Facelife 2020</h4>
                <p class="ingredients">Type G Manual</p>
                <p class="price">Rp. 235.000.000,00</p>
              </div><!-- End Mobil 3 -->
            </div><!-- End Row -->
          </div><!-- End Tab Pane -->
        </div><!-- End Tab Content -->
      </li><!-- End Nav Item -->
    </ul><!-- End Nav Tabs -->
  </div><!-- End Container -->
</section><!-- End Menu Section -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center">
  <i class="bi bi-arrow-up-short"></i>
</a>

<div id="preloader"></div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.1.0/js/glightbox.min.js"></script>
<script>
  const lightbox = GLightbox({
    selector: '.glightbox'
  });
</script>
</body>

</html>
