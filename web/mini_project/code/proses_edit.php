<?php
include 'koneksi.php';
include 'header.php';
if (isset($_POST['edit'])) {
    $id = $_POST['id_servis'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $no_hp = $_POST['no_hp'];
    $tipe_hp = $_POST['tipe_hp'];
    $keluhan = $_POST['keluhan'];
    $biaya = $_POST['biaya'];
    $tgl_masuk = $_POST['tgl_masuk'];
     $tgl_ambil = $_POST['tgl_ambil']; // Sesuaikan dengan name di form HTML

    // 2. Query Update (Gunakan petik untuk string)
    $query = "UPDATE tranksaksi_servis SET 
              nama_pelanggan = '$nama_pelanggan', 
              no_hp = '$no_hp', 
              tipe_hp = '$tipe_hp', 
              keluhan = '$keluhan', 
              biaya = '$biaya',
              tgl_masuk = '$tgl_masuk',
              tgl_ambil = '$tgl_ambil'
              WHERE id_servis = '$id'";
    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil disimpan'); window.location='tranksaksi_servis.php';</script>";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
