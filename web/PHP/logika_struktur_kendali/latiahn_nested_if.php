<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Coding: Nested If</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e8eaf6; /* Indigo Light */
            color: #333;
            max-width: 850px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 { text-align: center; color: #3f51b5; }
        .soal-box {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 25px;
            margin-bottom: 30px;
            border-left: 5px solid #3949ab; /* Indigo Dark */
        }
        .soal-title {
            font-weight: bold;
            font-size: 1.2em;
            color: #303f9f;
            margin-bottom: 10px;
            display: block;
        }
        .instruction {
            background-color: #c5cae9;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #9fa8da;
            font-size: 0.95em;
            margin-bottom: 15px;
            color: #1a237e;
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
        code {
            background-color: #eee;
            padding: 2px 5px;
            border-radius: 3px;
            color: #c0392b;
        }
    </style>
</head>
<body>

    <h1>Latihan Praktik: Nested If (Bersarang)</h1>
    <p style="text-align: center;">Nested If adalah struktur <code>if</code> yang berada di dalam <code>if</code> lainnya untuk pengecekan bertingkat.</p>

    <!-- SOAL 1 -->
    <div class="soal-box">
        <span class="soal-title">Soal 1: Login Validasi Bertingkat</span>
        <div class="instruction">
            1. Cek apakah <code>$username</code> ada (misal: "admin"). Jika salah, cetak "Username tidak ditemukan".<br>
            2. Jika username benar, MASUK ke if dalam, lalu cek <code>$password</code> ("12345").<br>
            3. Jika password benar: "Login Sukses". Jika salah: "Password Salah".
        </div>

        <?php
        $username = "admin";
        $password = "12345"; // Coba ganti jadi "12345"
        $pesan_login = "[Belum ada jawaban]";

        // --- TULIS KODE ANDA DI BAWAH INI ---
        
        // TODO: if ($username == "admin") {
        //           if ($password == "12345") { ... } else { ... }
        //       } else { ... }
        if ($username == "admin") {
            if($password == "12345"){
                $pesan_login = "Login Sukses";
            }
            else{
                $pesan_login = "Password Salah";
            }
        }
        else {
            $pesan_login = "Username tidak ditemukan";
        }
        
        // ------------------------------------
        ?>

        <div class="output-preview">
            <span class="label-output">Output Program:</span>
            User: <?php echo $username; ?> | Pass: <?php echo $password; ?> <br>
            Respon: <b><?php echo $pesan_login; ?></b>
        </div>
    </div>


    <!-- SOAL 2 -->
    <div class="soal-box">
        <span class="soal-title">Soal 2: Seleksi Nilai Detail</span>
        <div class="instruction">
            1. Cek apakah siswa <b>Lulus</b> (Nilai >= 75).<br>
            2. Jika Lulus, cek lagi: Apakah Nilai >= 90? Jika ya status "Cumlaude", jika tidak "Lulus Biasa".<br>
            3. Jika Tidak Lulus, cek lagi: Apakah Nilai < 50? Jika ya status "Tidak Lulus (Drop Out)", jika tidak "Boleh Remedial".
        </div>

        <?php
        $nilai = 89; // Coba: 95, 80, 60, 40
        $status_akhir = "";

        // --- TULIS KODE ANDA DI BAWAH INI ---

        // TODO: Buat Nested If sesuai instruksi
        if($nilai >= 75){
            if($nilai >=90){
                $status_akhir = "Cumlaude";
            }
            else{
                $status_akhir = "Lulus Biasa";
            }
        }
        else {
            if($nilai <50){
                $status_akhir = "Drop Out";
            }
            else{
                $status_akhir = "Boleh Remedial";
            }
        }

        // ------------------------------------
        ?>

        <div class="output-preview">
            <span class="label-output">Output Program:</span>
            Nilai: <?php echo $nilai; ?> <br>
            Status: <b><?php echo $status_akhir; ?></b>
        </div>
    </div>


    <!-- SOAL 3 -->
    <div class="soal-box">
        <span class="soal-title">Soal 3: Simulasi Tilang Polisi</span>
        <div class="instruction">
            1. Cek apakah pengendara punya <b>SIM</b>? (<code>$punya_sim</code>)<br>
            2. Jika YA, cek lagi: Apakah punya <b>STNK</b>? (<code>$punya_stnk</code>). Jika YA: "Boleh Jalan", Jika TIDAK: "Tilang STNK".<br>
            3. Jika TIDAK punya SIM, langsung: "Tilang Tidak Punya SIM".
        </div>

        <?php
        $punya_sim = true;
        $punya_stnk = false; // Coba ubah-ubah true/false
        $keputusan_polisi = "";

        // --- TULIS KODE ANDA DI BAWAH INI ---

        // TODO: Nested If boolean
        if ($punya_sim == true){
            if ($punya_stnk = true){
                $keputusan_polisi = "Boleh Jalan";
            }
            else{
                $keputusan_polisi = "Tilang STNK";
            }
        }
        else{
            $keputusan_polisi = "Tilang Tidak Punya SIM";
        }

        // ------------------------------------
        ?>

        <div class="output-preview">
            <span class="label-output">Output Program:</span>
            SIM: <?php echo $punya_sim ? 'Ada' : 'Tidak'; ?> | STNK: <?php echo $punya_stnk ? 'Ada' : 'Tidak'; ?> <br>
            Keputusan: <b><?php echo $keputusan_polisi; ?></b>
        </div>
    </div>


    <!-- SOAL 4 -->
    <div class="soal-box">
        <span class="soal-title">Soal 4: Diskon Bertingkat (Member)</span>
        <div class="instruction">
            1. Cek apakah pembeli adalah <b>Member</b>?<br>
            2. Jika <b>Member</b>: Cek belanja > 500rb. Jika ya diskon "20%", jika tidak "10%".<br>
            3. Jika <b>Bukan Member</b>: Cek belanja > 500rb. Jika ya diskon "5%", jika tidak "0%".
        </div>

        <?php
        $is_member = true;
        $total_belanja = 500001; // Coba ganti > 500000
        $diskon_didapat = "";

        // --- TULIS KODE ANDA DI BAWAH INI ---

        // TODO: Nested If untuk logika Member & Belanja
        if($is_member == true){
            if($total_belanja > 500000){
                $diskon_didapat = "20%";
            }
            else{
                $diskon_didapat = "10%";
            }
        }
        else{
            if($total_belanja > 500000){
                $diskon_didapat = "5%";
            }
            else{
                $diskon_didapat = "0%";
            }
        }
        // ------------------------------------
        ?>

        <div class="output-preview">
            <span class="label-output">Output Program:</span>
            Member: <?php echo $is_member ? 'Ya' : 'Tidak'; ?> | Belanja: <?php echo $total_belanja; ?> <br>
            Diskon: <b><?php echo $diskon_didapat; ?></b>
        </div>
    </div>


    <!-- SOAL 5 -->
    <div class="soal-box">
        <span class="soal-title">Soal 5: Analisa Bilangan (Positif & Genap)</span>
        <div class="instruction">
            1. Cek apakah angka <b>lebih besar dari 0</b> (Positif)?<br>
            2. Jika YA (Positif), cek lagi: Apakah Ganjil atau Genap? Output: "Positif Genap" atau "Positif Ganjil".<br>
            3. Jika TIDAK (<= 0), output: "Bukan Bilangan Positif".
        </div>

        <?php
        $angka = -5; // Coba ganti -5, 0, 13, 14
        $analisa = "";

        // --- TULIS KODE ANDA DI BAWAH INI ---

        // TODO: Nested If
        if($angka > 0){
            if($angka % 2== 0){
                $analisa = "Positif Genap";
            }
            else{
                $analisa = "Positif Ganjil";
            }
        }
        else{
            if($angka <=0){
                $analisa = "Bukan bilangan Positif";
            }
        }

        // ------------------------------------
        ?>

        <div class="output-preview">
            <span class="label-output">Output Program:</span>
            Angka: <?php echo $angka; ?> <br>
            Hasil Analisa: <b><?php echo $analisa; ?></b>
        </div>
    </div>

</body>
</html>
