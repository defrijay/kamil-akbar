<title>Bengkel Kamil Akbar | {{ $title }}</title>

  @extends('layouts.main')
  @section('container')
  @include('partials.hero')


  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" style="background-color: #081F37;">
    <div class="container text-center pt-5">
      <h1 class="fw-bold fs-1" style="color: #FFB926;">Pilihan Paket Servis</h1>
      <p class="text-white fw-light fs-5">Pilihlah Paket Servis Sesuai Selera Anda!</p>
    </div>
  
    <div class="carousel-inner rounded-bottom-5 p-5" style="background-color: #081F37;">
      <div class="carousel-item active">
        <div class="container">
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center align-items-center">
            <div class="col mb-3">
              <div class="card text-white text-center rounded-5 p-4 h-100" style="background-color: #4AA9AF;">
                <h4 class="card-title fw-bold fs-3" style="color: #FFB926;">Paket Servis Ban Bahagia</h4>
                <p class="card-text fs-6 fw-light">Paket Yang Bisa Membuat Banmu Bahagia.</p>
                <div class="card-body">
                  <img class="card-img-bottom" src="img/paket1.png" alt="Card image">
                </div>
              </div>
            </div>
        
            <div class="col mb-3">
              <div class="card text-white text-center rounded-5 p-4 h-100" style="background-color: #4AA9AF;">
                <h4 class="card-title fw-bold fs-3" style="color: #FFB926;">Paket Servis Bahagia</h4>
                <p class="card-text fs-6 fw-light">Paket Yang Bisa Membuat Harimu Bahagia</p>
                <div class="card-body">
                  <img class="card-img-bottom" src="img/paket2.png" alt="Card image">
                </div>
              </div>
            </div>
        
            <div class="col mb-3">
              <div class="card text-white text-center rounded-5 p-4 h-100" style="background-color: #4AA9AF;">
                <h4 class="card-title fw-bold fs-4" style="color: #FFB926;">Paket Servis Super Bahagia</h4>
                <p class="card-text fs-6 fw-light">Paket Yang Bisa Membuat Harimu Super Bahagia.</p>
                <div class="card-body">
                  <img class="card-img-bottom" src="img/paket3.png" alt="Card image">
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
  
      <div class="carousel-item">
        <div class="container">
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center align-items-center">
            <div class="col mb-3">
              <div class="card text-white text-center rounded-5 p-4 h-100" style="background-color: #4AA9AF;">
                <h4 class="card-title fw-bold fs-3" style="color: #FFB926;">Paket Servis Tune-Up</h4>
                <p class="card-text fs-6 fw-light">Paket Servis Yang Membuatmu dan Motormu Bahagia Bersama</p>
                <div class="card-body">
                  <img class="card-img-bottom" src="img/paket4.png" alt="Card image">
                </div>
              </div>
            </div>
  
            <div class="col mb-3">
              <div class="card text-white text-center rounded-5 p-4 h-100" style="background-color: #4AA9AF;">
                <h4 class="card-title fw-bold fs-3" style="color: #FFB926;">Paket Servis Rem Bahagia</h4>
                <p class="card-text fs-6 fw-light">Paket Yang Bisa Membuat Remmu Bahagia.</p>
                <div class="card-body" style="color: #FFB926;">
                  <img class="card-img-bottom" src="img/paket5.png" alt="Card image">
                </div> 
              </div>
            </div>
  
            <div class="col mb-3">
              <div class="card text-white text-center rounded-5 p-4 h-100" style="background-color: #4AA9AF;">
                <h4 class="card-title fw-bold fs-3" style="color: #FFB926;">Paket Servis Ban Bahagia</h4>
                <p class="card-text fs-6 fw-light">Paket Yang Bisa Membuat Banmu Bahagia.</p>
                <div class="card-body">
                  <img class="card-img-bottom" src="img/paket1.png" alt="Card image">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    

 
   
  <!-- Alasan -->
  <section id="pengalaman" class="my-5">
    <div class="row row-cols-1 row-cols-md-3 m-5 justify-content-center">
      <h1 class="text-center fs-1 fw-semibold">Apa Kata Mereka?</h1>
    </div>
  
    <div class="row row-cols-1 row-cols-md-3 m-5 p-5 align-items-stretch text-center">
      <div class="col mb-3">
        <div class="card mb-4 rounded-5 shadow-lg text-white h-100 d-flex flex-column justify-content-between" style="background-color: #4AA9AF;">
          <div class="card-header py-3">
            <h3 class="card-title pricing-card-title" style="color: #FFB926;">Pekerjaan Yang Berpengalaman</h3>
            <p class="fw-light">Pekerja Memiliki Sertifikasi berpengalaman dalam menyelesaikan masalah motor terkini</p>
          </div>
          <div class="card-body">
            <img class="card-img-bottom" src="img/alasan1.png" class="card-img-bottom" alt="...">
          </div>
        </div>
      </div>
  
      <div class="col mb-3">
        <div class="card mb-4 rounded-5 shadow-lg text-white h-100 d-flex flex-column justify-content-between" style="background-color: #4AA9AF;">
          <div class="card-header py-3 ">
            <h3 class="card-title pricing-card-title" style="color: #FFB926;">Harga Terjangkau</h3>
            <p class="fw-light">
              Memberikan Harga yang Terjangkau Karena Mengeluarkan Sesuai Pengeluaran yang Dibutuhkan
            </p>
          </div>
          <div class="card-body">
            <img src="img/alasan2.png" class="card-img-bottom" alt="...">
          </div>
        </div>
      </div>
  
      <div class="col mb-3">
        <div class="card mb-4 rounded-5 shadow-sm text-white h-100 d-flex flex-column justify-content-between" style="background-color: #4AA9AF;">
          <div class="card-header py-3">
            <h3 class="card-title pricing-card-title" style="color: #FFB926;">Inovatif</h3>
            <p class="fw-light">
              Menyelesaikan masalah dengan inovasi terbaru dalam dunia Permotoran
            </p>
          </div>
          <div class="card-body">
            <img src="img/alasan3.png" class="card-img-bottom" alt="...">
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Akhir Alasan -->
  
  


  <!-- Tentang -->
  <section id="about" class="rounded-top-5 text-white pt-5" style="background-color: #081F37;">
    <div class="container p-md-3">
      <div class="row text-center">
        <div class="col">
          <h1 style="color: #FFB926;">Bengkel Kamil Akbar</h1>
          <p class="fw-medium fst-italic">"Siap Melayani Servis Motor dengan Bahagia!"</p>
        </div>
      </div>
      <div class="row justify-content-center fs-5 text-center align-items-center">
        <div class="col-md-3 m-3">
          <img src="img/logoBesar.png" width="240rem" alt="">
        </div>
        <div class="col-md-8">
          <p class="fs-5 fw-lighter" style="text-align: justify;">
            Bengkel Kamil Akbar adalah sebuah bengkel yang dibangun oleh seorang pemuda bernama Yahdiyan Kamil yang siap
            melayani dengan bahagia kepada orang - orang agar mereka dapat nyaman dalam berkendara oleh kendaraanya agar
            selalu bahagia dalam perjalanan.
            Bengkel ini murni memberikan tarif sesuai layanan dan kesesuaian kerusakan yang dialami pengguna tanpa
            tambahan biaya yang tidak perlu sehingga pelanggan dapat bahagia selalu🤩
          </p>
        </div>
      </div>
    </div>
  </section>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#081F37" fill-opacity="1" d="M0,128L17.1,160C34.3,192,69,256,103,261.3C137.1,267,171,213,206,165.3C240,117,274,75,309,80C342.9,85,377,139,411,165.3C445.7,192,480,192,514,213.3C548.6,235,583,277,617,293.3C651.4,309,686,299,720,272C754.3,245,789,203,823,192C857.1,181,891,203,926,224C960,245,994,267,1029,261.3C1062.9,256,1097,224,1131,186.7C1165.7,149,1200,107,1234,128C1268.6,149,1303,235,1337,272C1371.4,309,1406,299,1423,293.3L1440,288L1440,0L1422.9,0C1405.7,0,1371,0,1337,0C1302.9,0,1269,0,1234,0C1200,0,1166,0,1131,0C1097.1,0,1063,0,1029,0C994.3,0,960,0,926,0C891.4,0,857,0,823,0C788.6,0,754,0,720,0C685.7,0,651,0,617,0C582.9,0,549,0,514,0C480,0,446,0,411,0C377.1,0,343,0,309,0C274.3,0,240,0,206,0C171.4,0,137,0,103,0C68.6,0,34,0,17,0L0,0Z"></path>
  </svg>
  <!-- Akhir Tentang -->
  
  
  
  
  <!-- Pengalaman -->
  <section id="pengalaman" class="my-5">
    <h2 class="text-dark text-center">Apa Kata Mereka?</h2>
    <div class="row row-cols-1 row-cols-md-3 m-5 text-center">
      <div class="col mb-3 d-flex justify-content-center">
        <div class="card rounded-3 shadow-sm text-white h-100" style="background-color: #4AA9AF;">
          <div class="card-header py-3">
            <img src="img/orang.png" class="card-img-top" style="background-color: #378489;" alt="...">
          </div>
          <div class="card-body d-flex flex-column justify-content-between">
            <h2 class="card-title pricing-card-title" style="color: #FFB926;">Boy Kennedy</h2>
            <ul class="list-unstyled mt-3 mb-4">
            <p class="fs-6 fw-lighter" style="font-size: 14px;">
              Bengkelnya nyaman harganya murah bikin betah apalagi diberikan teh gratis saat motor diservice!
            </p>
            </ul>
          </div>
        </div>
      </div>
  
      <div class="col mb-3 d-flex justify-content-center">
        <div class="card rounded-3 shadow-sm text-white h-100" style="background-color: #4AA9AF;">
          <div class="card-header py-3">
            <img src="img/orang.png" class="card-img-top" style="background-color: #378489;" alt="...">
          </div>
          <div class="card-body d-flex flex-column justify-content-between">
            <h2 class="card-title pricing-card-title" style="color: #FFB926;">Rafie Senja</h2>
            <ul class="list-unstyled mt-3 mb-5">
              <p class="fs-6 fw-lighter" style="font-size: 14px;">
                Harganya murah jadi selalu langganan setiap mo service disini. Jadi bikin bahagia selalu disini!
              </p>
              </ul>
          </div>
        </div>
      </div>
  
      <div class="col mb-3 d-flex justify-content-center">
        <div class="card rounded-3 shadow-sm text-white h-100" style="background-color: #4AA9AF;">
          <div class="card-header py-3">
            <img src="img/orang.png" class="card-img-top" style="background-color: #378489;" alt="...">
          </div>
          <div class="card-body d-flex flex-column justify-content-between">
            <h2 class="card-title pricing-card-title" style="color: #FFB926;">Themy Abdillah</h2>
            <ul class="list-unstyled mt-3 mb-4">
              <p class="fs-6 fw-lighter">
                Pelayannya ramah banget jadi ketagihan service motor disini dariapada di bengkel resminya soalnya selain harganya terjangkau, bengkelnya berkualitas
              </p>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Akhir Pengalaman -->

  @endsection