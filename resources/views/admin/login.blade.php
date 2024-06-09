@extends('layouts.main');
@section('container');

<link rel="stylesheet" href="css/style-login.css">

<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden mt-5">

  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          Bengkel <br/>
          <span style="color: hsl(218, 81%, 75%)">Kamil Akbar</span>
        </h1>
        <p class="mb-4 opacity-70 fw-light" style="color: hsl(218, 81%, 85%)">
        Login Khusus Admin Yaa!
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <!-- Form Pendaftaran -->
        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <form action="/admin/login" method="POST">
            @csrf
              <!-- Email input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3">Alamat Email</label>
                <input type="email" id="form3Example3" class="form-control" name="email" placeholder="Masukkan E-mail" />
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                  <label class="form-label" for="password">Password</label>
                  <input type="password" id="password" class="form-control" name="password" placeholder="Masukkan Password"/>
              </div>
              <!-- Submit Button -->
              <button type="submit" name="submit" class="btn text-white" style="background-color: #1E549F;">Login</button>
            </form>
          </div>
        </div>
        <!-- Akhir Form Pendafataran -->

      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->

@endsection