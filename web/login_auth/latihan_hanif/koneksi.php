<?php 
$user = "localhost";
$username = "root";
$password = "";
$db = "latihan_hanif";
$conn = mysqli_connect("$user","$username","$password","$db");
if (!$conn){
    die("Koneksi Gagal". mysqli_connect_error());
}