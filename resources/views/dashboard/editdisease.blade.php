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
    <h5 class="card-header">Ubah Solusi Penyakit Kambing</h5>
    <div class="card-body">
        <div class="col-lg-9">
            <form method="post" action="/disease/{{ $penyakit[0]->id }}/update">
            @csrf
                <div class="mb-3">    
                    <label for="penyakit" class="form-label">Nama Penyakit :</label>
                    <input type="text" name="penyakit" class="form-control" value="{{ $penyakit[0]->penyakit }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="solusi" class="form-label">Penanganan :</label>
                    <input id="x" value="{!! $penyakit[0]->solusi !!}" type="hidden" name="content">
                    <trix-editor trix-attachment-remove input="x"></trix-editor>
                @error('solusi')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
                </div>
                <button type="submit" class="btn btn-dark">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection