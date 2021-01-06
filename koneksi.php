<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbName = "smdb_modul6";

$koneksi = mysqli_connect($host, $user, $pass) or die("Koneksi ke database gagal!");

mysqli_select_db($koneksi, $dbName) or die("Tidak ada database yang dipilih!"); 

?>