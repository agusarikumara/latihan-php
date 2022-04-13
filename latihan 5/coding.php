<?php
	$Nama=$_POST['Nama'];
	$Gajip=$_POST['Gajip'];
	$Jabatan=$_POST['Jabatan'];
	$Lembur=$_POST['Lembur'];

	echo "Nama Pegawai : ".$Nama;
	echo "<br/>";
	echo "Jabatan : ".$Jabatan;
	echo "<br/>";

	if ($Jabatan=="Direktur"){
		$Gaji = ($Gajip + 100000);
	} else if ($Jabatan=="Manager") {
		$Gaji = ($Gajip + 50000);
	} else if ($Jabatan=="Staf") {
		$Gaji = ($Gajip + 10000);
	}

	if ($Lembur>0){
		$Gajil = $Lembur*0.1*$Gaji;
		echo "Gaji Lembur = ".$Gajil;
		echo "<br/>";
		if ($Jabatan=="Direktur"){
			$Totalgaji = $Gajip + 100000 + $Gajil;
			echo "Total Gaji = ".$Totalgaji;
			echo "<br/>";
		} else if ($Jabatan=="Manager") {
			$Totalgaji = $Gajip + 50000 + $Gajil;
			echo "Total Gaji = ".$Totalgaji;
			echo "<br/>";
		} else if ($Jabatan=="Staf") {
			$Totalgaji = $Gajip + 10000 + $Gajil;
			echo "Total Gaji = ".$Totalgaji;
			echo "<br/>";
		}
	} else {
		echo "Gaji = ".$Gaji;
		echo "<br/>";
		if ($Jabatan=="Direktur"){
			$Totalgaji = $Gajip + 100000;
			echo "Total Gaji = ".$Totalgaji;
			echo "<br/>";
		} else if ($Jabatan=="Manager") {
			$Totalgaji = $Gajip + 50000;
			echo "Total Gaji = ".$Totalgaji;
			echo "<br/>";
		} else if ($Jabatan=="Staf") {
			$Totalgaji = $Gajip + 10000;
			echo "Total Gaji = ".$Totalgaji;
			echo "<br/>";
		}
	}

	if ($Totalgaji>100000) {
		$Pajak = $Totalgaji * 0.1;
		$Gajibersih = $Totalgaji - $Pajak;
		echo "Gaji Bersih 10% = ".$Gajibersih;
		echo "<br/>";
	} else {
		$Pajak = $Totalgaji * 0.05;
		$Gajibersih = $Totalgaji - $Pajak;
		echo "Gaji Bersih 5% = ".$Gajibersih;
		echo "<br/>";
	}
?>