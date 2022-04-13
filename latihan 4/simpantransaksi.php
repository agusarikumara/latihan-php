<?php
	include "koneksi.php";
	$NoTransaksi=$_POST['NoTransaksi'];
	$JenisTransaksi=$_POST['JenisTransaksi'];
	$NoRekBank=$_POST['NoRekBank'];
	$AtasNama=$_POST['AtasNama'];
	$JumlahTransfer=$_POST['JumlahTransfer'];
	$TglTransfer=$_POST['TglTransfer'];

	$date=$TglTransfer;
	$date=date('Y-m-d');

	$sql="insert into tbkonfirmasi values ('','$NoTransaksi','$JenisTransaksi','$NoRekBank','$AtasNama','$JumlahTransfer','$date');";
	$query=mysqli_query($koneksi,$sql);

	if ($query) {
		echo "<script>
			alert ('Data Berhasil Tersimpan');
			location.href='tabeltransaksi.php';
		</script>";
	} else {
		echo "Data Gagal Tersimpan";
	}
?>