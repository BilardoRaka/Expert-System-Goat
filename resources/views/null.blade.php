@extends('inc.main')
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <a class="navbar-brand" href="/">
    <img src="{{url('/images/goat.png')}}" height="25" class="d-inline-block align-top" alt="">
        <small>
            SPDP Kambing
        </small>
    </a>
</nav>
@section('container')
<div class="card text-white bg-success mb-3">
    <h5 class="card-header">Hasil Diagnosis</h5>
    <div class="card-body text-center">
        <p><b>Halo {{ $nama }} ({{ $umur }} Tahun), mohon maaf sistem tidak dapat mendiagnosa penyakit kambing anda dari data yang diberikan. <i class="bi bi-emoji-frown"></i></b></p>
        <a href="/" class="btn btn-dark nav-link">Kembali ke Menu Awal</a>
    </div>
</div>
<div class="card text-white bg-success mb-3">
    <h5 class="card-header">Feedback</h5>
    <div class="card-body">
        <p>Silahkan berikan feedback anda untuk perkembangan sistem ini <i class="bi bi-emoji-smile"></i></p>
        <div class="col-lg-9">
            <form method="post" action="/feedback">
            @csrf
                <input type="hidden" name="nama" value="{{ $nama }}">
                <input type="hidden" name="umur" value="{{ $umur }}">
                <input id="x" type="hidden" name="content">
                <trix-editor trix-attachment-remove input="x"></trix-editor>
                <button type="submit" class="mt-3 btn btn-dark">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection