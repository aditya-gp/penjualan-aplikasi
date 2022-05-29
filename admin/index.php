<!DOCTYPE html>
<html lang=en-US>
<head>
	<link href="logo_struy.jpg" rel="shortcut icon">
	<title>Silakan Login</title>
</head>
<body>
	<h2>Selamat Datang</h2>
	<h3>Silakan Login</h3>
	<form enctype="multipart/form-data" action="login.php" method="post">
	<table border="0px" cellpadding="3" cellspacing="0">
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name="username" required></td>	
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="password" required></td> 
		</tr>
		 <tr>
			<td>&nbsp;</td>
			<td></td>
			<td><input type="submit" name="login" value="Login"></td>
		</tr>
</body>
</html>
