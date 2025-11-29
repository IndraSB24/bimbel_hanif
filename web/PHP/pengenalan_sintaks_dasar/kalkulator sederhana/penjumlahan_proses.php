<?php 

  // Kita langsung menggunakan (float) untuk memastikan data diubah menjadi angka
    $angka1 = (float)$_POST['angka1']; 
    $angka2 = (float)$_POST['angka2'];
    
    // 3. Lakukan Operasi Aritmatika (Hanya Penjumlahan)
    $hasil = $angka1 + $angka2;
    
    // 4. Tampilkan Hasil
    echo "<h1>Hasil Penjumlahan:</h1>";
    echo "<p>Angka Pertama: " . $angka1 . "</p>";
    echo "<p>Angka Kedua: " . $angka2 . "</p>";
    echo "<hr>";
    echo "<h2>" . $angka1 . " + " . $angka2 . " = " . $hasil . "</h2>";
    echo "<p><a href='penjumlahan.html'>&larr; Kembali ke Kalkulator</a></p>";
