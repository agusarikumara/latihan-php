<h3>Form Edit Transaksi</h3>
<form name="edittransaksi" method="post" action="transaksisimpanedit.php">
	<?php
		include "koneksi.php";
		$KodeKonfirmasi=$_GET['KodeKonfirmasi'];
		$sql="select * from tbkonfirmasi where ";
		$sql.="KodeKonfirmasi='$KodeKonfirmasi'";
		$query=mysqli_query($koneksi,$sql);
		$data=mysqli_fetch_array($query);
	?>
	
	<input type="hidden" name="KodeKonfirmasi" value="<?php echo $data['KodeKonfirmasi']; ?>"/>
	<table>
		<tr>
			<td>No Transaksi</td>
			<td><input type="text" name="NoTransaksi" value="<?php echo $data['NoTransaksi']; ?>" size="30"/></td>
		</tr>
		<tr>
			<td>Jenis Transaksi</td>
			<td><select name="JenisTransaksi" value="<?php echo $data['JenisTransaksi']; ?>">
				<option value=""></option>
				<option value="Tunai"> Tunai </option>
				<option value="Transfer"> Transfer </option>
				</select>
			</td>
		</tr>
		<tr>
			<td>No Rekening Bank</td>
			<td><input type="text" name="NoRekBank" value="<?php echo $data['NoRekBank']; ?>" size="30"/></td>
		</tr>
		<tr>
			<td>Atas Nama</td>
			<td><input type="text" name="AtasNama" value="<?php echo $data['AtasNama']; ?>" size="30"/></td>
		</tr>
		<tr>
			<td>Jumlah Transfer</td>
			<td><input type="text" name="JumlahTransfer" value="<?php echo $data['JumlahTransfer']; ?>" size="30"/></td>
		</tr>
		<tr>
			<td>Tanggal Transfer (YYYY-MM-DD)</td>
			<td><input type="text" name="TglTransfer" value="<?php echo $data['TglTransfer']; ?>" size="30"/></td>
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
