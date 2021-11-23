<?php 
	include "php/koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Food</title>
</head>
<body>
	<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-5.0.0-beta3-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/stylee.css">
	<title></title>
</head>
<body>
	<nav class="navbar navbar-expand-lg  bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="admin.php"><b>Home</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="php/login.php"><b>Login</b></a>
        </li>
      </ul>
        <h4><u><i class="tulisan4">Fatkurfaris</i></u></h4>
    </div>
  </div>
</nav>
<section id="photography">
<div class=" bg-light bawah2">  
<div class="container">
<div class="row samping">
<h1 class="tulisan2"><b>FOOD</b></h1>  
            <?php
            $query = mysqli_query($konek,"SELECT * FROM photography WHERE kategori='food' ");
            while ($a=mysqli_fetch_array($query)) { ?>               
    <div class="col-6 col-md-4 bawah2">
      <div class="card" style="width: 18rem;">
        <img src="img/<?php echo $a['alamat'] ?>" class="card-img-top" alt="...">
          <div class="card-body" align=" center">
           <h4 class="tulis" ><b><?php echo $a['tanggal']; ?></b></h4> 
        </div>
      </div>
    </div>
    <?php }?>
  </div>
</div>
</div>
</section>

</body>
</html>