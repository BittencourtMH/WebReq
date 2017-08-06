
<html>
    <head>
        <title>title</title>
    </head>
    <body>

        <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $banco = "registers";
        $conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
        mysql_select_db($banco) or die(mysql_error());
        ?>

        <?php
        $ja_existe_no_banco = false;
        ?>

        <?php
        include 'User.php';
        $temp_user = new User();

        $name = $_POST['name'];
        $consulta_sql = mysql_query("SELECT * FROM users WHERE name = '$name'");

        if (mysql_num_rows($consulta_sql) > 0) {
            $ja_existe_no_banco = true;
        }
        if ($_POST['name'] != "" && $_POST['username'] != "" && $_POST['password'] != "" && $ja_existe_no_banco == false) {
            $temp_user->set_name(htmlspecialchars($_POST['name']));
            $temp_user->set_user_name(htmlspecialchars($_POST['username']));
            $temp_user->set_password(htmlspecialchars($_POST['password']));
            $sql = mysql_query("INSERT INTO users(name,username,password) VALUES('{$temp_user->get_name()}','{$temp_user->get_nameUser()}','{$temp_user->get_password()}')");
            echo "successfull";
        } else {
            if ($ja_existe_no_banco == true) {
                session_start();

                $_SESSION['ja_existe_no_banco'] = $name;
            }
            header("location:SignUp_error.php");
        }
        ?>

    </body>
</html>

