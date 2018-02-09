<?php
include_once 'Connection.php';

class TimeZoneDAO
{
    public static function create($name)
    {
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('INSERT IGNORE INTO time_zone(name) VALUES(?);'))
            die($connection->error);
        if(!$statement->bind_param('s', $name) || !$statement->execute())
            die($statement->error);
    }
    public static function read($id)
    {
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('SELECT name FROM time_zone WHERE id=?;'))
            die($connection->error);
        if(!$statement->bind_param('i', $id) || !$statement->execute() || !$result=$statement->get_result())
            die($statement->error);
        return $result->fetch_array(MYSQLI_NUM)[0];
    }
}