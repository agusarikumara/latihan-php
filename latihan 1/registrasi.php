<!doctype html>
<html>
<head>
	<title>Halaman Registrasi</title>
	<link rel="stylesheet" type="text/css" href="styleregistrasi.css">
</head>
	
<body>
	<h1>Halaman Registrasi</h1>
	
	<div class="kotak_login">
		<p class="tulisan_login">TK. KARANG KEMANISAN</p>
		<form name="" method="post" action="registrasiinput.php">
			<label>Username</label>
			<input type="text" name="Username" class="form_login" placeholder="Username atau email ..">
 
			<label>Password</label>
			<input type="password" name="Password" class="form_login" placeholder="Password ..">
			
			<label>Konfirmasi Password</label>
			<input type="password" name="PasswordKonfir" class="form_login" placeholder="Password ..">
			
			<input type="submit" name="Register" class="tombol_login" value="REGISTRASI">
 
			<br/>
			<br/>
			<a href="index.php">
				<input type="button" class="tombol_kembali" value="KEMBALI"/>
			</a>
			
		</form>
	</div>
</body>
</html>