<!doctype html>
<html>
<head>
	<title>TK.KARANG KEMANISAN PENDAFTARAN</title>
	<link rel="stylesheet" href="stylependaftaran.css">
</head>	
<body>
	<div class="container">
		<div class="header">
			<h1 class="judul">TK. KARANG KEMANISAN</h1>
			<br>
			<p>Selamat Datang di sekolah Taman Kanak-Kanak Karang Kemanisan!</p>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="#secAbout">About</a></li>
				<li><a href="pendaftaran.php">Pendaftaran</a></li>
				<li><a href="formlogin.php">Login</a></li>
			</ul>
		</div>
		
		<div class="main">
			<h2>Pendaftaran Siswa Baru</h2>
			<form name="" method="post" action="simpandaftar.php">
					<table>
						<tr>
							<td>Nama Lengkap </td>
							<td><input type="text" name="NamaLengkap" size="90px"/></td>
						</tr>

						<tr>
							<td>Nama Panggilan </td>
							<td><input type="text" name="NamaPanggilan" size="90px"/></td>
						</tr>

						<tr>
							<td>Tempat/Tanggal Lahir </td>
							<td><input type="text" name="TempatTanggalLahir" size="90px"/></td>
						</tr>

						<tr>
							<td>Jenis Kelamin</td>
							<td>
								<input type="radio" name="JenisKelamin" value="Laki-Laki">Laki-Laki
								<input type="radio" name="JenisKelamin" value="Perempuan">Perempuan
							</td>
						</tr>
						
						<tr>
							<td>Agama </td>
							<td>
									<select name="Agama">
										<option value=""></option>
										<option value="Hindu">Hindu</option>
										<option value="Islam">Islam</option>
										<option value="Kristen">Kristen</option>
									</select>
							</td>
						</tr>

						<tr>
							<td>Anak Ke- </td>
							<td><input type="number" name="AnakKe" value="0" min="0"/></td>
						</tr>


						<tr>
							<td>Nama Ortu/Wali </td>
							<td><input type="text" name="NamaOrtu" size="90px"/></td>
						</tr>

						<tr>
							<td>Alamat </td>
							<td><input type="text" name="Alamat" size="90px"/></td>
						</tr>

						<tr>
							<td>No.HP </td>
							<td><input type="text" name="NoHp" size="20px"/></td>
						</tr>

						<tr>
							<td></td>
							<td>
								<input type="submit" value="Daftar"/>
								<input type="reset" value="Batal"/>
							</td>
						</tr>
					</table>
				</form>
		</div>
		<div class="footer">
			<h3>DESA ADAT LEGIAN</h3>
			<p>TK. Karang Kemanisan 2019</p>
		</div>
	</div>
</body>
</html>