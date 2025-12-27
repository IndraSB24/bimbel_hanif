<?php
$angka1 = (float)$_POST["angka1"];
$angka2 = (float)$_POST["angka2"];
$hasil = $angka1-$angka2;
echo " <h1><strong>Hasil Pengurangan:</strong></h1>";
echo "<p>Angka pertama: $angka1</p>";
echo "<p>Angka Kedua: $angka2</p>";
echo "<p><strong>$angka1 - $angka2 = $hasil</strong></p>";
 echo "<p><a href='pengurangan_hanif.html'>&larr; Kembali ke Kalkulator</a></p>";
?>