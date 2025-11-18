<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Perulangan & Fungsi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .code-block {
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 15px;
            margin: 10px 0;
            font-family: 'Courier New', monospace;
            overflow-x: auto;
        }
        .output {
            background-color: #e8f5e8;
            border: 1px solid #4CAF50;
            border-radius: 4px;
            padding: 15px;
            margin: 10px 0;
        }
        h1, h2 {
            color: #333;
        }
        .highlight {
            background-color: #fff3cd;
            padding: 10px;
            border-left: 4px solid #ffc107;
            margin: 10px 0;
        }
        .function-demo {
            background-color: #f3e5f5;
            border: 1px solid #9c27b0;
            border-radius: 4px;
            padding: 15px;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <h1>Materi Ajar PHP: Perulangan & Fungsi</h1>

    <div class="highlight">
        <strong>Perulangan (Loop)</strong> digunakan untuk mengeksekusi blok kode berulang kali. <strong>Fungsi</strong> adalah blok kode yang dapat dipanggil berulang kali dengan parameter yang berbeda.
    </div>

    <h2>1. For Loop</h2>
    <p>For loop digunakan ketika kita tahu berapa kali perulangan harus dilakukan.</p>

    <div class="code-block">
<?php echo htmlspecialchars('<?php
    for ($i = 1; $i <= 5; $i++) {
        echo "Perulangan ke-" . $i . "<br>";
    }
?>'); ?>
    </div>

    <div class="output">
        <strong>Output:</strong><br>
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "Perulangan ke-" . $i . "<br>";
        }
        ?>
    </div>

    <h2>2. While Loop</h2>
    <p>While loop mengeksekusi blok kode selama kondisi bernilai true.</p>

    <div class="code-block">
<?php echo htmlspecialchars('<?php
    $counter = 1;
    while ($counter <= 5) {
        echo "Counter: " . $counter . "<br>";
        $counter++;
    }
?>'); ?>
    </div>

    <div class="output">
        <strong>Output:</strong><br>
        <?php
        $counter = 1;
        while ($counter <= 5) {
            echo "Counter: " . $counter . "<br>";
            $counter++;
        }
        ?>
    </div>

    <h2>3. Do-While Loop</h2>
    <p>Do-while mirip dengan while, tapi blok kode dieksekusi minimal satu kali.</p>

    <div class="code-block">
<?php echo htmlspecialchars('<?php
    $num = 1;
    do {
        echo "Number: " . $num . "<br>";
        $num++;
    } while ($num <= 5);
?>'); ?>
    </div>

    <div class="output">
        <strong>Output:</strong><br>
        <?php
        $num = 1;
        do {
            echo "Number: " . $num . "<br>";
            $num++;
        } while ($num <= 5);
        ?>
    </div>

    <h2>4. Foreach Loop (untuk Array)</h2>
    <p>Foreach digunakan khusus untuk mengiterasi array.</p>

    <div class="code-block">
<?php echo htmlspecialchars('<?php
    $buah = array("Apel", "Jeruk", "Mangga", "Pisang");

    foreach ($buah as $item) {
        echo "Buah: " . $item . "<br>";
    }

    // Dengan key
    $siswa = array("nama" => "John", "umur" => 20, "kelas" => "XII");
    foreach ($siswa as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }
?>'); ?>
    </div>

    <div class="output">
        <strong>Output:</strong><br>
        <?php
        $buah = array("Apel", "Jeruk", "Mangga", "Pisang");

        foreach ($buah as $item) {
            echo "Buah: " . $item . "<br>";
        }

        echo "<br>";

        // Dengan key
        $siswa = array("nama" => "John", "umur" => 20, "kelas" => "XII");
        foreach ($siswa as $key => $value) {
            echo $key . ": " . $value . "<br>";
        }
        ?>
    </div>

    <h2>5. Break dan Continue</h2>
    <p>Break menghentikan perulangan, continue melompati iterasi saat ini.</p>

    <div class="code-block">
<?php echo htmlspecialchars('<?php
    for ($i = 1; $i <= 10; $i++) {
        if ($i == 5) {
            break; // Hentikan perulangan di 5
        }
        echo "Angka: " . $i . "<br>";
    }

    echo "<br>";

    for ($j = 1; $j <= 5; $j++) {
        if ($j == 3) {
            continue; // Lewati angka 3
        }
        echo "Angka: " . $j . "<br>";
    }
?>'); ?>
    </div>

    <div class="output">
        <strong>Output:</strong><br>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            if ($i == 5) {
                break; // Hentikan perulangan di 5
            }
            echo "Angka: " . $i . "<br>";
        }

        echo "<br>";

        for ($j = 1; $j <= 5; $j++) {
            if ($j == 3) {
                continue; // Lewati angka 3
            }
            echo "Angka: " . $j . "<br>";
        }
        ?>
    </div>

    <h2>6. Fungsi (Functions)</h2>
    <p>Fungsi adalah blok kode yang dapat dipanggil berulang kali.</p>

    <div class="function-demo">
        <h3>Contoh Fungsi Sederhana</h3>
        <div class="code-block">
<?php echo htmlspecialchars('<?php
    function sapa($nama) {
        return "Halo, " . $nama . "!";
    }

    echo sapa("John") . "<br>";
    echo sapa("Jane") . "<br>";
?>'); ?>
        </div>

        <div class="output">
            <strong>Output:</strong><br>
            <?php
            function sapa($nama) {
                return "Halo, " . $nama . "!";
            }

            echo sapa("John") . "<br>";
            echo sapa("Jane") . "<br>";
            ?>
        </div>
    </div>

    <div class="function-demo">
        <h3>Fungsi dengan Multiple Parameters</h3>
        <div class="code-block">
<?php echo htmlspecialchars('<?php
    function hitung_luas($panjang, $lebar) {
        return $panjang * $lebar;
    }

    echo "Luas persegi panjang 5x3: " . hitung_luas(5, 3) . "<br>";
    echo "Luas persegi panjang 10x7: " . hitung_luas(10, 7) . "<br>";
?>'); ?>
        </div>

        <div class="output">
            <strong>Output:</strong><br>
            <?php
            function hitung_luas($panjang, $lebar) {
                return $panjang * $lebar;
            }

            echo "Luas persegi panjang 5x3: " . hitung_luas(5, 3) . "<br>";
            echo "Luas persegi panjang 10x7: " . hitung_luas(10, 7) . "<br>";
            ?>
        </div>
    </div>

    <div class="function-demo">
        <h3>Fungsi dengan Default Parameter</h3>
        <div class="code-block">
<?php echo htmlspecialchars('<?php
    function salam($nama, $waktu = "pagi") {
        return "Selamat " . $waktu . ", " . $nama . "!";
    }

    echo salam("John") . "<br>"; // Menggunakan default
    echo salam("Jane", "siang") . "<br>"; // Mengganti default
?>'); ?>
        </div>

        <div class="output">
            <strong>Output:</strong><br>
            <?php
            function salam($nama, $waktu = "pagi") {
                return "Selamat " . $waktu . ", " . $nama . "!";
            }

            echo salam("John") . "<br>"; // Menggunakan default
            echo salam("Jane", "siang") . "<br>"; // Mengganti default
            ?>
        </div>
    </div>

    <div class="function-demo">
        <h3>Variable Scope dalam Fungsi</h3>
        <div class="code-block">
<?php echo htmlspecialchars('<?php
    $global_var = "Ini variabel global";

    function test_scope() {
        $local_var = "Ini variabel lokal";
        global $global_var; // Mengakses variabel global
        return $global_var . " | " . $local_var;
    }

    echo test_scope() . "<br>";
    // echo $local_var; // Error: variabel lokal tidak bisa diakses di luar fungsi
?>'); ?>
        </div>

        <div class="output">
            <strong>Output:</strong><br>
            <?php
            $global_var = "Ini variabel global";

            function test_scope() {
                $local_var = "Ini variabel lokal";
                global $global_var; // Mengakses variabel global
                return $global_var . " | " . $local_var;
            }

            echo test_scope() . "<br>";
            // echo $local_var; // Error: variabel lokal tidak bisa diakses di luar fungsi
            ?>
        </div>
    </div>

    <div class="highlight">
        <strong>Tips untuk Perulangan dan Fungsi:</strong><br>
        - Pilih jenis loop yang sesuai: for (jumlah diketahui), while (kondisi), foreach (array)<br>
        - Gunakan break untuk menghentikan loop, continue untuk melompati iterasi<br>
        - Fungsi membuat kode lebih terorganisir dan reusable<br>
        - Parameter default membuat fungsi lebih fleksibel<br>
        - Perhatikan scope variabel: global vs local
    </div>
</body>
</html>
