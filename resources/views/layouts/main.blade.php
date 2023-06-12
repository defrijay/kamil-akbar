<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Link Boostrap dan Link Css-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">

  <!-- Link JavaScript -->
  <link rel="stylesheet" href="js/script.js">

  <!-- Link Icon Boostrap-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  
  <!-- Google Font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

  <script src="js/script.js" defer></script>
</head>

<body style="font-family: solway;">

  @include('partials.navbar')
  @yield('container')


  <!-- Top Footer -->
  <section id="footerTop" class=" pt-3 rounded-top-5" style="background-color: #1E549F;">
    <div class="container">
      <div class="row">
        <div class="col mb-xl-auto">
          <img src="img/sFooterTop.png" height="150" alt="">
        </div>
        <div class="col text-white text-center">
          <h1 class="mb-4">Tertarik Servis?</h1>
          <a href="/login" class="rounded-5 text-decoration-none text-center p-3" style="background-color: #4AA9AF; color: #FFE500; font-weight: bolder;">Register Here!</a>
        </div>
      </div>
  </section>
  <!-- Akhir Top Footer -->

  <!-- footer -->
  <footer class="text-white text-center p-3" style="background-color: #081F37;">
    <div class="row">
      <div class="col">
        <div class="container justify-content-center mt-3 mb-5 fs-1">
          <a class="navbar-brand text-white" href="#">
            <img src="img/logo.png" alt="Logo" height="64" class="d-inline-block align-text-top">
            Bengkel Kamil Akbar
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <a href="" class="text-white fs-4" style="text-decoration: none;"><i class="bi bi-person-rolodex"></i>
            Contact</a>
        </div>
        <div class="col lh-1">
          <p style="font-weight: lighter;">Alamat : Jl. Atmajaya no. 54, Bandung, Jawa Barat-Indonesia</p>
          <p style="font-weight: lighter;">Kontak : +62-22-2277-9090</p>
        </div>
      </div>
      <p style="font-weight: lighter; font-size: 12px;"><i class="bi bi-c-circle"></i> copyright 2023 Kamil Gerlong
        Akbar | Bengkel Kamil Akbar adalah merek milik PT Bengkel Kamil Akbar Tbk. Terdaftar pada Direktorat Jendral
        Kekayaan
        Intelektual Republik Indonesia
  </footer>



  
  <!-- Akhir Footer -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>