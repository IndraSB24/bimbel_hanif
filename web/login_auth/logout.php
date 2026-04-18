<?php
session_start();   // 1. Panggil dulu session-nya
session_unset();   // 2. Kosongkan semua isi $_SESSION
session_destroy(); // 3. Hancurkan session-nya

// 4. Tendang balik ke form login
header("Location: login.php?pesan=logout");
exit;
?>        