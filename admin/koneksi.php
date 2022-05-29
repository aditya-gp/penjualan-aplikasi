<?php
//konfigurasi database
$host ="localhost";
$user ="root";
$password ="";
$database ="penjualan";
//perintah php untuk ke database
$koneksi = mysql_connect($host, $user, $password, $database) or die("Koneksi Gagal");
mysql_select_db($database) or die ("Database tidak ditemukan");

?>  