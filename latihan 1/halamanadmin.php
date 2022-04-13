<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin - www.malasngoding.com</title>
</head>
<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['Level']==""){
		header("location:formlogin.php?pesan=gagal");
	}
 
	?>
	<h1>Halaman Admin</h1>
 
	<p>Halo <b><?php echo $_SESSION['Username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['Level']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>
 
	<br/>
	<br/>
</body>
</html>