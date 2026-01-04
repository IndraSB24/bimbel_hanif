<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan: Foreach & Array</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, sans-serif; background: #f4f4f9; color: #333; max-width: 800px; margin: 0 auto; padding: 20px; }
        h1 { text-align: center; color: #27ae60; }
        .soal-box { background: white; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 25px; margin-bottom: 30px; border-left: 5px solid #2ecc71; }
        .soal-title { font-weight: bold; font-size: 1.2em; color: #27ae60; margin-bottom: 10px; display: block; }
        .instruction { background-color: #fff3cd; padding: 10px; border-radius: 4px; border: 1px solid #ffeeba; font-size: 0.95em; margin-bottom: 15px; }
        .output-preview { background-color: #2d2d2d; color: #f8f8f2; padding: 15px; border-radius: 6px; font-family: monospace; margin-top: 15px; line-height: 1.6; }
        .label-output { font-size: 0.8em; text-transform: uppercase; color: #888; margin-bottom: 5px; display: block; }
        ul, ol { margin: 0; padding-left: 20px; }
    </style>
</head>
<body>

    <h1>Latihan 4: Foreach Loop (Array)</h1>

    <!-- SOAL 1 -->
    <div class="soal-box">
        <span class="soal-title">Soal 1: Daftar Hobi (Indexed Array)</span>
        <div class="instruction">Tampilkan isi array hobi ke dalam list HTML <code>&lt;li&gt;</code>.</div>
        <?php
        $hobi = ["Membaca", "Koding", "Bersepeda"];
        $list1 = "";
        // TODO: Foreach as $item
        foreach ($hobi as $hobi2){
            $list1 .= $hobi2."<br>";
        }
        ?>
        <div class="output-preview">
            <span class="label-output">Output:</span>
            <ul><?php echo $list1; ?></ul>
        </div>
    </div>

    <!-- SOAL 2 -->
    <div class="soal-box">
        <span class="soal-title">Soal 2: Menghitung Total Angka</span>
        <div class="instruction">Jumlahkan semua angka yang ada di dalam array <code>$nilai</code>.</div>
        <?php
        $nilai = [80, 90, 75, 100];
        $total = 0;
        // TODO: Foreach tambahkan ke $total\
        foreach ($nilai as $nilai2){
            $total += $nilai2;
        }
        ?>
        <div class="output-preview"><span class="label-output">Output:</span>Total Nilai: <?php echo $total; ?></div>
    </div>

    <!-- SOAL 3 -->
    <div class="soal-box">
        <span class="soal-title">Soal 3: Associative Array (Key => Value)</span>
        <div class="instruction">Tampilkan data siswa (Nama, Kelas, Umur) dengan format "Key: Value".</div>
        <?php
        $siswa = ["Nama" => "Budi", "Kelas" => "12 RPL", "Umur" => 17];
        $data3 = "";
        // TODO: Foreach as $key => $value
        foreach($siswa as $key => $val) {
            $data3 .= "$key : $val <br>";
        }
        ?>
        <div class="output-preview"><span class="label-output">Output:</span><?php echo $data3; ?></div>
    </div>

    <!-- SOAL 4 -->
    <div class="soal-box">
        <span class="soal-title">Soal 4: Filter Data (If dalam Foreach)</span>
        <div class="instruction">Tampilkan hanya harga yang <b>lebih dari 5000</b>.</div>
        <?php
        $harga = [2000, 15000, 3000, 50000, 1000];
        $mahal = "";
        // TODO: Foreach dengan If
        foreach($harga as $h) {
            if($h > 5000) {
                $mahal .= "Rp $h, ";
            }
        }
        ?>
        <div class="output-preview"><span class="label-output">Output (Diatas 5000):</span><?php echo $mahal; ?></div>
    </div>

    <!-- SOAL 5 -->
    <div class="soal-box">
        <span class="soal-title">Soal 5: Membuat Tabel HTML</span>
        <div class="instruction">Buat baris tabel (tr) untuk setiap nama karyawan.</div>
        <?php
        $karyawan = ["Andi", "Siti", "Rudi"];
        $tabel = "<table border='1' cellpadding='5'><tr><th>No</th><th>Nama</th></tr>";
        $no = 1;
        // TODO: Foreach
        foreach($karyawan as $nama) {
            $tabel .= "<tr><td>$no</td><td>$nama</td></tr>";
            $no++;
        }
        $tabel .= "</table>";
        ?>
        <div class="output-preview">
            <span class="label-output">Visual:</span>
            <?php echo $tabel; ?>
        </div>
    </div>

</body>
</html>
