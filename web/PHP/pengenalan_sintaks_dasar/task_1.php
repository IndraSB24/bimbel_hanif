<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP Dasar: Variabel & Operator</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f8f8f8; padding: 20px; }
        .container { max-width: 800px; margin: 0 auto; background-color: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); }
        h1 { color: #2c3e50; border-bottom: 2px solid #3498db; padding-bottom: 10px; }
        h3 { color: #3498db; margin-top: 25px; }
        table { width: 100%; border-collapse: collapse; margin: 15px 0; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #ecf0f1; }
        code { background-color: #eee; padding: 2px 5px; border-radius: 3px; font-family: monospace; }
        .code-block { background-color: #2c3e50; color: #f1c40f; padding: 15px; border-radius: 5px; overflow-x: auto; margin-bottom: 20px; font-size: 0.9em; white-space: pre-wrap; }
        .challenge { border: 2px solid #e74c3c; padding: 15px; border-radius: 5px; background-color: #fdf5f5; margin-top: 20px; }
        .expected-result { border-left: 5px solid #27ae60; padding: 15px; background-color: #e8f8f8; margin-top: 20px; }
    </style>
</head>
<body>

    <div class="container">
        <h1>Tugas Sesi 19: Analisis Data Promosi dan Narasi PHP</h1>
        <p><strong>Tujuan:</strong> Memahami implementasi variabel, tipe data (String, Integer, Float), dan operator aritmatika/concatenation dasar.</p>
        
        <h3>Instruksi Tugas:</h3>
        <ol>
            <li>Buat file baru bernama <code>index.php</code>.</li>
            <li>Salin <strong>Bagian 1</strong> (Deklarasi Variabel) ke file Anda.</li>
            <li>Lengkapi <strong>Bagian 2</strong> (Implementasi Operator) untuk membuat semua perhitungan yang diperlukan.</li>
            <li><strong>Tantangan Kreatif:</strong> Tulis kode PHP Anda sendiri untuk membuat narasi (menggunakan <code>echo</code> dan operator penggabungan <code>.</code>) yang menghasilkan output persis seperti 'Hasil Akhir yang Diharapkan' di bawah.</li>
        </ol>

        <h3>1. Variabel yang Digunakan (Bagian 1)</h3>
        <p>Gunakan nilai-nilai awal berikut untuk deklarasi variabel Anda:</p>
        
        <div class="code-block">
            <pre>
// 1. Variabel String
$nama_produk = "Paket Belajar Full-Stack PHP";
$tanggal_sekarang = "29 November 2025";

// 2. Variabel Numeric (Integer & Float)
$harga_awal = 1200000;
$persen_diskon = 25; // Dalam persen
$jumlah_peserta = 15;
$biaya_iklan_harian = 150000.50; // Perhatikan penggunaan float
$durasi_promosi_hari = 7;
            </pre>
        </div>

        <h3>2. Tantangan: Implementasi Operator (Bagian 2)</h3>
        <p class="challenge"><strong>Tugas Anda:</strong> Tulis kode PHP untuk menghitung dan menyimpan hasil ke variabel baru:</p>
        <ul>
            <li><strong>Diskon Nominal:</strong> <code>(harga_awal * persen_diskon) / 100</code></li>
            <li><strong>Harga Akhir:</strong> <code>harga_awal - Diskon Nominal</code></li>
            <li><strong>Total Biaya Iklan:</strong> <code>biaya_iklan_harian * durasi_promosi_hari</code></li>
            <li><strong>Profit Kotor Rata-rata per Peserta:</strong> <code>Harga Akhir - (Total Biaya Iklan / jumlah_peserta)</code></li>
        </ul>

        <h3>3. Struktur Output (Bagian 3)</h3>
        <p class="challenge"><strong>Tantangan Kreatif:</strong> Sekarang, tulis semua kode <code>echo</code> Anda untuk menggabungkan variabel-variabel di atas ke dalam paragraf narasi. Gunakan fungsi <code>number_format()</code> seperti pada contoh output.</p>


        <h3>&#10004; Hasil Akhir yang Diharapkan (Di Browser)</h3>
        <div class="expected-result">
            <h1>Laporan Promosi Produk: Paket Belajar Full-Stack PHP</h1>
            <p>
                Kami meluncurkan promosi Paket Belajar Full-Stack PHP pada tanggal 29 November 2025. Dengan harga normal Rp1.200.000, kami memberikan diskon besar sebesar 25%, yang berarti setiap pelanggan menghemat Rp300.000 secara nominal.<br>
                Setelah diskon, harga jual bersihnya menjadi Rp900.000. Hingga saat ini, kami telah berhasil menarik 15 peserta.<br>
                Total pengeluaran untuk iklan selama 7 hari adalah Rp1.050.003,50. Dengan asumsi biaya iklan terbagi rata, profit kotor rata-rata yang kami dapatkan per peserta adalah Rp829.999,77 per unit, ini adalah angka yang menjanjikan!
            </p>
        </div>
        
    </div>

</body>
</html>
