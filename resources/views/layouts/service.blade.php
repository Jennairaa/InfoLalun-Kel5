<!-- File: resources/views/service.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>
    @include('include.link')
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .container {
        margin: auto;
    }

    .content {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 20px;
    }

    .content img {
       width: 40%;
        margin-right: 20px;
    }

    .content h4 {
        margin-top:0;
        font-weight: 600;
        background-size: cover;
        padding: 20px;
        border-radius: 10px;
        color:#1565c0;
    }
    .content p{
        position: absolute;
        margin-top:3%;
        margin-left:17%;
    }

    .btn-back {
        margin-top: 8%;
        margin-left: 3%;
        background-color: #1565c0;
        border: none;
    }
    .cards {
        display: flex;
        justify-content: space-around;
        margin-top: 30px;
        padding-bottom:30px;  
    }

    .card {
        width: 45%;
        background-color: #f8f9fa;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    }

    .card-body {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .card-title{
        font-weight:600;
        color:#1565c0;
    }

    .card-body p {
        text-align: center;
    }
    .btn{
        background-color: #1565c0;  
    }
</style>
<body>
@include('include.navigasi')
<a href="home" class="btn btn-secondary mb-3 btn-back">
    <i class="bi bi-arrow-left"></i> Kembali
</a>
<div class="container">
    <div class="content">
        <img src="maskot5.png" alt="maskotservice">
        <h4>Apakah kamu menemukan sebuah kendala?</h4>
        <p>jika ada silahkan contact  nomor bawah ini ya!</p>
</div>
<div class="cards">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Bantuan Pelanggan</h5>
                <p class="card-text">Jika Anda memerlukan bantuan, jangan ragu untuk menghubungi kami melalui email.</p>
                <a href="mailto:infolalin_service@gmail.com" class="btn btn-primary">Hubungi Customer Service</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Dukungan Teknis</h5>
                <p class="card-text">Untuk dukungan teknis, silakan kirim email ke tim dukungan kami.</p>
                <a href="mailto:infolalin.support@gmail.com" class="btn btn-primary">Hubungi Dukungan Teknis</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
