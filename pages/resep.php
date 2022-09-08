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
    <link rel="stylesheet" href="../assets/css/kategori.css" />

    <!-- Link ICON -->
    <link rel="icon" type="image/x-icon" href="../assets/img/logo.png" />

    <!-- Link AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Link ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  </head>

  <body>
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
            <a class="nav-link mx-2 " href="../index.php">Home</a>
            <a class="nav-link mx-2" href="../index.php#about">About</a>
            <a class="nav-link mx-2" href="../index.php#resep">Resep</a>
            <a class="nav-link mx-2" href="../index.php#contact">Contact</a>
            <a class="nav-link mx-2" href="../index.php#login">Login</a>
          </div>    
        </div>     
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Resep Kategori -->
    
    <section>
   
      <div class="container">
    
        <div class="row">
          <div class="col-12 mb-3 mt-3">
            <div class="card mb-3">
              <?php
                include '../functions/functions.php';
                $function = new allFunction();
                if(isset($_GET['resep']))
                {
                    $product_slug = $_GET['resep'];
                    $product_data = $function->viewResep($product_slug);
                    $product = mysqli_fetch_array($product_data);
                    if($product) {  
              ?>
              <img src="../assets/upload/<?= $product['foto'] ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title"><?= $product['judul'] ?></h3>
                <p class="card-text"><?= $product['description'] ?></p>
                <div class="isi">
                  <h4>Alat dan Bahan</h4>
                  <p><?= $product['alat'] ?></p>
                </div>
                <div class="langkah-langkah">
                  <h4>Langkah-Langkah</h4>
                  <p><?= $product['langkah'] ?></p>
                </div>
              </div>
            </div>
            <?php } ?>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Akhir Resep Kategori -->



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
         </div>
         <div class="row">
           <div class="col-12">
             <p class="text-center copyright p-3">Copyright ©️ Resep Makananku 2022</p>
           </div>
         </div>
       </div>
     </footer>
     <!-- Akhir Footer -->

  </body>

  <!-- Link JS -->
  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/bootstrap/js/jquery-3.6.1.min.js"></script>
 
</html>
