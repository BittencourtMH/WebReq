<?php

class Connection
{
    const HOST='localhost', USER='root', PASSWORD='root', DATABASE='webreq';
    public static function get()
    {
        $connection=new mysqli(self::HOST, self::USER, self::PASSWORD, self::DATABASE);
        if($connection->connect_error)
            die($connection->connect_error);
        return $connection;
    }
}
