<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan: PHP Function</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, sans-serif; background: #f4f4f9; color: #333; max-width: 800px; margin: 0 auto; padding: 20px; }
        h1 { text-align: center; color: #c0392b; }
        .soal-box { background: white; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 25px; margin-bottom: 30px; border-left: 5px solid #e74c3c; }
        .soal-title { font-weight: bold; font-size: 1.2em; color: #c0392b; margin-bottom: 10px; display: block; }
        .instruction { background-color: #fff3cd; padding: 10px; border-radius: 4px; border: 1px solid #ffeeba; font-size: 0.95em; margin-bottom: 15px; }
        .output-preview { background-color: #2d2d2d; color: #f8f8f2; padding: 15px; border-radius: 6px; font-family: monospace; margin-top: 15px; line-height: 1.6; }
        .label-output { font-size: 0.8em; text-transform: uppercase; color: #888; margin-bottom: 5px; display: block; }
    </style>
</head>
<body>

    <h1>Latihan 5: PHP Function</h1>

    <!-- SOAL 1 -->
    <div class="soal-box">
        <span class="soal-title">Soal 1: Fungsi Sapaan</span>
        <div class="instruction">Buat fungsi <code>sapa($nama)</code> yang mengembalikan string "Halo, [nama]!".</div>
        <?php
        // TODO: Definisi function sapa($nama)
        function sapa($nama) {
            return "Halo, " . $nama . "!";
        }
        
        // Pemanggilan:
        $hasil1 = sapa("Budi");
        ?>
        <div class="output-preview"><span class="label-output">Output:</span><?php echo $hasil1; ?></div>
    </div>

    <!-- SOAL 2 -->
    <div class="soal-box">
        <span class="soal-title">Soal 2: Fungsi Penjumlahan</span>
        <div class="instruction">Buat fungsi <code>tambah($a, $b)</code> yang mengembalikan hasil penjumlahan kedua angka.</div>
        <?php
        // TODO: Definisi function tambah($a, $b)
        function tambah($a, $b) {
            return $a + $b;
        }

        $hasil2 = tambah(10, 25);
        ?>
        <div class="output-preview"><span class="label-output">Output:</span>10 + 25 = <?php echo $hasil2; ?></div>
    </div>

    <!-- SOAL 3 -->
    <div class="soal-box">
        <span class="soal-title">Soal 3: Cek Kelulusan (Logika dalam Fungsi)</span>
        <div class="instruction">Fungsi <code>cek_nilai($n)</code>. Jika n >= 75 return "Lulus", jika tidak "Gagal".</div>
        <?php
        function cek_nilai($n) {
            if ($n >= 75) {
                return "Lulus";
            } else {
                return "Gagal";
            }
        }

        $siswa1 = cek_nilai(80);
        $siswa2 = cek_nilai(60);
        ?>
        <div class="output-preview">
            <span class="label-output">Output:</span>
            Nilai 80: <?php echo $siswa1; ?> <br>
            Nilai 60: <?php echo $siswa2; ?>
        </div>
    </div>

    <!-- SOAL 4 -->
    <div class="soal-box">
        <span class="soal-title">Soal 4: Parameter Default</span>
        <div class="instruction">Fungsi <code>warna_baju($warna = "Putih")</code>. Jika dipanggil tanpa argumen, output "Baju warna Putih".</div>
        <?php
        function warna_baju($warna = "Putih") {
            return "Baju warna " . $warna;
        }

        $default = warna_baju();
        $custom = warna_baju("Merah");
        ?>
        <div class="output-preview">
            <span class="label-output">Output:</span>
            1. <?php echo $default; ?> <br>
            2. <?php echo $custom; ?>
        </div>
    </div>

    <!-- SOAL 5 -->
    <div class="soal-box">
        <span class="soal-title">Soal 5: Konversi Tahun Lahir ke Umur</span>
        <div class="instruction">Fungsi <code>hitung_umur($tahun_lahir)</code>. Asumsikan tahun sekarang 2025.</div>
        <?php
        function hitung_umur($thn_lahir) {
            $thn_sekarang = 2025;
            return $thn_sekarang - $thn_lahir;
        }

        $umur_saya = hitung_umur(2000);
        ?>
        <div class="output-preview"><span class="label-output">Output:</span>Lahir 2000, Umur sekarang: <?php echo $umur_saya; ?> tahun.</div>
    </div>

</body>
</html>
