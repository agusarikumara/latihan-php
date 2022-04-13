<?php
	include "koneksi.php";
	$NoTransaksi=$_POST['NoTransaksi'];
	$JenisTransaksi=$_POST['JenisTransaksi'];
	$NoRekBank=$_POST['NoRekBank'];
	$AtasNama=$_POST['AtasNama'];
	$JumlahTransfer=$_POST['JumlahTransfer'];
	$TglTransfer=$_POST['TglTransfer'];
	$KodeKonfirmasi=$_POST['KodeKonfirmasi'];

	$date=$TglTransfer;
	$date=date('Y-m-d');

	$sql="update tbkonfirmasi set NoTransaksi='$NoTransaksi', JenisTransaksi='$JenisTransaksi', NoRekBank='$NoRekBank', ";
	$sql.="AtasNama='$AtasNama', JumlahTransfer='$JumlahTransfer', TglTransfer='$TglTransfer' where KodeKonfirmasi='$KodeKonfirmasi'";
	$query=mysqli_query($koneksi,$sql);

	if ($query) {
		echo "<script>
			alert ('Data Telah Diedit');
			location.href='tabeltransaksi.php';
		</script>";
	} else {
		echo "<script>
			alert ('Data Gagal Diedit');
			location.href='transaksiedit.php';
		</script>";
	}
?>