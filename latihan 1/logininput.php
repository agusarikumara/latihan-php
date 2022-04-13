<?php
	session_start();
	include 'koneksi.php';
	$Username=$_POST['Username'];
	$Password=$_POST['Password'];
	$Login=$_POST['Login'];

	$sql="select * from tblogin where Username='$Username' and Password='$Password'";
	$cek=mysql_num_rows($sql);

	if ($cek > 0){
			$data = mysql_fetch_assoc($Login);
 
	// cek jika user login sebagai admin
			if($data['Level']=="admin"){

				// buat session login dan username
				$_SESSION['Username'] = $Username;
				$_SESSION['Level'] = "admin";
				// alihkan ke halaman dashboard admin
				header("location:halamanadmin.php");

			// cek jika user login sebagai operator
			}else if($data['Level']=="operator"){
				// buat session login dan username
				$_SESSION['Username'] = $Username;
				$_SESSION['Level'] = "operator";
				// alihkan ke halaman dashboard pengurus
				header("location:halamanuser.php");

			}else{

				// alihkan ke halaman login kembali
				header("location:formlogin.php?pesan=gagal");
			}	
		} else {
		header("location:formlogin.php?pesan=gagal");
	}
	
	
	
?>