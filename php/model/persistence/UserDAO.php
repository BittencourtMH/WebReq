<?php

include 'Connection.php';

class UserDAO
{
    public static function login($username, $password)
    {
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('SELECT * FROM user WHERE username=? and password=?'))
            die($connection->error);
        if(!$statement->bind_param('ss', $username, $password) || !$statement->execute() || !$result=$statement->get_result())
            die($statement->error);
        $rows=$result->num_rows;
        if($rows > 0)
        {
            header("location:projects.php");
        }
        else
        {
            session_start();
            echo "<script> alert('no registers') </script>";
            //header("location:index.php");
            $_SESSION['nao_cadastrado']=$user->get_username();
        }
    }
}
