<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tantangan Akhir: Integrasi Form</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #2c3e50; /* Dark Theme untuk suasana "Hacker/Challenge" */
            color: #ecf0f1;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #f1c40f; /* Warna Emas */
            border-bottom: 2px solid #f1c40f;
            padding-bottom: 10px;
        }
        .challenge-box {
            background: #34495e;
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 30px;
            border-left: 5px solid #f1c40f;
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

        /* Area Kerja Siswa */
        .workspace {
            background-color: #ecf0f1;
            color: #333;
            padding: 30px;
            border-radius: 8px;
            min-height: 400px;
            border: 2px dashed #95a5a6;
        }

        /* Helper CSS untuk Form Siswa nanti */
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
        }
    </style>
</head>
<body>

    <h1>🚀 Tantangan Akhir: Sistem Pendaftaran Siswa</h1>

    <div class="challenge-box">
        <h3>Instruksi Misi:</h3>
        <p>Anda diminta membuat aplikasi sederhana untuk memeriksa kelulusan pendaftaran siswa baru.</p>
        
        <div class="checklist">
            <strong>Kriteria Penilaian (Checklist):</strong>
            <ul>
                <li>✅ Buat tag <code>&lt;form&gt;</code> dengan method <strong>POST</strong>.</li>
                <li>✅ Buat Input: <strong>Nama Lengkap</strong> (Text), <strong>Nilai Ujian</strong> (Number), dan <strong>Jurusan</strong> (Select/Dropdown).</li>
                <li>✅ Buat Tombol <strong>Submit</strong>.</li>
                <li>✅ PHP: Cek apakah tombol sudah ditekan (<code>isset</code>).</li>
                <li>✅ PHP: Validasi jika nama atau nilai <strong>kosong</strong>.</li>
                <li>✅ PHP: Logika Kelulusan -> Jika <strong>Nilai >= 75</strong> status "LULUS", jika tidak "GAGAL".</li>
                <li>✅ PHP: Tampilkan Nama, Jurusan, dan Status Kelulusan di layar.</li>
                <li>🔒 <strong>Keamanan:</strong> Pastikan Nama yang ditampilkan sudah disanitasi (<code>htmlspecialchars</code>).</li>
            </ul>
        </div>
    </div>

    <!-- AREA KERJA SISWA -->
    <div class="workspace">
        <h2 style="text-align:center; color:#7f8c8d;">--- Area Kerja Coding ---</h2>
        <?php
        // --- TULIS KODE PHP ANDA DI SINI ---
        if(isset($_POST['btn_input'])) {
            $NAMA = htmlspecialchars($_POST['nama_lengkap']);
            $NILAI = ($_POST['nilai_ujian']);
            $JURUSAN = ($_POST['Jurusan']);
            if(empty($_POST['nama_lengkap']) || empty($_POST['nilai_ujian'])){
            echo "<div class='hasil-box' style='color:red;'>Data tidak boleh kosong!</div>";
            }
            else{
             if($NILAI >= 75){
                $status = "Lulus";
               }
               else{
                $status = "Gagal";
               }
                echo "<div class='hasil-box'>";
                echo "Nama: " . $NAMA . "<br>";
                echo "Jurusan: " . $JURUSAN . "<br>";
                echo "Status: <strong>" . $status . "</strong>";
               echo "</div>";
            }
        }
        ?>
        <!-- --- TULIS KODE HTML FORM ANDA DI BAWAH SINI --- -->
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <form action="" method="post">
                <input type="text" name="nama_lengkap" placeholder="Tulis nama lengkapmu!">
                <input type="number" name="nilai_ujian" placeholder="Nilai Ujian: 1-100">
                <label for="pilihan">Pilih Jurusan:</label>
                <select name="Jurusan" id="pilihan">
                <option value="TIK">TIK</option>
                <option value="Akuntansi">Akuntansi</option>
                <option value="Ekonomi">Ekonomi</option>
                <option value="Lainnya">Lainnya</option>
                </select>
                <button type="submit" name="btn_input">Kirim Form</button>
            </form>
        </body>
        </html>
    </div>
</body>
</html>
