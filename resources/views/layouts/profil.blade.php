<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profil</title>
    <!-- Tautan Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    @include('include.link')

    <!-- Gaya khusus -->
    <style>
        /* Style untuk foto bulat */
        .rounded-img {
            border-radius: 50%;
            width: 200px;
            height: 200px;
            object-fit: cover;
            margin : auto;
            margin-top : 10px;
        }
        .card{
            height : 100%;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }
        .card-title{
           text-align : center;
        }
        .card-text-1{
            text-align : center;
            font-weight : bold;
            color : #1565c0;
        }
        .card-text{
            text-align : justify;
        }
       
    </style>
</head>
<body>
    @include('include.navigasi')
    <a href="home" class="btn btn-secondary mb-3" style="margin-top: 7%; margin-left: 3%; background-color : #1565c0; border:none;">
    <i class="bi bi-arrow-left"></i> Kembali
 </a>
    <div class="container mt-5">
    <h2 style="font-weight:600;border-bottom: 4px solid #1565c0;">PENDAHULUAN</h2>
 <p style="text-align:justify; margin-left : 5px;">Di era digital ini, akses cepat dan akurat terhadap informasi lalu lintas sangat penting bagi pengemudi, penumpang, dan masyarakat umum. Dengan meningkatnya jumlah kendaraan dan 
    kompleksitas jaringan jalan, kebutuhan akan platform yang menyediakan informasi real-time mengenai kondisi lalu lintas semakin tinggi. Proyek ini bertujuan untuk membuat sebuah 
    website yang menyediakan informasi lalu lintas terkini, membantu pengguna dalam merencanakan perjalanan mereka dengan lebih efisien.</p>
 
        <div class="row mt-5" >
            <div class="col-md-4">
                <div class="card mb-4"  >
                    <img src="foto-febri.jpg" class="card-img-top rounded-img" alt="Foto Profil 1">
                    <div class="card-body">
                        <h5 class="card-title" >Febri Heryansah</h5>
                        <p class="card-text-1">Back-end & Front-end Developer</p>
                        <p class="card-text"> membangun bagian dari sebuah aplikasi web yang dapat dilihat dan diakses
                             langsung oleh pengguna (user interface). Mereka berfokus pada tampilan, interaksi, dan pengalaman pengguna serta 
                             membangun bagian dari sebuah aplikasi web yang berada di belakang layar dan tidak terlihat oleh pengguna.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            <div class="card mb-4" >
                    <img src="foto-agung.jpg" class="card-img-top rounded-img" alt="Foto Profil 2">
                    <div class="card-body">
                        <h5 class="card-title" >Agung Prayugo</h5>
                        <p class="card-text-1">Project Manager</p>
                        <p class="card-text"> Menyusun rencana proyek yang mencakup sasaran, jadwal, anggaran, sumber daya, dan risiko.Mengatur tugas
                             dan tanggung jawab bagi setiap anggota tim. Mengkoordinasi aktivitas tim untuk memastikan proyek berjalan lancar
                             Memantau kemajuan proyek sesuai dengan rencana dan jadwal yang telah ditetapkan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            <div class="card mb-4" >
                    <img src="foto-pisya.jpg" class="card-img-top rounded-img" alt="Foto Profil 2">
                    <div class="card-body">
                        <h5 class="card-title" >Afisyah Rahma Aziza</h5>
                        <p class="card-text-1">Designer UI/UX</p>
                        <p class="card-text">Menganalisis requirement
                                proyek dan target audiens untuk melihat gambaran
                                keseluruhan dan mengidentifikasi kesulitan yang
                                akan dihadapi pengguna secara efektif
                                menyelesaikan melalui desaign</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
    <div class="row" >
            <div class="col-md-4">
            <div class="card mb-4" >
                    <img src="foto-naya.jpg" class="card-img-top rounded-img" alt="Foto Profil 1">
                    <div class="card-body">
                        <h5 class="card-title" >Kanaya</h5>
                        <p class="card-text-1">DATABASE RALATIONAL</p>
                        <p class="card-text"> Bertanggung jawab untuk merancang skema database yang sesuai dengan kebutuhan aplikasi.
                             Ini melibatkan pembuatan tabel, definisi kolom, kunci primer dan asing, dan hubungan antara tabel.
                             Memastikan bahwa sistem dapat menangani transaksi dengan benar, termasuk penguncian data untuk mencegah
                              konflik dan pemulihan data jika terjadi kegagalan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            <div class="card mb-4"  >
                    <img src="foto-yogi.jpg" class="card-img-top rounded-img" alt="Foto Profil 2">
                    <div class="card-body">
                        <h5 class="card-title" >Yogi Aprilyanto</h5>
                        <p class="card-text-1">Content</p>
                        <p class="card-text"> Mengelola distribusi konten melalui berbagai saluran, termasuk situs web, media sosial,
                             email, blog, dan platform konten lainnya. Ini juga melibatkan kerja sama dengan tim pemasaran dan tim penjualan
                              untuk meningkatkan visibilitas dan jangkauan konten.</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>



    <!-- Tautan Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
