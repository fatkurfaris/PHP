 <?php
     if(isset($_GET['pesan'])){
     if($_GET['pesan'] =="gagal"){
     echo "login anda gagal, username dan password anda salah!";
     }elseif ($_GET['pesan']=="belum_login") {
     echo "anda harus login untuk megakses halaman ini";
   }
        }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
	<h2>Login</h2>
</div>
	<form method="POST" action="ceklogin.php">
		<div class="input-group">
			<label><b> Username</b></label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label> Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" name="login" class="btn">Login</button>
		</div>		
		<p>
			Belom jadi member? <a href="regis.php" >sign up</a>
		</p>
	</form>

</body>
</html>