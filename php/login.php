<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-5.0.0-beta3-dist/css/bootstrap.css">
</head>
<nav class="navbar navbar-expand-lg  bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php"><b>Home</b></a>
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
<body>
	
<div class="back">
	<div class="jarak">
	<h1 align="center" class="tulisan"><b><i>Login</i></b></h1>
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
	</div>
	<div class="jarak2"></div>	
</div>

</body>
</html>