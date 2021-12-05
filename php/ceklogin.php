<?php 
	
	session_start() ;
	include "koneksi.php" ;

	$username = $_POST['username'] ;
	$password = $_POST['password'] ;

	$query =mysqli_query($konek, "SELECT * FROM login WHERE username = '$username'&& password='$password'") or die (mysqli_error($konek));

	$cek = mysqli_fetch_assoc($query);;

	if($cek ['level']== 1){
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		header("location:../session.php");
	}	
	else if($cek >0){
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		header("location:../user.php");
	}	

	else{
		header("location:index.html?pesan=gagal");
	}


?>