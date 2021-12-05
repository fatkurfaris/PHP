<?php 
	include "koneksi.php";
	$tanggal=$_POST['tanggal'];	
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$email	 = $_POST['email'];
	$phone = $_POST['phone'];
	$orderan = $_POST['orderan'];

	$query=mysqli_query($konek,"INSERT INTO pemesanan VALUES (' ','$tanggal','$nama','$alamat','$email','$phone','$orderan',' ')")
	or die(mysqli_error($konek));

	if ($query) {
		echo "proses input anda berhasil";
	}
		else
	{
		echo "proses input gagal";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 	 kembali ke halaman utama <a href="../index.html" title="">click</a>
</body>
</html>

	
