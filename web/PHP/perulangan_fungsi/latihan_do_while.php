<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan: Do-While Loop</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, sans-serif; background: #f4f4f9; color: #333; max-width: 800px; margin: 0 auto; padding: 20px; }
        h1 { text-align: center; color: #8e44ad; }
        .soal-box { background: white; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 25px; margin-bottom: 30px; border-left: 5px solid #9b59b6; }
        .soal-title { font-weight: bold; font-size: 1.2em; color: #8e44ad; margin-bottom: 10px; display: block; }
        .instruction { background-color: #fff3cd; padding: 10px; border-radius: 4px; border: 1px solid #ffeeba; font-size: 0.95em; margin-bottom: 15px; }
        .output-preview { background-color: #2d2d2d; color: #f8f8f2; padding: 15px; border-radius: 6px; font-family: monospace; margin-top: 15px; line-height: 1.6; }
        .label-output { font-size: 0.8em; text-transform: uppercase; color: #888; margin-bottom: 5px; display: block; }
    </style>
</head>
<body>

    <h1>Latihan 3: Do-While Loop</h1>

    <!-- SOAL 1 -->
    <div class="soal-box">
        <span class="soal-title">Soal 1: Perbedaan Utama</span>
        <div class="instruction">Set variabel <code>$x = 100</code>. Buat kondisi <code>while($x < 10)</code>. Buktikan bahwa do-while tetap berjalan minimal 1 kali.</div>
        <?php
        $x = 100;
        $out1 = "";
        // TODO: Do..While
        do {
            $out1 .= "Loop dijalankan! Nilai x: $x";
            $x++;
        } while ($x < 10);
        ?>
        <div class="output-preview"><span class="label-output">Output:</span><?php echo $out1; ?></div>
    </div>

    <!-- SOAL 2 -->
    <div class="soal-box">
        <span class="soal-title">Soal 2: Print Angka 1-5</span>
        <div class="instruction">Gunakan Do-While untuk mencetak angka 1 sampai 5.</div>
        <?php
        $i = 1;
        $out2 = "";
        do {
            $out2 .= $i . " ";
            $i++;
        } while ($i <= 5);
        ?>
        <div class="output-preview"><span class="label-output">Output:</span><?php echo $out2; ?></div>
    </div>

    <!-- SOAL 3 -->
    <div class="soal-box">
        <span class="soal-title">Soal 3: Kuadrat Angka</span>
        <div class="instruction">Tampilkan kuadrat angka dari 1 sampai 4 (1, 4, 9, 16). Rumus: <code>$k * $k</code>.</div>
        <?php
        $k = 1;
        $out3 = "";
        do {
            $out3 .= ($k * $k) . ", ";
            $k++;
        } while ($k <= 4);
        ?>
        <div class="output-preview"><span class="label-output">Output:</span><?php echo $out3; ?></div>
    </div>

    <!-- SOAL 4 -->
    <div class="soal-box">
        <span class="soal-title">Soal 4: Menambah Font Size</span>
        <div class="instruction">Buat loop yang menghasilkan teks dengan ukuran font membesar (10px, 15px, 20px).</div>
        <?php
        $size = 10;
        $out4 = "";
        do {
            $out4 .= "<span style='font-size:{$size}px'>Teks $size px </span><br>";
            $size += 5;
        } while ($size <= 20);
        ?>
        <div class="output-preview"><span class="label-output">Output:</span><?php echo $out4; ?></div>
    </div>

    <!-- SOAL 5 -->
    <div class="soal-box">
        <span class="soal-title">Soal 5: Loop Mundur (Decrement)</span>
        <div class="instruction">Gunakan Do-While untuk hitung mundur dari 5 ke 1.</div>
        <?php
        $m = 5;
        $out5 = "";
        do {
            $out5 .= $m . "... ";
            $m--;
        } while ($m >= 1);
        ?>
        <div class="output-preview"><span class="label-output">Output:</span><?php echo $out5; ?></div>
    </div>

</body>
</html>
