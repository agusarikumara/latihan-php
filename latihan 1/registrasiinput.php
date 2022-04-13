<?php
	include "koneksi.php";

	$Username=$_POST['Username'];
	$Password=$_POST['Password'];
	$PasswordKonfir=$_POST['PasswordKonfir'];

	if ($Username=='' || $Password=='' || $PasswordKonfir==''){
		echo "<script>
				alert ('Inputan Tidak Boleh Kosong!');
				location.href='registrasiinput.php';
		</script>";
	} else {
		$sql="insert into tblogin values('','$Username','$Password','$PasswordKonfir')";
		$query=mysql_query($sql);
		if ($query){
			echo "<script>
				alert ('Registrasi Berhasil, Silahkan Login');
				location.href='formlogin.php';
				</script>";
		} else {
			echo "<script>
				alert ('Registrasi Gagal, Silahkan Ulangi Registrasi);
				location.href='registrasiinput.php';
				</script>";
		}	
	}
?>	