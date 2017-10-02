<?php

include 'Connection.php';

class TimeZoneDAO
{
    public static function create($time_zone)
    {
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('INSERT IGNORE INTO time_zone(name) VALUES(?);'))
            die($connection->error);
        if(!$statement->bind_param('s', $time_zone) || !$statement->execute())
            die($statement->error);
    }
}
