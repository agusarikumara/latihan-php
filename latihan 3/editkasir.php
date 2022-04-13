<h4>Form Edit Kasir</h4>
<form name="FormKonfirmasi" method="post" action="simpaneditkasir.php">
		
	<?php
		include "koneksi.php";
		$KodeKasir=$_GET['KodeKasir'];
		$sql="select * from tbkasir where ";
		$sql.="KodeKasir='$KodeKasir'";
		$query=mysqli_query($koneksi,$sql);
		$data=mysqli_fetch_array($query);
	?>
	
	<input type="hidden" name="KodeKasir" value="<?php echo $data['KodeKasir']; ?>"/>
	<table>
		<tr>
			<td>Nama Barang</td>
			<td><input type="text" name="NamaBarang" value="<?php echo $data['NamaBarang']; ?>" size="30"/></td>
		</tr>
		
		<tr>
			<td>Harga Barang</td>
			<td><input type="text" name="Harga" value="<?php echo $data['Harga']; ?>" size="30"/></td>
		</tr>
		
		<tr>
			<td>Jumlah</td>
			<td><input type="text" name="Jumlah" value="<?php echo $data['Jumlah']; ?>" size="30"/></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Edit"/>
			<input type="reset" value="Batal"/>
			<a href="tabelkasir.php">
				<input type="button" value="Tampil Data"/>
				</a>
			</td>
			
		</tr>
	</table>
</form>