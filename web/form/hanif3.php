<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = isset($_POST['fullname']) ? htmlspecialchars($_POST['fullname']) : '';
    $subjek = isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : '';
    $email = isset($_POST['email-contact']) ? htmlspecialchars($_POST['email-contact']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';
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
<h2>Personal Details</h2>
        <p><strong>Nama:</strong> $nama</p>
        <p><strong>Subject:</strong> $subjek</p>
        <p><strong>E-mail:</strong> $email</p>
        <p><strong>Message:</strong> $message</p>
    </div>
    <p><a href='form1.html'>Kembali ke Form</a></p>
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
    <a href='form1.html'>Kembali ke Form</a>
</body>
</html>";
}
?>


