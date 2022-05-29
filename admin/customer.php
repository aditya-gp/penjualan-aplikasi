<!DOCTYPE html>
<html>
<head>
	<title>Form Customer</title>
	<script type"text/javascript" src="tinymce/tiny_mce.js"></script>
						<script> type="text/javascript">
							tinyMCE.init({
									mode : "textareas",
									theme :"advanced",
							});
							</script>
</head>
<body>
<h2>Tambah Data</h2>
<p><a href="beranda.php">Beranda</a> /	<a href="barang.php">Tambah Data</a> / <a href="vbarang.php">Barang</a> /	<a href="vcustamer.php">Customer</a> /	<a href="customer.php">Tambah Customer</a> /
<a href="logout.php">Logout </a>
<h3>Tambah Data Customer</h3>
 <form enctype="multipart/form-data" method="post" action="tambah-proses-customer.php">
<table cellpading="3" cellspacing="0">
<tr>
<td>Nama Customer</td>
<td>:</td>
<td><input type="text" name="nama_cs" required></td>
</tr>
<tr>
<td>Alamat</td>
<td>:</td>
<td><textarea name="alamat" style=\"width: 600px; height: 350px;\">
</textarea></td>
</tr>
<tr>
<td>Email</td>
<td>:</td>
<td><input type="text" name="email_cs" size="30" required></td>
</tr>
<tr>
<tr>
<td>Picture</td>
<td>:</td>
<td><input type="file" name="picture" size="30" required></td>
</tr>
<tr>
<td>&nbsp;</td>
<td></td>
<td><input type="submit" name="tambah_customer" value="Simpan"></td>
</tr>
</table>
</form>
</body>
</html>