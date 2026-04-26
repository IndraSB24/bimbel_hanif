<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama      = $_POST['nama_pelanggan'];
    $no_hp     = $_POST['no_hp'];
    $tipe      = $_POST['tipe_hp'];
    $keluhan   = $_POST['keluhan'];
    $id_admin  = $_POST['id_admin']; 
    $biaya = $_POST['biaya'];
    $tgl_masuk = $_POST['tgl_masuk'];
    $query = "INSERT INTO tranksaksi_servis (tgl_masuk, nama_pelanggan, no_hp, tipe_hp, keluhan, status_service, biaya, id_admin) 
              VALUES ('$tgl_masuk', '$nama', '$no_hp', '$tipe', '$keluhan', 'Antrean', '$biaya', '$id_admin')";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil disimpan!'); window.location='tranksaksi_servis.php';</script>";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>