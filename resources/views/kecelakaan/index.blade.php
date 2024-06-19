@extends('kecelakaan.layout')
<a href="home" class="btn btn-secondary mb-3" style="margin-top: 8%; margin-left: 3%; background-color : #1565c0; border:none;">
    <i class="bi bi-arrow-left"></i> Kembali
 </a>
@section('content')
<link rel="stylesheet" href="/css/kecelakaan.css">
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
        <div class="card">
                    <div class="card-header">
                        <h2>Informasi Kecelakaan</h2> </div>
                    <div class="card-body">
            <a href="{{ route('kecelakaan.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
            @if(session('flash_message'))
                <div class="alert alert-success">{{ session('flash_message') }} </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Lokasi</th>
                        <th>Tanggal</th>
                        <th>Korban</th>
                        <th>Bukti</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kecelakaan as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->lokasi }}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td>{{ $item->korban }}</td>
                        <td>
                        @if($item->bukti)
                            <img src="{{ asset('storage/'. $item->bukti) }}" width="100" alt="Bukti Kecelakaan"/>
                        @else
                            Tidak ada bukti
                        @endif
                    </td>
                        <td>
                            <a href="{{ route('kecelakaan.show', $item->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('kecelakaan.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('kecelakaan.destroy', $item->id) }}" method="post" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
