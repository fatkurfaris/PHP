<?php 
	// $hostname ="ftpupload.net" ;
	// $username ="epiz_29113472" ;
	// $password ="YtALMVbEdg5Y" ;
	// $database ="itc";

	$hostname ="localhost" ;
	$username ="root" ;
	$password = "" ;
	$database ="itc";

$konek=new mysqli($hostname,$username,$password,$database);
if ($konek-> connect_error) {
	die("maaf koneksi gagal :". $connect->connect_error);
}
?>