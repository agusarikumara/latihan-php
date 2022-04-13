<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Quis Pemrograman WEB</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
	<header>
		<logo>
			<img src="img/logostikom.png" width=50; height="70px">
			PEMROGRAMAN WEB
		</logo>
		
  	</header>
	<div class="nav">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="soalquis.pdf">Quis</a></li>
		</ul>
	</div>
	
	<!--Soal Quiz-->
	<form name="" method="post" action="coding.php">
	<table>
		<tr>
			<td>Masukan Nama </td>
			<td><input type="text" name="Nama"/></td>
		</tr>
		<tr>
			<td>Gaji Pokok </td>
			<td><input type="text" name="Gajip"/></td>
		</tr>
		<tr>
			<td>Jabatan </td>
			<td>
					<select name="Jabatan">
						<option value=""></option>
						<option value="Direktur">Direktur</option>
						<option value="Manager">Manager</option>
						<option value="Staf">Staf</option>
					</select>
			</td>
		</tr>
		<tr>
			<td>Lembur </td>
			<td><input type="number" name="Lembur" value="0" min="0"/> Hari</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" value="Cek"/>
				<input type="reset" value="Batal"/>
			</td>
		</tr>
	</table>
</form>
	
	<footer>
    	<p>Copyright 2019</p>
		<p>AGUS ARI KUMARA</p>
  	</footer>
</body>
</html>