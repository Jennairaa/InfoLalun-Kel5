<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Content</title>
    @include('include.link')
    <link rel="stylesheet" href="/css/content.css">
</head>
<body>
    @include('include.navigasi')
 
    <a href="home" class="btn btn-secondary mb-3" style="margin-top: 7%; margin-left: 3%; background-color : #1565c0; border:none;">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>

    <div class="container">
        <div class="row">
            <div class="column">
                <div class="card" style="color: #333; box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);">
                    <img src="polisitelphone.png" alt="Gambar 1" class="gambar">
                    <div class="info">
                        <h3>INFORMASI TELPHONE</h3>
                        <p>Informasi tentang telepon polisi adalah kumpulan nomor telepon yang digunakan untuk menghubungi pihak kepolisian 
                            dalam situasi darurat atau untuk laporan kejahatan.
                            Informasi ini penting karena memberikan akses cepat ke bantuan dan perlindungan keamanan masyarakat.</p>
                    </div>
                    <div class="btn-container" style="margin-top:30%;">
                    <button id="info-telephone" class="btn btn-primary btn-below-welcome">Cek info</button>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card" style="color: #333; box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);">
                    <img src="marka-jalan.jpeg" alt="Gambar 2" class="gambar">
                    <div class="info">
                        <h3>INFORMASI MARKA JALAN</h3>
                        <p>Marka jalan merupakan salah satu elemen penting dalam infrastruktur transportasi yang memberikan informasi
                             visual kepada pengemudi untuk mengatur perjalanan dan keselamatan di jalan raya.</p>
                    </div>
                    <button id="info-marka-jalan" class="btn btn-primary btn-below-welcome">Cek info</button>
                </div>
            </div>
            <div class="column">
                <div class="card" style="color: #333; box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);">
                    <img src="rambu-lalun.jpeg" alt="Gambar 3" class="gambar">
                    <div class="info">
                        <h3>RAMBU LALU-LINTAS</h3>
                        <p>Rambu lalu lintas adalah sistem visual yang digunakan di jalan-jalan dan jalan raya untuk memberikan informasi, arahan, peringatan, dan peraturan kepada pengemudi dan pengguna jalan lainnya.
                             Tujuannya adalah untuk meningkatkan keselamatan pengguna jalan, mengatur lalu lintas, dan menghindari kecelakaan.</p>
                    </div>
                    <button id="info-rambu-lalin" class="btn btn-primary btn-below-welcome">Cek info</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div id="artikel-content" class="artikel"></div>
    </div>


    <!-- Tambahkan link Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Tambahkan Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Data untuk grafik
        var data = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
            datasets: [{
                label: 'Penjualan',
                backgroundColor: 'rgb(54, 162, 235)',
                borderColor: 'rgb(54, 162, 235)',
                data: [10, 17, 30, 25, 15, 5]
            }]
        };

        // Konfigurasi grafik
        var config = {
            type: 'bar',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };

        // Inisialisasi grafik
        var myChart = new Chart(
            document.getElementById('myChart'),
            config
        );

        // JavaScript untuk menampilkan informasi saat tombol diklik
        document.getElementById('info-telephone').addEventListener('click', function() {
            document.getElementById('artikel-content').innerHTML = `
                    <h1>informasi telphone (110)</h1>
                   
                    <p>Dalam rangka lebih cepat memberikan pelayanan kepada masyarakat, Polri telah bekerjasama dengan PT Telekomunikasi Indonesia (Telkom) untuk melaksanakan Layanan Contact Center 110.
                    Kehadiran Layanan Contact Center 110 POLRI ditujukan untuk memenuhi harapan dan kebutuhan masyarakat terhadap terselenggaranya layanan keamanan publik. Dalam penyelenggaraan layanan contact center, telah disiapkan sebuah sistem aplikasi yang dapat memungkinkan pencatatan /perekaman setiap interaksi Polri & masyarakat, sehingga dimungkinkan pengendalian response kebutuhan masyarakat terhadap Polri. <br> <br>
                    Sistem tersebut direncanakan akan membuka saluran via : telepon, sms, email, fax dan media sosial yang didukung oleh jaringan Telkom Group di Indonesia.
                    Masyarakat yang nantinya melakukan panggilan ke nomor akses 110 akan langsung terhubung ke agen yang akan memberikan layanan berupa informasi, pelaporan (kecelakaan, bencana, kerusuhan, dll) dan pengaduan (penghinaan, ancaman, tindak kekerasan dll).
                    Masyarakat bisa menggunakan layanan Contact Center 110 secara gratis. Namun demikian, Polri menghimbau agar layanan 110 ini tidak dibuat main-main, karena jika nantinya terjadi seperti itu, pihak Polri tentu akan melacak masyarakat yang membuat laporan bohong.</p>
             
            `;
        });

        document.getElementById('info-marka-jalan').addEventListener('click', function() {
            document.getElementById('artikel-content').innerHTML = `
                    <h1>Informasi Marka Jalan</h1>
                    <table>
                        <tr>
                            <th>Gambar</th>
                            <th>Nama Marka</th>
                            <th>Penjelasan</th>   
                        </tr>
                        <tr>
                            <td><img src="marka-jlpt.png" alt="Gambar Marka Jalan 1" style="width: 100px;"></td>
                            <td>Membujur Putus-Putus</td>
                            <td>
                                <ol>
                                    <li>Marka jalan putus-putus memberikan isyarat bahwa pengemudi diperbolehkan untuk mendahului kendaraan lain atau berpindah jalur, asalkan kondisi lalu lintas dan keamanan memungkinkan.</li>
                                    <li>Peringatan akan adanya markah membujur berupa garis utuh di depan</li
                                    </ol>
                            </td>

                        </tr>
                        <tr>
                            <td><img src="marka-jlptut.png" alt="Gambar Marka Jalan 2" style="width: 100px;"></td>
                              <td>Membujur ganda utuh dan Putus-Putus</td>
                           <td>
                                <ol>
                                    <li>Marka jalan putus-putus memberikan isyarat bahwa pengemudi diperbolehkan untuk mendahului kendaraan lain atau berpindah jalur, asalkan kondisi lalu lintas dan keamanan memungkinkan.</li>
                                    <li>Lalu lintas yang berada pada sisi garis utuh dilarang melintasi garis ganda tersebut</li
                                    </ol>
                            </td>

                        </tr>
                        <tr>
                            <td><img src="marka-jlut.png" alt="Gambar Marka Jalan 3" style="width: 100px;"></td>
                             <td>membujur ganda utuh/td>
                           <td>
                                <ol>
                                    <li>Lalu lintas yang berada pada kedua sisi garis dilarang melintasi garis ganda tersebut</li>
                                    </ol>
                            </td>

                        </tr>
                    </table>
            `;
        });


        document.getElementById('info-rambu-lalin').addEventListener('click', function() {
            document.getElementById('artikel-content').innerHTML = `
                    <h1>Rambu Lalu-Lintas</h1>
                    <table>
                        <tr>
                            <th>Gambar</th>
                            <th>Nama Rambu</th>
                            <th>Penjelasan</th>   
                        </tr>
                        <tr>
                            <td><img src="rambu-larangan.gif" alt="Gambar Marka Jalan 1" style="width: 100px;"></td>
                            <td>Rambu Larangan</td>
                            <td>
                               <p>Rambu larangan adalah jenis rambu yang memberikan instruksi kepada pengendara untuk tidak melakukan suatu
                               tindakan tertentu. Rambu ini memiliki bentuk lingkaran dengan latar belakang merah dan memiliki gambar atau
                                tulisan yang melarang pengendara melakukan sesuatu.</p>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="rambu-peringatan.jpg" alt="Gambar Marka Jalan 2" style="width: 100px;"></td>
                              <td>Rambu Peringatan</td>
                           <td>
                                <p>Rambu peringatan adalah jenis rambu yang memberikan informasi tentang kondisi jalan atau situasi yang mungkin dihadapi oleh pengendara.
                                 Rambu ini memiliki bentuk segiempat dengan warna dasar kuning dan simbol yang mencerminkan kondisi jalan yang perlu diwaspadai. </p>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="rambu-kecepatan.jpg" alt="Gambar Marka Jalan 3" style="width: 100px;"></td>
                             <td>Rambu Kecepatan</td>
                           <td>
                              <p>Rambu pembatas kecepatan adalah jenis rambu yang memberikan batasan maksimal kecepatan yang diperbolehkan di suatu jalan. Rambu ini memiliki bentuk
                               lingkaran dengan latar belakang putih dan memiliki angka yang menunjukkan batasan kecepatan.</p>
                            </td>

                        </tr>
                    </table>
            `;
        });
    </script>
</body>
</html>
