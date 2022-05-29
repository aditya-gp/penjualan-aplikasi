<!DOCTYPE html>
<html>
<head>
  <title>Form Barang</title>
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
<h2>Tambah Data</h2>
<p><a href="beranda.php">Beranda</a> / <a href="barang.php">Tambah Data</a> /
<a href="vbarang.php">Lihat Barang</a></p>
<h3>Tambah Data Barang</h3>
 <form enctype="multipart/form-data" method="post" action="tambah-proses-brg.php">
 <!--<form action="tambah-proses-brg.php" method="post"-->
 <table cellpadding="3" cellspacing="0">
 <tr>
 <td>Nama Product</td>
 <td>:</td>
 <td><input type="text" name="name" required></td>
 </tr>
 <tr>
 <td>Description </td>
 <td>:</td>
 <td><textarea name="description" style=\"width: 600px; height: 350px;\">
 </textarea></td>
 </tr>
 <tr>
 <td>Price </td>
 <td>:</td>
 <td><input type="text" name="price" size="30" required></td>
 </tr>
 <tr>
 <td>Picture </td>
 <td>:</td>
 <td><input type="file" name="picture" size="30" required></td>
 </tr>

 <tr>
 <td>&nbsp;</td>
 <td></td>
 <td><input type="submit" name="tambah_barang" value="Simpan"></td>
 </tr>
 </table>
 </form>
 </body>
 </html>
  					  	  