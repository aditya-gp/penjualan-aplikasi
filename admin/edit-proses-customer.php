<?php
//mulai proses edit data
 
//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){
//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$id        		  = $_POST['id'];
	$nama_cs 		 	  = $_POST['nama_cs'];	//membuat variabel $id dan datanya dari inputan hidden id
	$alamat 	  = $_POST['alamat'];	//membuat variabel $nis dan datanya dari inputan NIS
	$email_cs		      = $_POST['email_cs'];
	$lokasi_file	  = $_FILES['picture']['tmp_name'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
		$tipe_file		= $_FILES['picture']['type'];
		$nama_file		= $_FILES['picture']['name'];
		$direktori		= "gambar/$nama_file";
		if (!empty($lokasi_file)) {
		move_uploaded_file($lokasi_file, $direktori);
		}
	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$update = mysql_query("UPDATE customer SET email_cs='$email_cs',nama_cs='$nama_cs',alamat='$alamat',picture='$nama_file' WHERE id_cs='$id'") or die(mysql_error());
//jika query update sukses
if($update){
	echo 'Data berhasil di update! ';	//Pesan jika proses simpan sukses
	echo '<a href="vcustamer.php">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
}
else{
	echo 'Gagal menyimpan data! ';	//Pesan jika proses simpan gagal
	echo '<a href="edit-customer.php?id='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
	}
 
}
else
{	//jika tidak terdeteksi tombol simpan di klik
 
//redirect atau dikembalikan ke halaman edit
echo '<script>window.history.back()</script>';
 }
?>
