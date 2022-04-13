<?php
	include "koneksi.php";
	$NamaBarang=$_POST['NamaBarang'];
	$Harga=$_POST['Harga'];
	$Jumlah=$_POST['Jumlah'];

	$TotalHarga=$Harga*$Jumlah;

	$sql="insert into tbkasir values ('','$NamaBarang','$Harga','$Jumlah','$TotalHarga');";
	$query=mysqli_query($koneksi,$sql);

	if ($query)
	{
		echo "<script>
			alert ('Data sudah disimpan');
			location.href='tabelkasir.php';
		</script>";	
	}
	else
	{
		echo "Data gagal disimpan";	
	}
?>