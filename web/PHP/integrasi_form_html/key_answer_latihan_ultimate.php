<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kunci Jawaban: Tantangan Akhir</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #2c3e50;
            color: #ecf0f1;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #2ecc71; /* Warna Hijau untuk Jawaban Benar */
            border-bottom: 2px solid #2ecc71;
            padding-bottom: 10px;
        }
        .challenge-box {
            background: #34495e;
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 30px;
            border-left: 5px solid #2ecc71;
            box-shadow: 0 4px 6px rgba(0,0,0,0.3);
        }
        .checklist {
            background-color: #2c3e50;
            padding: 15px;
            border-radius: 6px;
            margin-top: 10px;
        }
        .checklist ul { margin: 0; padding-left: 20px; }
        .checklist li { margin-bottom: 5px; color: #bdc3c7; }
        .checklist li strong { color: #f1c40f; }

        .workspace {
            background-color: #ecf0f1;
            color: #333;
            padding: 30px;
            border-radius: 8px;
            min-height: 400px;
            border: 2px dashed #27ae60; /* Border hijau menandakan solusi */
        }

        .workspace input, .workspace select, .workspace button {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #bdc3c7;
            border-radius: 4px;
        }
        .workspace button {
            background-color: #27ae60;
            color: white;
            font-weight: bold;
            border: none;
            cursor: pointer;
        }
        .workspace button:hover { background-color: #2ecc71; }
        .hasil-box {
            background: #dff9fb;
            border: 1px solid #c7ecee;
            padding: 15px;
            margin-top: 20px;
            border-radius: 4px;
            color: #2c3e50;
            border-left: 5px solid #00cec9;
        }
    </style>
</head>
<body>

    <h1>✅ Kunci Jawaban: Sistem Pendaftaran Siswa</h1>

    <div class="challenge-box">
        <h3>Solusi Kode Lengkap</h3>
        <p>Di bawah ini adalah implementasi kode yang memenuhi semua checklist tantangan.</p>
    </div>

    <!-- AREA KERJA SISWA (SOLUSI) -->
    <div class="workspace">
        <h2 style="text-align:center; color:#27ae60;">--- Solusi Kode ---</h2>
        
        <?php
        // --- TULIS KODE PHP ANDA DI SINI ---
        
        // 1. Cek apakah tombol submit dengan name="tombol_daftar" sudah ditekan
        if (isset($_POST['tombol_daftar'])) {

            // 2. Ambil data dari form menggunakan $_POST
            $nama = $_POST['nama_lengkap'];
            $nilai = $_POST['nilai_ujian'];
            $jurusan = $_POST['pilihan_jurusan'];

            // 3. Validasi Input: Pastikan Nama dan Nilai tidak kosong
            if (empty($nama) || empty($nilai)) {
                // Tampilkan pesan error
                echo "<div class='hasil-box' style='background-color:#ffebee; border-left-color:#ff7675;'>";
                echo "<strong style='color:#d63031'>⚠️ Error:</strong> Harap lengkapi Nama dan Nilai Ujian!";
                echo "</div>";
            } else {
                
                // 4. Logika Kelulusan (Nilai >= 75)
                if ($nilai >= 75) {
                    $status = "LULUS";
                    $warna_teks = "green";
                } else {
                    $status = "GAGAL";
                    $warna_teks = "red";
                }

                // 5. Keamanan: Sanitasi output dengan htmlspecialchars()
                $nama_bersih = htmlspecialchars($nama);
                $jurusan_bersih = htmlspecialchars($jurusan);
                $nilai_bersih = htmlspecialchars($nilai);

                // 6. Tampilkan Hasil Akhir
                echo "<div class='hasil-box'>";
                echo "<h3>Hasil Pendaftaran</h3>";
                echo "Nama: <strong>$nama_bersih</strong><br>";
                echo "Jurusan: $jurusan_bersih<br>";
                echo "Nilai Ujian: $nilai_bersih<br>";
                echo "<hr>";
                echo "Status: <strong style='color:$warna_teks; font-size:1.2em'>$status</strong>";
                echo "</div>";
            }
        }
        ?>

        <!-- --- TULIS KODE HTML FORM ANDA DI BAWAH SINI --- -->
        <br>
        <form action="" method="POST">
            
            <label><strong>Nama Lengkap:</strong></label>
            <input type="text" name="nama_lengkap" placeholder="Masukkan nama siswa...">

            <label><strong>Nilai Ujian (0-100):</strong></label>
            <input type="number" name="nilai_ujian" placeholder="Contoh: 80">

            <label><strong>Pilihan Jurusan:</strong></label>
            <select name="pilihan_jurusan">
                <option value="Rekayasa Perangkat Lunak (RPL)">Rekayasa Perangkat Lunak (RPL)</option>
                <option value="Teknik Komputer Jaringan (TKJ)">Teknik Komputer Jaringan (TKJ)</option>
                <option value="Multimedia (MM)">Multimedia (MM)</option>
            </select>

            <button type="submit" name="tombol_daftar">Cek Kelulusan</button>
            
        </form>

    </div>

</body>
</html>
