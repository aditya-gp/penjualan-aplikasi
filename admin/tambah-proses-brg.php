<?php
if(isset($_POST['tambah_barang'])){
include('koneksi.php');
$name			= $_POST['name'];
$description	= $_POST['description'];
$price			= $_POST['price'];
	$lokasi_file = $_FILES['picture']['tmp_name'];
	$tipe_file	 = $_FILES['picture']['type'];
	$nama_file	 = $_FILES['picture']['name'];
	$direktori   = "gambar/$nama_file";
		if (!empty($lokasi_file)) {
		move_uploaded_file($lokasi_file,$direktori);	
	}
$input = mysql_query("INSERT INTO barang VALUES
	(NULL, '$name', '$description', '$price', '$nama_file')") or die(mysql_error());
if($input){
echo 'Data berhasil di tambahkan: '; //Pesan jika tambah sukses
echo '<a href="vbarang.php">Kembali</a>'; //Membuat link untuk kembali
}else{
echo 'Gagal menambahkan data! '; //Pesan jika proses tambah gagal
echo '<a href="barang.php">Kembali</a>'; 	
}
}else{ //Jika tidak terdeteksi tombol tambah di link
echo '<script>window.history.back()</script>';
}
?>