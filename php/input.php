<?php 
	session_start();
	include "koneksi.php";
	if(empty($_SESSION['username'])){
	header("location:index.php?pesan=belum_login");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-5.0.0-beta3-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title></title>
</head>

<body>
	<nav class="navbar navbar-expand-lg  bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="../admin.php"><b>Home</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php"><b>logout</b></a>
        </li>
      </ul>
        <h4><u><i class="tulisan4">Admin</i></u></h4>
    </div>
  </div>
</nav>

<div class="background2">
  <h1 class="tulisan3 " align="center"><i><b>Input New Photography</b></i></h1>

  <form class="dua" method="POST" action="cekinput.php" enctype="multipart/form-data">
      <div class="input-group2">
      <label><h4><b> Kategori</b></h4></label>
      <select name="var3" size="1">
      <option value="sport" selected="Sport">Sport</option>
      <option value="photo"><b>Photo</b></option>
      <option value="food"><b>Food</b></option>   
    </select>
      </div>
      <div class="input-group2">
        <label><h4><b> Tanggal</b></h4></label>
        <input type="text" name="tanggal">
        <p><i>ex: 14-januari-2020</i></p>
      </div>
      <div class="input-group2">
        <label><h4><b> Alamat</b></h4></label>
        <input type="text" name="alamat">
        <p><i>ex: gambar.png(sesuai dengan nama foto)</i></p>
      </div>      
    <input type="file" name="uploaded" id="uploaded" ><br>
    <div class="jarak3">
        <button type="submit" class="btn btn-primary"><b>Upload File</b></button>
      </div>
    </form> 

    <div class="jarak4">
    </div>
  
</div>









<!--     <div class="back">
  <div class="jarak">
    <form method="POST" action="ceklogin.php">
      <div class="input-group">
        <label><h4><b> Username</b></h4></label>
        <input type="text" name="username">
      </div>
      <div class="input-group">
        <label><h4><b>Password</b></h4> </label>
        <input type="password" name="password">
      </div>
      <div class="jarak3">
        <button type="submit" class="btn btn-light"><b>login</b></button>
      </div>    
    </form> 
  </div> -->
  <div class="jarak2"></div>  
</div>
</section>
</body>
</html>