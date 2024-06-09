
<title>Bengkel Kamil Akbar | {{ $title }}</title>
<!-- Link Boostrap dan Link Css-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <div class="b-example-divider b-example-vr"></div>
  
  <!-- Navbar -->
    <nav class="navbar text-white" style="background: linear-gradient(90deg, #1E549F 0%, #081F37 100%);">
      <div class="container ms-3">
        <a class="navbar-brand" href="/admin">
          <img src="img/logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
          <span class="text-white">Bengkel Kamil Akbar</span>
        </a>
      </div>
    </nav>
  <!-- Akhir Navbar -->
  
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3" style="background: linear-gradient(90deg, #1E549F 0%, #081F37 100%);">
              <!-- SideBar -->
              <div class="d-flex flex-column p-3">
                <ul class="nav nav-pills flex-column mb-auto">
                  <li class="nav-item">
                    <a href="/admin" class="nav-link ">
                      <i class="bi bi-house-fill"></i>
                      Dashboard
                    </a>
                  
                  <hr>

                  <li>
                    <a href="/admin/logout" class="nav-link text-white">
                      <i class="bi bi-box-arrow-left"></i>
                      Logout Admin
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Akhir SideBar -->

          <div class="col-md-9 p-5">
                <h1>Selamat Datang di Page Admin!</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus illo, doloribus ea vitae eum accusamus
                  aut alias quaerat dolor sequi exercitationem numquam laborum? Quod vero laboriosam fugit quibusdam eius
                  maxime!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident saepe deleniti temporibus aliquid
                  maiores nulla cumque odit aperiam asperiores recusandae fugit beatae iure molestias, odio quibusdam
                  repellendus hic reprehenderit? Impedit!</p>

                  <div class="table-responsive-md">
                    <table class="table table-striped caption-top align-middle" id="kontak">
                      <h1 class="text-black">Data Kontak</h1>
                      <thead>
                        <tr>
                          <th scope="col">Nama Lengkap</th>
                          <th scope="col">Alamat Email</th>
                          <th scope="col">Pesan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                        <form action="/pelanggan/{{$pelanggan->id_pelanggan}}" method="POST">
                        @method('put')
                        @csrf
                          <td><input type="text" name="nama_pelanggan" placeholder="Nama pelanggan" value="{{$pelanggan->nama_pelanggan}}"></td>
                          <td><input type="text" name="no_telp" placeholder="Nomor Telepon" value="{{$pelanggan->no_telp}}"></td>
                          <td><input type="text" name="alamat_pelanggan" placeholder="Alamat Pelanggan" value="{{$pelanggan->alamat_pelanggan}}"></td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
            <input type="submit" name="submit" value="Update">
        </form>
          </div>
      </div>
    </div>
    </div>
  </div>

