
@extends('data.layout')




@section('content')
<link rel="stylesheet" href="/css/data.css">


<div class="card" style="margin:auto; margin-top:9%; padding-bottom:0; width:60%;">
  <div class="card-header">Input Data Kecelakaan</div>
  <div class="card-body">
      
      <form action="{{ url('data') }}" method="post">
        {!! csrf_field() !!}
        <label>lokasi</label></br>
        <input type="text" name="lokasi" id="lokasi" class="form-control"></br>
        <label>tanggal</label></br>
        <input type="date" name="tanggal" id="tanggal" class="form-control"></br>
        <label for="jumlah_korban">Jumlah Korban</label></br>
        <select name="jumlah_korban" id="jumlah_korban" class="form-control">
            <option value="1">1 Korban</option>
            <option value="2">2 Korban</option>
            <option value="lebih dari 2">Lebih dari 2 Korban</option>
        </select></br>
        <label>deskripsi</label></br>
        <input type="text" name="deskripsi" id="deskripsi" class="form-control"></br>

        <label>Foto</label></br>
        <input type="file" name="foto" id="foto" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop