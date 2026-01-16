<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 3: Handling Data PHP</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, sans-serif; background: #fffde7; color: #333; max-width: 800px; margin: 0 auto; padding: 20px; }
        h1 { text-align: center; color: #f39c12; }
        .soal-box { background: white; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 25px; margin-bottom: 30px; border-left: 5px solid #f39c12; }
        .soal-title { font-weight: bold; font-size: 1.2em; color: #d35400; margin-bottom: 10px; display: block; }
        .instruction { background-color: #fff3e0; padding: 10px; border-radius: 4px; border: 1px solid #ffe0b2; font-size: 0.95em; margin-bottom: 15px; }
        .output-preview { background-color: #2d2d2d; color: #f8f8f2; padding: 15px; border-radius: 6px; font-family: monospace; margin-top: 15px; }
        input, select { padding: 8px; border: 1px solid #ccc; margin-right: 5px; }
        button { padding: 8px 15px; background: #e67e22; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>

    <h1>Latihan 3: Logika & Handling Data</h1>

    <!-- SOAL 1 -->
    <div class="soal-box">
        <span class="soal-title">Soal 1: Cek Tombol Submit (Isset)</span>
        <div class="instruction">
            Gunakan <code>isset($_POST['tombol_sapa'])</code> agar kode tidak error saat halaman baru dibuka.
        </div>
        
        <form action="" method="POST">
            <input type="text" name="nama_tamu" placeholder="Nama Anda">
            <button type="submit" name="sapaan">Sapa Saya</button>
        </form>

        <?php
        // TODO: Bungkus echo di dalam if(isset(...))
        if(isset($_POST['sapaan'])){
            $nama = $_POST['nama_tamu'];
            echo "Halo $nama";
        }
        ?>
    </div>

    <!-- SOAL 2 -->
    <div class="soal-box">
        <span class="soal-title">Soal 2: Kalkulator Sederhana</span>
        <div class="instruction">
            Ambil nilai <code>angka1</code> dan <code>angka2</code>, jumlahkan, lalu tampilkan hasilnya.
        </div>
        
        <form action="" method="POST">
            <input type="number" name="angka1" placeholder="0" style="width:60px"> + 
            <input type="number" name="angka2" placeholder="0" style="width:60px">
            <button type="submit" name="hitung">Hitung</button>
        </form>

        <?php
        if(isset($_POST['hitung'])) {
            // TODO: Ambil variabel dan jumlahkan
            $hasil = $_POST['angka1'] + $_POST['angka2'];
            echo "Hasil dari ". $_POST['angka1']. "+". $_POST['angka2'] . " = $hasil" ;
        }
        ?>
    </div>

    <!-- SOAL 3 -->
    <div class="soal-box">
        <span class="soal-title">Soal 3: Pilihan Dropdown</span>
        <div class="instruction">
            Tangkap pilihan user dari tag <code>&lt;select&gt;</code>.
        </div>
        
        <form action="" method="POST">
        <select name="menu_makanan">
            <option value="Ayam">Ayam</option>
            <option value="Ikan">Ikan</option>
            <option value="Sapi">Sapi</option>
            <option value="Kepiting">Kepiting</option>
        </select>
            <button type="submit" name="pesan_makan">Pesan</button>
        </form>

        <?php
        if(isset($_POST['pesan_makan'])) {
            // TODO: Tangkap input 'menu_makanan'
            $menu = $_POST['menu_makanan'];
            echo "<div class='output-preview'>Kamu memesan: <b>$menu</b></div>";
        }
        ?>
    </div>

    <!-- SOAL 4 -->
    <div class="soal-box">
        <span class="soal-title">Soal 4: Logika IF dalam Form</span>
        <div class="instruction">
            Jika umur < 17 tampilkan "Belum Cukup Umur", jika >= 17 tampilkan "Silakan Masuk".
        </div>
        
        <form action="" method="POST">
            <input type="number" name="umur_input" placeholder="Umur Anda">
            <button type="submit" name="cek_umur">Cek</button>
        </form>

        <?php
        if(isset($_POST['cek_umur'])) {
            $umur = $_POST['umur_input'];
            if ($umur >= 17){
                echo "Silahkan masuk! anda berusia 17 tahun keatas. umur kamu sekarang $umur";
            }
            else {
                echo "Dilarang masuk,Kamu belum cukup umur. umur kamu sekarang $umur";
            }
        }
        ?>
    </div>

    <!-- SOAL 5 -->
    <div class="soal-box">
        <span class="soal-title">Soal 5: Textarea (Catatan)</span>
        <div class="instruction">
            Textarea digunakan untuk teks panjang. Tangkap isinya sama seperti input biasa.
        </div>
        
        <form action="" method="POST">
            <textarea name="catatan" rows="3" placeholder="Tulis catatan..."></textarea><br>
            <button type="submit" name="simpan_catatan">Simpan</button>
        </form>

        <?php
        if(isset($_POST['simpan_catatan'])) {
            $note = $_POST['catatan'];
            echo "<div class='output-preview'>Catatan tersimpan:<br><i>$note</i></div>";
        }
        ?>
    </div>

</body>
</html>
