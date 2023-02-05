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
    <h5 class="card-header">Pertanyaan Diagnosis</h5>
    <div class="card-body text-center">
        <p>Halo {{ $nama }} ({{ $umur }} tahun)</p>
        <p>Apakah kambing anda memiliki gejala <uppercase>{{ strtolower($gejala[0]->gejala) }}?</p>
        @if(substr( $gejala[0]->ya, 0, 1 ) != 'P')
        <form method="post" class="d-inline" action="/prediagnosa/{{ $gejala[0]->ya }}">
            @csrf
            <input type="hidden" name="nama" value="{{ $nama }}">
            <input type="hidden" name="umur" value="{{ $umur }}">
            <button type="submit" class="btn col-sm-1 mrg btn-lg btn-outline-light">Ya</button>
        </form>
        @else
        <form method="post" class="d-inline" action="/postdiagnosa/{{ $gejala[0]->ya }}">
            @csrf
            <input type="hidden" name="nama" value="{{ $nama }}">
            <input type="hidden" name="umur" value="{{ $umur }}">
            <button type="submit" class="btn col-sm-1 mrg btn-lg btn-outline-light">Ya</button>
        </form>
        @endif
        @if($gejala[0]->tidak != "XXX")
        <form method="post" class="d-inline" action="/prediagnosa/{{ $gejala[0]->tidak }}">
            @csrf
            <input type="hidden" name="nama" value="{{ $nama }}">
            <input type="hidden" name="umur" value="{{ $umur }}">
            <button type="submit" class="btn col-sm-1 mrg btn-lg btn-outline-light">Tidak</button>
        </form>
        @else
        <form method="post" class="d-inline" action="/nulldiagnosa">
            @csrf
            <input type="hidden" name="nama" value="{{ $nama }}">
            <input type="hidden" name="umur" value="{{ $umur }}">
            <button type="submit" class="btn col-sm-1 mrg btn-lg btn-outline-light">Tidak</button>
        </form>
        @endif
    </div>
    <div class="card-footer text-center">
        <a href="/" class="btn btn-dark nav-link">Kembali ke Menu Awal</a>
    </div>
</div>
@endsection