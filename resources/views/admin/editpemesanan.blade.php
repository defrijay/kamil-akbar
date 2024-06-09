
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

                  <div class="table-responsive-md">
                    <table class="table table-striped caption-top align-middle" id="kontak">
                      <h1 class="text-black">Data Pemesanan</h1>
                      <thead>
                        <tr>
                          <th scope="col">Nama Lengkap</th>
                          <th scope="col">Nomor Telepon</th>
                          <th scope="col">Alamat Email</th>
                          <th scope="col">Tipe Motor</th>
                          <th scope="col">Merk Motor</th>
                          <th scope="col">Nama Paket</th>
                          <th scope="col">STNK</th>
                          <th scope="col">Keluhan</th>
                          <th scope="col">Jadwal Servis</th>
                          <th scope="col">Pukul</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                        <form action="/pemesanan/{{$pemesanan->id_pemesanan}}" method="POST">
                        @method('put')
                        @csrf
                          <td><input type="text" name="nama_pengirim" placeholder="Nama Pengirim" value="{{$pemesanan->nama_pelanggan}}"></td>
                          <td><input type="text" name="email_pengirim" placeholder="E-mail Pengirim" value="{{$pemesanan->no_telp}}"></td>
                          <td><input type="text" name="email_pengirim" placeholder="E-mail Pengirim" value="{{$pemesanan->alamat_pelanggan}}"></td>
                          <td><input type="text" name="email_pengirim" placeholder="E-mail Pengirim" value="{{$pemesanan->tipe_motor}}"></td>
                          <td><input type="text" name="email_pengirim" placeholder="E-mail Pengirim" value="{{$pemesanan->merk_motor}}"></td>
                          <td><input type="text" name="email_pengirim" placeholder="E-mail Pengirim" value="{{$pemesanan->nama_paket}}"></td>
                          <td><input type="text" name="email_pengirim" placeholder="E-mail Pengirim" value="{{$pemesanan->stnk}}"></td>
                          <td><input type="text" name="email_pengirim" placeholder="E-mail Pengirim" value="{{$pemesanan->keluhan}}"></td>
                          <td><input type="text" name="email_pengirim" placeholder="E-mail Pengirim" value="{{$pemesanan->jadwal}}"></td>
                          <td><input type="text" name="email_pengirim" placeholder="E-mail Pengirim" value="{{$pemesanan->jam}}"></td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
            <input class="btn btn-success" type="submit" name="submit" value="Update">
        </form>
          </div>
      </div>
    </div>
    </div>
  </div>

