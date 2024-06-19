<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('include.link')
    <style>
        .container {
    max-width: 1200px;
    margin: auto ;
}


.row {
    display: flex;
    flex-wrap: wrap;
    margin: 20px -10px;
}

.column {
    flex: 1;
    padding: 0 10px;
}

.card {
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 20px;
    margin-bottom: 20px;
    height : 100%;
}

.gambar {
    width: 100%;
    height: auto;
    border-radius: 5px;
}

.info {
    text-align: center;
    margin-top : 7%;
}

.info h3 {
    margin-top: 0;
    font-weight : 600;
    color : #1565c0;
}

.info p {
    margin-bottom: 0;
    text-align : justify;
}
.edit-button{
    background-color : #1565c0;
     width:50%;
     margin-top:15px;
}
a{
    color : white;
    text-decoration:none;
} 

    </style>
</head>
<body>
    @include('include.navigasi')
    <a href="home" class="btn btn-secondary mb-3" style="margin-top: 7%; margin-left: 3%; background-color : #1565c0; border:none;">
    <i class="bi bi-arrow-left"></i> Kembali
 </a>
    <div class="container">
        <div class="row">
            <div class="column">
                <div class="card"  style="color: #333; box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);">
                    <img src="buku-panduan.png" alt="Gambar 1" class="gambar">
                    <div class="info">
                        <h3>BUKU PANDUAN MENGEMUDI</h3>
                        <p>Buku panduan mengemudi adalah sumber daya penting yang dirancang untuk membantu 
                            calon pengemudi mempelajari aturan dan praktik terbaik dalam berkendara.</p>
                    </div>
                    <div class="d-flex justify-content-center" >
                    <a href="/download/download-bukuPanduan1.pdf" class="btn btn-primary edit-button" style="margin-top : 54%;" download="download-bukuPanduan1.pdf" onclick="return confirmDownload()" class="download-link">Download</a>
                    </div>
                </div>
            </div>
            <div class="column">
            <div class="card"  style="color: #333; box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);">
                    <img src="aturan-lalun.jpeg" alt="Gambar 2" class="gambar">
                    <div class="info">
                        <h3>BUKU ATURAN LALU LINTAS</h3>
                        <p >Buku aturan lalu lintas adalah panduan resmi yang disusun untuk memberikan pemahaman mendalam tentang peraturan, hukum, dan pedoman yang mengatur perilaku dan aktivitas di jalan raya. Buku ini dirancang untuk 
                            digunakan oleh semua pengguna jalan, termasuk pengemudi kendaraan bermotor, pesepeda, dan pejalan kaki.</p>
                    </div>
                    <div class="d-flex justify-content-center">
                    <a href="/download/download-rambulalun.pdf" class="btn btn-primary edit-button" style="margin-top :26%;" download="download-rambulalun.pdf" onclick="return confirmDownload()" class="download-link">Download</a>
                    </div>
                </div>
            </div>
            <div class="column">
            <div class="card"  style="color: #333; box-shadow: 0 0 5px rgba(0, 0, 0, 0.3); ">
                    <img src="pengadaan-sim.jpeg" alt="Gambar 3" class="gambar">
                    <div class="info">
                        <h3>BUKU PENGADAAN SURAT IZIN MENGEMUDI</h3>
                        <p>Buku panduan pengadaan Surat Izin Mengemudi (SIM) adalah sumber daya penting yang dirancang untuk membantu calon pengemudi memahami proses dan persyaratan yang terlibat dalam mendapatkan SIM.</p>
                    </div>
                    <div class="d-flex justify-content-center">
                             <a href="/download/download-pengadaan-sim.pdf" class="btn btn-primary edit-button" style="margin-top : 47%;" download="download-pengadaan-sim.pdf" onclick="return confirmDownload()" class="download-link">Download</a>
                    </div>
                </div>
            </div>
        </div>

        <script>
    function confirmDownload() {
        return confirm("Apakah Anda yakin ingin mengunduh file?");
    }
    
</script>
</body>
</html>