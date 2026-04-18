
<?php
// 1. WAJIB PANGGIL SESSION
session_start();
require 'koneksi.php';

// 2. Jika sudah login, tendang ke dashboard (jangan suruh login lagi)
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit;
}

// 3. Jika tombol 'btn_login' ditekan
if (isset($_POST['btn_login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Enkripsi MD5

    // Cek ke database
    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    $cek   = mysqli_num_rows($query); // Hitung baris yg cocok

    if ($cek > 0) {
        // Data cocok! Ambil datanya
        $data = mysqli_fetch_assoc($query);
        
        // 4. BUAT GELANG SESSION
        $_SESSION['username']     = $data['username'];
        $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
        $_SESSION['status']       = "login";

        // Arahkan ke ruang rahasia
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Username atau Password salah!";
    }
}
?>

<!-- FORM HTML -->
<form action="" method="POST">
    <h2>Login Sistem</h2>
    
    <?php if(isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>

    <label>Username:</label>
    <input type="text" name="username" required>

    <label>Password:</label>
    <input type="password" name="password" required>

    <button type="submit" name="btn_login">Masuk</button>
</form>