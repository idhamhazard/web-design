<?php
session_start();
if(!isset($_SESSION['user_login'])) { header("location:../index.php");}
include '../functions/userfunctions.php'
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resep Makananku | Website</title>

    <!-- Link Bootstrap -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css" />

    <!-- Link CSS -->
    <link rel="stylesheet" href="../assets/css/style.css" />

    <!-- Link ICON -->
    <link rel="icon" type="image/x-icon" href="../assets/img/logo.png" />

    <!-- Link AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Link ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  </head>
  <body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" id="home">
      <div class="container">
        <div class="navbar-brand">
          <img src="../assets/img/logo.png" alt="" style="width: 55px;"/><span class="judul-logo">Resep Makananku</span>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link mx-2 " href="#home">Home</a>
            <a class="nav-link mx-2" href="#about">About</a>
            <a class="nav-link mx-2" href="#resep">Resep</a>
            <a class="nav-link mx-2" href="#contact">Contact</a>
            
          </div>    
        </div>     
       </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../assets/img/soto.webp" class="d-block w-100 soto" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <div class="text-box">
              <h1 class="judul position-absolute"><span class="auto-input"></span></h1>
            </div>
            <h5 class="fw-bold">Soto Betawi</h5>
            <p class="">
              Soto Betawi merupakan soto yang khas dari daerah DKI Jakarta. Seperti halnya Soto Madura dan Soto Sulung, Soto Betawi juga menggunakan jeroan. Selain jeroan, sering kali organ-organ lain juga disertakan, seperti mata, terpedo,
              dan juga hati. Daging sapi juga menjadi bahan campuran dalam soto Betawi.
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../assets/img/sate.webp" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h5 class="fw-bold">Sate Madura</h5>
            <p>Sate Madura adalah sate yang memiliki bumbu khas Madura. Sate Madura biasanya terbuat dari ayam. Madura selain terkenal sebagai pulau garam, juga terkenal dengan satenya.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../assets/img/rendang.webp" class="d-block w-100 rendang" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h5 class="fw-bold">Rendang</h5>
            <p>
              Rendang atau randang dalam bahasa Minangkabau adalah Masakan Minangkabau yang berbahan dasar daging yang berasal dari Sumatera Barat, Indonesia. Masakan ini dihasilkan dari proses memasak suhu rendah dalam waktu lama dengan
              menggunakan aneka rempah-rempah dan santan.
            </p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#850E35" fill-opacity="1" d="M0,320L48,298.7C96,277,192,235,288,234.7C384,235,480,277,576,282.7C672,288,768,256,864,229.3C960,203,1056,181,1152,192C1248,203,1344,245,1392,266.7L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    <!-- Akhir Carousel -->

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row mt-5">
          <div class="col-lg-7 col-sm-12 text-center kata-resep">
            <h1 class="fw-bolder welcome text-center" data-aos="fade-down" data-aos-delay="100"
            >Selamat Datang di <br><span class="kata-merah">RESEPMAKANANKU</span></h1>
            <p class="lead fs-6 text-lg-start p-resep p1-resep fw-bold" data-aos="fade-right" data-aos-delay="300">ResepMakananku adalah no 1 situs langganan resep masakan yang memiliki informasi terlengkap mengenai segala hal tentang dunia masak-memasak. Mulai dari resep, tips & edukasi, produk rekomendasi, dll.
            </p>
            <p class="lead fs-6 text-lg-start p-resep fw-bold" data-aos="fade-left" data-aos-delay="400"
            >Kami berusaha menyajikan langkah-langkah yang mudah dipahami dan praktis, untuk membantu meringankan pekerjaan Anda di dapur. Cocok untuk pemula yang sedang belajar masak, maupun yang sudah mahir namun sering bingung mau masak apa</p>
          </div>
          <div class="col-lg-5">
            <img class="img-hero" src="../assets/img/heroimg.png" alt="gambar memasak" width="100%" data-aos="fade-left" data-aos-delay="200" data-aos-offset="250">
          </div>
        </div>
      </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#850e35" fill-opacity="1" d="M0,64L48,58.7C96,53,192,43,288,80C384,117,480,203,576,197.3C672,192,768,96,864,64C960,32,1056,64,1152,80C1248,96,1344,96,1392,96L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    <div>
    </section>
    <!-- Akhir About -->

    <!-- Resep -->
    <section id="resep">
      <div class="container costum-resep">
        <div class="row mt-3">
          <?php
            $function = new userFunction();
            $read = $function->readCategory();
            while($data = $read->fetch_assoc()) {
          ?>
          <div class="col-lg-4 d-flex justify-content-center mb-3" data-aos="flip-left">
            <div class="card" style="width: 18rem;">
              <img src="../assets/upload/<?= $data['foto'] ?>" class="card-img-top" alt="gambar rendang">
              <div class="card-body">
<<<<<<< HEAD:user/dashboard.html
                <h5 class="card-title">Makanan Pulau Sumatra</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn button-contact">Klik Lebih Lanjut</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
              <img src="/assets/img/gudeg.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Makanan Pulau Jawa</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn button-contact">Klik Lebih Lanjut</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
              <img src="/assets/img/ayam-cincane.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Makanan Pulau Kalimantan</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn button-contact">Klik Lebih lanjut</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
              <img src="/assets/img/coto-makassar.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Makanan Pulau Sulawesi</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn button-contact">Klik Lebih Lanjut</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
              <img src="/assets/img/papeda.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Makanan Pulau Papua</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn button-contact">Klik Lebih Lanjut</a>
=======
                <h5 class="card-title"><?= $data['judul'] ?></h5>
                <p class="card-text"><?= $data['description'] ?></p>
                <a href="kategori.php" class="btn button-contact">Lihat Lebih Lanjut</a>
>>>>>>> bf71be66dbf658d021199745330db9ea02d72e34:user/dashboard.php
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>
    <!-- Akhir Resep -->

    <!-- Contact  -->
    <section id="contact">
      <div class="container-fluid costum-contact">
        <div class="container p-5 contact-costum">
          <div class="row">
            <div class="col-lg-5 col-md-6 order-0">
              <div class="judul-kontak" data-aos="fade-down">
                <h1 class="contact-me fw-bold">Contact Me</h1>
                <h2 class="fw-bold">Silahkan kontak kami. <br> Kami siap membantu</h2>
              </div> 
              <div class="kontak" data-aos="fade-right" data-aos-delay="200">
                <h5>Kontak</h5>
                <div class="lok d-flex">
                  <i class="bi bi-building"></i>
                  <p class="ms-2">Jl. Duren Tiga Raya No.12, Duren Tiga, Kec. Pancoran, Kota Jakarta Selatan.</p>
                </div>
                <div class="telpon d-flex">
                  <i class="bi bi-telephone"></i>
                  <p class="ms-2">021-7919 2313</p>
                </div>
                <div class="email d-flex">
                  <i class="bi bi-envelope"></i>
                  <p class="ms-2">info@cybermedia.sch.id</p>
                </div>
                <div class="sosial-media" data-aos="fade-left" data-aos-delay="250">
                  <h5>Sosial Media</h5>
                  <div class="icon-sosial-media">
                    <div class="instagram d-flex mb-1">
                      <i class="bi bi-instagram"></i>
                      <a href="https://www.instagram.com/smkcybermediajakarta" target="_blank" class="ms-2 ">@smkcybermediajakarta</a>
                    </div>
                    <div class="yt d-flex">
                      <i class="bi bi-youtube"></i>
                      <a href="https://www.youtube.com/channel/UCPm6DPzgAM2AR1ixs2ghCvA" target="_blank" class="ms-2">YouTube SMK Cyber Media</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 offset-lg-1 form-contact order-sm-3" data-aos="flip-left" data-aos-delay="100" data-aos-offset="250">
              <h2 class="text-center pt-2 fw-bold">Ada Pertanyaan...?</h2>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"></label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukan email anda disini...">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Pertanyaan Anda..."></textarea>
              </div>
              <div class="col-auto">
                <button type="submit" class="btn mb-3 button-contact">Kirim</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <!-- Akhir Contact -->

    <!-- Footer -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#850e35" fill-opacity="1" d="M0,128L48,117.3C96,107,192,85,288,90.7C384,96,480,128,576,154.7C672,181,768,203,864,181.3C960,160,1056,96,1152,80C1248,64,1344,96,1392,112L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    <footer>
      <div class="container-fluid costum-footer">
        <div class="container costum-container-footer">
          <div class="row text-footer">
            <div class="col-lg-7">
              <h1>Resep Makananku</h1>
              <p>ResepMakananku adalah situs kumpulan resep masakan indonesia yang mudah dan praktis.</p>
            </div>
            <div class="col-lg-3 makanan-khas">
              <p>Makanan Khas</p>
              <p>Pulau Jawa</p>
              <p>Pulau Sumatra</p>
              <p>Pulau Sulawesi</p>
              <p>Pulau Kalimantan</p>
              <p>Pulau Papua</p>
            </div>
            <div class="col-lg-2">
              <p>Full Services</p>
              <p>Company</p>
              <p>Our Clients</p>
              <p>Forums</p>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <p class="text-center copyright">Copyright © Resep Makananku 2022</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
      
    <!-- Akhir Footer -->
  
    <!-- Link AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
      disable: function() {
      var maxWidth = 990;
      return window.innerWidth < maxWidth;
      }
      });
    </script>

  </body>

  <!-- Link JS -->
  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/bootstrap/js/jquery-3.6.1.min.js"></script>
  <!-- Link  Typed JS -->
  <script src="../assets/typed.js/typed.min.js"></script>
  <script>
    var typed = new Typed('.auto-input', {
      strings: [" Tutorial Resep Makanan"],
      typeSpeed: 50,
      backSpeed: 50,
      loop: true,
    });
  </script>
</html>
