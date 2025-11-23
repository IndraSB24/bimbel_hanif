<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $nama = isset($_POST['Nama']) ? htmlspecialchars($_POST['Nama']) : '';
    $email = isset($_POST['Email']) ? htmlspecialchars($_POST['Email']) : '';
    $password = isset($_POST['Password']) ? htmlspecialchars($_POST['Password']) : '';
    $kontak = isset($_POST['kontak']) ? htmlspecialchars($_POST['kontak']) : '';
    $gender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : '';
    $degree = isset($_POST['degree']) ? htmlspecialchars($_POST['degree']) : '';
    $engineer = isset($_POST['engineer']) ? htmlspecialchars($_POST['engineer']) : '';
    $fileinput = isset($_POST['fileinput']) ? htmlspecialchars($_POST['fileinput']) : '';
    $hobi = isset($_POST['hobi']) ? htmlspecialchars($_POST['hobi']) : '';
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
        <p><strong>Email-id:</strong> $email</p>
        <p><strong>Password:</strong> $password</p>
         <p><strong>Gender:</strong> $gender</p>
        <p><strong>Contact#:</strong> $kontak</p>
        <p><strong>Degree/tingkatan:</strong> $degree</p>
         <p><strong>Engineering:</strong> $engineer</p>
        <p><strong>Hobbies:</strong> $hobi</p>
        <p><strong>Input file here:</strong> $fileinput</p>
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


