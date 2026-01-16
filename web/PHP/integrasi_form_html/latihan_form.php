<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1: Struktur Form Dasar</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, sans-serif; background: #eef2f3; color: #333; max-width: 800px; margin: 0 auto; padding: 20px; }
        h1 { text-align: center; color: #2c3e50; }
        .soal-box { background: white; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 25px; margin-bottom: 30px; border-left: 5px solid #34495e; }
        .soal-title { font-weight: bold; font-size: 1.2em; color: #2c3e50; margin-bottom: 10px; display: block; }
        .instruction { background-color: #dbe9f6; padding: 10px; border-radius: 4px; border: 1px solid #cbdbea; font-size: 0.95em; margin-bottom: 15px; }
        .output-preview { background-color: #2c3e50; color: #ecf0f1; padding: 15px; border-radius: 6px; font-family: monospace; margin-top: 15px; }
        .form-group { margin-bottom: 10px; }
        input[type="text"] { padding: 5px; width: 200px; }
        button { padding: 5px 15px; cursor: pointer; }
    </style>
</head>
<body>

    <h1>Latihan 1: Struktur Dasar Form HTML</h1>

    <!-- SOAL 1 -->
    <div class="soal-box">
        <span class="soal-title">Soal 1: Tag Form Pembuka</span>
        <div class="instruction">
            Lengkapi tag form di bawah ini dengan atribut <code>method="POST"</code>.
        </div>
        
        <!-- TODO: Tambahkan method="POST" pada tag form -->
        <form action="" method="POST">
            <input name="data1" placeholder="Ketik">
            <button type="submit">Kirim</button>
        </form>

        <?php if(isset($_POST['data1'])) echo "<div class='output-preview'>Form berhasil dikirim! Data: " . htmlspecialchars($_POST['data1']) . "</div>"; ?>
    </div>

    <!-- SOAL 2 -->
    <div class="soal-box">
        <span class="soal-title">Soal 2: Atribut 'name' (PENTING)</span>
        <div class="instruction">
            Input di bawah ini tidak bisa ditangkap PHP karena kekurangan atribut <code>name</code>. <br>
            Tambahkan <code>name="kota_asal"</code> pada input.
        </div>
        
        <form action="" method="POST">
            <!-- TODO: Tambahkan atribut name="kota_asal" -->
            <input type="text" name="kota_asal" placeholder="Isi kota asalmu">
            <button type="submit" value="Kirim Form">Simpan</button>
        </form>

        <?php 
        if(isset($_POST['kota_asal'])) {
            echo "<div class='output-preview'>Berhasil! Kota: " . htmlspecialchars($_POST['kota_asal']) . "</div>";
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_POST['kota_asal']) && !isset($_POST['data1']) && !isset($_POST['kirim_btn'])) {
             // Fallback jika tombol ditekan tapi name belum ada (biasanya index undefined, tapi kita handle silent di sini)
             echo "<div class='output-preview' style='background:#c0392b'>Error: Atribut name belum ditambahkan!</div>";
        }
        ?>
    </div>

    <!-- SOAL 3 -->
    <div class="soal-box">
        <span class="soal-title">Soal 3: Tombol Submit</span>
        <div class="instruction">
            Form ini belum punya tombol. Buatlah tombol: <code>&lt;button type="submit" name="kirim_btn"&gt;Kirim&lt;/button&gt;</code>
        </div>
        
        <form action="" method="POST">
            <input type="text" name="hobi" placeholder="Hobi kamu" value="Membaca">
            <br><br>
            <!-- TODO: Buat tombol submit disini -->
           <button type="submit" name="kirim_btn" >Kirim</button>
        </form>

        <?php if(isset($_POST['kirim_btn'])) echo "<div class='output-preview'>Tombol berfungsi! Hobi: " . htmlspecialchars($_POST['hobi']) . "</div>"; ?>
    </div>

    <!-- SOAL 4 -->
    <div class="soal-box">
        <span class="soal-title">Soal 4: Label & Input</span>
        <div class="instruction">
            Bungkus input di bawah dengan Label yang sesuai. Gunakan tag <code>&lt;label&gt;Email:&lt;/label&gt;</code>.
        </div>
        
        <form action="" method="POST">
            <!-- TODO: Tambahkan Label -->
            <label for="email">Email:</label>
            <input type="email" name="email_user" placeholder="contoh@mail.com" id="email">
            <button type="submit" name="cek_email">Cek</button>
        </form>
    </div>

    <!-- SOAL 5 -->
    <div class="soal-box">
        <span class="soal-title">Soal 5: Placeholder</span>
        <div class="instruction">
            Tambahkan atribut <code>placeholder="Masukkan Nama Lengkap"</code> agar user tahu apa yang harus diisi.
        </div>
        
        <form action="" method="POST">
            <!-- TODO: Tambahkan placeholder -->
            <input type="text" name="nama_lengkap" placeholder="Masukkan Nama Lengkap">
            <button type="submit">Submit</button>
        </form>
    </div>

</body>
</html>
