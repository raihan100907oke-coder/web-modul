<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Web & Perpustakaan Responsive</title>
    
    <style>
        /* ================= PENGATURAN DASAR (GABUNGAN) ================= */
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #dedede;
            font-size: 15px;
            color: #333;
        }

        /* ================= CSS WEBSITE PERPUSTAKAAN ================= */
        .lib-container {
            max-width: 1080px;
            margin: 20px auto;
            background: #fff;
            overflow: hidden;
            padding: 10px;
            border: 1px solid #dedede;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }
        .lib-container p {
            margin-bottom: 20px;
            line-height: 1.5em;
        }
        .lib-container h3 {
            margin-bottom: 20px;
            border-bottom: 1px solid #aaa;
            padding-bottom: 5px;
        }
        .lib-container a {
            text-decoration: none;
            color: #333;
        }
        .lib-container a:hover {
            color: #666;
        }
        .header {
            border: 1px solid #dedede;
            padding: 10px;
            margin: 10px;
            background: #9E9AFB;
        }
        .left {
            width: 250px;
            border: 1px solid #dedede;
            padding: 10px;
            margin: 10px;
            float: left;
        }
        .left ul {
            list-style-type: none;
        }
        .left ul li a {
            display: block;
            border-bottom: 1px solid #dedede;
            margin-bottom: 10px;
            padding: 10px 5px;
            color: #666;
        }
        .left ul li a:hover {
            color: #461AF3;
        }
        .middle {
            width: 500px;
            border: 1px solid #dedede;
            padding: 10px;
            margin: 10px;
            float: left;
        }
        .middle img {
            max-width: 100%;
            height: auto;
        }
        .middle a {
            font-weight: bold;
        }
        .right {
            width: 250px;
            border: 1px solid #dedede;
            padding: 10px;
            margin: 10px;
            float: left;
        }
        .right ul {
            list-style-type: none;
        }
        .right ul li {
            display: block;
        }
        .right ul li a {
            display: block;
            border-bottom: 1px solid #dedede;
            margin-bottom: 10px;
            padding: 10px 5px;
        }
        .right ul li a:hover {
            color: #461AF3;
        }
        .footer {
            clear: both;
            border: 1px solid #dedede;
            padding: 15px;
            background: #f8f8f8;
        }

        /* Responsive Perpustakaan */
        @media screen and (max-width:1080px){
            .lib-container {width: 95%;}
            .left {width: 25%; background: #D6CCFE;}
            .middle {width: 65%; float: right;}
            .right {clear: both; padding: 1% 4%; width: auto; float: none; background: #D6CCFE;}
        }
        @media screen and (max-width: 780px){
            .header, .footer {text-align: center;}
            .left, .middle, .right {width: auto; float: none;}
        }

        /* ================= CSS TUGAS GABUNGAN WEB ================= */
        .tugas-container {
            background-color: #ffffff;
            padding: 40px 50px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            max-width: 900px;
            width: 95%;
            margin: 40px auto;
        }
        
        .tugas-container h1.judul-tugas {
            color: #2c3e50;
            margin-bottom: 25px;
            font-size: 28px;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
            display: inline-block;
            text-align: center;
            width: 100%;
        }
        .tugas-container h2 {
            color: #2c3e50;
            margin-top: 40px;
            margin-bottom: 15px;
            font-size: 22px;
            text-align: left;
            border-left: 4px solid #3498db;
            padding-left: 10px;
        }
        .info-box {
            background-color: #e8f4f8;
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
            border-left: 5px solid #3498db;
            text-align: left;
        }
        .info-label {
            font-size: 14px;
            color: #7f8c8d;
            margin-bottom: 5px;
        }
        .info-value {
            font-size: 18px;
            font-weight: bold;
            color: #2c3e50;
        }
        .tugas-container table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            text-align: left;
        }
        .tugas-container th, .tugas-container td {
            padding: 12px;
            border: 1px solid #ddd;
        }
        .tugas-container th {
            background-color: #f8f9fa;
        }
        .tugas-container pre {
            font-family: inherit;
            font-size: 15px;
            line-height: 1.8;
            margin: 0;
            white-space: pre-wrap;
            text-align: left;
        }
        .btn {
            padding: 8px 20px;
            margin: 5px;
            cursor: pointer;
            border: none;
            border-radius: 4px;
            background-color: #3498db;
            color: white;
            font-size: 15px;
        }
        .btn-reset {
            background-color: #e74c3c;
        }
        .btn-dark {
            background-color: #2c3e50;
        }
        .tugas-container hr {
            margin: 30px 0;
            border: 1px solid #eee;
        }
        .footer-date {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            color: #7f8c8d;
            font-size: 14px;
            font-weight: bold;
            text-align: center;
        }

        /* LATIHAN PSEUDO-CLASS */
        .latihan-css-box ul { margin-bottom: 20px; margin-left: 20px; }
        .latihan-css-box p { line-height: 1.6; margin-bottom: 15px; }
        .latihan-css-box li:first-child a { color: green; }
        .latihan-css-box li:last-child a { color: green; }
        .latihan-css-box li:nth-child(even) a { color: green; }
        .latihan-css-box li:nth-child(odd) a { color: violet; }
        .latihan-css-box p:first-of-type { color: red; }
        .latihan-css-box p:last-of-type { color: orange; }

        /* GAYA TAMBAHAN DARI JSP */
        .big {
            font-family: Tahoma, sans-serif, arial;
            font-weight: bold;
            font-size: 2em;
        }

        /* FORM REGISTRASI TANPA BORDER (Bagian 10) */
        .table-noborder td {
            border: none !important;
            padding: 8px;
        }

        /* GAYA TAMBAHAN BACKGROUND (Bagian 12) */
        .latihan-background {
            background: #00ff00 url("gambar.gif") center center;
            border-left: none;
            border: 2px dashed #333;
            color: #000;
        }
    </style>

    <!-- ======================= SCRIPT JAVASCRIPT GABUNGAN ======================= -->
    <script type="text/javascript">
        // Fungsi untuk Perhitungan Tiket (Bagian 2)
        function hitungtotal() {
            var tujuan = document.fform.itujuan.value;
            var jumlahtiket = parseFloat(document.fform.ijumlah.value);
            if (isNaN(jumlahtiket)) jumlahtiket = 0; 
            
            var ht = 0.0; 
            var sub = 0.0; 
            var diskon = 0.0;
            var total = 0.0;
            
            if (tujuan == "Jakarta") { ht = 100000; } 
            else if (tujuan == "Cirebon") { ht = 150000; } 
            else { ht = 200000; }
            
            sub = jumlahtiket * ht;
            diskon = (document.fform.imember.checked == true) ? 0.10 * sub : 0.0;
            total = sub - diskon; 
            
            document.fform.otiket.value = ht; 
            document.fform.osub.value = sub; 
            document.fform.odiskon.value = diskon; 
            document.fform.ototal.value = total;
        }

        // Fungsi untuk Latihan Alert (Bagian 6)
        function myfunction(txt){
            alert(txt)
        }

        // Fungsi untuk Latihan Event OnFocus dan OnBlur (Bagian 10)
        function masukannim(){
            if (document.f.inim.value == ""){alert("Anda belum memasukkan NIM");}
        }
        function masukannama(){
            if (document.f.inama.value == ""){alert("Anda belum memasukkan Nama");}
        }
        function masukanalamat(){
            if (document.f.ialamat.value == ""){alert("Anda belum memasukkan Alamat");}
        }
        function terimakasih(){
            if ((document.f.inim.value != "") && (document.f.inama.value != "") && (document.f.ialamat.value != "")){
                alert("Terima Kasih Telah Mengisi Data");
            } else {
                alert("Mohon Data Dilengkapi");
            }
        }

        // ======================= FUNGSI JAM DIGITAL (Bagian 11) =======================
        var timer = null;

        function stopClock() {
            clearTimeout(timer);
        }

        function startClock() {
            var time = new Date();
            var hours = time.getHours();
            var minutes = time.getMinutes();
            
            // Menambahkan angka 0 jika menit di bawah 10
            minutes = ((minutes < 10) ? "0" : "") + minutes; 
            
            var seconds = time.getSeconds();
            
            // Menambahkan angka 0 jika detik di bawah 10
            seconds = ((seconds < 10) ? "0" : "") + seconds; 
            
            var clock = hours + ":" + minutes + ":" + seconds;
            
            // Menampilkan waktu ke dalam input text berdasarkan ID
            var displayElement = document.getElementById("clockDisplay");
            if(displayElement) {
                displayElement.value = clock;
            }
            
            // Mengulangi fungsi startClock() setiap 1000 milidetik (1 detik)
            timer = setTimeout(startClock, 1000); 
        }

        // ======================= FUNGSI MARQUEE (Bagian 14) =======================
        var pesan ="Hallo Friend...Apa Kabar? ";
        var pesan2 ="Welcome To My website ";
        
        function p(){
            if(document.basis && document.basis.kotak) {
                document.basis.kotak.value = pesan;
                pesan = pesan.substr(1, pesan.length) + pesan.substr(0, 1);
                pesan2 = pesan2.substr(1, pesan2.length) + pesan2.substr(0, 1);
                window.status = pesan2;
                setTimeout("p()", 100);
            }
        }
    </script>
</head>

<!-- Menggabungkan onload untuk startClock dan fungsi p (marquee) -->
<body onload="startClock(); p();" onunload="stopClock()">

    <!-- ======================= BAGIAN A: PERPUSTAKAAN RESPONSIVE ======================= -->
    <div class="lib-container">
        <div class="header">
            <h1 align="center"> Selamat Datang Di website sederhana </h1>
        </div>
        <div class="main">
            <div class="left">
                <h3 align="center">Menu</h3>
                <ul>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">tentang saya</a></li>
                </ul>
            </div>
            
            <!-- BAGIAN BERITA DIMANA GAMBAR DITAMPILKAN -->
            <div class="middle">
                <h3 align="center">Berita</h3>
                <p align="center"><strong><a href="#">Membuat Design Web Responsive</a></strong></p>
                
                <!-- Tag Img yang memanggil file foto -->
                <p style="text-align: center;">
                    <img src="foto.jpg" alt="Foto Kelas" style="width: 100%; max-width: 400px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                </p>
                
                <p><a href="#">Baca Selengkapnya >> </a></p>
            </div>
            
            <div class="right">
                <h3 align="center">kategori</h3>
                <ul>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Pemrograman</a></li>
                    <li><a href="#">Database</a></li>
                </ul>
            </div>
        </div>
        <div class="footer">
            <p align="center">Copyright &copy;2026 Belajar CSS Responsive</p>
        </div>
    </div>


    <!-- ======================= BAGIAN B: TUGAS GABUNGAN WEB ======================= -->
    <div class="tugas-container">
        
        <h1 class="judul-tugas">Tugas Gabungan Pemrograman Web</h1>
        
        <!-- BAGIAN 1: IDENTITAS & TABEL (HTML) -->
        <div class="info-box">
            <div class="info-label">Nama Mahasiswa</div>
            <div class="info-value">Raihan Rafi Afandi</div>
        </div>
        <div class="info-box">
            <div class="info-label">Nomor Induk Mahasiswa (NIM)</div>
            <div class="info-value">251091700149</div>
        </div>

        <h2>Tabel Data Mahasiswa (HTML)</h2>
        <table style="background-color: pink;">
            <tr>
                <th>Nim</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tempat, Tanggal Lahir</th>
                <th>Jurusan</th>
            </tr>
            <tr>
                <td>12110001</td>
                <td>Anita</td>
                <td>Cengkareng</td>
                <td>Jakarta, 20 Agustus 1990</td>
                <td>Sistem Informasi</td>
            </tr>
            <tr>
                <td>12110002</td>
                <td>Aditya</td>
                <td>Tangerang</td>
                <td>Semarang, 01 Januari 1989</td>
                <td>Sistem Informasi</td>
            </tr>
            <tr>
                <td>12110003</td>
                <td>Firman</td>
                <td>Bogor</td>
                <td>Jakarta, 18 September 1988</td>
                <td>Sistem Informasi</td>
            </tr>
        </table>

        <!-- BAGIAN 2: JAVASCRIPT PERHITUNGAN -->
        <h2>Aplikasi Perhitungan Tiket (JavaScript)</h2>
        <form name="fform">
            <table>
                <tr>
                    <td colspan="2"><h3 style="text-align:center; margin: 10px 0;">Travel Bintang Abadi</h3></td>
                </tr>
                <tr>
                    <td style="width: 50%; vertical-align: top;">
<pre>Nama         : <input type="text" size="20" name="inama">
Tujuan       : <select name="itujuan">
    <option value="Jakarta">Jakarta</option>
    <option value="Cirebon">Cirebon</option>
    <option value="Tasikmalaya">Tasikmalaya</option>
</select>
Jumlah Tiket : <input type="text" size="11" name="ijumlah"> 
Member       : <input type="checkbox" name="imember"> Ya</pre>
                    </td>
                    <td style="width: 50%; vertical-align: top;">
<pre>Harga Tiket  : <input type="text" size="15" name="otiket" readonly> 
Sub Total    : <input type="text" size="15" name="osub" readonly> 
Diskon       : <input type="text" size="15" name="odiskon" readonly>
Total Bayar  : <input type="text" size="15" name="ototal" readonly></pre>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <input type="button" class="btn" value="Hitung" onclick="hitungtotal()">
                        <input type="reset" class="btn btn-reset" value="Ulang">
                    </td>
                </tr>
            </table>
        </form>

        <!-- BAGIAN 3: PHP DASAR -->
        <h2>Deklarasi Variabel & Output (PHP)</h2>
        <div class="info-box">
            <?php
            // Deklarasi variabel
            $nim_php ="251091700149";
            $nama_php ="Raihan Rafi Afandi";
            $kelas_php ="03SISE002";
            
            // Output
            echo "Nim Saya = $nim_php<br>";
            echo "Nama Saya = $nama_php<br>"; 
            echo "Kelas Saya = $kelas_php<br>";
            ?>
        </div>

        <h2>Penggabungan String (PHP)</h2>
        <div class="info-box">
            <?php
            $teks1 = "Aku Sedang belajar ";
            $teks2 = "Pemrograman Web ";
            $teks3 = "Menggunakan bahasa script PHP ";
            $hasil = $teks1 . $teks2 . $teks3; 
            echo "<strong>Output:</strong> $hasil";
            ?>
        </div>

        <h2>Perulangan For (PHP)</h2>
        <div class="info-box" style="max-height: 150px; overflow-y: auto;">
            <?php 
            for($kata = 1; $kata <= 20; $kata++){
                echo $kata . ". Saya Sedang Belajar Dasar Pemrograman Web<br/>";
            }
            ?>
        </div>

        <!-- BAGIAN 4: FORM PHP -->
        <h2>Aplikasi Penerimaan Beasiswa (PHP)</h2>
        <div style="border: 1px solid #ddd; padding: 20px; text-align: left;">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<pre>
Nama          : <input type="text" name="nama_beasiswa">
NIM           : <input type="text" name="nim_beasiswa">
Kelas         : <input type="text" name="kelas_beasiswa">
Jurusan       : <select name="jurusan_beasiswa">
                  <option value="Sistem Informasi">SI</option>
                  <option value="Tehnik Informatika">TI</option>
                </select>
Jenis Kelamin : <input type="radio" value="Pria" name="jekel">Pria
                <input type="radio" value="Wanita" name="jekel">Wanita
IPK           : <input type="text" size="4" name="ipk">

<input type="submit" class="btn" value="Proses"> <input type="reset" class="btn btn-reset" value="Batal">
</pre>
            </form>

            <?php
            if(!empty($_POST['nama_beasiswa'])) {
                $nama_b = $_POST["nama_beasiswa"];
                $nim_b = $_POST["nim_beasiswa"];
                $kelas_b = $_POST["kelas_beasiswa"];
                $jurusan_b = $_POST["jurusan_beasiswa"];
                $jekel_b = isset($_POST["jekel"]) ? $_POST["jekel"] : "-"; 
                $ipk_b = $_POST["ipk"];

                if($ipk_b >= 3.0){
                    $ket = "Mendapat beasiswa sebesar Rp.1.000.000";
                }else{
                    $ket = "Tidak dapat beasiswa"; 
                }
                
                echo "<hr>";
                echo "<h3>Data Penerima Beasiswa:</h3>";
                echo "<div class='info-box'>";
                echo "Nama            : $nama_b<br>";
                echo "Nim             : $nim_b<br>";
                echo "Kelas           : $kelas_b<br>";
                echo "Jurusan         : $jurusan_b <br>";
                echo "Jenis kelamin   : $jekel_b <br>";
                echo "IPK             : $ipk_b<br><br>"; 
                echo "<strong>Menyatakan bahwa $nama_b $ket.</strong>";
                echo "</div>";
            }
            ?>
        </div>

        <!-- BAGIAN 5: LATIHAN CSS -->
        <h2>Latihan CSS (Pseudo-Class)</h2>
        <div class="info-box latihan-css-box">
            <a href="#" class="hello">Hello World</a>
            <ul>
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
                <li><a href="#">Link 4</a></li>
                <li><a href="#">Link 5</a></li>
                <li><a href="#">Link 6</a></li>
                <li><a href="#">Link 7</a></li>
                <li><a href="#">Link 8</a></li>
                <li><a href="#">Link 9</a></li>
                <li><a href="#">Link 10</a></li>
            </ul>
            <p>Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf.</p>
            <p>Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak</p>
        </div>
        
        <!-- BAGIAN 6: LATIHAN ALERT JAVASCRIPT -->
        <h2>Latihan Fungsi Alert (JavaScript)</h2>
        <div class="info-box">
            <form>
                <input type="button" class="btn" onclick="myfunction('Good Morning!')" value="In the Morning">
                <input type="button" class="btn btn-dark" onclick="myfunction('Good Evening!')" value="In the Evening">
            </form>
            <p style="margin-top: 15px; color: #7f8c8d; font-size: 14px;">Saat kamu mengklik salah satu tombol, sebuah fungsi akan dipanggil. Fungsi itu akan menampilkan alert dengan argumen yang dikirim kepadanya.</p>
        </div>

        <!-- BAGIAN 7: LATIHAN OBJEK DATE -->
        <h2>Latihan Objek Date/Tanggal</h2>
        <div class="info-box" style="background-color: lightblue; text-align: center; border-left: 5px solid #2980b9;">
            <script type="text/javascript">
                var hari = new Array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
                var bulan = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                
                var t = new Date();
                var hari_ini = hari[t.getDay()]; // Hari Minggu = 0
                var tanggal = t.getDate();
                var bulan_ini = bulan[t.getMonth()];
                var tahun = t.getFullYear(); 
                var jam = t.getHours();
                var menit = t.getMinutes();
                var detik = t.getSeconds();

                if (menit < 10) menit = "0" + menit;
                if (detik < 10) detik = "0" + detik;

                document.write("<div style='font-size: 20px; font-family: arial;'>");
                document.write("<b>Sekarang adalah hari : " + hari_ini + ", tanggal: " + tanggal + " " + bulan_ini + " " + tahun + "</b>");
                document.write("<hr style='width: 80%; margin: 15px auto; border: 1px solid #777;'>");
                document.write("</div>");
                
                document.write("<div style='font-size: 16px; font-family: arial;'>");
                document.write("<b>Jam sekarang = " + jam + ":" + menit + ":" + detik + "</b>");
                document.write("</div>");
            </script>
        </div>

        <!-- BAGIAN 8: LATIHAN OBJEK WINDOW -->
        <h2>Latihan Objek Window</h2>
        <div class="info-box">
            <script type="text/javascript"> 
                window.status = "Welcome"; 
                window.alert("Selamat Datang"); 
                
                var angka = window.prompt("Inputkan Angka ?", 0); 
                document.write("Angka favorit anda adalah = <strong>" + angka + "</strong><br>"); 
                
                var tampung = window.confirm("Jenis kelamin anda Pria ?"); 
                
                if (tampung) {
                    document.write("Boleh Kenalan donk<br>");
                } else {
                    document.write("Ok dech<br>");
                }
            </script>
            <p style="margin-top: 15px; color: #e74c3c; font-size: 13px;">
                <em>Catatan: Perintah <code>window.close()</code> dinonaktifkan sementara di dalam kode agar halaman ini tidak langsung tertutup sesaat setelah terbuka.</em>
            </p>
        </div>

        <!-- BAGIAN 9: FORM & WAKTU (Translasi dari file JSP ke PHP) -->
        <h2>Form Request & Pencetakan Waktu Server (Eks JSP)</h2>
        <div class="info-box" style="text-align: center;">
            <?php
                // Mengambil nilai inputan form (menggunakan GET untuk menyesuaikan kode asal)
                $first_name = isset($_GET['firstName']) ? trim($_GET['firstName']) : null;
                
                // Jika input nama tidak kosong
                if (!empty($first_name)) {
            ?>
                <h1>Hasil (Tanpa Forward)</h1>
                <div class="big">
                    <h2>Selamat Datang <?php echo htmlspecialchars($first_name); ?></h2>
                    <h2>Request sudah diterima dalam satu file dengan melampirkan waktu:</h2>
                </div>
                <table style="border:6px outset; margin: 20px auto;">
                    <tr>
                        <td style="background-color:green; padding: 10px;">
                            <p class="big" style="color:cyan; margin: 0;">
                                <!-- Mencetak tanggal standar (menggantikan new java.util.Date()) -->
                                <?php 
                                    // Mengatur zona waktu ke Waktu Indonesia Barat (WIB)
                                    date_default_timezone_set('Asia/Jakarta');
                                    
                                    // Format: Hari Bulan Tanggal Jam:Menit:Detik ZonaWaktu Tahun
                                    echo date('D M d H:i:s T Y'); 
                                ?>
                            </p>
                        </td>
                    </tr>
                </table>
                <br>
                <a href="<?php echo strtok($_SERVER["REQUEST_URI"], '?'); ?>" class="btn">Kembali Input Data</a>
            <?php
                } else {
            ?>
                <h1>Contoh Form (Satu File)</h1>
                <form action="" method="get" style="margin-top: 15px;">
                    Input Nama Awal: <input type="text" name="firstName" style="padding: 5px;"/><br/><br/>
                    <input type="submit" value="Simpan" class="btn"/>
                </form>
            <?php
                }
            ?>
        </div>

        <!-- BAGIAN 10: LATIHAN EVENT (REGISTRASI) -->
        <h2>Latihan Event OnFocus dan OnBlur (Registrasi)</h2>
        <div class="info-box">
            <h3 align="center" style="margin-bottom: 10px;">R E G I S T R A S I</h3>
            <hr style="border: 1px solid black; margin-bottom: 20px;">
            
            <form name="f" method="get">
                <table class="table-noborder">
                    <tr>
                        <td width="20%"><strong>NIM</strong></td>
                        <td width="5%">:</td>
                        <td width="75%">
                            <input type="text" name="inim" size="15" onFocus="window.status='Silahkan Mengisi NIM Anda';" onBlur="masukannim()">
                        </td>
                    </tr>
                    <tr>
                        <td><strong>NAMA</strong></td>
                        <td>:</td>
                        <td>
                            <input type="text" name="inama" size="30" onFocus="window.status='Silahkan Mengisi Nama Anda';" onBlur="masukannama()">
                        </td>
                    </tr>
                    <tr>
                        <td><strong>ALAMAT</strong></td>
                        <td>:</td>
                        <td>
                            <input type="text" name="ialamat" size="40" onFocus="window.status='Silahkan Mengisi Alamat Anda';" onBlur="masukanalamat()">
                        </td>
                    </tr>
                </table>
                <hr style="border: 1px solid black; margin-top: 15px; margin-bottom: 15px;">
                <div style="text-align: center;">
                    <input type="button" class="btn btn-dark" value="Kirim" onClick="terimakasih()">
                    <input type="reset" class="btn btn-reset" value="Reset">
                </div>
            </form>
        </div>

        <!-- ======================= BAGIAN 11: JAM DIGITAL (GABUNGAN) ======================= -->
        <h2>Latihan Jam Digital</h2>
        <div class="info-box" style="text-align: center; background-color: #f1f2f6;">
            <p style="margin-bottom: 10px; color: #7f8c8d;">Waktu saat ini (berjalan secara realtime):</p>
            <form>
                <input type="text" id="clockDisplay" size="20" readonly 
                    style="font-size: 24px; font-weight: bold; font-family: monospace; text-align: center; padding: 10px; border: 2px solid #3498db; border-radius: 8px; background: #fff; color: #2c3e50;">
            </form>
        </div>

        <!-- ======================= BAGIAN 12: LATIHAN BACKGROUND ======================= -->
        <h2>Latihan Background CSS</h2>
        <div class="info-box latihan-background">
            <p><b>Catatan:</b> Properti background-attachment dan background-position digunakan dalam browser Netscape 4.0.</p>
            <p>nama saya Raihan Rafi Afandi</p>
            <p>umur saya 19 tahun</p>
            <p>Alamat saya Perumahan Bukit Gading Cisoka Blok B2 No 37, RT05/RW05 Desa Selapajang Kecamatan Cisoka Kabupaten Tangerang</p>
            <p>terimakasih</p>
        </div>

        <!-- ======================= BAGIAN 13: LATIHAN OBJEK MATH ======================= -->
        <h2>Latihan Objek Math</h2>
        <div class="info-box">
            <script type="text/javascript">
                var a = 3; 
                var b = 2;
                var besar = Math.max(a, b);
                document.write("antara " + a + " dan "+ b +" lebih besar "+ besar +"<br>");
                var pangkat = Math.pow(b, a);
                document.write(b + " pangkat "+ a +" adalah "+ pangkat +"<br>"); 
                var ran;
                ran = Math.round(Math.random() * 16);
                document.write("Anda adalah pengunjung yang ke " + ran + ".<br>"); 
                var akar;
                akar = Math.sqrt(ran);
                document.write("Akar dari " + ran + " adalah " + akar + "<br>");
            </script>
        </div>

        <!-- ======================= BAGIAN 14: LATIHAN MARQUEE (DITAMBAHKAN) ======================= -->
        <h2>Latihan Marquee Dengan JavaScript</h2>
        <div class="info-box" style="text-align: center; background-color: lightblue;">
            <p style="color: #d35400; font-size: 1.2em; font-weight: bold;">Latihan Marquee Pada Status Bar dan Input</p>
            <form method="post" name="basis" style="margin-top: 15px;">
                <input type="text" name="kotak" size="30" readonly style="padding: 10px; font-size: 16px; font-weight: bold; border: 1px solid #3498db; border-radius: 5px; color: #2c3e50; text-align: center;">
            </form>
            <p style="margin-top: 10px; font-size: 13px; color: #555;"><i>(Cek Status Bar pada browser Anda / Input text di atas untuk melihat efek marquee)</i></p>
        </div>

        <!-- ======================= BAGIAN 15: LATIHAN HALAMAN FRAME (GABUNGAN KODE 2) ======================= -->
        <h2>Latihan Halaman Frame (Gabungan)</h2>
        <div class="info-box" style="background-color: pink; color: black; padding: 20px; border-left: 5px solid #ff6b81;">
            <center>
                <h1>Halaman ini dengan menggunakan</h1>
                <h1>Frame</h1>
                <p><strong>Design By Raihan Rafi Afandi</strong></p>
                <p><strong>Email :<a href="mailto: raihan100907oke@gmail.com"> raihan100907oke@gmail.com</a></strong></p>
            </center>
        </div>
        
        <div class="footer-date">
            Selesai Digabungkan
        </div>

    </div>
</body>
</html>