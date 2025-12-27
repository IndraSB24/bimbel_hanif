<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Coding: Ternary Operator</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            max-width: 850px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 { text-align: center; color: #8e44ad; }
        .soal-box {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 25px;
            margin-bottom: 30px;
            border-left: 5px solid #9b59b6; /* Warna Ungu untuk Ternary */
        }
        .soal-title {
            font-weight: bold;
            font-size: 1.2em;
            color: #8e44ad;
            margin-bottom: 10px;
            display: block;
        }
        .instruction {
            background-color: #f3e5f5;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #e1bee7;
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

    <h1>Latihan Praktik: Ternary Operator</h1>
    <p style="text-align: center;">Selesaikan soal di bawah ini menggunakan <b>Ternary Operator</b> (<code>Kondisi ? Benar : Salah</code>).</p>

    <!-- SOAL 1 -->
    <div class="soal-box">
        <span class="soal-title">Soal 1: Status Kelulusan Singkat</span>
        <div class="instruction">
            Jika nilai >= 75, status "LULUS", jika tidak "REMEDIAL".<br>
            Gunakan ternary operator satu baris.
        </div>

        <?php
        $nilai_ujian = 70; // Coba ganti nilainya
        $status = "[Belum ada jawaban]";

        // --- TULIS KODE ANDA DI BAWAH INI ---
        
        // TODO: $status = (kondisi) ? "LULUS" : "REMEDIAL";
        $status = ($nilai_ujian>=70) ? "LULUS" : "REMEDIAL";
        
        // ------------------------------------
        ?>

        <div class="output-preview">
            <span class="label-output">Output Program:</span>
            Nilai: <?php echo $nilai_ujian; ?> <br>
            Status: <b><?php echo $status; ?></b>
        </div>
    </div>


    <!-- SOAL 2 -->
    <div class="soal-box">
        <span class="soal-title">Soal 2: Konversi Kode Gender</span>
        <div class="instruction">
            Jika kode 'L', cetak "Laki-laki". Selain itu cetak "Perempuan".
        </div>

        <?php
        $kode_gender = "L"; // Coba ganti "L"
        $keterangan_gender = "[Belum ada jawaban]";

        // --- TULIS KODE ANDA DI BAWAH INI ---

        // TODO: Gunakan ternary untuk mengecek $kode_gender == "L"
        $keterangan_gender = ($kode_gender == "L") ? "LAkI LAKI" : "Perempuan"; 
        // ------------------------------------
        ?>

        <div class="output-preview">
            <span class="label-output">Output Program:</span>
            Kode: <?php echo $kode_gender; ?> <br>
            Gender: <b><?php echo $keterangan_gender; ?></b>
        </div>
    </div>


    <!-- SOAL 3 -->
    <div class="soal-box">
        <span class="soal-title">Soal 3: Toggle Status Online</span>
        <div class="instruction">
            Variabel <code>$is_online</code> bernilai boolean (true/false).<br>
            Jika true, tampilkan "User sedang Online", jika false tampilkan "User Offline".
        </div>

        <?php
        $is_online = false; // Coba ganti false
        $pesan_status = "";

        // --- TULIS KODE ANDA DI BAWAH INI ---

        // TODO: Gunakan ternary pada boolean
        $pesan_status = ($is_online == true) ? "User sedang Online" : "User Offline";

        // ------------------------------------
        ?>

        <div class="output-preview">
            <span class="label-output">Output Program:</span>
            Status Data: <?php echo $is_online ? 'true' : 'false'; ?> <br>
            Pesan: <b><?php echo $pesan_status; ?></b>
        </div>
    </div>


    <!-- SOAL 4 -->
    <div class="soal-box">
        <span class="soal-title">Soal 4: Sapaan Berdasarkan Waktu</span>
        <div class="instruction">
            Jika jam di bawah 12 (<code>$jam < 12</code>), sapa "Selamat Pagi".<br>
            Jika 12 atau lebih, sapa "Selamat Siang".
        </div>

        <?php
        $jam_sekarang = 12; // Anggap format 24 jam
        $sapaan = "";

        // --- TULIS KODE ANDA DI BAWAH INI ---

        // TODO: Isi variabel $sapaan dengan ternary
        $sapaan = ($jam_sekarang <12) ? "Selamat Pagi" : "Selamat Siang";

        // ------------------------------------
        ?>

        <div class="output-preview">
            <span class="label-output">Output Program:</span>
            Jam: <?php echo $jam_sekarang; ?>:00 <br>
            Sapaan: <b><?php echo $sapaan; ?></b>
        </div>
    </div>


    <!-- SOAL 5 -->
    <div class="soal-box">
        <span class="soal-title">Soal 5: Ganjil Genap (One Liner)</span>
        <div class="instruction">
            Tentukan apakah angka Ganjil atau Genap dalam satu baris kode.<br>
            Tips: Gunakan modulus <code>% 2</code>.
        </div>

        <?php
        $angka = 4; 
        $jenis_bilangan = "";

        // --- TULIS KODE ANDA DI BAWAH INI ---

        // TODO: $jenis_bilangan = (... % 2 == 0) ? ... : ...;
        $jenis_bilangan = ($angka % 2 == 0) ? "Genap" : "Ganjil";

        // ------------------------------------
        ?>

        <div class="output-preview">
            <span class="label-output">Output Program:</span>
            Angka: <?php echo $angka; ?> <br>
            Jenis: <b><?php echo $jenis_bilangan; ?></b>
        </div>
    </div>

</body>
</html>
