<!DOCTYPE html>
<html>
<head>
	<title>EDIT DATA</title>
	  <script type="text/javascript" src="tinymce/tiny_mce.js"></script>
  					  <script type="text/javascript">
  					  	  tinyMCE.init({
  					  	  //General options
  					  	  mode : "textareas",
  					  	  theme : "advanced",
  					  	});
  					  	</script>
</head>
<body>
	<h2>EDIT DATA Customer</h2>
	<p><a href="beranda.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	<h3>Edit Data Customer</h3>
<?php
//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
//include atau memasukkan file koneksi ke database
include('koneksi.php');
//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=id_mahasiswa
	$id = $_GET['id'];
//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE id_mahasiswa = '$id'
	$show = mysql_query("SELECT * FROM customer WHERE id_cs='$id'");
//cek apakah data dari hasil query ada atau tidak
	if(mysql_num_rows($show) == 0){
//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
	// echo '<script>window.history.back()</script>';
	}
	else{
//jika data ditemukan, maka membuat variabel $data
		$data = mysql_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	}
?>

<form  enctype="multipart/form-data" action="edit-proses-customer.php" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>">	<!-- membuat inputan hidden dan nilainya adalah siswa_id -->
<table border=0px cellpadding="3" cellspacing="0">
<tr>
	<td>Nama Customer</td>
	<td>:</td>
	<td><input type="text" name="nama_cs" value="<?php echo $data['nama_cs']; ?>" required></td>	<!-- value diambil dari hasil query -->
	</tr>
<tr>
	<td>Email</td>
	<td>:</td>
	<td><input type="text" name="email_cs" value="<?php echo $data['email_cs']; ?>" required></td>	<!-- value diambil dari hasil query -->
</tr>
<tr>
	<td>Alamat</td>
	<td>:</td>
	<td><textarea name="alamat" type="text" cols="45" rows="5"> <?php echo $data['alamat']; ?></td></textarea> <!-- value diambil dari hasil query -->
</tr>
<tr>
	<td>Picture</td>
	<td>:</td>
	<?php echo'<td><img src="gambar/'.$data['picture'].'" style="width:250px; height:200px;"><required></td>';?> 
</tr>
	<td>Ubah Picture</td>
	<td>:</td>
	<td><input type="file" name="picture" size="20"></td>
</tr>
<tr>
	<td>&nbsp</td>
	<td></td>
	<td><input type="submit" name="simpan" value="Simpan"></td>
</tr>
</body>
</html>