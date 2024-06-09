
<title>Bengkel Kamil Akbar | {{ $title }}</title>
<!-- Link Boostrap dan Link Css-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <div class="b-example-divider b-example-vr"></div>
  
  <!-- Navbar -->
    <nav class="navbar text-white" style="background: linear-gradient(90deg, #1E549F 0%, #081F37 100%);">
      <div class="container ms-3">
        <a class="navbar-brand" href="#">
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
                    <a href="#" class="nav-link ">
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
                <p>Disini tempat pengelolaan data - data</p>

                  <div class="table-responsive-md">
                    
                    <table class="table table-striped caption-top align-middle" id="kontak">
                      <h1 class="text-black">Data Kontak</h1>
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nama Lengkap</th>
                          <th scope="col">Alamat Email</th>
                          <th scope="col">Pesan</th>
                          <th colspan="2" scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($pesan as $p)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$p->nama_pengirim}}</td>
                          <td>{{$p->email_pengirim}}</td>
                          <td>{{$p->pesan}}</td>
                          <td><form action="/pesan/{{$p->id_pesan}}/editpesan">
                            <input class="btn btn-warning" type="submit" value="Edit" />
                              </form></td>
                          <td>
                            <form action="/pesan/{{$p->id_pesan}}" method="POST">
                                  @csrf
                                  @method('delete')
                                  <input class="btn btn-danger" type="submit" value="Delete">
                              </form>
                              <td>
                        </tr>
                        
                        @endforeach
                      </tbody>
                    </table>
                    
                    <table class="table table-striped caption-top align-middle" id="paket">
                      <h1 class="text-black">Data Paket</h1>
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nama Paket</th>
                          <th scope="col">Harga</th>
                          <th colspan="2" scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($paket as $pak)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$pak->nama_paket}}</td>
                          <td>{{$pak->harga}}</td>
                          <td><form action="/paket/{{$pak->id_paket}}/editpaket">
                            <input class="btn btn-warning" type="submit" value="Edit" />
                              </form></td>
                          <td>
                            <form action="/paket/{{$pak->id_paket}}" method="POST">
                            @csrf
                            @method('delete')
                              <input class="btn btn-danger" type="submit" value="Delete">
                            </form>
                          <td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    
                    <table class="table table-striped caption-top align-middle" id="paket">
                      <h1 class="text-black">Data Pelanggan</h1>
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nama Pelanggan</th>
                          <th scope="col">Nomor Telepon</th>
                          <th scope="col">Alamat Pelanggan</th>
                          <th colspan="2" scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($pelanggan as $p)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$p->nama_pelanggan}}</td>
                          <td>{{$p->no_telp}}</td>
                          <td>{{$p->alamat_pelanggan}}</td>
                          <td><form action="/pelanggan/{{$p->id_pelanggan}}/editpelanggan">
                            <input class="btn btn-warning" type="submit" value="Edit" />
                              </form></td>
                          <td>
                            <form action="/pelanggan/{{$p->id_pelanggan}}" method="POST">
                            @csrf
                            @method('delete')
                              <input class="btn btn-danger" type="submit" value="Delete">
                            </form>
                          <td>
                        </tr>
                        <? $no++; ?>
                        @endforeach
                      </tbody>
                    </table>
                    
                    <table class="table table-striped caption-top align-middle" id="paket">
                      <h1 class="text-black">Data Motor</h1>
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nama Pemilik</th>
                          <th scope="col">Jenis Motor</th>
                          <th scope="col">Merk Motor</th>
                          <th colspan="2" scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($motor as $m)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$m->nama_pelanggan}}</td>
                          <td>{{$m->tipe_motor}}</td>
                          <td>{{$m->merk_motor}}</td>
                          <td><form action="/motor/{{$m->id_motor}}/editmotor">
                            <input class="btn btn-warning" type="submit" value="Edit" />
                          </form></td>
                          <td>
                          <form action="/motor/{{$m->id_motor}}" method="POST">
                            @csrf
                            @method('delete')
                            <input class="btn btn-danger" type="submit" value="Delete">
                          </form>
                          <td>
                              </tr>
                        @endforeach
                      </tbody>
                    </table>
                    
                    <table class="table table-striped caption-top text-center align-middle" id="kustomer">
                      <h1 class="text-black ">Data Pemesanan</h1>
                      <thead class="vert">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nama Lengkap</th>
                          <th scope="col">Nomor Telepon</th>
                          <th scope="col">Alamat E-mail</th>
                          <th scope="col">Tipe Motor</th>
                          <th scope="col">Merk Motor</th>
                          <th scope="col">Pilihan Paket</th>
                          <th scope="col">Foto STNK</th>
                          <th scope="col">Keluhan</th>
                          <th scope="col">Jadwal</th>
                          <th scope="col">Jam</th>
                          <th colspan="2" scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($pemesanan as $pe)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$pe->nama_pelanggan}}</td>
                          <td>{{$pe->no_telp}}</td>
                          <td>{{$pe->alamat_pelanggan}}</td>
                          <td>{{$pe->tipe_motor}}</td>
                          <td>{{$pe->merk_motor}}</td>
                          <td>{{$pe->nama_paket}}</td>
                          <td>{{$pe->stnk}}</td>
                          <td>{{$pe->keluhan}}</td>
                          <td>{{$pe->jadwal}}</td>
                          <td>{{$pe->jam}}</td>
                          <td><form action="/pemesanan/{{$pe->id_pemesanan}}/editpemesanan">
                            <input class="btn btn-warning" type="submit" value="Edit" />
                          </form></td>
                          <td>
                          <form action="/pemesanan/{{$pe->id_pemesanan}}" method="POST">
                            @csrf
                            @method('delete')
                            <input class="btn btn-danger" type="submit" value="Delete">
                          </form>
                          <td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
          </div>
        </div>
    </div>
    </div>
  </div>

