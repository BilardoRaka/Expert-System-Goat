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
    <h5 class="card-header">Feedback Pengguna Sistem</h5>
    <div class="card-body">
        <div class="table-responsive col-lg-12">
            <table class="table table-sm table-bordered text-white">
                <thead>
                    <tr>
                        <th scope="col" style="text-align:center;">No.</th>
                        <th scope="col" style="text-align:center;">Nama</th>
                        <th scope="col" style="text-align:center;">Umur</th>
                        <th scope="col" style="text-align:center;">Feedback</th>
                        <th scope="col" style="text-align:center;">Waktu</th>
                        <th scope="col" style="text-align:center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($feedbacks as $feedback)
                    <tr>
                        <td align="center" style="vertical-align: middle">{{ $feedbacks->firstItem()+$loop->index }}</td>
                        <td align="left" style="vertical-align: middle">{{ $feedback->peternak->nama }}</td>
                        <td align="right" style="vertical-align: middle">{{ $feedback->peternak->umur }} Tahun</td>
                        <td align="left" style="vertical-align: middle">{!! $feedback->feedback !!}</td>
                        <td align="right" style="vertical-align: middle">{{ $feedback->created_at }}</td>
                        <td align="center" style="vertical-align: middle">
                            <form action="/feedback/{{ $feedback->id }}/delete" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-dark bi bi-x-circle border-0" onclick="return confirm('Anda yakin untuk hapus feedback ini?')">
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
{{ $feedbacks->links() }}

@endsection