<?php
session_start();
require 'koneksi.php';
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit;
}
if (isset($_POST['btn_login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Enkripsi MD5

    // Cek ke database
    $query = mysqli_query($conn, "SELECT * FROM hanif WHERE username='$username' AND password='$password'");
    $cek   = mysqli_num_rows($query); // Hitung baris yg cocok

    if ($cek > 0) {
        // Data cocok! Ambil datanya
        $data = mysqli_fetch_assoc($query);
        
        // 4. BUAT GELANG SESSION
        $_SESSION['username']     = $data['username'];
        $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
        $_SESSION['status']       = "masuk";

        // Arahkan ke ruang rahasia
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Username atau Password salah!";
        echo $error;
    }
}
?>