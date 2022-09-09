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
    <!-- Pop Up Tambah Admin -->
    
  
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