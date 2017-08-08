<?php

$host = "localhost";
$user = "root";
$pass = "";
$banco = "registers";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>

<?php

function writeAll() {
    $result = @mysql_query("SELECT * from users");
    while ($fetch = mysql_fetch_array($result)) {
        echo"<tr>";
        echo "<td>".$fetch['username']."</td>";
        echo "<td>".$fetch['name']."</td>";
        echo"</tr>";
    }
}               
?>