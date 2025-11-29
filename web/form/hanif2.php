<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = isset($_POST['email-to']) ? htmlspecialchars($_POST['email-to']) : '';
     $file_path = '';
    if (isset($_FILES['inputfile']) && $_FILES['inputfile']['error'] == UPLOAD_ERR_OK) {
        $upload_dir = 'uploads/';
        $file_name = basename($_FILES['inputfile']['name']);
        $target_path = $upload_dir . $file_name;
        if (move_uploaded_file($_FILES['inputfile']['tmp_name'], $target_path)) {
            $file_path = $target_path;
        } else {
            $file_path = 'Error uploading file.';
        }
    }
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
        <p><strong>E-mail:</strong> $email</p>
        <p><strong>Resume File:</strong> " . ($file_path ? "<a href='$file_path'>$file_path</a>" : 'No file uploaded') . "</p>>
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

