<?php
// prosesForm1.php - File untuk menangani pengiriman form latihanformhanif.html

// Pastikan request adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil dan sanitasi data dari form
    $nama = isset($_POST['Nama']) ? htmlspecialchars($_POST['Nama']) : '';
    $password = isset($_POST['Password']) ? htmlspecialchars($_POST['Password']) : '';
    $email = isset($_POST['Email']) ? htmlspecialchars($_POST['Email']) : '';
    $gender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : '';
    $kontak = isset($_POST['kontak']) ? htmlspecialchars($_POST['kontak']) : '';
    $degree = isset($_POST['degree']) ? htmlspecialchars($_POST['degree']) : '';
    $engineer = isset($_POST['engineer']) ? htmlspecialchars($_POST['engineer']) : '';
    $hobi = isset($_POST['hobi']) ? $_POST['hobi'] : []; // Array untuk checkboxes
    $address = isset($_POST['address']) ? htmlspecialchars($_POST['address']) : '';

    // Handle file upload
    $file_path = '';
    if (isset($_FILES['fileinput']) && $_FILES['fileinput']['error'] == UPLOAD_ERR_OK) {
        $upload_dir = 'uploads/';
        $file_name = basename($_FILES['fileinput']['name']);
        $target_path = $upload_dir . $file_name;
        if (move_uploaded_file($_FILES['fileinput']['tmp_name'], $target_path)) {
            $file_path = $target_path;
        } else {
            $file_path = 'Error uploading file.';
        }
    }

    // Tampilkan data yang diterima
    echo "<!DOCTYPE html>
<html lang='id'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Hasil Pengiriman Form</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: rgb(140, 221, 140); }
        .result { background-color: #f0f0f0; padding: 20px; border-radius: 5px; max-width: 600px; margin: auto; }
        h1 { color: orangered; text-align: center; }
        h2 { color: orangered; }
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
        <p><strong>Password:</strong> $password</p>
        <p><strong>E-mail:</strong> $email</p>
        <p><strong>Gender:</strong> $gender</p>
        <p><strong>Contact#:</strong> $kontak</p>
        <h2>Educational Qualification</h2>
        <p><strong>Degree:</strong> $degree</p>
        <p><strong>Engineering:</strong> $engineer</p>
        <p><strong>Hobbies:</strong> " . (empty($hobi) ? 'None' : implode(', ', array_map('htmlspecialchars', $hobi))) . "</p>
        <h2>Address</h2>
        <p><strong>Address:</strong> $address</p>
        <p><strong>Resume File:</strong> " . ($file_path ? "<a href='$file_path'>$file_path</a>" : 'No file uploaded') . "</p>
    </div>
    <p style='text-align: center;'><a href='latihanformhanif.html'>Kembali ke Form</a></p>
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
