<?php
// Inisialisasi variabel biar tidak error 'Undefined Variable' saat pertama buka
$hasil = ""; 
$pesan_error = "";

// Cek apakah form sudah disubmit
if (isset($_POST['operasi'])) {
    $a = (float)$_POST['angka1'];
    $b = (float)$_POST['angka2'];
    $op = $_POST['operasi'];

    switch ($op) {
        case 'tambah':
            $hasil = $a + $b;
            break;
        case 'kurang':
            $hasil = $a - $b;
            break;
        case 'kali':
            $hasil = $a * $b;
            break;
        case 'bagi':
            // Cegah error pembagian dengan 0
            if ($b == 0) {
                $pesan_error = "Gabisa bagi 0, Boss!";
            } else {
                $hasil = $a / $b;
            }
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Keren PHP</title>
    <style>
        /* CSS GANTENG START */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            width: 350px;
            text-align: center;
        }
        h2 { margin-top: 0; color: #333; }
        
        input[type="number"] {
            width: 90%;
            padding: 12px;
            margin: 10px 0;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            outline: none;
            transition: 0.3s;
        }
        input[type="number"]:focus {
            border-color: #4a90e2;
        }

        .btn-group {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            gap: 10px;
            margin-top: 15px;
        }
        
        button {
            padding: 15px;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            background: #e4e6eb;
            color: #333;
            transition: 0.2s;
        }
        button:hover { background: #d0d3d8; transform: scale(1.05); }
        
        /* Warna-warni tombol */
        button[value="tambah"] { background: #4caf50; color: white; }
        button[value="kurang"] { background: #f44336; color: white; }
        button[value="kali"]   { background: #ff9800; color: white; }
        button[value="bagi"]   { background: #2196f3; color: white; }

        .hasil-box {
            margin-top: 20px;
            padding: 15px;
            background: #e8f5e9;
            border-radius: 8px;
            color: #2e7d32;
            font-size: 20px;
            font-weight: bold;
            animation: fadeIn 0.5s;
        }
        .error-box {
            margin-top: 20px;
            padding: 15px;
            background: #ffebee;
            border-radius: 8px;
            color: #c62828;
            font-weight: bold;
        }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(-10px); } to { opacity: 1; transform: translateY(0); } }
        /* CSS GANTENG END */
    </style>
</head>
<body>

    <div class="card">
        <h2>🧮 Kalkulator PHP</h2>
        
        <form method="post" action="">
            <input type="number" name="angka1" placeholder="Angka Pertama" step="any" required 
                   value="<?php echo isset($_POST['angka1']) ? $_POST['angka1'] : ''; ?>">
            
            <input type="number" name="angka2" placeholder="Angka Kedua" step="any" required 
                   value="<?php echo isset($_POST['angka2']) ? $_POST['angka2'] : ''; ?>">

            <div class="btn-group">
                <button name="operasi" type="submit" value="tambah">+</button>
                <button name="operasi" type="submit" value="kurang">-</button>
                <button name="operasi" type="submit" value="kali">×</button>
                <button name="operasi" type="submit" value="bagi">÷</button>
            </div>
        </form>

        <?php if ($hasil !== ""): ?>
            <div class="hasil-box">
                Hasil: <?php echo $hasil; ?>
            </div>
        <?php endif; ?>

        <?php if ($pesan_error !== ""): ?>
            <div class="error-box">
                <?php echo $pesan_error; ?>
            </div>
        <?php endif; ?>
    </div>

</body>
</html>