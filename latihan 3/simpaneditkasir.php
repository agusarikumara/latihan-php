<?php
	include "koneksi.php";
	$NamaBarang=$_POST['NamaBarang'];
	$Harga=$_POST['Harga'];
	$Jumlah=$_POST['Jumlah'];
	$KodeKasir=$_POST['KodeKasir'];

	$TotalHarga=$Harga*$Jumlah;
	
	$sql="update tbkasir set NamaBarang='$NamaBarang', Harga='$Harga', ";
	$sql.="Jumlah='$Jumlah' where KodeKasir='$KodeKasir'";
	$query=mysqli_query($koneksi,$sql);
	
	
	if ($query)
	{
		echo "<script>
			alert ('Data sudah diperbaharui');
			location.href='tabelkasir.php';
		</script>";	
	}
	else
	{
		echo "Data gagal diperbaharui";	
	}

?>