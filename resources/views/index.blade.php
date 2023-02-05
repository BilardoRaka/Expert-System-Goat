@extends('inc.main')
@extends('inc.navbar')
@section('container')
<div class="row">
  <div class="col-lg-3">
  </div>
  @if(session()->has('sukses'))
    <div class="alert alert-success col-lg-6 justify-content-center text-center" role="alert">
      {{ session('sukses') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @elseif(session()->has('gagal'))
    <div class="alert alert-danger col-lg-6 justify-content-center text-center" role="alert">
      {{ session('gagal') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
</div> 
    <main role="main">
        <!-- Carousel -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{url('/images/bg-3.png')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: black">Selamat Datang!</h5>
                        <p style="color: black">Silahkan gunakan sistem ini untuk mendiagnosa penyakit dari kambing anda.</p>
                        @guest
                        <p><button type="button" class="btn btn-dark" data-target="#userTester" data-toggle="modal" data-whatever="@getbootstrap">Mulai</button></p>
                        @endguest
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{url('/images/bg-4.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: black">Getting Started</h5>
                        <p style="color: black">Anda dapat memulai dengan menekan tombol mulai.</p>
                        @guest
                        <p><button type="button" class="btn btn-dark" data-target="#userTester" data-toggle="modal" data-whatever="@getbootstrap">Mulai</button></p>
                        @endguest
                    </div>
                </div>
                <div class="carousel-item">
                  <img src="{{url('/images/bg-1.jpg')}}" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5 style="color: black">Sistem Pakar Diagnosa Penyakit Kambing</h5>
                    <p style="color: black">Dibuat untuk memenuhi tugas skripsi akhir.</p>
                    @guest
                    <p><button type="button" class="btn btn-dark" data-target="#userTester" data-toggle="modal" data-whatever="@getbootstrap">Mulai</button></p>
                    @endguest
                  </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div><!-- Carousel -->

      <!---------------- MODAL ----------------->
      <div class="modal fade" id="userTester" tabindex="-1" role="dialog" aria-labelledby="userTesterLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="userTesterLabel">Identitas User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/prediagnosa" method="post">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nama :</label>
                  <input type="text" name="nama" class="form-control" placeholder="isikan nama anda" required autofocus >
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Umur :</label>
                  <input type="number" name="umur" class="form-control col-sm-8" placeholder="isikan umur anda" required >
                  <input type="hidden" name="id" value="G001">
                </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-dark">Lanjut</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="container marketing">
        <div class="row justify-content-center">
          <div class="col-lg-4 bg-success text-white">
            <img class="mt-2" style="display:inline-block;border-radius:50%;object-fit:cover;" src="{{url('/images/USER.jpeg')}}" alt="..." width="200" height="200" class="img-fluid">
            <h3 style="text-align: center">Muhamad Bukhori</h3>
            <small>
              <p style="text-align: center">180511016<br>Universitas Muhammadiyah Cirebon
              </p>
            </small>
            <p style="text-align: justify">Saya merupakan mahasiswa akhir Universitas Muhammadiyah Cirebon. Saya membuat sistem ini guna memenuhi tugas akhir saya berupa skripsi S1 Teknik Informatika.</p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </main>
@endsection