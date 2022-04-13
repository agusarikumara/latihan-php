<?php
	include "koneksi.php";
	$NamaJenis=$_POST['NamaJenis'];
	$Keterangan=$_POST['Keterangan'];

	$sql="insert into tbjenisbuku values('','$NamaJenis','$Keterangan')";
	$query=mysql_query($sql);

	/* jika memakai sqli
	$query=mysqli_query($koneksi,$sql);
	*/

	if ($query) {
		echo "<script>
				alert ('Data sudah disimpan');
				location.href='formjenisbuku.php';
		</script>";
	} else {
		echo "<script>
				alert ('Data gagal disimpan');
				location.href='formjenisbuku.php';
		</script>";
	}
	
?>