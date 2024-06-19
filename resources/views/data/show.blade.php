@extends('data.layout')

@section('content')



<style>
body {
    font-family: 'Poppins', sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
}

.card {
    margin-top:8%;
    margin-left:14%;
    width: 80%;
    max-width: 800px;
    max-height : 300px;
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #fff;
}

.card-header {
    background: linear-gradient(to right, #b92b27, #1565c0);
    color: #fff;
    border-radius: 10px 10px 0 0;
    padding: 15px;
    font-size: 24px;
    font-weight: 600;
    text-align: center;
}

.card-body {
    padding: 20px;
}

.card-title {
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 10px;
    color: #333;
}

.card-text {
    font-size: 18px;
    margin-bottom: 10px;
    color: #666;
    line-height: 1.5;
}

.card-text:last-child {
    margin-bottom: 0;
}

@media (max-width: 600px) {
    .card {
        width: 95%;
        margin: 20px auto;
    }
    .card-header {
        font-size: 20px;
    }
    .card-title {
        font-size: 20px;
    }
    .card-text {
        font-size: 16px;
    }
}
</style>


<div class="card">
  <div class="card-header">Halaman Data</div>
  <div class="card-body">
    <div class="card-body">
        <h5 class="card-title">Lokasi: {{ $data->lokasi }}</h5>
        <p class="card-text">Tanggal: {{ $data->tanggal }}</p>
        <p class="card-text">Jumlah Korban: {{ $data->jumlah_korban}}</p>
        <p class="card-text">Deskripsi: {{ $data->deskripsi}}</p>
    </div>
  </div>
</div>

@stop
