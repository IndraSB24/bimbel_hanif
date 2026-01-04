    <?php 
        if (isset($_POST['operasi'])) {
            $a = (float)$_POST['angka1'];
            $b = (float)$_POST['angka2'];
            $op =$_POST['operasi'];
            $hasil = 0; 
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
                    $hasil = $a / $b;
                    break;
                default:
                    $hasil = "Operasi tidak diketahui";
                    break;
            }
            echo "Operasi Berhasil,Silahkan Mengecek Hasilnya";
            echo "<br>";
            echo "<div class='hasil'>";
            echo "<h3>Hasil: $hasil</h3>";
            echo "</div>";
            echo "<a href='latihan1.html'>Kembali ke Form</a>";
        }
        else{
        echo "<!DOCTYPE html>
    <html lang='id'>
    <head>
        <meta charset='UTF-8'>
        <title>Error</title>
    </head>
    <body>
        <h1>Metode tidak valid</h1>
        <p>Silakan gunakan form untuk mengirim data.</p>
        <a href='latihan1.html'>Kembali ke Form</a>
    </body>
    </html>";
    }
    ?>