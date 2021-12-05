<?php 

	$username ="";
	$email="";
	$errors=array();

	$konek= mysqli_connect('localhost','root','','pemogramanweb');
	if (isset($_POST['register'])) {
		$username =($_POST['username']);
		$email =($_POST['email']);
		$hp =($_POST['hp']);
		$alamat =($_POST['alamat']);
		$password_1 =($_POST['password_1']);
		$password_2 = ($_POST['password_2']);
	

	if (empty($username)) {
		array_push($errors, "username is required");
	}
	if (empty($email)) {
		array_push($errors, "email is required");
	}
	if (empty($hp)) {
		array_push($errors, "No HP is required");
	}
	if (empty($alamat)) {
		array_push($errors, "alamat is required");
	}
	if (empty($password_1)) {
		array_push($errors, "password is required");
	}
	if ($password_1 != $password_2) {
		array_push($errors, "tidak cocok");
	}

	if (count($errors)==0) {
		$password=($password_1);
		$sql = "INSERT INTO login (username,email,HP,alamat,password) VALUES ('$username','$email','$hp','$alamat','$password')";
		mysqli_query($konek,$sql);
	
	if ($sql) {
		echo "proses input anda berhasil";
	}
		else
	{
		echo "proses input gagal";
	}
	}
}
	
 ?>