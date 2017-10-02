<?php

include 'TimeZoneDAO.php';

class UserDAO
{
    public static function create($user)
    {
        $username=$user->getUsername();
        $password=$user->getPassword();
        $name=$user->getName();
        $email=$user->getEmail();
        $language=$user->getLanguage();
        $time_zone=$user->getTimeZone();
        $educational=$user->getEducational();
        $professional=$user->getProfessional();
        echo $educational;
        echo $professional;
        if(!UserDAO::validateUsername($username) || !UserDAO::validateEmail($email))
            return false;
        TimeZoneDAO::create($time_zone);
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('INSERT INTO user(username, password, name, email, language, time_zone, educational, professional) VALUES(?, ?, ?, ?, ?, (SELECT id FROM time_zone WHERE name=?), ?, ?);'))
            die($connection->error);
        if(!$statement->bind_param('ssssssss', $username, $password, $name, $email, $language, $time_zone, $educational, $professional) || !$statement->execute())
            die($statement->error);
        return true;
    }
    
    public static function read()
    {
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('SELECT username, name FROM user;'))
            die($connection->error);
        if(!$statement->execute() || !$result=$statement->get_result())
            die($statement->error);
        return $result;
    }
    
    public static function signIn($username, $password)
    {
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('SELECT * FROM user WHERE username=? and password=?;'))
            die($connection->error);
        if(!$statement->bind_param('ss', $username, $password) || !$statement->execute() || !$result=$statement->get_result())
            die($statement->error);
        return $result->num_rows > 0;
    }
    
    public static function validateUsername($username)
    {
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('SELECT * FROM user WHERE username=?;'))
            die($connection->error);
        if(!$statement->bind_param('s', $username) || !$statement->execute() || !$result=$statement->get_result())
            die($statement->error);
        return $result->num_rows== 0;
    }
    
    public static function validateEmail($email)
    {
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('SELECT * FROM user WHERE email=?;'))
            die($connection->error);
        if(!$statement->bind_param('s', $email) || !$statement->execute() || !$result=$statement->get_result())
            die($statement->error);
        return $result->num_rows== 0;
    }
}
