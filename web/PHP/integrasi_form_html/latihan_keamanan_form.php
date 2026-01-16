<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 4: Keamanan Form (Security)</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, sans-serif; background: #ffebee; color: #333; max-width: 800px; margin: 0 auto; padding: 20px; }
        h1 { text-align: center; color: #c0392b; }
        .soal-box { background: white; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 25px; margin-bottom: 30px; border-left: 5px solid #e74c3c; }
        .soal-title { font-weight: bold; font-size: 1.2em; color: #c0392b; margin-bottom: 10px; display: block; }
        .instruction { background-color: #ffcdd2; padding: 10px; border-radius: 4px; border: 1px solid #ef9a9a; font-size: 0.95em; margin-bottom: 15px; color: #b71c1c; }
        .output-preview { background-color: #2d2d2d; color: #f8f8f2; padding: 15px; border-radius: 6px; font-family: monospace; margin-top: 15px; word-wrap: break-word; }
        input { padding: 8px; width: 300px; border: 1px solid #ccc; }
        button { padding: 8px 15px; background: #c0392b; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>

    <h1>Latihan 4: Keamanan Dasar (Sanitasi)</h1>

    <!-- SOAL 1 -->
    <div class="soal-box">
        <span class="soal-title">Soal 1: Demonstrasi Celah Keamanan (XSS)</span>
        <div class="instruction">
            Coba masukkan kode ini ke input: <code>&lt;h1&gt;HACKED&lt;/h1&gt;</code> <br>
            Lihat bagaimana PHP merender tag HTML tersebut jika tidak diamankan.
        </div>
        
        <form action="" method="POST">
            <input type="text" name="komen_bahaya" placeholder="Masukkan tag HTML disini...">
            <button type="submit" name="test_xss">Test</button>
        </form>

        <?php
        if(isset($_POST['test_xss'])) {
            // TIDAK AMAN: Langsung echo input user
            echo "<div class='output-preview'>Output Browser: " . $_POST['komen_bahaya'] . "</div>";
        }
        ?>
    </div>

    <!-- SOAL 2 -->
    <div class="soal-box">
        <span class="soal-title">Soal 2: Mengamankan Output</span>
        <div class="instruction">
            Gunakan fungsi <code>htmlspecialchars()</code> agar tag HTML dianggap sebagai teks biasa (aman).
        </div>
        
        <form action="" method="POST">
            <input type="text" name="komen_aman" placeholder="Coba masukkan <h1>Lagi</h1>">
            <button type="submit" name="test_aman">Test Aman</button>
        </form>

        <?php
        if(isset($_POST['test_aman'])) {
            // TODO: Bungkus $_POST dengan htmlspecialchars()
            $aman = htmlspecialchars($_POST['komen_aman']);
            echo "<div class='output-preview'>Output Aman: $aman</div>";
        }
        ?>
    </div>

    <!-- SOAL 3 -->
    <div class="soal-box">
        <span class="soal-title">Soal 3: Validasi Input Kosong</span>
        <div class="instruction">
            Gunakan fungsi <code>empty()</code> untuk mengecek apakah user mengosongkan input.
        </div>
        
        <form action="" method="POST">
            <input type="text" name="wajib_isi" placeholder="Wajib diisi!">
            <button type="submit" name="cek_kosong">Kirim</button>
        </form>

        <?php
        if(isset($_POST['cek_kosong'])) {
            $input = $_POST['wajib_isi'];
            
            // TODO: Cek if(empty($input))
            if(empty($input)) {
                echo "Form kosong,Harus Diisi!";
            }
            else{
                echo "Input kamu adalah: $input";
            }
        }
        ?>
    </div>

    <!-- SOAL 4 -->
    <div class="soal-box">
        <span class="soal-title">Soal 4: Validasi Angka</span>
        <div class="instruction">
            Pastikan input adalah angka menggunakan <code>is_numeric()</code>.
        </div>
        
        <form action="" method="POST">
            <input type="text" name="nomor_hp" placeholder="Masukkan No HP (Angka saja)">
            <button type="submit" name="cek_angka">Validasi</button>
        </form>

        <?php
        if(isset($_POST['cek_angka'])) {
            $hp = $_POST['nomor_hp'];
            
            if(is_numeric($hp)) {
                echo "<div class='output-preview'>Nomor Valid: " . htmlspecialchars($hp) . "</div>";
            } else {
                echo "<div class='output-preview' style='color:orange'>Error: Harap masukkan hanya angka!</div>";
            }
        }
        ?>
    </div>

    <!-- SOAL 5 -->
    <div class="soal-box">
        <span class="soal-title">Soal 5: Form Komentar Lengkap (Final)</span>
        <div class="instruction">
            Gabungkan: 1. Cek tombol, 2. Cek kosong, 3. Sanitasi Output.
        </div>
        
        <form action="" method="POST">
            <input type="text" name="final_nama" placeholder="Nama"><br><br>
            <input type="text" name="final_komen" placeholder="Komentar"><br><br>
            <button type="submit" name="final_submit">Posting Komentar</button>
        </form>

        <?php
        if(isset($_POST['final_submit'])) {
            $f_nama = $_POST['final_nama'];
            $f_komen = $_POST['final_komen'];

            if(empty($f_nama) || empty($f_komen)) {
                echo "<div class='output-preview'>Mohon lengkapi semua data!</div>";
            } else {
                // Sanitasi keduanya
                $clean_nama = htmlspecialchars($f_nama);
                $clean_komen = htmlspecialchars($f_komen);
                
                echo "<div class='output-preview'>";
                echo "<b>$clean_nama</b> berkata: <br>";
                echo "&quot;$clean_komen&quot;";
                echo "</div>";
            }
        }
        ?>
    </div>

</body>
</html>
