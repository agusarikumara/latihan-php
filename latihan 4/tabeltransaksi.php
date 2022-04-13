<table width="90%" align="center" border="1">
	<tr>
		<th>No</th>
		<th>NoTransaksi</th>
		<th>JenisTransaksi</th>
		<th>NoRekBank</th>
		<th>AtasNama</th>
		<th>JumlahTransfer</th>
		<th>TglTransfer</th>
		<th>Action</th>
	</tr>
	
	<?php
		include "koneksi.php";
		$sql="select * from tbkonfirmasi";
		$query=mysqli_query($koneksi,$sql);
		$no=1;
		while ($data=mysqli_fetch_array($query))
		{
	?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $data['NoTransaksi']; ?></td>
		<td><?php echo $data['JenisTransaksi']; ?></td>
		<td><?php echo $data['NoRekBank']; ?></td>
		<td><?php echo $data['AtasNama']; ?></td>
		<td><?php echo $data['JumlahTransfer']; ?></td>
		<td><?php echo $data['TglTransfer']; ?></td>
		<td align="center">
			<a href="transaksiedit.php?<?php echo "KodeKonfirmasi=".$data['KodeKonfirmasi'];?>">Edit</a> | <a href="deletetransaksi.php?<?php echo "KodeKonfirmasi=".$data['KodeKonfirmasi'];?>">Hapus</a>
		</td>
    </tr>
	<?php
			$no++;
		}
	?>
</table>
</br>
<a href="inputtransaksi.php">
	<input type="button" value="Kembali"/>
</a>