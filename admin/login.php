<?php
	if(isset($_POST['login'])){
		include 'koneksi.php';
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];
		if (!empty($username) && !empty($password)) {
			$input = mysql_query("SELECT * FROM user WHERE username = '$username' AND password = '$password'") or die (mysql_error($database));
			if (mysql_num_rows($input) == 1) {
				$_SESSION["username"] = "$username";
				echo "Anda berhasil masuk<br>";
				echo "Klik <a href='vbarang.php'disini</a> untuk melanjutkan";	
			}else {
				echo "Username dan Password salah, mohon ulangi. <a href='index.php'>Kembali</a>";
			}
		} 
		else {
			echo "Username dan Password anda kosong, silahkan diisi";
		}
	}
	else{
		echo '<script>window.history.back()</script>';
	}
?>