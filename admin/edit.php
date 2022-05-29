<!DOCTYPE html>
<html>
<head>
	<title>EDIT DATA</title>
	<script type="text/javascript" src="tinymce/tiny_mce.js"></script>
						<script type="text/javascript">
							tinyMCE.init({
								mode : "textareas",
								theme : "advanced",
							});	
						</script>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />					

</head>
<body>
	<h2>EDIT DATA BARANG</h2>
	<form enctype="multipart/form-data" method="post" action="edit-proses.php">
	<h3>Edit Data Barang</h3>
<?php 
include('koneksi.php');
$id = $_GET['id'];
$show = mysql_query("SELECT * FROM barang WHERE productid='$id'");
if(mysql_num_rows($show) == 0){
	echo '<script>window.history.back()</script>';
}else{
$data = mysql_fetch_assoc($show);

}
?>
<form action="edit-proses.php" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>">	
<table cellpadding="3" cellspacing="0">
	<tr>
		<td>Nama Barang</td>
		<td>:</td>
		<td><input type="text" name="name" value="<?php echo $data['name']; ?>" required></td>
	</tr>

	<tr>
		<td>Deskripsi</td>
		<td>:</td>
		<td><label for="textarea"></label>
		<textarea name="description" id="text" cols="45" rows="5"> <?php echo $data['description']; ?></td></textarea>
	</tr>

	<tr>
		<td>Harga</td>
		<td>:</td>
		<td><input type="text" name="price" value="<?php echo $data['price']; ?>" required></td>
	</tr>

	<tr>
		<td>Gambar</td>
		<td>:</td>
		<td><input type="file" name="picture" size="50" required></td>
	</tr>

	<tr>
		<td colspan="3"><?php echo '<td><img src="./gambar/'.$data['picture'].'" style="width:250px; height:200px"></td>'; ?>&nbsp;</td>
	</tr>	

	<tr>
 		<td>&nbsp;</td>
 		<td></td>
 		<td><input type="submit" name="edit-barang" value="Update Barang"></td>
 	</tr>

</table>
</form>
</body>
</html>									