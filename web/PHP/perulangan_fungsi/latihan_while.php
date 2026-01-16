<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan: While Loop</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, sans-serif; background: #f4f4f9; color: #333; max-width: 800px; margin: 0 auto; padding: 20px; }
        h1 { text-align: center; color: #e67e22; }
        .soal-box { background: white; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 25px; margin-bottom: 30px; border-left: 5px solid #e67e22; }
        .soal-title { font-weight: bold; font-size: 1.2em; color: #d35400; margin-bottom: 10px; display: block; }
        .instruction { background-color: #fff3cd; padding: 10px; border-radius: 4px; border: 1px solid #ffeeba; font-size: 0.95em; margin-bottom: 15px; }
        .output-preview { background-color: #2d2d2d; color: #f8f8f2; padding: 15px; border-radius: 6px; font-family: monospace; margin-top: 15px; line-height: 1.6; }
        .label-output { font-size: 0.8em; text-transform: uppercase; color: #888; margin-bottom: 5px; display: block; }
    </style>
</head>
<body>

    <h1>Latihan 2: While Loop</h1>

    <!-- SOAL 1 -->
    <div class="soal-box">
        <span class="soal-title">Soal 1: Dasar While</span>
        <div class="instruction">Cetak angka 1 sampai 5. Jangan lupa increment variabel counter agar tidak loop selamanya!</div>
        <?php
        $x = 1;
        $out1 = "";
        // TODO: While loop
        while($x <= 5) {
            $out1 .= $x . " ";
            $x++;
        }
        ?>
        <div class="output-preview"><span class="label-output">Output:</span><?php echo $out1; ?></div>
    </div>

    <!-- SOAL 2 -->
    <div class="soal-box">
        <span class="soal-title">Soal 2: Kelipatan 10</span>
        <div class="instruction">Tampilkan angka: 10, 20, 30, 40, 50. Gunakan increment <code>$i += 10</code>.</div>
        <?php
        $i = 10;
        $out2 = "";
        // TODO: While loop sampai 50
        while($i <= 50) {
            $out2 .= $i . ", ";
            $i += 10;
        }
        ?>
        <div class="output-preview"><span class="label-output">Output:</span><?php echo $out2; ?></div>
    </div>

    <!-- SOAL 3 -->
    <div class="soal-box">
        <span class="soal-title">Soal 3: Faktorial Sederhana</span>
        <div class="instruction">Hitung hasil perkalian 1 x 2 x 3 x 4 x 5 (Faktorial 5).</div>
        <?php
        $num = 1;
        $hasil_kali = 1;
        // TODO: While $num <= 5, kalikan ke $hasil_kali
        while($num <= 5) {
            $hasil_kali *= $num; 
            $num++;
        }
        ?>
        <div class="output-preview"><span class="label-output">Output:</span>5! (Faktorial) = <?php echo $hasil_kali; ?></div>
    </div>

    <!-- SOAL 4 -->
    <div class="soal-box">
        <span class="soal-title">Soal 4: Mencari Angka Ganjil</span>
        <div class="instruction">Tampilkan hanya angka <b>ganjil</b> dari 1 sampai 10. Gunakan modulus (%) atau increment +2.</div>
        <?php
        $g = 1;
        $out4 = "";
        // TODO: While loop
        while($g <= 10) {
            if($g % 2 == 1) {
                $out4 .= $g . " ";
            }
            $g++;
        }
        ?>
        <div class="output-preview"><span class="label-output">Output:</span><?php echo $out4; ?></div>
    </div>

    <!-- SOAL 5 -->
    <div class="soal-box">
        <span class="soal-title">Soal 5: Simulasi Loading Bar</span>
        <div class="instruction">Tambahkan karakter kotak "█" ke string sebanyak 5 kali menggunakan while.</div>
        <?php
        $count = 0;
        $bar = "";
        // TODO: While loop 5 kali
        while($count < 5) {
            $bar .= "█";
            $count++;
        }
        ?>
        <div class="output-preview">
            <span class="label-output">Output:</span>
            Loading: [ <?php echo $bar; ?> ]
        </div>
    </div>

</body>
</html>
