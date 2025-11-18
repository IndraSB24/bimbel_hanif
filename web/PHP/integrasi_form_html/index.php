<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Integrasi Form HTML</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1, h2 {
            color: #333;
        }
        form {
            margin: 20px 0;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input, textarea, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .result {
            background-color: #e8f5e8;
            border: 1px solid #4CAF50;
            border-radius: 4px;
            padding: 15px;
            margin: 20px 0;
        }
        .error {
            background-color: #ffebee;
            border: 1px solid #f44336;
            border-radius: 4px;
            padding: 15px;
            margin: 20px 0;
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Materi Ajar PHP: Integrasi Form HTML</h1>

        <div style="background-color: #fff3cd; padding: 15px; border-left: 4px solid #ffc107; margin: 20px 0;">
            <strong>Integrasi Form HTML dengan PHP</strong><br>
            PHP dapat memproses data yang dikirim dari form HTML melalui method GET atau POST. Data form akan tersedia dalam variabel superglobal $_GET atau $_POST.
        </div>

        <h2>Form Registrasi Sederhana</h2>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="umur">Umur:</label>
            <input type="number" id="umur" name="umur" min="1" max="120">

            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select id="jenis_kelamin" name="jenis_kelamin">
                <option value="">Pilih jenis kelamin</option>
                <option value="pria">Pria</option>
                <option value="wanita">Wanita</option>
            </select>

            <label for="hobi">Hobi (pisahkan dengan koma):</label>
            <input type="text" id="hobi" name="hobi" placeholder="Contoh: membaca, olahraga, musik">

            <label for="pesan">Pesan:</label>
            <textarea id="pesan" name="pesan" rows="4" placeholder="Tulis pesan Anda..."></textarea>

            <button type="submit" name="submit">Kirim Data</button>
        </form>

        <?php
        // Proses form ketika dikirim
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
            // Ambil data dari form
            $nama = htmlspecialchars($_POST["nama"]);
            $email = htmlspecialchars($_POST["email"]);
            $umur = (int)$_POST["umur"];
            $jenis_kelamin = htmlspecialchars($_POST["jenis_kelamin"]);
            $hobi = htmlspecialchars($_POST["hobi"]);
            $pesan = htmlspecialchars($_POST["pesan"]);

            // Validasi sederhana
            $errors = [];

            if (empty($nama)) {
                $errors[] = "Nama tidak boleh kosong";
            }

            if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Email tidak valid";
            }

            if ($umur < 1 || $umur > 120) {
                $errors[] = "Umur tidak valid";
            }

            if (empty($jenis_kelamin)) {
                $errors[] = "Jenis kelamin harus dipilih";
            }

            // Jika ada error, tampilkan
            if (!empty($errors)) {
                echo '<div class="error">';
                echo '<h3>Error:</h3>';
                echo '<ul>';
                foreach ($errors as $error) {
                    echo '<li>' . $error . '</li>';
                }
                echo '</ul>';
                echo '</div>';
            } else {
                // Jika tidak ada error, tampilkan hasil
                echo '<div class="result">';
                echo '<h3>Data yang Diterima:</h3>';
                echo '<p><strong>Nama:</strong> ' . $nama . '</p>';
                echo '<p><strong>Email:</strong> ' . $email . '</p>';
                echo '<p><strong>Umur:</strong> ' . $umur . ' tahun</p>';
                echo '<p><strong>Jenis Kelamin:</strong> ' . ucfirst($jenis_kelamin) . '</p>';

                if (!empty($hobi)) {
                    echo '<p><strong>Hobi:</strong> ' . $hobi . '</p>';
                }

                if (!empty($pesan)) {
                    echo '<p><strong>Pesan:</strong> ' . nl2br($pesan) . '</p>';
                }

                echo '<p><em>Data berhasil diproses pada: ' . date('d-m-Y H:i:s') . '</em></p>';
                echo '</div>';
            }
        }
        ?>

        <h2>Penjelasan Kode PHP</h2>

        <div class="code-block">
<?php<br>
&nbsp;&nbsp;&nbsp;&nbsp;// Cek apakah form dikirim dengan method POST<br>
&nbsp;&nbsp;&nbsp;&nbsp;if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Ambil data dari form<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$nama = htmlspecialchars($_POST["nama"]);<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$email = htmlspecialchars($_POST["email"]);<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// ... data lainnya<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Validasi data<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (empty($nama)) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$errors[] = "Nama tidak boleh kosong";<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Proses data jika valid<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (empty($errors)) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Data berhasil diproses!";<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Tampilkan error<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
&nbsp;&nbsp;&nbsp;&nbsp;}<br>
?>
        </div>

        <h2>Konsep Penting</h2>
        <ul>
            <li><strong>$_POST:</strong> Array superglobal untuk data form yang dikirim dengan method POST</li>
            <li><strong>$_GET:</strong> Array superglobal untuk data form yang dikirim dengan method GET (data muncul di URL)</li>
            <li><strong>htmlspecialchars():</strong> Fungsi untuk mencegah XSS (Cross-Site Scripting)</li>
            <li><strong>filter_var():</strong> Fungsi untuk validasi data (email, URL, dll)</li>
            <li><strong>isset():</strong> Mengecek apakah variabel sudah di-set</li>
            <li><strong>empty():</strong> Mengecek apakah variabel kosong</li>
        </ul>

        <h2>Perbedaan GET vs POST</h2>
        <table border="1" style="width: 100%; border-collapse: collapse; margin: 20px 0;">
            <tr style="background-color: #f5f5f5;">
                <th style="padding: 10px; text-align: left;">Aspek</th>
                <th style="padding: 10px; text-align: left;">GET</th>
                <th style="padding: 10px; text-align: left;">POST</th>
            </tr>
            <tr>
                <td style="padding: 10px;">Visibilitas Data</td>
                <td style="padding: 10px;">Muncul di URL</td>
                <td style="padding: 10px;">Tersembunyi</td>
            </tr>
            <tr>
                <td style="padding: 10px;">Keamanan</td>
                <td style="padding: 10px;">Kurang aman</td>
                <td style="padding: 10px;">Lebih aman</td>
            </tr>
            <tr>
                <td style="padding: 10px;">Batas Data</td>
                <td style="padding: 10px;">Terbatas (2048 karakter)</td>
                <td style="padding: 10px;">Tidak terbatas</td>
            </tr>
            <tr>
                <td style="padding: 10px;">Cache</td>
                <td style="padding: 10px;">Bisa di-cache</td>
                <td style="padding: 10px;">Tidak di-cache</td>
            </tr>
            <tr>
                <td style="padding: 10px;">Penggunaan</td>
                <td style="padding: 10px;">Pencarian, pagination</td>
                <td style="padding: 10px;">Login, upload file</td>
            </tr>
        </table>

        <div style="background-color: #e3f2fd; padding: 15px; border-left: 4px solid #2196F3; margin: 20px 0;">
            <strong>Tips Keamanan:</strong><br>
            - Selalu validasi dan sanitasi data input<br>
            - Gunakan htmlspecialchars() untuk output<br>
            - Gunakan prepared statements untuk database<br>
            - Jangan percaya data dari user sepenuhnya
        </div>
    </div>
</body>
</html>
