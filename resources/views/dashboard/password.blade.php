@extends('inc.main')
@extends('inc.navbar')
@section('container')
<div class="row">
    <div class="col-lg-4">
    </div>
    @if(session()->has('sukses'))
      <div class="alert alert-success col-lg-4 justify-content-center" role="alert">
        {{ session('sukses') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @elseif(session()->has('gagal'))
      <div class="alert alert-danger col-lg-4 justify-content-center" role="alert">
        {{ session('gagal') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
</div> 
<div class="card text-white bg-success mb-3">
    <h5 class="card-header">Ubah Password</h5>
    <div class="card-body justify-content-center">
        <div class="col-lg-6">
            <form method="post" action="/passchange">
            @csrf
                <div class="mb-3">    
                    <label for="oldPassword" class="form-label">Password Lama</label>
                    <input type="password" name="oldPassword" class="form-control @error('oldPassword') is-invalid @enderror" placeholder="Password Lama" required autofocus>
                    @error('oldPassword')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="newPassword" class="form-label">Password Baru</label>
                <input type="password" name="newPassword" class="form-control @error('newPassword') is-invalid @enderror" placeholder="Password Baru" required>
                @error('newPassword')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
                </div>
                <button type="submit" class="btn btn-dark">Ganti Password</button>
            </form>
        </div>
    </div>
</div>

@endsection