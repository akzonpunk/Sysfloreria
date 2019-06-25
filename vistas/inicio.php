<?php 
	session_start();
	if(isset($_SESSION['usuario'])){
		
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>inicio</title>
	<?php require_once "menu.php"; ?>
</head>
<body background="../img/p04.jpg">

<H1 align="center">
<p>
<font color="black" size="80" face="verdana">FLORERIA</font>
</p>
<H1/>
<br />
<?PHP
echo "FLORES";
?>

</body>
<div class="social-iconos">

</div>
</html>
<?php 
	}else{
		header("location:../index.php");
	}
 ?>