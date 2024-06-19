@extends('kecelakaan.layout')

@section('content')
<link rel="stylesheet" href="/css/kecelakaan.css">
<div class="container mt-5" >
    
<div class="card" style="margin:auto; margin-top:9%; padding-bottom:0; width:60%;">
  <div class="card-header">Input Data Kecelakaan</div>
  <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('kecelakaan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Lokasi</label>
                    <input type="text" name="lokasi" class="form-control" value="{{ old('lokasi') }}">
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" value="{{ old('tanggal') }}">
                </div>
                <div class="form-group">
                    <label>Korban</label>
                    <input type="number" name="korban" class="form-control" value="{{ old('korban') }}">
                </div>
                <div class="form-group">
                    <label>Bukti</label>
                    <input type="file" name="bukti" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('kecelakaan.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
