<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Studi Kasus: Sistem Service HP</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, sans-serif; background: #e0f7fa; color: #006064; max-width: 900px; margin: 0 auto; padding: 20px; }
        h1 { text-align: center; color: #00838f; border-bottom: 3px solid #00acc1; padding-bottom: 15px; }
        
        .challenge-card { 
            background: white; 
            border-radius: 8px; 
            box-shadow: 0 4px 6px rgba(0,0,0,0.1); 
            padding: 30px; 
            margin-bottom: 40px; 
            border-top: 5px solid #00bcd4; 
        }
        .story-box {
            background-color: #e0f2f1;
            border-left: 5px solid #009688;
            padding: 15px;
            margin-bottom: 20px;
            font-style: italic;
            color: #004d40;
        }
        .requirements {
            background-color: #fff3e0;
            padding: 15px;
            border: 1px solid #ffe0b2;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .requirements h4 { margin-top: 0; color: #e65100; }
        .requirements ul { margin-bottom: 0; padding-left: 20px; }
        
        textarea { 
            width: 100%; 
            height: 120px; 
            padding: 15px; 
            border: 1px solid #b2dfdb; 
            border-radius: 6px; 
            font-family: 'Consolas', monospace; 
            font-size: 14px;
            background-color: #f1f8e9; 
            color: #33691e; 
            resize: vertical;
            box-sizing: border-box;
        }
        textarea::placeholder { color: #9e9e9e; font-style: italic; }
        textarea:focus { outline: 2px solid #00bcd4; }

        .clue-btn {
            background: #b2ebf2; border: none; padding: 5px 10px; cursor: pointer; font-size: 0.8em; color: #006064; border-radius: 3px; margin-bottom: 10px; display: inline-block;
        }
        .clue-content { display: none; color: #d84315; font-size: 0.9em; margin-bottom: 10px; padding: 5px; border-left: 3px solid #ff7043; background: #fbe9e7; }
    </style>
    <script>
        function toggleClue(id) {
            var x = document.getElementById(id);
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
</head>
<body>

    <h1>🔧 Studi Kasus: Sistem Manajemen Service HP</h1>
    <p style="text-align:center; margin-bottom: 40px;">
        Anda diminta merancang database untuk sebuah toko servis elektronik.<br>
        Toko ini membutuhkan 3 tabel utama: <strong>Pelanggan</strong>, <strong>Sparepart</strong>, dan <strong>Transaksi Servis</strong>.
    </p>

    <!-- TABEL 1: PELANGGAN -->
    <div class="challenge-card">
        <h2>Tahap 1: Tabel Master Pelanggan</h2>
        
        <div class="story-box">
            "Pertama, kita butuh database pelanggan agar mereka tidak perlu isi data berulang kali setiap servis. 
            Kita perlu simpan <strong>Nama</strong> mereka.
            Lalu <strong>Nomor WhatsApp</strong> yang WAJIB ada dan tidak boleh kembar dengan pelanggan lain (agar tidak salah kirim notif).
            Terakhir, <strong>Alamat</strong> rumahnya (boleh kosong kalau mereka tidak mau kasih)."
        </div>

        <div class="requirements">
            <h4>📋 Analisa Kebutuhan:</h4>
            <p>Buat tabel bernama <code>pelanggan</code>. Tentukan kolom yang cocok untuk menyimpan:</p>
            <ul>
                <li>Identitas unik pelanggan (ID).</li>
                <li>Nama lengkap.</li>
                <li>Nomor Kontak (Ingat: Harus unik dan tidak boleh kosong).</li>
                <li>Alamat Domisili (Ingat: Bersifat opsional).</li>
            </ul>
        </div>

        <button class="clue-btn" onclick="toggleClue('clue1')">Petunjuk Teknis</button>
        <div id="clue1" class="clue-content">
            Tips: Gunakan <code>PRIMARY KEY AUTO_INCREMENT</code> untuk ID. Gunakan <code>UNIQUE</code> untuk kontak agar tidak ganda.
        </div>
        <textarea placeholder="CREATE TABLE pelanggan ( ... );"></textarea>
    </div>


    <!-- TABEL 2: SPAREPART -->
    <div class="challenge-card">
        <h2>Tahap 2: Tabel Stok Sparepart</h2>
        
        <div class="story-box">
            "Kita juga jualan sparepart (LCD, Baterai, dll). 
            Tolong buat tabel untuk stok. Ada <strong>Nama Barang</strong>.
            Lalu <strong>Jumlah Stok</strong> (angka bulat), pastikan default-nya 0 kalau barang baru masuk sistem.
            Dan <strong>Harga Jual</strong> per unit (Rupiah)."
        </div>

        <div class="requirements">
            <h4>📋 Analisa Kebutuhan:</h4>
            <p>Buat tabel bernama <code>sparepart</code>. Tentukan kolom yang cocok untuk menyimpan:</p>
            <ul>
                <li>Identitas unik barang.</li>
                <li>Nama barang/sparepart.</li>
                <li>Jumlah stok saat ini (Ingat: Berikan nilai bawaan/default).</li>
                <li>Harga jual (Ingat: Perlu presisi untuk mata uang).</li>
            </ul>
        </div>

        <button class="clue-btn" onclick="toggleClue('clue2')">Petunjuk Teknis</button>
        <div id="clue2" class="clue-content">
            Tips: Nilai bawaan gunakan <code>DEFAULT 0</code>. Untuk uang gunakan tipe data <code>DECIMAL</code> agar akurat.
        </div>

        <textarea placeholder="CREATE TABLE sparepart ( ... );"></textarea>
    </div>


    <!-- TABEL 3: TRANSAKSI -->
    <div class="challenge-card">
        <h2>Tahap 3: Tabel Transaksi Servis (Inti)</h2>
        
        <div class="story-box">
            "Ini tabel utamanya. Setiap ada HP masuk, kita catat di sini.
            Kita harus tahu ini servis punya siapa (simpan <strong>ID Pelanggan</strong>-nya saja).
            Catat <strong>Tipe HP</strong>-nya apa.
            <strong>Keluhan</strong> kerusakannya apa (bisa panjang).
            Kapan HP <strong>Masuk</strong> (otomatis jam sekarang).
            Dan <strong>Status</strong> pengerjaan (hanya boleh: 'Masuk', 'Proses', 'Selesai', 'Diambil')."
        </div>

        <div class="requirements">
            <h4>📋 Analisa Kebutuhan:</h4>
            <p>Buat tabel bernama <code>transaksi_servis</code>. Tentukan kolom yang cocok untuk menyimpan:</p>
            <ul>
                <li>Identitas unik transaksi.</li>
                <li>ID milik Pelanggan (Cukup simpan angkanya saja).</li>
                <li>Info Unit HP & Keluhan Kerusakan.</li>
                <li>Waktu HP masuk (Ingat: Harus terisi otomatis oleh sistem).</li>
                <li>Status Pengerjaan (Ingat: Pilihan harus ketat/terbatas).</li>
            </ul>
        </div>

        <button class="clue-btn" onclick="toggleClue('clue3')">Petunjuk Teknis</button>
        <div id="clue3" class="clue-content">
            Tips: Waktu otomatis gunakan <code>TIMESTAMP DEFAULT CURRENT_TIMESTAMP</code>. Pilihan terbatas gunakan <code>ENUM</code>.
        </div>

        <textarea placeholder="CREATE TABLE transaksi_servis ( ... );"></textarea>
    </div>

</body>
</html>
