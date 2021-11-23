<?php 
	include "koneksi.php";
	$kategori = $_POST['var3'];
	$tanggal = $_POST['tanggal'];
	$alamat = $_POST['alamat'];

	$target_path = '../img/';

	$target_path =$target_path . basename($_FILES['uploaded']['name']);

	$query=mysqli_query($konek,"INSERT INTO photography VALUES (' ','$kategori','$tanggal','$alamat')")
	or die(mysqli_error($konek));

	if ($query) {
		echo "proses input anda berhasil";
	}if (move_uploaded_file($_FILES['uploaded']['tmp_name'], $target_path)) {
		echo "The file has been uploaded";
	}else{
		echo "input foto / inpu data gagal";
	}


// Check if image file is a actual image or fake image

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 	 kembali ke input <a href="input.php" title="">click</a>
</body>
</html>

	
