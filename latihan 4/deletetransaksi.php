<?php
	include "koneksi.php";
	$KodeKonfirmasi=$_GET['KodeKonfirmasi'];

	$sql="delete from tbkonfirmasi where KodeKonfirmasi='$KodeKonfirmasi'";
	$query=mysqli_query($koneksi,$sql);

	if ($query) {
		echo "<script>
			alert ('Data Telah Dihapus');
			location.href='tabeltransaksi.php';
		</script>";
	} else {
		echo "<script>
			alert ('Data Gagal Dihapus');
			location.href='tabeltransaksi.php';
		</script>";
	}
?>