<?php
// proses.php - File untuk menangani pengiriman form

// Pastikan request adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $pesan = isset($_POST['pesan']) ? htmlspecialchars($_POST['pesan']) : '';

    // Tampilkan data yang diterima
    echo "<!DOCTYPE html>
<html lang='id'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Hasil Pengiriman Form</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .result { background-color: #f0f0f0; padding: 20px; border-radius: 5px; }
        h1 { color: #333; }
        p { margin: 10px 0; }
        a { color: #007bff; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <h1>Terima Kasih! Data Berhasil Diterima</h1>
    <div class='result'>
        <p><strong>Nama Lengkap:</strong> $nama</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Pesan:</strong> $pesan</p>
    </div>
    <p><a href='index.html'>Kembali ke Form</a></p>
</body>
</html>";
} else {
    // Jika bukan POST, tampilkan pesan error
    echo "<!DOCTYPE html>
<html lang='id'>
<head>
    <meta charset='UTF-8'>
    <title>Error</title>
</head>
<body>
    <h1>Metode tidak valid</h1>
    <p>Silakan gunakan form untuk mengirim data.</p>
    <a href='index.html'>Kembali ke Form</a>
</body>
</html>";
}
?>
