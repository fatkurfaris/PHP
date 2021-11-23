<?php  
	include "koneksi.php";
	$id_photo = $_GET['id_photo'];
	$query = mysqli_query($konek,"DELETE FROM photography WHERE id_photo='$id_photo' ") ;

	if ($query) {
	 	header("location:../admin.php");	
	 }
	 else{
	 	echo "Data gagal dihapus";
	 } 
?>	