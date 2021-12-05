<?php  
	session_start();
	include "koneksi.php";
	$username = $_SESSION['username'];
	if(empty($_SESSION['username'])){
	header("location:/index.html?pesan=belum_login");
	}

	$user=$_POST['user'];
	$harga1=$_POST['harga1'];
	$jumlah1=$_POST['jumlah1'];
	$harga2=$_POST['harga2'];
	$jumlah2=$_POST['jumlah2'];
	$harga3=$_POST['harga3'];
	$jumlah3=$_POST['jumlah3'];
	$harga4=$_POST['harga4'];
	$jumlah4=$_POST['jumlah4'];
	$harga5=$_POST['harga5'];
	$jumlah5=$_POST['jumlah5'];
	$harga6=$_POST['harga6'];
	$jumlah6=$_POST['jumlah6'];

	$qty=$_POST['jumlah1']+$_POST['jumlah2']+$_POST['jumlah3']+$_POST['jumlah4']+$_POST['jumlah5']+$_POST['jumlah6'];
	$th1=$_POST['jumlah1']*$_POST['harga1'];
	$th2=$_POST['jumlah2']*$_POST['harga2'];
	$th3=$_POST['jumlah3']*$_POST['harga3'];
	$th4=$_POST['jumlah4']*$_POST['harga4'];
	$th5=$_POST['jumlah5']*$_POST['harga5'];
	$th6=$_POST['jumlah6']*$_POST['harga6'];

	$total =$th1+$th2+$th3+$th4+$th5+$th6;	

	$proses = mysqli_query($konek,"INSERT INTO pemesanan VALUES (' ','$user','$jumlah1','$harga1','$jumlah2','$harga2','$jumlah3','$harga3','$jumlah4','$harga4','$jumlah5','$harga5','$jumlah6','$harga6','$qty','$total')")
	or die(mysqli_error($konek));

	if($proses){
		header("location:../pemesanan.php??pesan=berhasil");
	}else{
		header("location:../user.php??pesan=gagal");
	}

