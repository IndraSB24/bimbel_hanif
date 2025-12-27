<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Coding: Switch Case</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            max-width: 850px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 { text-align: center; color: #d35400; }
        .soal-box {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 25px;
            margin-bottom: 30px;
            border-left: 5px solid #e67e22; /* Warna Orange untuk Switch Case */
        }
        .soal-title {
            font-weight: bold;
            font-size: 1.2em;
            color: #d35400;
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

    <h1>Latihan Praktik: Switch Case</h1>
    <p style="text-align: center;">Gunakan struktur <code>switch-case</code> untuk menyelesaikan soal di bawah ini.</p>

    <!-- SOAL 1 -->
    <div class="soal-box">
        <span class="soal-title">Soal 1: Konversi Angka ke Hari</span>
        <div class="instruction">
            Ubah angka 1-7 menjadi nama hari.<br>
            1 = Senin, 2 = Selasa, dst sampai 7 = Minggu.<br>
            Jika angka lain, tampilkan "Hari tidak valid".
        </div>

        <?php
        $nomor_hari = 3; // Coba ganti angka 1-7
        $nama_hari = "[Belum ada jawaban]";

        // --- TULIS KODE ANDA DI BAWAH INI ---
        
        // TODO: Gunakan switch($nomor_hari)
        // Jangan lupa break; di setiap case!

        
        // ------------------------------------
        ?>

        <div class="output-preview">
            <span class="label-output">Output Program:</span>
            Angka: <?php echo $nomor_hari; ?> <br>
            Hari: <b><?php echo $nama_hari; ?></b>
        </div>
    </div>


    <!-- SOAL 2 -->
    <div class="soal-box">
        <span class="soal-title">Soal 2: Lampu Lalu Lintas</span>
        <div class="instruction">
            Tentukan aksi berdasarkan warna lampu (<code>$warna</code>).<br>
            - Merah: "Berhenti!"<br>
            - Kuning: "Hati-hati!"<br>
            - Hijau: "Jalan!"<br>
            - Default: "Warna rusak"
        </div>

        <?php
        $warna_lampu = "merah"; // Coba ganti "kuning" atau "hijau"
        $aksi = "";

        // --- TULIS KODE ANDA DI BAWAH INI ---

        // TODO: Buat switch case untuk $warna_lampu
        

        // ------------------------------------
        ?>

        <div class="output-preview">
            <span class="label-output">Output Program:</span>
            Lampu: <?php echo $warna_lampu; ?> <br>
            Aksi: <b><?php echo $aksi; ?></b>
        </div>
    </div>


    <!-- SOAL 3 -->
    <div class="soal-box">
        <span class="soal-title">Soal 3: Grade Nilai (Predikat)</span>
        <div class="instruction">
            Terjemahkan Grade Huruf menjadi keterangan predikat.<br>
            A = "Sangat Memuaskan"<br>
            B = "Memuaskan"<br>
            C = "Cukup"<br>
            D = "Kurang"<br>
            E = "Gagal"
        </div>

        <?php
        $grade = "B"; 
        $keterangan = "";

        // --- TULIS KODE ANDA DI BAWAH INI ---

        // TODO: Buat switch case untuk $grade
        

        // ------------------------------------
        ?>

        <div class="output-preview">
            <span class="label-output">Output Program:</span>
            Grade: <?php echo $grade; ?> <br>
            Predikat: <b><?php echo $keterangan; ?></b>
        </div>
    </div>


    <!-- SOAL 4 -->
    <div class="soal-box">
        <span class="soal-title">Soal 4: Pilih Menu Makanan</span>
        <div class="instruction">
            Buat sistem pemesanan sederhana berdasarkan <code>$kode_menu</code>.<br>
            1 = "Nasi Goreng - Rp 15.000"<br>
            2 = "Mie Ayam - Rp 12.000"<br>
            3 = "Bakso - Rp 13.000"<br>
            Default = "Menu tidak tersedia"
        </div>

        <?php
        $kode_menu = 2; // Coba ganti 1, 2, atau 3
        $pesan_menu = "";

        // --- TULIS KODE ANDA DI BAWAH INI ---

        // TODO: Buat switch case disini
        

        // ------------------------------------
        ?>

        <div class="output-preview">
            <span class="label-output">Output Program:</span>
            Kode Pilihan: <?php echo $kode_menu; ?> <br>
            Pesanan: <b><?php echo $pesan_menu; ?></b>
        </div>
    </div>


    <!-- SOAL 5 -->
    <div class="soal-box">
        <span class="soal-title">Soal 5: Kalkulator Mini (Bonus)</span>
        <div class="instruction">
            Hitung hasil matematika berdasarkan <code>$operator</code> (+, -, *, /).<br>
            Gunakan switch pada variabel <code>$operator</code> untuk menentukan rumus matematika yang dipakai.
        </div>

        <?php
        $angka1 = 10;
        $angka2 = 5;
        $operator = "+"; // Coba ganti jadi "-", "*", atau "/"
        $hasil_hitung = 0;

        // --- TULIS KODE ANDA DI BAWAH INI ---

        // TODO: Switch case untuk $operator
        // case "+": $hasil_hitung = $angka1 + $angka2; break;
        // dst...
        

        // ------------------------------------
        ?>

        <div class="output-preview">
            <span class="label-output">Output Program:</span>
            <?php echo "$angka1 $operator $angka2"; ?> = <b><?php echo $hasil_hitung; ?></b>
        </div>
    </div>

</body>
</html>
