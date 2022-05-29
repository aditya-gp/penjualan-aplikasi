<?php

if(isset($_POST['edit-barang'])){

include('koneksi.php');

$id 			= $_POST['id'];
$name			= $_POST['name'];
$description	= $_POST['description'];
$price			= $_POST['price'];
$lokasi_file	= $_FILES['picture']['tmp_name'];
	$tipe_file	  = $_FILES['picture']['type'];
	$nama_file	  = $_FILES['picture']['name'];
	$direktori	  = "gambar/$nama_file";
		if (!empty($lokasi_file)) {
		move_uploaded_file($lokasi_file, $direktori);
	}

$update = mysql_query("UPDATE barang SET name='$name',description='$description',price='$price',picture='$nama_file' WHERE productid='$id'")
or die(mysql_error());
if($update){
	echo 'Data Berhasil disimpan!';//jika proses simpan sukses
	echo '<a href="vbarang.php?id='.$id.'">Kembali</a>'; //membuat link untuk kembali ke halaman edit
}else{
	echo 'Gagal menyimpan data!'; //pesan jika proses simpan gagal
	echo '<a href="vbarang.php?id='.$id.'">Kembali</a>';
}

}else{ 


echo '<script>window.history.back()</script>';

}
?>	