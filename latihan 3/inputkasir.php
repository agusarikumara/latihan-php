<h2>Form Input Transaksi</h2>
<form name="forminputtransaksi" method="post" action="simpankasir.php">
	<table>
		<tr>
			<td>Nama Barang</td>
			<td><input type="text" name="NamaBarang" size="30"/></td>
		</tr>
		
		<tr>
			<td>Harga Barang</td>
			<td><input type="text" name="Harga" size="30"/></td>
		</tr>
		
		<tr>
			<td>Jumlah</td>
			<td><input type="number" name="Jumlah" value="0" min="0"/></td>
		</tr>
		
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan"/>
			<input type="reset" value="Batal"/>
			<a href="tabelkasir.php">
				<input type="button" value="Tampil Data"/>
			</a>
			</td>
		</tr>
		
	</table>
</form>