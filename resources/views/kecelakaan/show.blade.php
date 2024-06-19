@extends('kecelakaan.layout')

@section('content')
<link rel="stylesheet" href="/css/kecelakaan.css">
<div class="container mt-5">
    <div class="row" style="margin-top:12%;">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h2 class="mb-0">Detail Kecelakaan</h2>
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tr>
                            <th>Lokasi</th>
                            <td>{{ $kecelakaan->lokasi }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal</th>
                            <td>{{ $kecelakaan->tanggal }}</td>
                        </tr>
                        <tr>
                            <th>Korban</th>
                            <td>{{ $kecelakaan->korban }}</td>
                        </tr>
                        <tr>
                            <th>Bukti</th>
                            <td>
                                @if($kecelakaan->bukti)
                                    <img src="{{ asset('storage/' . $kecelakaan->bukti) }}" width="100" alt="Bukti Kecelakaan" class="img-fluid rounded">
                                @else
                                    Tidak ada bukti
                                @endif
                            </td>
                        </tr>
                    </table>
                    <a href="{{ route('kecelakaan.index') }}" class="btn btn-secondary mt-3" style="background-color:#1565c0;">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
