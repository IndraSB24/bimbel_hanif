<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 2: GET vs POST</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, sans-serif; background: #f4f4f9; color: #333; max-width: 800px; margin: 0 auto; padding: 20px; }
        h1 { text-align: center; color: #8e44ad; }
        .soal-box { background: white; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 25px; margin-bottom: 30px; border-left: 5px solid #9b59b6; }
        .soal-title { font-weight: bold; font-size: 1.2em; color: #8e44ad; margin-bottom: 10px; display: block; }
        .instruction { background-color: #f5eef8; padding: 10px; border-radius: 4px; border: 1px solid #ebdef0; font-size: 0.95em; margin-bottom: 15px; }
        .output-preview { background-color: #2d2d2d; color: #f8f8f2; padding: 15px; border-radius: 6px; font-family: monospace; margin-top: 15px; }
        input { padding: 8px; border: 1px solid #ccc; border-radius: 4px; }
        button { padding: 8px 15px; background: #8e44ad; color: white; border: none; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>

    <h1>Latihan 2: Perbedaan GET & POST</h1>

    <!-- SOAL 1 -->
    <div class="soal-box">
        <span class="soal-title">Soal 1: Pencarian (Method GET)</span>
        <div class="instruction">
            Ubah method menjadi <b>GET</b>. Perhatikan URL di browser setelah klik tombol "Cari".
        </div>
        
        <!-- TODO: Ganti method="POST" jadi "GET" -->
        <form action="" method="GET">
            <input type="text" name="keyword" placeholder="Cari barang...">
            <button type="submit">Cari</button>
        </form>

        <?php 
        if(isset($_GET['keyword'])) {
            echo "<div class='output-preview'>PHP Menerima (GET): " . htmlspecialchars($_GET['keyword']) . "<br><small>Lihat URL di atas browser Anda!</small></div>";
        }
        ?>
    </div>

    <!-- SOAL 2 -->
    <div class="soal-box">
        <span class="soal-title">Soal 2: Login Rahasia (Method POST)</span>
        <div class="instruction">
            Gunakan method <b>POST</b> agar password tidak muncul di URL.
        </div>
        
        <!-- TODO: Isi method="POST" -->
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" name="btn_login">Login</button>
        </form>

        <?php 
        if(isset($_POST['btn_login'])) {
            echo "<div class='output-preview'>PHP Menerima (POST):<br>User: " . htmlspecialchars($_POST['username']) . "<br>Pass: [Disembunyikan dari URL]</div>";
        }
        ?>
    </div>

    <!-- SOAL 3 -->
    <div class="soal-box">
        <span class="soal-title">Soal 3: Link Parameter (Manual GET)</span>
        <div class="instruction">
            Kita bisa mengirim data GET tanpa form, yaitu lewat Link. <br>
            Buat link ke file ini dengan parameter: <code>?halaman=kontak</code>
        </div>
        
        <!-- TODO: Lengkapi href -->
        <a href="?halaman=kontak" style="color: blue; text-decoration: underline;">Klik Link Ini</a>

        <?php 
        if(isset($_GET['halaman'])) {
            echo "<div class='output-preview'>Anda sedang di halaman: <b>" . htmlspecialchars($_GET['halaman']) . "</b></div>";
        }
        ?>
    </div>

    <!-- SOAL 4 -->
    <div class="soal-box">
        <span class="soal-title">Soal 4: Analisis Error</span>
        <div class="instruction">
            Form ini menggunakan method POST, tapi PHP mencoba menangkap pakai <code>$_GET</code>. Perbaiki kode PHP-nya.
        </div>
        
        <form action="" method="POST">
            <input type="text" name="pesan" placeholder="Kirim pesan rahasia">
            <button type="submit" name="kirim_pesan">Kirim</button>
        </form>

        <?php 
        // TODO: Ganti $_GET jadi $_POST
        if(isset($_POST['kirim_pesan'])) {
            $pesan = $_POST['pesan']; // Perbaiki baris ini
            echo "<div class='output-preview'>Pesan diterima: $pesan</div>";
        }
        ?>
    </div>

    <!-- SOAL 5 -->
    <div class="soal-box">
        <span class="soal-title">Soal 5: Memilih Method yang Tepat</span>
        <div class="instruction">
            Pilih method yang tepat untuk form "Ganti PIN ATM". (Ubah kode di bawah).
        </div>
        
        <!-- TODO: GET atau POST? -->
        <form action="" method="POST">
            <input type="number" name="pin_baru" placeholder="PIN Baru">
            <button type="submit" name="ganti_pin">Ubah PIN</button>
        </form>
        
        <?php
        if(isset($_GET['pin_baru'])) echo "<div class='output-preview' style='color:red'>BAHAYA! PIN muncul di URL (GET). Ganti ke POST!</div>";
        if(isset($_POST['pin_baru'])) echo "<div class='output-preview' style='color:#2ecc71'>AMAN! PIN dikirim lewat POST.</div>";
        ?>
    </div>

</body>
</html>
