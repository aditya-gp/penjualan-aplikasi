<?php 
if(isset($_GET['id'])){
include('koneksi.php');
$id = $_GET['id'];
$cek = mysql_query("SELECT id_cs FROM customer WHERE id_cs='$id'") or die(mysql_error()); 
if (mysql_num_rows($cek)== 0){
	echo '<script>window.histori.back()</script';
} else{
$del = mysql_query("DELETE FROM customer WHERE id_cs='$id'");
if($del){
echo 'Data Customer berhasil di hapus! ';
echo '<a href="vcustamer.php">Kembali</a>';
}
}
}else{
	echo '<script>window.histori.back()</script';
}
?>