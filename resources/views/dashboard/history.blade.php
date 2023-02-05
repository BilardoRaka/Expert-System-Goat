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
    <h5 class="card-header">Riwayat Penggunaan Sistem</h5>
    <div class="card-body">
        <a class="btn btn-dark mb-3 bi bi-printer" target="_blank" href="/printHistory"> Cetak</a>
        <div class="table-responsive col-lg-12">
            <table class="table table-sm table-bordered text-white">
                <thead>
                    <tr>
                        <th scope="col" style="text-align:center;">No.</th>
                        <th scope="col" style="text-align:center;">Nama</th>
                        <th scope="col" style="text-align:center;">Umur</th>
                        <th scope="col" style="text-align:center;">Penyakit</th>
                        <th scope="col" style="text-align:center;">Waktu</th>
                        <th scope="col" style="text-align:center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($histories as $history)
                    <tr>
                        <td align="center">{{ $histories->firstItem()+$loop->index }}</td>
                        <td align="left">{{ $history->peternak->nama }}</td>
                        <td align="right">{{ $history->peternak->umur }} Tahun</td>
                        <td align="left">{{ $history->penyakit->penyakit }}</td>
                        <td align="right">{{ $history->created_at }}</td>
                        <td align="center">
                            <form action="/history/{{ $history->id }}/delete" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-dark bi bi-x-circle border-0" onclick="return confirm('Anda yakin untuk hapus riwayat sistem ini?')">
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
{{ $histories->links() }}

@endsection