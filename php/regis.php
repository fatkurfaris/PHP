<?php include ('cekregis.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
			<h2>Register</h2>
	</div>

	<form method="POST" action="regis.php">
		<?php include('error.php'); ?>
		<div class="input-group">
			<label> Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label> Email</label>
			<input type="text" name="email">
		</div>
		<div class="input-group">
			<label> No HP</label>
			<input type="text" name="hp">
		</div>
		<div class="input-group">
			<label> alamat</label>
			<input type="text" name="alamat">
		</div>
		<div class="input-group">
			<label> Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label> confirm password</label>
			<input type="password" name="password_2">
		</div>		
		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>		
		<p>
			sudah jadi member? <a href="login.php" >sign in</a>
		</p>
	</form>
</body>
</html>