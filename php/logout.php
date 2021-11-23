<?php  
session_start();
session_destroy();
header("location:../index.php?pesan=logout");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="../index.php" title=""></a>
</body>
</html>