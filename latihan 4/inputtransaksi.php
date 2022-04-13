<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Quis Pemrograman WEB</title>
<link rel="stylesheet" href="styleinput.css" type="text/css">
</head>
<body>
	<header>
		<logo>
			<img src="img/logostikom.png" width=50; height="70px">
			PEMROGRAMAN WEB
		</logo>
		
  	</header>
	<div class="nav">
		<th>
			<a href="namanim.php">Home</a>
			<a href="inputtransaksi.php">Quis</a>
		</th>
	</div>
		<h3>Form Input Transaksi</h3>
		</br>
		<form name="inputtransaksi" method="post" action="simpantransaksi.php">
			<table>
				<tr>
					<td>No Transaksi</td>
					<td><input type="text" name="NoTransaksi" size="30"/></td>
				</tr>
				<tr>
					<td>Jenis Transaksi</td>
					<td><select name="JenisTransaksi">
						<option value=""></option>
						<option value="Tunai"> Tunai </option>
						<option value="Transfer"> Transfer </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>No Rekening Bank</td>
					<td><input type="text" name="NoRekBank" size="30"/></td>
				</tr>
				<tr>
					<td>Atas Nama</td>
					<td><input type="text" name="AtasNama" size="30"/></td>
				</tr>
				<tr>
					<td>Jumlah Transfer</td>
					<td><input type="text" name="JumlahTransfer" size="30"/></td>
				</tr>
				<tr>
					<td>Tanggal Transfer (YYYY-MM-DD)</td>
					<td><input type="text" name="TglTransfer" size="30"/></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Simpan"/>
					<input type="reset" value="Batal"/>
					<a href="tabeltransaksi.php">
						<input type="button" value="Tampil Data"/>
					</a>
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