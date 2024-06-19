@extends('data.layout')
@section('content')
<link rel="stylesheet" href="/css/data.css">
<div class="card" style="margin-top:9%">
  <div class="card-header">Edit Data</div>
  <div class="card-body">
      
      <form action="{{ url('data/' .$data->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$data->id}}" id="id" />
        <label>Lokasi</label></br>
        <input type="text" name="lokasi" id="lokasi" value="{{$data->lokasi}}" class="form-control"></br>
        <label>Tanggal</label></br>
        <input type="text" name="tanggal" id="tanggal" value="{{$data->tanggal}}" class="form-control"></br>
        <select name="jumlah_korban" id="jumlah_korban" class="form-control">
            <option value="1">1 Korban</option>
            <option value="2">2 Korban</option>
            <option value="lebih dari 2">Lebih dari 2 Korban</option>
        </select></br>
        <label>Deskripsi</label></br>
        <input type="text" name="deskripsi" id="deskripsi" value="{{$data->deskripsi}}" class="form-control"></br>
        <label>Gambar</label></br>
        <input type="text" name="foto" id="foto" value="{{$data->foto}}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop