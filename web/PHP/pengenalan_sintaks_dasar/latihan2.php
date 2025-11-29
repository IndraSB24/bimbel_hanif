<?php 
$nama_produk = "Paket Belajar Full-Stack PHP";
$tanggal_sekarang = "29 November 2025";
$harga_awal = 1200000;
$persen_diskon = 25;
$jumlah_peserta = 15;
$biaya_iklan_harian = 150000.50;
$durasi_promosi_hari = 7;
$nominaldiskon = (1200000*25)/100;
$hargaakhir = ($harga_awal-$nominaldiskon);
$biayaiklan = ($biaya_iklan_harian*$durasi_promosi_hari);
$profitperpeserta = ($hargaakhir-$biayaiklan/$jumlah_peserta);
$h_akhir_fmt = number_format($hargaakhir, 0, ',', '.');
$biayaiklanfmt = number_format($biayaiklan, 2, ',', '.');
$profitpesertafmt = number_format($profitperpeserta, 2, ',', '.');
echo "Kami meluncurkan promosi $nama_produk pada tanggal $tanggal_sekarang.
Dengan harga normal $harga_awal, kami memberikan diskon besar sebesar Rp$persen_diskon%, 
yang berarti setiap pelanggan menghemat $nominaldiskon secara nominal.
Setelah diskon, harga jual bersihnya menjadi $h_akhir_fmt. Hingga saat ini, kami telah berhasil menarik $jumlah_peserta peserta.
Total pengeluaran untuk iklan selama $durasi_promosi_hari hari adalah $biayaiklanfmt.
Dengan asumsi biaya iklan terbagi rata, profit kotor rata-rata yang kami dapatkan per peserta adalah
$profitpesertafmt per unit, ini adalah angka yang menjanjikan! "
?>