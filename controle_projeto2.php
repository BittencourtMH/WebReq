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
include '../model/Projeto.php';
$auxProjeto = new Projeto($_POST['project_name'], $_POST['start_date'], $_POST['end_date'] ,"");
$sql = @mysql_query("INSERT INTO projects(nome,dataInicio,dataFim) VALUES('{$auxProjeto->get_nome()}','{$auxProjeto->get_data_inicio()}','{$auxProjeto->get_data_fim()}')");

header("location:../view/projects.php");
?>