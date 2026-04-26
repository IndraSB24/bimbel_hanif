<?php
include 'koneksi.php';

if (isset($_POST['simpan_admin'])) {
    $nama     = $_POST['nama_admin'];
    $user     = strtolower(str_replace(' ', '', $nama)); // Buat username otomatis dari nama
    $pass     = password_hash('123456', PASSWORD_DEFAULT); // Password default: 123456

    // Pakai nama_lengkap sesuai SQL kamu
    $query = "INSERT INTO admin (username, password, nama_lengkap) 
              VALUES ('$user', '$pass', '$nama')";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Admin berhasil terdaftar! Password default: 123456'); window.location='admin.php';</script>";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>