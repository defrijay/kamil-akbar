@extends('layouts.main')
@section('container')

<link rel="stylesheet" href="css/style-login.css">

<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">

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
            <form action="" method="">
                
              <!-- Email input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="username">Username</label>
                <input type="text" id="username" class="form-control" />
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                  <label class="form-label" for="password">Password</label>
                  <input type="password" id="password" class="form-control"/>
              </div>

              <!-- Submit Button -->
              <button type="submit" class="btn btn-primary btn-block mb-4">
                Login
              </button>
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