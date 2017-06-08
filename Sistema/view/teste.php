




<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$host="localhost";
$user="root";
$pass="";
$banco="cadastro";
$conexao=mysql_connect($host,$user,$pass) or die(mysql_error());
mysql_select_db($banco)or die(mysql_error());
?>


<?php 
	$User = $_POST['User'];
	$Password= $_POST['Password'];
	$sql= mysql_query("INSERT INTO usuarios(user,password) VALUES('$User','$Password')");
 ?>




</body>
</html>










