
<?php include '../model/User.php'; ?>

<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "registers";
$conexao = @mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($db) or die(mysql_error());
?>
<?php
$temp_user = new User();
$temp_user->set_user_name(htmlspecialchars($_POST['username']));
$temp_user->set_password(htmlspecialchars($_POST['password']));
$sql = mysql_query("SELECT * FROM users WHERE username = '{$temp_user->get_nameUser()}' and password='{$temp_user->get_password()}'") or die(mysql_error());
$rows = mysql_num_rows($sql);
if ($rows > 0) {
    header("location:../view/projects.php");
} else {
    session_start();
    echo "<script> alert('no registers') </script>";
    header("location:../index.php");
    $_SESSION['nao_cadastrado'] = $temp_user->get_nameUser();
}
?>



















