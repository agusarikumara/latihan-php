<?php
	include "koneksi.php";
	
	$KodeKasir=$_GET['KodeKasir'];
		 
		$sql="DELETE FROM tbkasir WHERE KodeKasir='$KodeKasir'";
		
		$query=mysqli_query($koneksi,$sql);
	if($query)
	{
		echo "<script>
				alert ('Data berhasil di Hapus');
				location.href='tabelkasir.php';
		</script>";
	}else {
				echo "<script>
				alert ('Data gagal dihapus');
				location.href='tabelkasir.php';
		</script>";
	}
?>