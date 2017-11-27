<?php

class Connection
{
    const HOST="localhost", USER="root", PASSWORD="root", DATABASE="webreq";

    public static function getConnection()
    {
        $conexao=new mysqli(self::HOST, self::USER, self::PASSWORD, self::DATABASE) or die(mysql_error());
        if($conexao->connect_error)
            die($conexao->connect_error);
        return $conexao;
    }
}
