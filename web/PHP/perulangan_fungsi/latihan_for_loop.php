<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan: For Loop</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, sans-serif; background: #f4f4f9; color: #333; max-width: 800px; margin: 0 auto; padding: 20px; }
        h1 { text-align: center; color: #2980b9; }
        .soal-box { background: white; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 25px; margin-bottom: 30px; border-left: 5px solid #3498db; }
        .soal-title { font-weight: bold; font-size: 1.2em; color: #2980b9; margin-bottom: 10px; display: block; }
        .instruction { background-color: #fff3cd; padding: 10px; border-radius: 4px; border: 1px solid #ffeeba; font-size: 0.95em; margin-bottom: 15px; }
        .output-preview { background-color: #2d2d2d; color: #f8f8f2; padding: 15px; border-radius: 6px; font-family: monospace; margin-top: 15px; line-height: 1.6; }
        .label-output { font-size: 0.8em; text-transform: uppercase; color: #888; margin-bottom: 5px; display: block; }
    </style>
</head>
<body>

    <h1>Latihan 1: For Loop</h1>

    <!-- SOAL 1 -->
    <div class="soal-box">
        <span class="soal-title">Soal 1: Mencetak Angka Berurutan</span>
        <div class="instruction">Buat loop untuk mencetak angka <b>1 sampai 5</b> dipisahkan dengan spasi.</div>
        <?php
        $hasil1 = "";
        // TODO: Buat for loop $i=1 sampai 5
        for ($i = 1; $i <= 5; $i++) {
            $hasil1 .= $i . " ";
        }
        ?>
        <div class="output-preview"><span class="label-output">Output:</span><?php echo $hasil1; ?></div>
    </div>

    <!-- SOAL 2 -->
    <div class="soal-box">
        <span class="soal-title">Soal 2: Hitung Mundur (Countdown)</span>
        <div class="instruction">Buat loop untuk mencetak angka mundur dari <b>10 sampai 1</b>.</div>
        <?php
        $hasil2 = "";
        // TODO: Gunakan $i--
        for ($i = 10; $i >= 1; $i--) {
            $hasil2 .= $i . " ";
        }
        ?>
        <div class="output-preview"><span class="label-output">Output:</span><?php echo $hasil2; ?></div>
    </div>

    <!-- SOAL 3 -->
    <div class="soal-box">
        <span class="soal-title">Soal 3: Menjumlahkan Deret Angka</span>
        <div class="instruction">Hitung total jumlah dari angka 1 sampai 10 (1+2+3+...+10).</div>
        <?php
        $total3 = 0;
        // TODO: Tambahkan $i ke $total3 setiap perulangan
        for ($i = 1; $i <= 10; $i++) {
            $total3 += $i;
        }
        ?>
        <div class="output-preview"><span class="label-output">Output:</span>Total: <?php echo $total3; ?></div>
    </div>

    <!-- SOAL 4 -->
    <div class="soal-box">
        <span class="soal-title">Soal 4: Hukuman Tulis</span>
        <div class="instruction">Ulangi kalimat "Saya tidak akan terlambat" sebanyak <b>3 kali</b> menggunakan tag <code>&lt;br&gt;</code>.</div>
        <?php
        $hasil4 = "";
        // TODO: Loop 3 kali
        for ($i = 1; $i <= 3; $i++) {
            $hasil4 .= "Saya tidak akan terlambat<br>";
        }
        ?>
        <div class="output-preview"><span class="label-output">Output:</span><?php echo $hasil4; ?></div>
    </div>

    <!-- SOAL 5 -->
    <div class="soal-box">
        <span class="soal-title">Soal 5: Membuat Dropdown Tanggal</span>
        <div class="instruction">Buat elemen <code>&lt;option&gt;</code> untuk tanggal 1 sampai 31.</div>
        <?php
        $options = "";
        // TODO: Loop 1-31, masukkan ke string <option value='$i'>$i</option>
        for ($i = 1; $i <= 31; $i++) {
            $options .= "<option value='$i'>$i</option>";
        }
        ?>
        <div class="output-preview">
            <span class="label-output">Visual:</span>
            Pilih Tanggal: <select><?php echo $options; ?></select>
        </div>
    </div>

</body>
</html>
