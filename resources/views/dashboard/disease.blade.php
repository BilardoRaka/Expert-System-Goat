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
<div class="card text-white bg-success mb-3">
    <h5 class="card-header">Daftar Penyakit Kambing</h5>
    <div class="card-body">
        <div class="table-responsive col-lg-12">
            <table class="table table-sm table-bordered text-white">
                <thead>
                    <tr>
                        <th scope="col" style="text-align:center;">No.</th>
                        <th scope="col" style="text-align:center;">Penyakit</th>
                        <th scope="col" style="text-align:center;">Gejala</th>
                        <th scope="col" style="text-align:center;">Solusi</th>
                        <th scope="col" style="text-align:center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($diseases as $disease)
                        <tr>
                            <td align="center">{{ $loop->iteration }}</td>
                            <td align="left">{{ $disease->penyakit }}</td>
                            <td align="left">
                                @php
                                    $symptoms = $logika->where('penyakit_id',$disease->id)->all();   
                                @endphp
                                <ol>
                                    @foreach($symptoms as $symptom)
                                        @php
                                            $asik = $gejala->where('id', $symptom->gejala_id)->value('gejala');
                                        @endphp    
                                        <li>{{ $asik }}</li>
                                    @endforeach
                                </ol>
                            </td>
                            <td align="left">{!! $disease->solusi !!}</td>
                            <td align="center">
                                <a href="/disease/{{ $disease->id }}/edit" class="badge bg-dark border-0"><i class="bi bi-pencil-square"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection