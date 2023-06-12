<title>Bengkel Kamil Akbar | {{ $title }}</title>
    @extends('layouts.main')
    @section('container')

    <div id="myCarousel" class="carousel slide rounded-bottom-5 mt-5" data-bs-ride="carousel" style="background-color: #081F37;">
      <div class="row text-center pt-5">
        <h1 class="fw-bold fs-1" style="color: #FFB926;">Pilihan Paket Paket Servis</h1>
        <p class="text-white fw-light fs-5">Pilihlah Paket Servis Sesuai Selera Anda!</p>
      </div>

      <!-- Paket Servis -->
      <ol class="carousel-indicators">
        <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
      </ol>
  
      <!-- Slides -->
      <div class="carousel-inner rounded-bottom-5" style="background-color: #081F37;">
        <div class="carousel-item active">
          <div class="row p-5">
            <div class="col">
              <div class="card text-white text-center rounded-5 p-4" style="background-color: #4AA9AF;">
                  <h2 class="card-title text-center" style="color: #FFB926;">Paket Servis Bahagia</h2>
                  <h3 class="card-subtitle mb-2 text-center" style="color: #FFE500;">Rp.300.000,00.</h3>
                <div class="card-body mx-auto">
                        <ul class="text-start">
                          <li>Pemeriksaan dan Perawatan Rutin</li>
                          <li>Pergantian Oli Mesin</li>
                          <li>Pemeriksaan Filter Udara</li>
                          <li>Pergantian Busi</li>
                          <li>Pengecekan Sistem Pembakaran</li>
                          <li>Pengetesan Rem</li>
                          <li>Pengecekan Sistem Kelistrikan</li>
                          <li>Pengecekan Ban</li>
                        </ul>
                </div>
              </div>
            </div>
  
            <div class="col">
              <div class="card text-white text-center rounded-5 p-4" style="background-color: #4AA9AF;" >
                  <h2 class="card-title text-center" style="color: #FFB926;">Paket Servis Super Bahagia</h2>
                  <h3 class="card-subtitle mb-2 text-center" style="color: #FFE500;">Rp.450.000,00.</h3>
                <div class="card-body">
                  <ul class="text-start">
                    <li>Pemeriksaan dan Perawatan Rutin</li>
                    <li>Pemeriksaan dan Perawatan Rutin</li>
                    <li>Pergantian Oli Mesin</li>
                    <li>Pemeriksaan Filter Udara</li>
                    <li>Pergantian Busi</li>
                    <li>Pengecekan Sistem Pembakaran</li>
                    <li>Pengetesan Rem</li>
                    <li>Pengecekan Sistem Kelistrikan</li>
                    <li>Pengecekan Ban</li>
                    <li>Pergantian Komponen Lebih Mendalam seperti Kopling, rantai transmisi, shock absorber, sistem pendingin, sistem bahan bakar.</li>
                  </ul>
                </div>
              </div>
            </div>
  
            <div class="col">
              <div class="card text-white text-center rounded-5 p-4" style="background-color: #4AA9AF;">
                  <h2 class="card-title text-center" style="color: #FFB926;">Paket Servis Tune-Up Bahagia</h2>
                  <h3 class="card-subtitle mb-2 text-center" style="color: #FFE500;">Rp. 200.000,00.</h3>
                <div class="card-body mx-auto">
                  <ul class="text-start">
                    <li>Pembersihan Karburator & Sistem Injeksi</li>
                    <li>Penyetelan Klep</li>
                    <li>Pengecekan dan Perbaikan Sistem Pengapian</li>
                    <li>Peningkatan pengaturan mesin</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="carousel-item">
          <div class="row p-5">
            <div class="col">
              <div class="card text-white text-center rounded-5 p-4" style="background-color: #4AA9AF;">
                  <h2 class="card-title text-center" style="color: #FFB926;">Paket Servis Ban Bahagia</h2>
                  <h3 class="card-subtitle mb-2 text-center" style="color: #FFE500;">Rp. 150.000,00.</h3>
                <div class="card-body mx-auto">
                  <ul class="text-start">
                    <li>Pemeriksaan Tekanan Udara Ban</li>
                    <li>Pengecekan Keausan dan Kerusakan</li>
                    <li>Pengecekan dan Penyetelan Keseimbangan Roda</li>
                </ul>
                </div>
              </div>
            </div>
  
            <div class="col">
              <div class="card text-white text-center rounded-5 p-4" style="background-color: #4AA9AF;">
                  <h2 class="card-title text-center" style="color: #FFB926;">Paket Servis Rem Bahagia</h2>
                  <h3 class="card-subtitle mb-2 text-center" style="color: #FFE500;">Rp. 150.000,00.</h3>
                <div class="card-body mx-auto">
                  <ul class="text-start">
                    <li>Perawatan Sistem Rem</li>
                    <li>Penggantian Kampas Rem</li>
                    <li>Pengecekan Keausan Pada Cakram</li>
                    <li>Penyetelan Sistem Rem</li>
                    <li>Penggantian Cairam Rem</li>
                </ul>
                </div>
              </div>
            </div>
  
            <div class="col">
              <div class="card text-white text-center rounded-5 p-4" style="background-color: #4AA9AF;">
                  <h2 class="card-title text-center" style="color: #FFB926;">Paket Servis Bahagia</h2>
                  <h3 class="card-subtitle mb-2 text-center" style="color: #FFE500;">Rp.300.000,00.</h3>
                <div class="card-body mx-auto">
                  <ul class="text-start">
                    <li>Pemeriksaan dan Perawatan Rutin</li>
                    <li>Pergantian Oli Mesin</li>
                    <li>Pemeriksaan Filter Udara</li>
                    <li>Pergantian Busi</li>
                    <li>Pengecekan Sistem Pembakaran</li>
                    <li>Pengetesan Rem</li>
                    <li>Pengecekan Sistem Kelistrikan</li>
                    <li>Pengecekan Ban</li>
                  </ul>
                </div>
              </div>
            </div>
  
          </div>
        </div>
      </div>
  
      <!-- Controls -->
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
  
    <!-- Akhir Paket Servis -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
          <!-- contact -->
          <section id="form">
            <div class="container py-5 rounded-3" style="background-color: #4AA9AF;">
              <div class="row text-center mb-3">
                <div class="col">
                  <h2 style="color: #FFB926;">Form Pemesanan Servis</h2>
                  <p class="text-white fw-lighter">Apabila Kamu Tertarik Isilah dengan Benar dan Bahagia!</p>
                </div>
              </div>

              <div class="row justify-content-center">
                <div class="col-md-6" >
                  <form class="text-white">

                    <div class="mb-3">
                      <label for="name" class="form-label">Nama Lengkap</label>
                      <input type="name" class="form-control" id="name" aria-describedby="name" style="background-color: #D9D9D9;">
                    </div>

                    <div class="mb-3">
                        <label for="nomor" class="form-label">Nomor Telepon</label>
                        <input type="number" class="form-control" id="nomor" aria-describedby="name" style="background-color: #D9D9D9;">
                      </div>

                    <div class="mb-3">
                        <label for="jenisKelamin" class="form-label">Jenis Kelamin</label> <br>
                          <div class="form-check form-check-inline" id="jenisKelamin">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Laki - Laki</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                          </div>
                    </div>

                    <div class="mb-3">
                      <label for="email" class="form-label">Alamat Email</label>
                      <input type="email" class="form-control" id="email" aria-describedby="email" style="background-color: #D9D9D9;">
                    </div>

                    <label for="pilihan">Tipe Kendaraan</label>
                      <select class="form-select" id="pilihan" style="background-color: #D9D9D9;" aria-label="Default select example">
                          <option selected>Pilih Tipe Kendaraan</option>
                          <option value="1">Motor Bebek</option>
                          <option value="2">Sekuter Matik</option>
                          <option value="3">Motor Gede</option>
                          <option value="4">Motor Sport</option>
                          <option value="5">Motor Trail</option>
                        </select><br>

                    <label for="pilihan">Merk Kendaraan</label>
                    <select class="form-select" id="pilihan" style="background-color: #D9D9D9;" aria-label="Default select example">
                        <option selected>Pilih Merk Kendaraan</option>
                        <option value="1">Honda</option>
                        <option value="2">Suzuki</option>
                        <option value="3">Yamaha</option>
                        <option value="4">Kawasaki</option>
                        <option value="5">Ducatti</option>
                        <option value="6">Vespa</option>
                      </select><br>

                    <label for="pilihan">Pilihan Paket</label>
                    <select class="form-select" id="pilihan" style="background-color: #D9D9D9;" aria-label="Default select example">
                        <option selected>Pilih Paket</option>
                        <option value="1">Paket Servis Bahagia</option>
                        <option value="2">Paket Servis Super Bahagia</option>
                        <option value="3">Paket Servis Tune-Up Bahagia</option>
                        <option value="4">Paket Servis Ban Bahagia</option>
                        <option value="5">Paket Servis Rem Bahagia</option>
                      </select><br>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload STNK</label>
                        <input class="form-control" type="file" id="formFile" style="background-color: #D9D9D9;">
                      </div>
                    
                    <div class="mb-3">
                      <label for="pesan" class="form-label">Keluhan</label>
                      <textarea class="form-control" style="background-color: #D9D9D9;" id="pesan" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn" style="background-color: #1E549F; color: #FFE500;">Kirim</button>
                    <button type="reset" class="btn text-white" style="background-color: #1E549F;">Reset</button>
                  </form>
                    </div>
                </div>
               </div>
          </section>
      <!-- Akhir Contact -->


@endsection
