<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INFORMASI LALU LINTAS</title>
  <!-- Bootstrap CSS -->
  @include('include.link')
  <link rel="stylesheet" href="/css/home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  </head>
<style>
  header{
    display : absolute;
    display: absolute;
    justify-content: center;
    align-items: center;
    min-height: 40vh;
    background: linear-gradient(to left,#b92b27, #1565c0);
  /*  background: linear-gradient(to bottom, #1565c0,#ffff);*/
  }
 

   .background {
   background: linear-gradient(to left,#b92b27, #1565c0);
  /* background-image : url('bg-home.jpg');*/
           /* background-image: url('background-atas.png');  Ganti dengan URL gambar background Anda */
            background-size: cover;
            background-position: center;
            height: 50vh;
            display: block;
            width: 100%;
        }
        .content {
    margin: center;
    position: relative; /* Memastikan posisi yang tepat */
    text-align: center; /* Memposisikan teks secara horizontal di tengah */
    color : white;
    width : 70%;
    top: 10%;
}

.content p {
    margin-top: 10px;
    position: absolute; /* Mengatur posisi absolut */
    left: 27%; /* Mengatur jarak kiri */
    margin-top : 180px;
    text-align: left;

}

.content h1 {
    margin-top: 125px;
    font-weight: 600;
    position: absolute; /* Mengatur posisi absolut */
    left: 27%; /* Mengatur jarak kiri */
    
}


        section{
    display: absolute;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
   /* */
}
section .color{
    position: absolute;
  filter: blur(450px); 
}
section .color:nth-child(1){
    top: 300px;
    width: 500px;
    height: 500px;
    background: #f4f4f4 ;
    z-index: -5;
}
section .color:nth-child(2){
    top: 250px;
    right: 250px;
    width: 500px;
    height: 500px;
    background: #ffff;
    z-index: -5;
}
section .color:nth-child(3){
    top: 950px;
    right: 250px;
    width: 500px;
    height: 500px;
    background: #f4f4f4;
    z-index: -5;
}
section .color:nth-child(4){
    top: 1000px;
    width: 500px;
    height: 500px;
    background: #ffff; 
    z-index: -5;
}
.half-image {
     position: absolute;
    top : 50%;
     left: 10%;
     transform: translateX(-50%);
     z-index: 0; /* Mengubah nilai z-index ke 0 */
     max-height: 100%;
     width: 350px;
     
   }

   .footer-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 50px;
            background-color: #333;
            color: #fff;
            width:100%;
            margin-top:50%;
        }

        .footer-left img {
            width: 50px;
        }

        .footer-center {
            text-align: center;
        }

        .footer-right .social-icons {
            list-style: none;
            display: flex;
            gap: 10px;
        }

        .footer-right .social-icons li {
            display: inline;
        }

        .footer-right .social-icons li a {
            color: #fff;
            text-decoration: none;
            font-size: 20px;
        }

        .footer-right .social-icons li a:hover {
            color: #ddd;
        }

</style>
</head>
<body>
  @include('include.navigasi')
    <div class="background"> 
    <div class="half-image"> 
    <img src="maskot2.png" alt=""> </div>
    <div class="content">
            <h1>Selamat Datang, Sahabat Lalu-Lintas</h1>
            <p>salam hangat dan terima kasih sudah datang! kami yakin anda akan <br> menemukan tempat anda disini.</p>
        </div>
    </div>
 
   

    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>

    <div class="sub-judul" style="margin-top : 7%">
    <div style="display: flex; flex-direction: column;">
        <h4 class="mr-8 "style="font-size: 20px; font-weight: 600; margin-bottom: 0;">FITUR</h4>
        <h4 style="font-weight: 600; color: #1565c0; margin-top: 0;">Pilihan</h4>
    </div>
    <div class="ml-auto">
        <a href="/kecelakaan" class="btn btn-primary " style="vertical-align: top; background-color : #1565c0;border-radius:20px; border : none;">
            Cek Selengkapnya <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</div>

    <div class="row" style="margin-top: 1%; width: 85%; margin-left: auto; margin-right: auto; margin-bottom:4%;" > 
  <!-- Kolom Pertama -->
  <div class="col-md-6">
  <div class="column "style="color: #333; box-shadow: 0 0 5px rgba(0, 0, 0, 0.3); ">
      <div class="row" >
        <!-- Kolom Gambar -->
        <div class="col-md-5" >
          <img src="police2.png" alt="Gambar" class="img-fluid" style="width: 100%;">
        </div>
        <!-- Kolom List Tata Cara -->
        <div class="col-md-7">
          <h2 style="font-weight: 600;">syarat dan ketentuan membuat sim:</h2>
          <ol>
            <li>Memiliki KTP</li>
            <li>Mengisi formulir permohonan</li>
            <li>Surat keterangan jasmani dan rohani</li>
          </ol>
          <a href="#" class="btn btn-primary  btn-below-welcome">hubungi </a>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Kolom Kedua -->
  <div class="col-md-6">
    <div class="column "style="color: #333; box-shadow: 0 0 5px rgba(0, 0, 0, 0.3); ">
      <div class="row">
        <!-- Kolom Gambar -->
        <div class="col-md-5">
          <img src="police3.png" alt="Gambar" class="img-fluid" style="width: 100%;">
        </div>
        <!-- Kolom List Tata Cara -->
        <div class="col-md-7">
          <h2 style ="font-weight : 600; colo ">informasi data kecelakaan lalu lintas:</h2>
          <p>apabila terjadi sebuah kecelakaan silahkan isi dengan cara click tombol dibawah ini!</p>
          <a href="data/create" class="btn btn-primary  btn-below-welcome">Buat Sekarang </a>
        </div>
      </div>
    </div>
  </div>
</div>     
    <div class="sub-judul">
    <div style="display: flex; flex-direction: column;">
        <h4 style="font-size: 20px; font-weight: 600; margin-bottom: 0;">Informasi</h4>
        <h4 style="font-weight: 600; color:#1565c0; margin-top: 0;">Terkini</h4>
    </div>
    <div class="ml-auto">
        <a href="content" class="btn btn-primary " style="vertical-align: top; background-color : #1565c0;border-radius:20px; border : none;">
            Cek Selengkapnya <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</div>
    <div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="card h-100">
      <img src="polisitelphone.png" class="card-img-top" alt="Gambar Slide Pertama">
      <div class="card-body">
        <h5 class="card-title" style="font-weight : 600;">INFORMASI TELPHONE</h5>
        <p class="card-text">Ini adalah keterangan untuk slide pertama. Anda bisa menambahkan teks sesuai dengan konten yang diinginkan.</p>
        <a href="" class="btn btn-primary" style="background-color : #0474BB; color :f4f4f4;">cek detail</a>
      </div>
        <!-- Konten untuk slide pertama -->
      </div>
    </div>
    <div class="carousel-item">
      <div class="card h-50">
      <img src="marka-jalan.jpeg" class="card-img-top" alt="Gambar Slide kedua">
      <div class="card-body">
        <h5 class="card-title" style="font-weight : 600;">INFORMASI MARKA JALAN</h5>
        <p class="card-text">Ini adalah keterangan untuk slide pertama. Anda bisa menambahkan teks sesuai dengan konten yang diinginkan.</p>
        <a href="" class="btn btn-primary" style="background-color : #0474BB; color :f4f4f4;">cek detail</a>
      </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="card h-100">
      <img src="rambu-lalun.jpeg" class="card-img-top" alt="Gambar Slide Pertama">
      <div class="card-body">
      <h5 class="card-title" style="font-weight : 600;">RAMBU LALU LINTAS</h5>
        <p class="card-text">Ini adalah keterangan untuk slide pertama. Anda bisa menambahkan teks sesuai dengan konten yang diinginkan.</p>
        <a href="" class="btn btn-primary" style="background-color : #0474BB; color :f4f4f4;">cek detail</a>
      </div>
      </div>
    </div>
    <!-- Tambahkan lebih banyak carousel-item sesuai kebutuhan -->
  </div>
  <!-- Tombol navigasi -->
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
  </div>
</div>
      </div>
  <div class="guide-book">
    <div class="guide-background"></div>
    <img src="buku-panduan.png" alt="" class="book-image">
    <div class="guide-content">
    <div class="sub-judul">
            <div style="display: flex; flex-direction: column;">
                <h4 class="mr-8" style="font-size: 20px; font-weight: 600; margin-bottom: 0;">DOWNLOAD </h4>
                <h4 style="font-weight: 600; color: #1565c0; margin-top: 0;">Buku Panduan</h4>
            </div>
        </div>
        
        <h4 style="font-weight: 600; color: #1565c0; margin-top: 150px; font-size: 38px;">
            Cara Mudah Untuk Mengerti <br> Panduan Mengemudi di Lalu Lintas
        </h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, voluptatibus quam harum <br>rerum excepturi deserunt illum, ad in
           error asperiores corrupti vitae natus  <br> dolores veniam non nisi quisquam ipsam accusantium?</p>
           <a href="buku" class="btn btn-primary" style="background-color : #0474BB; color :f4f4f4;">Download</a>
    </div>
      </div>
      
    <footer>
        <div class="footer-container">
            <div class="footer-left">
                <img src="maskot.png" alt="Logo" class="footer-logo">
            </div>
            <div class="footer-center">
                <p>&copy; 2024 Your Company. All rights reserved.</p>
            </div>
            <div class="footer-right">
                <ul class="social-icons">
                    <li><a href="#"><i class="fab fa-instagram"></i></a> Informasi_Lalin</li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a> informasi_lalin</li>
                    <li><a href="#"><i class="fab fa-tiktok"></i></a> informasi lalin</li>
                </ul>
            </div>
        </div>
    </footer>
  
 @include('include.script')

</body>
</html>
