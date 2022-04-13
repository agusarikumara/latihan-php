<h4>Form Input Jenis Buku</h4>
<form name="formjenisbuku" method="post" action="simpanjenisbuku.php">
	<table>
		<tr>
			<td>Nama Jenis</td>
			<td>
				<input type="text" name="NamaJenis" size="30"/>
			</td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td>
				<input type="text" name="Keterangan" size="30"/>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" value="Simpan"/>
				<input type="reset" value="Batal"/>
				<a href="tampiljenisbuku.php">Tampil Data</a>
			</td>
		</tr>
	</table>
</form>