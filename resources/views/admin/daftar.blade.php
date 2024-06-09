@extends('layouts.main')
@section('container')

<link rel="stylesheet" href="css/style-login.css">

<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden mt-5">
  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">

        <!-- Judul daftar -->
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          Bengkel <br/>
          <span style="color: hsl(218, 81%, 75%)">Kamil Akbar</span>
        </h1>
        <p class="mb-4 opacity-70 fw-light" style="color: hsl(218, 81%, 85%)">
          Sebelum Pesan Login dulu yu!
        </p>
      </div>
    <!-- Akhir Judul daftar -->

    <!-- Gambar Backgorund -->
      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
    <!-- Akhir Gambar Backgorund -->

    <!-- Form Pendaftaran -->
        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <form action="" method="">

              <!-- Email input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3">Alamat Email</label>
                <input type="email" id="form3Example3" class="form-control" required />
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                  <label class="form-label" for="password">Password</label>
                  <input type="password" id="password" class="form-control" required />
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                  <label class="form-label" for="password2">Konfirmasi Password</label>
                  <input type="password" id="password2" class="form-control" required />
              </div>
              
              <!-- Konfirmasi -->
              <div class="form-outline mb-4">
                <input type="checkbox" id="checkbox" required>
                <label for="checkbox" required>Email dan Password yang Saya isi Sudah Benar</label>
              </div>

              <!-- Daftar Button -->
              <button type="submit" class="btn btn-primary btn-block mb-4">
                Daftar
              </button>

            </form>
          </div>
        </div>
        <!-- Form Pendaftaran -->

      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->

@endsection