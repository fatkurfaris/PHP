<?php  
	include 'koneksi.php';
	$id_pemesanan = $_GET['id_pemesanan'];
	$query = mysqli_query($konek,"DELETE FROM pemesanan WHERE id_pemesanan='$id_pemesanan' ") ;

	if ($query) {
	 	header("location:../pemesanan.php");	
	 }
	 else{
	 	echo "Data gagal dihapus";
	 } 
?>