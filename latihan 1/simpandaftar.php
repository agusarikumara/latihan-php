<?php
	include "koneksi.php";

	$NamaLengkap=$_POST['NamaLengkap'];
	$NamaPanggilan=$_POST['NamaPanggilan'];
	$TempatTanggalLahir=$_POST['TempatTanggalLahir'];
	$JenisKelamin=$_POST['JenisKelamin'];
	$Agama=$_POST['Agama'];
	$AnakKe=$_POST['AnakKe'];
	$NamaOrtu=$_POST['NamaOrtu'];
	$Alamat=$_POST['Alamat'];
	$NoHp=$_POST['NoHp'];

	if ($JenisKelamin=="Laki-Laki") {
		$JenisKelamin = $JenisKelamin;
	} else if ($JenisKelamin=="Perempuan") {
		$JenisKelamin = $JenisKelamin;
	}

	if ($Agama=="Hindu") {
		$Agama=$Agama;
	} else if ($Agama=="Islam") {
		$Agama=$Agama;
	} else if ($Agama=="Kristen") {
		$Agama=$Agama;
	}

	$sql="insert into tbpendaftaran values('','$NamaLengkap','$NamaPanggilan','$TempatTanggalLahir','$JenisKelamin','$Agama','$AnakKe','$NamaOrtu','$Alamat','$NoHp')";
	$query=mysql_query($sql);

	/* jika memakai sqli
	$query=mysqli_query($koneksi,$sql);
	*/

	if ($query) {
		echo "<script>
				alert ('Data sudah disimpan');
				location.href='pendaftaran.php';
		</script>";
	} else {
		echo "<script>
				alert ('Data gagal disimpan');
				location.href='pendaftaran.php';
		</script>";
	}
	
?>