<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Logika & Struktur Kendali</title>
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
        .interactive {
            background-color: #e3f2fd;
            border: 1px solid #2196F3;
            border-radius: 4px;
            padding: 15px;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <h1>Materi Ajar PHP: Logika & Struktur Kendali</h1>

    <div class="highlight">
        <strong>Struktur Kendali</strong> adalah cara untuk mengontrol alur eksekusi program berdasarkan kondisi tertentu. PHP memiliki beberapa struktur kendali: if-else, switch-case, dan ternary operator.
    </div>

    <h2>1. If-Else Statement</h2>
    <p>Struktur if-else digunakan untuk mengeksekusi kode berdasarkan kondisi yang benar atau salah.</p>

    <div class="code-block">
<?php<br>
&nbsp;&nbsp;&nbsp;&nbsp;$nilai = 85;<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if ($nilai >= 90) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Grade: A";<br>
&nbsp;&nbsp;&nbsp;&nbsp;} elseif ($nilai >= 80) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Grade: B";<br>
&nbsp;&nbsp;&nbsp;&nbsp;} elseif ($nilai >= 70) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Grade: C";<br>
&nbsp;&nbsp;&nbsp;&nbsp;} else {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Grade: D";<br>
&nbsp;&nbsp;&nbsp;&nbsp;}<br>
?>
    </div>

    <div class="output">
        <strong>Output:</strong><br>
        <?php
        $nilai = 85;

        if ($nilai >= 90) {
            echo "Grade: A";
        } elseif ($nilai >= 80) {
            echo "Grade: B";
        } elseif ($nilai >= 70) {
            echo "Grade: C";
        } else {
            echo "Grade: D";
        }
        ?>
    </div>

    <h2>2. Switch-Case Statement</h2>
    <p>Switch-case digunakan untuk memilih salah satu dari banyak blok kode yang akan dieksekusi.</p>

    <div class="code-block">
<?php<br>
&nbsp;&nbsp;&nbsp;&nbsp;$hari = "Senin";<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;switch ($hari) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case "Senin":<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Hari kerja pertama";<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case "Sabtu":<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Hari libur";<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case "Minggu":<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Hari libur";<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default:<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Hari kerja biasa";<br>
&nbsp;&nbsp;&nbsp;&nbsp;}<br>
?>
    </div>

    <div class="output">
        <strong>Output:</strong><br>
        <?php
        $hari = "Senin";

        switch ($hari) {
            case "Senin":
                echo "Hari kerja pertama";
                break;
            case "Sabtu":
                echo "Hari libur";
                break;
            case "Minggu":
                echo "Hari libur";
                break;
            default:
                echo "Hari kerja biasa";
        }
        ?>
    </div>

    <h2>3. Ternary Operator</h2>
    <p>Ternary operator adalah cara singkat untuk if-else dalam satu baris.</p>

    <div class="code-block">
<?php<br>
&nbsp;&nbsp;&nbsp;&nbsp;$umur = 20;<br>
&nbsp;&nbsp;&nbsp;&nbsp;$status = ($umur >= 18) ? "Dewasa" : "Anak-anak";<br>
&nbsp;&nbsp;&nbsp;&nbsp;echo "Status: " . $status;<br>
?>
    </div>

    <div class="output">
        <strong>Output:</strong><br>
        <?php
        $umur = 20;
        $status = ($umur >= 18) ? "Dewasa" : "Anak-anak";
        echo "Status: " . $status;
        ?>
    </div>

    <h2>4. Logical Operators</h2>
    <p>Operator logika digunakan untuk menggabungkan kondisi.</p>

    <div class="code-block">
<?php<br>
&nbsp;&nbsp;&nbsp;&nbsp;$nilai = 85;<br>
&nbsp;&nbsp;&nbsp;&nbsp;$absensi = 90;<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;// AND (&&) - kedua kondisi harus true<br>
&nbsp;&nbsp;&nbsp;&nbsp;if ($nilai >= 80 && $absensi >= 85) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Lulus dengan baik<br>";<br>
&nbsp;&nbsp;&nbsp;&nbsp;}<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;// OR (||) - salah satu kondisi harus true<br>
&nbsp;&nbsp;&nbsp;&nbsp;if ($nilai >= 90 || $absensi >= 95) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Berhak mendapat penghargaan<br>";<br>
&nbsp;&nbsp;&nbsp;&nbsp;}<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;// NOT (!) - membalikkan kondisi<br>
&nbsp;&nbsp;&nbsp;&nbsp;$tidak_lulus = !($nilai >= 70);<br>
&nbsp;&nbsp;&nbsp;&nbsp;echo "Tidak lulus: " . ($tidak_lulus ? "Ya" : "Tidak") . "<br>";<br>
?>
    </div>

    <div class="output">
        <strong>Output:</strong><br>
        <?php
        $nilai = 85;
        $absensi = 90;

        // AND (&&) - kedua kondisi harus true
        if ($nilai >= 80 && $absensi >= 85) {
            echo "Lulus dengan baik<br>";
        }

        // OR (||) - salah satu kondisi harus true
        if ($nilai >= 90 || $absensi >= 95) {
            echo "Berhak mendapat penghargaan<br>";
        }

        // NOT (!) - membalikkan kondisi
        $tidak_lulus = !($nilai >= 70);
        echo "Tidak lulus: " . ($tidak_lulus ? "Ya" : "Tidak") . "<br>";
        ?>
    </div>

    <h2>5. Nested If Statements</h2>
    <p>If bersarang digunakan untuk kondisi yang lebih kompleks.</p>

    <div class="code-block">
<?php<br>
&nbsp;&nbsp;&nbsp;&nbsp;$poin = 2500;<br>
&nbsp;&nbsp;&nbsp;&nbsp;$level = 3;<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if ($poin >= 1000) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ($level >= 3) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ($poin >= 2000) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Master Player!";<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Advanced Player";<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Intermediate Player";<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
&nbsp;&nbsp;&nbsp;&nbsp;} else {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Beginner Player";<br>
&nbsp;&nbsp;&nbsp;&nbsp;}<br>
?>
    </div>

    <div class="output">
        <strong>Output:</strong><br>
        <?php
        $poin = 2500;
        $level = 3;

        if ($poin >= 1000) {
            if ($level >= 3) {
                if ($poin >= 2000) {
                    echo "Master Player!";
                } else {
                    echo "Advanced Player";
                }
            } else {
                echo "Intermediate Player";
            }
        } else {
            echo "Beginner Player";
        }
        ?>
    </div>

    <div class="highlight">
        <strong>Tips Penggunaan Struktur Kendali:</strong><br>
        - Gunakan if-else untuk kondisi sederhana<br>
        - Switch-case lebih efisien untuk banyak pilihan dengan nilai yang sama<br>
        - Ternary operator untuk kondisi sederhana dalam satu baris<br>
        - Jangan lupa break; di switch-case untuk menghindari fall-through<br>
        - Gunakan operator logika untuk menggabungkan kondisi
    </div>
</body>
</html>
