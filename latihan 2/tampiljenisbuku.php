<table border="1" width="90%" align="center">
	<tr>
		<th>No</th>
		<th>Nama Jenis</th>
		<th>Keterangan</th>
		<th>Action</th>
	</tr>
	
	<?php
		include "koneksi.php";
		$sql="select * from tbjenisbuku";
		$query=mysql_query($sql);
		$no=1;
		while ($data=mysql_fetch_array($query))
		{
	?>
	
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $data['NamaJenis']; ?></td>
		<td><?php echo $data['Keterangan']; ?></td>
		<td>Edit | Hapus</td>
	</tr>
	<?php
			$no++;
		}
	?>
</table>



<br/>

<a href="formjenisbuku.php">Kembali</a>