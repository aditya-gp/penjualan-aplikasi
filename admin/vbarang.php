<?php
session_start();
include 'koneksi.php';
if (empty($_SESSION['username']))
{
	echo "<center>Anda harus login terlebih dahulu</center>";
}
else {

?>	
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="logo_struy.jpg">
<title>Contoh Latihan</title>
</head>
<body>
<h2> Data Barang </h2>
<p><a href="beranda.php">Beranda</a> /	<a href="barang.php">Tambah Barang</a> / <a href="vbarang.php">Barang</a> /	<a href="vcustamer.php">Customer</a> /	<a href="customer.php">Tambah Customer</a> /
<a href="logout.php">Logout </a>
<h3>Data Barang</h3>
<table cellpadding="5" cellspacing="0" border="1">
<tr bgcolor="#CCCCCC">
<th>No.</th>
<th>Nama Barang</th>
<th>Deskripsi Barang</th>
<th>Harga Barang</th>
<th>Gambar</th>
<th>Aksi</th>
</tr>
<?php
include('koneksi.php');
$query = mysql_query("SELECT * FROM barang ORDER BY productid DESC")
or die(mysql_error());
//cek, apakah hasil query diatas mendapatkan hasil atau tidak
if(mysql_num_rows($query) == 0){

echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
}else{
$no = 1;  //membuat Variabel $no untuk membuat nomor urut
while($data = mysql_fetch_assoc($query)){	

echo '<tr>';
echo '<td>'.$no.'</td>'; //menampilkan no urut
echo '<td>'.$data['name'].'</td>'; //menampilkan data nim dari database
echo '<td>'.$data['description'].'</td>'; //menampilkan data nama
echo '<td>'.$data['price'].'</td>'; //menampilkan data kelas dari database
echo '<td><img src="./gambar/'.$data['picture']. '"
style="width:60px; height:50px"></td>';
echo '<td><a href="edit.php?id='.$data['productid'].'">Edit</a> /
 <a href="hapus.php?id='.$data['productid'].
 '"onclick="return confirm(\'Yakin?\')">Hapus</a></td>';
echo '</tr>';
$no++; //menambah jumlah nomor urut setiap row
}
}
?>

<?php
}
?>	