<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Coding: If-Else Dasar</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            max-width: 850px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 { text-align: center; color: #2c3e50; }
        .soal-box {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 25px;
            margin-bottom: 30px;
            border-left: 5px solid #3498db;
        }
        .soal-title {
            font-weight: bold;
            font-size: 1.2em;
            color: #2980b9;
            margin-bottom: 10px;
            display: block;
        }
        .instruction {
            background-color: #fff3cd;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ffeeba;
            font-size: 0.95em;
            margin-bottom: 15px;
        }
        .output-preview {
            background-color: #2d2d2d;
            color: #f8f8f2;
            padding: 15px;
            border-radius: 6px;
            font-family: monospace;
            margin-top: 15px;
        }
        .label-output {
            font-size: 0.8em;
            text-transform: uppercase;
            color: #888;
            margin-bottom: 5px;
            display: block;
        }
        .hint { color: #666; font-style: italic; font-size: 0.9em; }
    </style>
</head>
<body>

    <h1>Latihan Praktik: Struktur Kendali If-Else</h1>
    <p style="text-align: center;">Lengkapi kode PHP di bawah ini sesuai instruksi soal.</p>

    <!-- SOAL 1 -->
    <div class="soal-box">
        <span class="soal-title">Soal 1: Ganjil atau Genap?</span>
        <div class="instruction">
            Buatlah logika if-else untuk menentukan apakah variabel <code>$angka</code> adalah bilangan <b>Genap</b> atau <b>Ganjil</b>.<br>
            <span class="hint">Petunjuk: Gunakan operator modulus (%). Jika sisa bagi 2 adalah 0, maka genap.</span>
        </div>

        <?php
        $angka = 16; // Silakan ganti angka ini untuk mengetes
        $hasil_soal1;// Variabel untuk menampung hasil

        // --- TULIS KODE ANDA DI BAWAH INI ---
        
        // TODO: Tulis if-else disini
        // Jika genap, isi $hasil_soal1 = "Bilangan Genap";
        // Jika ganjil, isi $hasil_soal1 = "Bilangan Ganjil";
        if ($angka % 2== 0) {
        $hasil_soal1 = "Bilangan Genap";
        }
        elseif ($angka % 2== 1) {
            $hasil_soal1 = "Bilangan Ganjil";
        }
        // ------------------------------------
        ?>

        <div class="output-preview">
            <span class="label-output">Output Program:</span>
            Angka <?php echo $angka; ?> adalah <b><?php echo $hasil_soal1; ?></b>
        </div>
    </div>


    <!-- SOAL 2 -->
    <div class="soal-box">
        <span class="soal-title">Soal 2: Cek Kelulusan Siswa</span>
        <div class="instruction">
            Jika nilai siswa <b>75 ke atas</b> (>= 75), statusnya "LULUS". <br>
            Jika di bawah 75, statusnya "REMEDIAL".
        </div>

        <?php
        $nilai_ujian = 45; 
        $status_kelulusan;

        // --- TULIS KODE ANDA DI BAWAH INI ---

        // TODO: Tulis logika if-else disini
        if ($nilai_ujian >=75) {
            $status_kelulusan = "LULUS";
        }
        else {
            $status_kelulusan = "Remedial";
        }

        // ------------------------------------
        ?>

        <div class="output-preview">
            <span class="label-output">Output Program:</span>
            Nilai: <?php echo $nilai_ujian; ?> <br>
            Status: <b><?php echo $status_kelulusan; ?></b>
        </div>
    </div>


    <!-- SOAL 3 -->
    <div class="soal-box">
        <span class="soal-title">Soal 3: Hitung Diskon Belanja</span>
        <div class="instruction">
            Toko memberikan diskon sebesar <b>Rp 10.000</b> jika total belanja <b>lebih dari Rp 100.000</b>.<br>
            Jika belanja 100.000 atau kurang, diskonnya 0.
        </div>

        <?php
    $total_belanja = 100001;
    $diskon = 0;
    $total_bayar = 0;
    if ($total_belanja > 100000) {
    $diskon = 10000;
    } else {
    $diskon = 0;
}
$total_bayar = $total_belanja - $diskon;
?>

        <div class="output-preview">
            <span class="label-output">Output Program:</span>
            Total Belanja: Rp <?php echo number_format($total_belanja); ?> <br>
            Potongan: Rp <?php echo number_format($diskon); ?> <br>
            --------------------------- <br>
            Total Bayar: <b>Rp <?php echo number_format($total_bayar); ?></b>
        </div>
    </div>


    <!-- SOAL 4 -->
    <div class="soal-box">
        <span class="soal-title">Soal 4: Validasi Password Sederhana</span>
        <div class="instruction">
            Sistem login sederhana. Password yang benar adalah <b>"admin123"</b>.<br>
            Jika password cocok, pesan: "Selamat Datang, Admin!". <br>
            Jika salah, pesan: "Password Salah, Akses Ditolak!".
        </div>

        <?php
        $input_password = "admin1234"; // Coba ganti jadi "admin123"
        $pesan_login = "";

        // --- TULIS KODE ANDA DI BAWAH INI ---

        // TODO: Gunakan operator perbandingan (==) untuk string
        if($input_password == "admin123"){
            $pesan_login = "Selamat Datang, Admin!";
            
        }
        else{
            $pesan_login = "Password Salah, Akses Ditolak!";
        }
        // ------------------------------------
        ?>

        <div class="output-preview">
            <span class="label-output">Output Program:</span>
            Input: <?php echo $input_password; ?> <br>
            Respon Sistem: <b><?php echo $pesan_login; ?></b>
        </div>
    </div>


    <!-- SOAL 5 -->
    <div class="soal-box">
        <span class="soal-title">Soal 5: Kategori Umur (Bonus)</span>
        <div class="instruction">
            Tentukan apakah seseorang boleh membuat KTP.<br>
            Syarat KTP: Umur harus <b>17 tahun atau lebih</b>.<br>
            Output: "Boleh buat KTP" atau "Belum cukup umur".
        </div>

        <?php
        $umur_sekarang = 18;
        $hasil_ktp = "";

        // --- TULIS KODE ANDA DI BAWAH INI ---

        // TODO: Tulis logika disini
        if($umur_sekarang >= 17) {
            $hasil_ktp = "Boleh buat KTP";
        }
        else {
            $hasil_ktp = "Belum cukup umur";
        }

        // ------------------------------------
        ?>

        <div class="output-preview">
            <span class="label-output">Output Program:</span>
            Umur: <?php echo $umur_sekarang; ?> tahun <br>
            Keputusan: <b><?php echo $hasil_ktp; ?></b>
        </div>
    </div>

</body>
</html>
