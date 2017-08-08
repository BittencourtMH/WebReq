<?php

$host = "localhost";
$user = "root";
$pass = "";
$banco = "registers";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>

<?php

function writeAll2() {
    $result = @mysql_query("SELECT * from projects");
    while ($fetch = mysql_fetch_array($result)) {
        echo"<tr>";
        echo "<td>".$fetch['nome']."</td>";
        echo "<td>".$fetch['dataInicio']."</td>";
        echo "<td>".$fetch['dataFim']."</td>";
        echo"</tr>";
    }
}               
?>