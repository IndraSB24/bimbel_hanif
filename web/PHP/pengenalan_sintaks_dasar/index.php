<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengenalan PHP - Sintaks Dasar</title>
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
    </style>
</head>
<body>
    <h1>Materi Ajar PHP: Pengenalan & Sintaks Dasar</h1>

    <div class="highlight">
        <strong>Apa itu PHP?</strong><br>
        PHP (Hypertext Preprocessor) adalah bahasa pemrograman server-side yang digunakan untuk membuat halaman web dinamis. Kode PHP dieksekusi di server dan menghasilkan HTML yang dikirim ke browser.
    </div>

    <h2>1. Struktur Dasar File PHP</h2>
    <p>File PHP memiliki ekstensi .php dan dapat berisi HTML, CSS, JavaScript, dan kode PHP.</p>

    <div class="code-block">
<?php echo htmlspecialchars('<?php
    // Kode PHP di sini
?>'); ?>
    </div>

    <h2>2. Menampilkan Output</h2>
    <p>Untuk menampilkan output di PHP, gunakan <code>echo</code> atau <code>print</code>.</p>

    <div class="code-block">
<?php echo htmlspecialchars('<?php
    echo "Hello World!";
    print "Selamat datang di PHP";
?>'); ?>
    </div>

    <div class="output">
        <strong>Output:</strong><br>
        <?php
        echo "Hello World!";
        print "<br>Selamat datang di PHP";
        ?>
    </div>

    <h2>3. Variabel dalam PHP</h2>
    <p>Variabel di PHP dimulai dengan tanda $ dan tidak perlu deklarasi tipe data.</p>

    <div class="code-block">
<?php echo htmlspecialchars('<?php
    $nama = "John Doe";
    $umur = 25;
    $tinggi = 175.5;
    $is_student = true;

    echo "Nama: " . $nama . "<br>";
    echo "Umur: " . $umur . " tahun<br>";
    echo "Tinggi: " . $tinggi . " cm<br>";
    echo "Mahasiswa: " . ($is_student ? "Ya" : "Tidak") . "<br>";
?>'); ?>
    </div>

    <div class="output">
        <strong>Output:</strong><br>
        <?php
        $nama = "John Doe";
        $umur = 25;
        $tinggi = 175.5;
        $is_student = true;

        echo "Nama: " . $nama . "<br>";
        echo "Umur: " . $umur . " tahun<br>";
        echo "Tinggi: " . $tinggi . " cm<br>";
        echo "Mahasiswa: " . ($is_student ? "Ya" : "Tidak") . "<br>";
        ?>
    </div>

    <h2>4. Tipe Data PHP</h2>
    <ul>
        <li><strong>String:</strong> Teks ("Hello", 'World')</li>
        <li><strong>Integer:</strong> Bilangan bulat (1, 2, 3)</li>
        <li><strong>Float/Double:</strong> Bilangan desimal (1.5, 2.75)</li>
        <li><strong>Boolean:</strong> True/False</li>
        <li><strong>Array:</strong> Kumpulan data</li>
        <li><strong>Object:</strong> Instance dari class</li>
        <li><strong>NULL:</strong> Tidak ada nilai</li>
    </ul>

    <h2>5. Komentar dalam PHP</h2>
    <div class="code-block">
<?php echo htmlspecialchars('<?php
    // Ini komentar satu baris
    # Ini juga komentar satu baris
    /*
        Ini komentar
        multiple baris
    */
?>'); ?>
    </div>

    <h2>6. Operator Dasar</h2>
    <div class="code-block">
<?php echo htmlspecialchars('<?php
    $a = 10;
    $b = 5;

    echo "Penjumlahan: " . ($a + $b) . "<br>"; // 15
    echo "Pengurangan: " . ($a - $b) . "<br>"; // 5
    echo "Perkalian: " . ($a * $b) . "<br>"; // 50
    echo "Pembagian: " . ($a / $b) . "<br>"; // 2
    echo "Modulus: " . ($a % $b) . "<br>"; // 0

    echo "a == b: " . ($a == $b ? "true" : "false") . "<br>"; // false
    echo "a > b: " . ($a > $b ? "true" : "false") . "<br>"; // true
?>'); ?>
    </div>

    <div class="output">
        <strong>Output:</strong><br>
        <?php
        $a = 10;
        $b = 5;

        echo "Penjumlahan: " . ($a + $b) . "<br>";
        echo "Pengurangan: " . ($a - $b) . "<br>";
        echo "Perkalian: " . ($a * $b) . "<br>";
        echo "Pembagian: " . ($a / $b) . "<br>";
        echo "Modulus: " . ($a % $b) . "<br>";
        echo "a == b: " . ($a == $b ? "true" : "false") . "<br>";
        echo "a > b: " . ($a > $b ? "true" : "false") . "<br>";
        ?>
    </div>

    <div class="highlight">
        <strong>Tips untuk Pemula:</strong><br>
        - Selalu akhiri statement PHP dengan titik koma (;)<br>
        - Gunakan ekstensi .php untuk file yang berisi kode PHP<br>
        - PHP case-sensitive untuk nama variabel<br>
        - Simpan file PHP di folder yang dapat diakses web server (misalnya htdocs untuk XAMPP)
    </div>
</body>
</html>
