<h2 align="center">Tampil Data Kasir</h2>
<table width="90%" align="center" border="1">
	<tr>
    	<th>No</th>
        <th>NamaBarang</th>
        <th>Harga</th>
        <th>Jumlah</th>
		<th>TotalHarga</th>
		<th>Aksi</th>
    </tr>
    <?php
		include "koneksi.php";
		$sql="select * from tbkasir";
		$query=mysqli_query($koneksi,$sql);
		$no=1;
		$Total=0;
		while ($data=mysqli_fetch_array($query))
		{
	?>
    <tr>
    	<td align="center"><?php echo $no; ?></td>
        <td><?php echo $data['NamaBarang']; ?></td>
        <td><?php echo "Rp. ".$data['Harga']; ?></td>
		<td align="center"><?php echo $data['Jumlah']; ?></td>
		<td><?php 
				$Harga=$data['Harga'];
				$Jumlah=$data['Jumlah'];
				$TotalHarga=$Harga*$Jumlah;
				echo "Rp. ".$TotalHarga;
			?></td>
        <td align="center">
			<a href="editkasir.php?<?php echo "KodeKasir=".$data['KodeKasir'];?>">Edit</a> | <a href="deletekasir.php?<?php echo "KodeKasir=".$data['KodeKasir'];?>">Hapus</a></td>
    </tr>
    <?php
			$Total=$Total+$TotalHarga;
			$no++;
		}
	?>
	<tr>
		<td colspan="4" align="center">Total Bayar</td>
		<td><?php echo "Rp. ".$Total?></td>
	</tr>
</table>
<br/>
<a href="inputkasir.php">
	<input type="button" value="Kembali"/>
</a>