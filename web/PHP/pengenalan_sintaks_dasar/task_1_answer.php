<?php
// ====================================================================
// KUNCI JAWABAN: TUGAS PHP DASAR
// ====================================================================

// ====================================================================
// BAGIAN 1: DEKLARASI VARIABEL (Sesuai Soal)
// ====================================================================
// 1. Variabel String
$nama_produk = "Paket Belajar Full-Stack PHP";
$tanggal_sekarang = "29 November 2025";

// 2. Variabel Numeric (Integer & Float)
$harga_awal = 1200000;
$persen_diskon = 25; // Dalam persen
$jumlah_peserta = 15;
$biaya_iklan_harian = 150000.50; // Perhatikan penggunaan float
$durasi_promosi_hari = 7;


// ====================================================================
// BAGIAN 2: IMPLEMENTASI OPERATOR & PERHITUNGAN (INTI JAWABAN)
// ====================================================================

// Diskon Nominal
$diskon_nominal = ($harga_awal * $persen_diskon) / 100;

// Harga Akhir
$harga_akhir = $harga_awal - $diskon_nominal;

// Total Biaya Iklan
$total_biaya_iklan = $biaya_iklan_harian * $durasi_promosi_hari;

// Profit Kotor Rata-rata per Peserta
$biaya_iklan_per_peserta = $total_biaya_iklan / $jumlah_peserta;
$profit_kotor_per_peserta = $harga_akhir - $biaya_iklan_per_peserta;


// ====================================================================
// BAGIAN 3: PRE-FORMATTING DATA UNTUK OUTPUT (PERBAIKAN SINTAKS)
// Wajib memanggil fungsi seperti number_format() di luar Heredoc.
// ====================================================================

$h_awal_fmt = number_format($harga_awal, 0, ',', '.');
$diskon_nom_fmt = number_format($diskon_nominal, 0, ',', '.');
$h_akhir_fmt = number_format($harga_akhir, 0, ',', '.');
$t_biaya_iklan_fmt = number_format($total_biaya_iklan, 2, ',', '.');
$profit_kotor_fmt = number_format($profit_kotor_per_peserta, 2, ',', '.');


// ====================================================================
// BAGIAN 4: NARASI DINAMIS (MENGGUNAKAN VARIABEL FORMATTED)
// ====================================================================

// === KODE CSS SEDERHANA UNTUK TAMPILAN YANG RAPI MENGGUNAKAN HEREDOC ===
echo <<<HTML
<!DOCTYPE html>
<html>
<head>
    <title>Hasil Analisis Promosi</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 40px; }
        .report-box { max-width: 700px; margin: 0 auto; background-color: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); }
        h1 { color: #3498db; border-bottom: 2px solid #3498db; padding-bottom: 10px; }
        p { line-height: 1.6; text-align: justify; }
        strong { color: #e74c3c; }
        .materi { margin-top: 40px; border-top: 2px solid #ccc; padding-top: 20px; }
        .materi h2 { color: #2c3e50; }
        .materi pre { background-color: #eee; padding: 15px; border-radius: 5px; overflow-x: auto; font-family: monospace; }
        .materi code { background-color: #e0e0e0; padding: 1px 4px; border-radius: 3px; font-weight: bold; }
    </style>
</head>
<body>
<div class='report-box'>

    <h1>Laporan Promosi Produk: {$nama_produk}</h1>
    <p>
        <!-- Baris 1: Informasi Produk dan Diskon -->
        Kami meluncurkan promosi <strong>{$nama_produk}</strong> pada tanggal {$tanggal_sekarang}. 
        Dengan harga normal Rp{$h_awal_fmt}, kami memberikan diskon besar sebesar <strong>{$persen_diskon}%</strong>, 
        yang berarti setiap pelanggan menghemat Rp{$diskon_nom_fmt} secara nominal.
        <br><br>

        <!-- Baris 2: Harga Akhir dan Statistik Peserta -->
        Setelah diskon, harga jual bersihnya menjadi Rp{$h_akhir_fmt}. 
        Hingga saat ini, kami telah berhasil menarik <strong>{$jumlah_peserta}</strong> peserta.
        <br><br>

        <!-- Baris 3: Analisis Biaya Iklan dan Profit -->
        Total pengeluaran untuk iklan selama {$durasi_promosi_hari} hari adalah <strong>Rp{$t_biaya_iklan_fmt}</strong>. 
        Dengan asumsi biaya iklan terbagi rata, profit kotor rata-rata yang kami dapatkan per peserta adalah <strong>Rp{$profit_kotor_fmt}</strong> per unit, ini adalah angka yang menjanjikan!
    </p>


    <!-- BAGIAN MATERI TAMBAHAN: NUMBER_FORMAT -->
    <div class="materi">
        <h2>Materi Tambahan: Fungsi <code>number_format()</code></h2>
        <p>Fungsi <code>number_format()</code> sangat penting dalam pembuatan laporan keuangan atau tampilan harga. Fungsinya adalah memformat angka (integer/float) menjadi string yang mudah dibaca, biasanya dengan menambahkan pemisah ribuan dan koma desimal.</p>

        <h3>Sintaks Dasar:</h3>
        <pre><code>number_format(
    \$angka, 
    \$desimal, 
    \$pemisah_desimal, 
    \$pemisah_ribuan
);</code></pre>

        <h3>Contoh Implementasi pada Tugas Ini:</h3>
        
        <h4>1. Tanpa Angka di Belakang Koma (Angka Bulat)</h4>
        <p>Kita menggunakan ini untuk Harga Awal, Harga Akhir, dan Diskon Nominal.</p>
        <pre><code>number_format(\$harga_awal, 0, ',', '.');</code></pre>
        <ul>
            <li><code>0</code>: Tidak ada angka di belakang koma.</li>
            <li><code>','</code>: Koma (,) digunakan sebagai pemisah desimal (tidak terlihat karena desimal 0).</li>
            <li><code>'.'</code>: Titik (.) digunakan sebagai pemisah ribuan.</li>
        </ul>
        <p><strong>Output:</strong> <code>1200000</code> menjadi <code>1.200.000</code></p>

        <h4>2. Dengan Dua Angka di Belakang Koma (Float/Mata Uang)</h4>
        <p>Kita menggunakan ini untuk Biaya Iklan dan Profit Kotor.</p>
        <pre><code>number_format(\$total_biaya_iklan, 2, ',', '.');</code></pre>
        <ul>
            <li><code>2</code>: Wajib menampilkan 2 angka di belakang koma (RpX,XX).</li>
            <li><code>','</code>: Koma (,) digunakan sebagai pemisah desimal.</li>
            <li><code>'.'</code>: Titik (.) digunakan sebagai pemisah ribuan.</li>
        </ul>
        <p><strong>Output:</strong> <code>1050003.5</code> menjadi <code>1.050.003,50</code></p>
    </div>
    
</div>
</body>
</html>
HTML;

?>
