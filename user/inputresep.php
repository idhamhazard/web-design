<?php 
session_start();
include '../functions/userfunctions.php';
$id_user = $_SESSION['id_user'];
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
            <a class="nav-link mx-2 " href="dashboard.php">Home</a>
            <a class="nav-link mx-2" href="dashboard.php#about">About</a>
            <a class="nav-link mx-2" href="dashboard.php#resep">Resep</a>
            <a class="nav-link mx-2" href="dashboard.php#contact">Contact</a>
            <a class="nav-link mx-2" href="inputresep.php">Tambah Resep</a>
            <a class="nav-link mx-2" href="logout.php">Logout</a>
          </div>    
        </div>     
       </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Form -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#850e35" fill-opacity="1" d="M0,224L48,224C96,224,192,224,288,208C384,192,480,160,576,128C672,96,768,64,864,90.7C960,117,1056,203,1152,229.3C1248,256,1344,224,1392,208L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    <section>
      <div class="row">
        <div class="col-12">
          <div class="container" data-aos="fade-down">
            <div class="row justify-content-center">
              <h1 class="text-center mb-5">Masukan Resep mu</h1>
            <div class="col-lg-6">
              <form action="proses.php?action=create" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id_user" value="<?= $id_user ?>">
                <div class="row mb-3">
                  <div class="col">
                  <label for="judul resep" class="form-label">Judul Resep</label>
                    <input type="text" class="form-control" aria-label="judul resep" name="judul">
                  </div>
                  <div class="col">
                  <label for="slag" class="form-label">Slug</label>
                    <input type="text" class="form-control" aria-label="slag" name="slug">
                  </div>
                </div>
                <div class="mb-3">
                  <select class="form-select" aria-label="Default select example" name="category">
                    <option selected>Pilih Daerah</option>
                    <?php 
                      $function = new userFunction();
                      $read = $function->readCategory();
                      while($data = $read->fetch_assoc()) {;
                    ?>
                    <option value="<?= $data['id'] ?>"><?= $data['judul'] ?></option>
                    <?php } ?>
                 </select>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Deskripsi Resep</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="deskripsi" required>
                </div>
                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Alat dan Bahan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="alat"></textarea>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Langkah - Langkah</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="langkah"></textarea>
                </div>
                <div class="mb-3">
                  <label for="formFile" class="form-label">Masukan Gambar</label>
                  <input class="form-control" type="file" id="formFile" name="foto" required>
                </div>
                <div class="mb-3">
                  <button type="submit" class="btn button-contact" name="submit">Masuk</button>
                </div>
                </form>
        </div>
      </div>
    </section>
    <!-- Akhir Form -->
    
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
          <hr>
          <div class="row">
            <div class="col-12">
              <p class="text-center">Build By <i class="bi bi-heart-fill"></i> SMK Cyber Media</p>
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

    <script>
      AOS.init({
        once: true,
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
