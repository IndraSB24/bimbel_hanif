<?php 
include 'koneksi.php';

if (isset($_GET['id_servis'])) {
    $id = $_GET['id_servis'];
    
    // Perhatikan: tambahkan "=" setelah id_servis
    $query = "DELETE FROM tranksaksi_servis WHERE id_servis = '$id'";
    
    if (mysqli_query($koneksi, $query)) {
        echo "<script>
                alert('Data berhasil dihapus');
                window.location='tranksaksi_servis.php'; 
              </script>";
    } else {
        // Ini akan membantu kamu melihat alasan jika query gagal
        die("Query Gagal: " . mysqli_error($koneksi));
    }
}
?>
