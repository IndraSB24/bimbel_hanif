<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Coding: Operator Logika</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            max-width: 850px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 { text-align: center; color: #00897b; }
        .soal-box {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 25px;
            margin-bottom: 30px;
            border-left: 5px solid #26a69a; /* Warna Teal untuk Logika */
        }
        .soal-title {
            font-weight: bold;
            font-size: 1.2em;
            color: #00897b;
            margin-bottom: 10px;
            display: block;
        }
        .instruction {
            background-color: #e0f2f1;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #b2dfdb;
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
        code {
            background-color: #eee;
            padding: 2px 5px;
            border-radius: 3px;
            color: #c0392b;
        }
    </style>
</head>
<body>

    <h1>Latihan Praktik: Operator Logika</h1>
    <p style="text-align: center;">Gunakan operator <code>&&</code> (AND), <code>||</code> (OR), dan <code>!</code> (NOT) untuk menyelesaikan soal.</p>

    <!-- SOAL 1 -->
    <div class="soal-box">
        <span class="soal-title">Soal 1: Login System (AND)</span>
        <div class="instruction">
            User berhasil login HANYA JIKA <code>username</code> adalah "admin" DAN <code>password</code> adalah "12345".<br>
            Jika keduanya benar, status = "Login Berhasil". Jika salah satu salah, status = "Login Gagal".
        </div>

        <?php
        $username = "admin";
        $password = "12345"; // Coba ganti jadi "12345"
        $status_login = "[Belum ada jawaban]";

        // --- TULIS KODE ANDA DI BAWAH INI ---
        
        // TODO: if ($username == "admin" && ...) { ... }
        if ($username == "admin" && $password == "12345"){
            $status_login = "Login Berhasil";
        }
        else {
            $status_login = "Login Gagal";
        }
        
        // ------------------------------------
        ?>

        <div class="output-preview">
            <span class="label-output">Output Program:</span>
            User: <?php echo $username; ?> | Pass: <?php echo $password; ?> <br>
            Status: <b><?php echo $status_login; ?></b>
        </div>
    </div>


    <!-- SOAL 2 -->
    <div class="soal-box">
        <span class="soal-title">Soal 2: Kelayakan Beasiswa (AND)</span>
        <div class="instruction">
            Siswa berhak dapat beasiswa jika Nilai Akademik >= 85 DAN Nilai Sikap >= 80.<br>
            Tentukan hasilnya "Dapat Beasiswa" atau "Tidak Dapat".
        </div>

        <?php
        $nilai_akademik = 90;
        $nilai_sikap = 80; // Coba ubah nilai ini
        $hasil_beasiswa = "";

        // --- TULIS KODE ANDA DI BAWAH INI ---

        // TODO: Gunakan operator AND (&&)
        if ($nilai_akademik >= 80 && $nilai_sikap >= 80){
            $hasil_beasiswa = "Dapat Beasiswa";
        }
        else{
            $hasil_beasiswa = "Tidak Dapat";
        }

        // ------------------------------------
        ?>

        <div class="output-preview">
            <span class="label-output">Output Program:</span>
            Nilai: <?php echo $nilai_akademik; ?> | Sikap: <?php echo $nilai_sikap; ?> <br>
            Keputusan: <b><?php echo $hasil_beasiswa; ?></b>
        </div>
    </div>


    <!-- SOAL 3 -->
    <div class="soal-box">
        <span class="soal-title">Soal 3: Cek Voucher Diskon (OR)</span>
        <div class="instruction">
            Pembeli dapat diskon jika belanja di atas 100rb ATAU memiliki kartu member.<br>
            <code>$total_belanja > 100000</code> ATAU <code>$punya_kartu == true</code>.<br>
            Output: "Dapat Diskon" / "Harga Normal".
        </div>

        <?php
        $total_belanja = 99999;
        $punya_kartu = false; // Coba ubah false
        $cek_diskon = "";

        // --- TULIS KODE ANDA DI BAWAH INI ---

        // TODO: Gunakan operator OR (||)
        if ($total_belanja == 100000 || $punya_kartu == true){
            $cek_diskon = "Dapat Diskon";
        }
        else{
            $cek_diskon = "Harga Normal";
        }

        // ------------------------------------
        ?>

        <div class="output-preview">
            <span class="label-output">Output Program:</span>
            Belanja: <?php echo $total_belanja; ?> | Member: <?php echo $punya_kartu ? 'Ya' : 'Tidak'; ?> <br>
            Hasil: <b><?php echo $cek_diskon; ?></b>
        </div>
    </div>


    <!-- SOAL 4 -->
    <div class="soal-box">
        <span class="soal-title">Soal 4: Status Akun (NOT)</span>
        <div class="instruction">
            Cek apakah akun diblokir atau tidak.<br>
            Jika <code>$is_banned</code> bernilai FALSE, maka tampilkan "Akun Aktif".<br>
            Jika TRUE, tampilkan "Akun Terblokir".<br>
            Tips: Gunakan operator NOT (<code>!</code>) atau cek boolean biasa.
        </div>

        <?php
        $is_banned = true; // Coba ganti true
        $status_akun = "";

        // --- TULIS KODE ANDA DI BAWAH INI ---

        // TODO: if (!$is_banned) { ... }
        if (!$is_banned) {
            $status_akun = "Akun Aktif";
        }
        else{
            $status_akun = "Akun terblokir";
        }

        // ------------------------------------
        ?>

        <div class="output-preview">
            <span class="label-output">Output Program:</span>
            Data Banned: <?php echo $is_banned ? 'True' : 'False'; ?> <br>
            Status: <b><?php echo $status_akun; ?></b>
        </div>
    </div>


    <!-- SOAL 5 -->
    <div class="soal-box">
        <span class="soal-title">Soal 5: Validasi Angka (Range)</span>
        <div class="instruction">
            Cek apakah sebuah angka berada di antara 10 sampai 20.<br>
            Angka harus >= 10 DAN <= 20.<br>
            Output: "Angka dalam jangkauan" atau "Angka di luar jangkauan".
        </div>

        <?php
        $angka2 = 21; // Coba ganti 5 atau 25
        $validasi = "";

        // --- TULIS KODE ANDA DI BAWAH INI ---

        // TODO: if ($angka >= 10 && ...) { ... }
        if ($angka2 >=10 && $angka2 <=20) {
            $validasi = "Angka dalam jangkauan";
        }
        else{
            $validasi = "Angka diluar jangkauan";
        }

        // ------------------------------------
        ?>

        <div class="output-preview">
            <span class="label-output">Output Program:</span>
            Input Angka: <?php echo $angka2; ?> <br>
            Hasil: <b><?php echo $validasi; ?></b>
        </div>
    </div>

</body>
</html>
