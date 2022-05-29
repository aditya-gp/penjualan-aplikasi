<?php
if(isset($_POST['tambah_customer'])){
include('koneksi.php');
$nama_cs					= $_POST['nama_cs'];
$alamat			= $_POST['alamat'];
$email_cs					= $_POST['email_cs'];
	$lokasi_file =  $_FILES['picture']['tmp_name'];
	$tipe_file   =  $_FILES['picture']['type'];
	$nama_file   =  $_FILES['picture']['name'];
	$direktori   =  "gambar/$nama_file";
		if (!empty($lokasi_file)) {
		move_uploaded_file($lokasi_file,$direktori);	
	}
$input = mysql_query("INSERT INTO customer VALUES
	(NULL, '$email_cs', '$nama_cs', '$alamat','$nama_file')") or die
(mysql_error());
if($input){
echo 'Data berhasil di tambahkan! ';
echo '<a href="vcustamer.php">Kembali</a>';
}else{
echo 'Gagal menambahkan data!';
echo '<a href="tambah-customer.php">Kembali</a>';
}
}else{
echo '<script>windows.history.back()</script>';
}
?>