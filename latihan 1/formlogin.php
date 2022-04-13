<?php
	@session_start();
?>
<!doctype html>
<html>
<head>
	<title>TK. KARANG KEMANISAN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 	<br/>
	<h1>Selamat Datang</h1>
	
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
	
	<div class="kotak_login">
		<p class="tulisan_login">TK. KARANG KEMANISAN</p>
		<form name="" method="post" action="logininput.php">
			<label>Username</label>
			<input type="text" name="Username" class="form_login" placeholder="Username atau email ..">
 
			<label>Password</label>
			<input type="password" name="Password" class="form_login" placeholder="Password ..">
 
			<input type="submit" class="tombol_login" name="Login" value="LOGIN">
 
			<br/>
			<br/>
			<a href="index.php">
				<input type="button" class="tombol_kembali" value="KEMBALI"/>
			</a>
			
		</form>
	</div>
</body>
</html>