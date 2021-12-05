<?php  
session_start();
session_destroy();
header("location:../index.html?pesan=logout");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="../index.html" title=""></a>
</body>
</html>