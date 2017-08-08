<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "registers";
$conexao = @mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($db) or die(mysql_error());
?>
<?php

session_start();
if (isset($_SESSION['names'])) {
    foreach ($_SESSION['names'] as $value) {

        echo "<br> $value <br>";
    }
}

header("location:../view/projects.php");



?>