<?php 
include_once 'controllers/c_produk.php';
$produk = new c_produk();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Seven Laundry</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" href="assets/images/favicon.ico">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="asssets/fonts/googlefont.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/stylei.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Ninestars - v4.10.0
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <!-- <h1 class="text-light"><a href="index.html"><span>Seven Laundry</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="#"><img src="assets/images/seven.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="#services">Produk</a></li>
          <!-- <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li> -->
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <!-- <li><a class="nav-link scrollto" href="#contact">Hubungi Kami</a></li> -->
          <li><a class="getstarted scrollto" href="login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style=" min-height:580px;">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Apa Sih Solusi Untuk Pakaian Kotor?</h1>
          <h2>Seven Laundry lah Jawabannya :)</h2>
          <div>
            <a href="#about" class="btn-get-started scrollto">Tentang Kami</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/laundry.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about" style=" padding-bottom:100px;">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="assets/img/pngegg.png" class="img-fluid" alt="" data-aos="zoom-in" style=" height:358px;">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">Tentang Kami</h3>
            <p data-aos="fade-up" data-aos-delay="100">
              SevenLaundry merupakan salah satu pelayanan jasa di bidang cuci mencuci pakaian dengan memiliki jenis cucian yang telah ditetapkan harga oleh pihak Seven Laundry
            </p>
            <div class="row">
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-receipt"></i>
                <h4>Tanpa Biaya Tambahan</h4>
                <p>Kami Menyediakan Layanan Terbaik yang kami tetapkan tanpa biaya tambahan</p>
              </div>
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-tachometer"></i>
                <h4>Cepat dan Hemat</h4>
                <p>Kami Menyediakan Layanan Mencuci yang Murah dan Hemat tanpa adanya Permintaan yang kami tunda</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Produk / Paket</h2>
          <p>Ini adalah Produk / Paket Yang Tersedia!</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-message-square-check"></i></div>
              <h4 class="title"><a href="">Selimut</a></h4>
              <p class="description">Kami Menyediakan Layanan Untuk mencuci Selimut dengan murah dan Efisien dengan harga Hanya Rp.10.000 Saja</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-message-square-check"></i></div>
              <h4 class="title"><a href="">Bed Cover</a></h4>
              <p class="description">Kami Menyediakan Layanan Untuk mencuci Bed Cover dengan murah dan Efisien dengan harga Hanya Rp.30.000 Saja</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-message-square-check"></i></div>
              <h4 class="title"><a href="">Kaos</a></h4>
              <p class="description">Kami Menyediakan Layanan Untuk mencuci Kaos atau Pakaian dengan murah dan Efisien dengan harga Hanya Rp.7.000 Saja</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-like"></i></div>
              <h4 class="title"><a href="">Lainnya</a></h4>
              <p class="description">Kami Juga Menyediakan Layanan Seperti Mencuci boneka dan lainnya dengan murah dan Efisien dengan harga yang kami tetapkan</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>F.A.Q</h2>
          <p>Pertanyaan Dan Jawaban</p>
        </div>

        <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Apakah Paket Nantinya Akan Memiliki Promo atau Diskon? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Akan kami usahakan Untuk menyediakan Layanan Tersebut Tersedia Untuk Anda
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Bagaimana Cara Untuk Mendaftarkan Pesanan Cucian?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Anda bisa <a href="#contact" class="btn-get-started scrollto">Menghubungi Kami</a> dibawah untuk Mengirim Pesanan Cucian Kepada kami yang akan kami proses secara cepat!
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Apakah akan dikenakan biaya tambahan apabila tidak membayar pada waktu yang ditentukan? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Layanan kami Menyediakan Sistem Pending. jadi anda bisa membayar kapanpun tanpa dikenakan biaya tambahan
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <!-- <h2>Team</h2> -->
          <p>Seven-Team</p>
        </div>

        <div class="row">

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="member">
              <img src="assets/img/team/sur.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Muhamad Suryanto</h4>
                  <span>Designer Web And System PHP </span>
                </div>
                <div class="social">
                  <!-- <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="member">
              <img src="assets/img/team/ragil.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Ragil</h4>
                  <span>ERD And Documentation Report</span>
                </div>
                <div class="social">
                  <!-- <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="member">
              <img src="assets/img/team/ardiass.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Ardias</h4>
                  <span>Menu Structure And Prototype Desainer</span>
                </div>
                <div class="social">
                  <!-- <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="member">
              <img src="assets/img/team/dikaa.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Dika</h4>
                  <span>Data Flow Diagram And Activity Diagram</span>
                </div>
                <div class="social">
                  <!-- <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a> -->
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Us Section ======= -->
    <!-- <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Hubungi Kami</h2>
          <p>Untuk Pendaftaran Pesanan Laundry</p>
        </div>

        <div class="row">
          <div class="col-1">
            </div>
          <div class="col-lg-10 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <form action="routers/r_inbox.php?aksi=tambah" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                <input type="text" name="id" class="form-control" id="name" hidden>
                  <label for="name">Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control" id="name" placeholder="Disarankan Nama Asli" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">No.Telepon</label>
                  <input type="number" class="form-control" name="tlp" id="email" placeholder="+62 / 08" required>
                </div>
              </div>
              <div class="row">
              <div class="form-group col-md-6">
              <label for="exampleInputEmail1" class="form-label">Paket Layanan</label>
                  <select name="jenispak" id="" class="form-select" required>
                      <option value="">Pilihan Paket</option>
                      <php foreach ($produk->getproduk() as $prod) {?>
                      <option value="<php echo $prod->jenis ?>"><php echo $prod->nama_paket ?></option>
                      <php }?>
                      </select>
              </div>
              <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                  <select name="jeniskel" id="" class="form-select" required>
                      <option value="">Pilihan Gender</option>
                      <option value="L">Laki-Laki</option>
                      <option value="P">Perempuan</option>
                      </select>
              </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="subject" placeholder="Alamat Lengkap, RT/RW, POS" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Catatan</label>
                <textarea class="form-control" name="catatan" rows="10" placeholder="Disarankan untuk Catatan yang berkaitan dengan Pesanan seperti tanggal pengambilan atau Peringatan Akan Kerusakan Pakaian dan lain sebagainya"></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message" style="background-color:lightgreen;color:lightgreen;"></div>
                <div class="sent-message">Pesan Anda Sedang Diproses, Terima Kasih</div>
              </div>
              <div class="text-center">
                <button name="tambah" type="submit">Kirim</button>
                <input type="text" name="tambah" value="" hidden>
              </div>
            </form>
          </div>
        </div>

      </div>
    </section> -->
    <!-- End Contact Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>SevenLaundry</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/ -->
        <!-- Khusus Karyawan <a href="login.php">Login</a> -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/maini.js"></script>

</body>
</style>
</html>