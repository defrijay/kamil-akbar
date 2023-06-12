<!-- Navbar Section-->
  <nav class="navbar navbar-expand-lg py-2 bg-body-tertiary navbar-dark shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img class="logo" src="img/logo.png" height="50px" alt="">Bengkel Kamil Akbar
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Form") ? 'active' : '' }}" href="/form">Servis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Paket Servis") ? 'active' : '' }}" href="#paket-servis">Paket Servis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Kontak") ? 'active' : '' }}" href="/kontak">Kontak</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-outline-light text-white rounded-5" href="/login">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Nabar Section -->