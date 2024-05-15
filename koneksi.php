<?php
$host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'login';

$koneksi = mysqli_connect($host, $db_user, $db_pass, $db_name);

if (!$koneksi) {
  die("Koneksi database gagal: " . mysqli_connect_error());
}
?>