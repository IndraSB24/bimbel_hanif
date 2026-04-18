<?php
session_start();

// LOGIKA SATPAM: Jika tidak ada session 'status' yg bernilai 'login'
if ($_SESSION['status'] != "login") {
    header("Location: login.php?pesan=belum_login");
    exit; // Wajib exit agar kode di bawahnya tidak dieksekusi
}
?>

<h1>Selamat Datang di Area VIP!</h1>
<p>Halo, <?php echo $_SESSION['nama_lengkap']; ?>.</p>
<p>Anda login sebagai <?php echo $_SESSION['username']; ?>.</p>

<!-- Tombol keluar -->
<br>
<a href="logout.php">[ Logout (Keluar) ]</a>
                