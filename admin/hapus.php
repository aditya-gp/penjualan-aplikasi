<?php 
if(isset($_GET['id'])){
include('koneksi.php');
$id = $_GET['id'];
$cek = mysql_query("SELECT productid FROM barang WHERE productid='$id'") or die(mysql_error()); 
if (mysql_num_rows($cek)== 0){
	echo '<script>window.histori.back()</script';
} else{
$del = mysql_query("DELETE FROM barang WHERE productid='$id'");
if($del){
echo 'Data Barang berhasil di hapus! ';
echo '<a href="vbarang.php">Kembali</a>';
}
}
}else{
	echo '<script>window.histori.back()</script';
}
?>