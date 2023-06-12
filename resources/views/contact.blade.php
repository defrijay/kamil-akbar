<title>Bengkel Kamil Akbar | {{ $title }}</title>
@extends('layouts.main')
@section('container')
        <!-- contact -->
        <br><br>
          <section id="contact">
            <div class="container p-5 my-5 rounded-3" style="background-color: #4AA9AF;">
              <div class="row text-center mb-3">
                <div class="col">
                  <h2 style="color: #FFB926;">Contact Me</h2>
                  <p class="text-white fw-lighter">Apabila Kamu Mempunyai Pendapat dan Tertarik Kamu Dapat Menghubungi Kontak di Bawah ini!</p>
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
                      <label for="email" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="email" aria-describedby="email" style="background-color: #D9D9D9;">
                    </div>
                    
                    <div class="mb-3">
                      <label for="pesan" class="form-label">Pesan</label>
                      <textarea class="form-control" style="background-color: #D9D9D9;" id="pesan" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn text-white" style="background-color: #1E549F">Kirim</button>
                    <button type="reset" class="btn text-white" style="background-color: #1E549F;">Reset</button>
                  </form>
                    </div>
                </div>
               </div>
          </section>
        <!-- Akhir Contact -->
        @endsection