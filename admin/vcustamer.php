<!DOCTYPE html>
<html>	
<head>
<title>Data Customer</title>
</head>
<body>
<h2>Data customer</h2>
<p><a href="beranda.php">Beranda</a> /	<a href="barang.php">Tambah Data</a> / <a href="vbarang.php">Barang</a> /	<a href="vcustamer.php">Customer</a> /	<a href="customer.php">Tambah Customer</a> /
<a href="logout.php">Logout </a>
<h3>Data Customer</h3>
<table cellpading="5" cellspacing="0" border="1">
<tr bgcolor="#CCCCCC">
<th>No.</th>
<th>Nama Customer</th>
<th>Email</th>
<th>Alamat</th>
<th>Gambar</th> 
<th>Aksi</th>
</tr>
<?php
include('koneksi.php');
$query = mysql_query("SELECT * FROM customer ORDER BY id_cs DESC")
or die(mysql_error());
if(mysql_num_rows($query) == 0){
echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
}else{
$no = 1;
while ($data = mysql_fetch_assoc($query)){

echo '<tr>';
echo '<td>'.$no.'</td>';
echo '<td>'.$data['nama_cs'].'</td>';
echo '<td>'.$data['email_cs'].'</td>';
echo '<td>'.$data['alamat'].'</td>';
echo '<td><img src="./gambar/'.$data['picture'].'"
style="width:60px; height:50px"></td>';
echo '<td><a href="edit-customer.php?id='.$data['id_cs'].'">Edit</a> /
 <a href="hapus-customer.php?id='.$data['id_cs'].
 '" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';
echo '</tr>';
$no++;
}	
}
?>