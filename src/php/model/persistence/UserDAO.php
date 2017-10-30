<?php

include 'TimeZoneDAO.php';
include '../model/entities/User.php';

class UserDAO
{
    public static function create($user)
    {
        $username=$user->getUsername();
        $password=User::encryptPassword($user->getPassword());
        $name=$user->getName();
        $email=$user->getEmail();
        $language=$user->getLanguage();
        $time_zone=$user->getTimeZone();
        $educational=$user->getEducational();
        $professional=$user->getProfessional();
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
    public static function read($username)
    {
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('SELECT user.name, email, language, time_zone.name, educational, professional FROM user LEFT JOIN time_zone ON time_zone=time_zone.id WHERE username=?;'))
            die($connection->error);
        if(!$statement->bind_param('s', $username) || !$statement->execute() || !$result=$statement->get_result())
            die($statement->error);
        if($row=$result->fetch_array(MYSQLI_NUM))
        {
            $user=new User();
            $user->setUsername($username);
            $user->setName($row[0]);
            $user->setEmail($row[1]);
            $user->setLanguage($row[2]);
            $user->setTimeZone($row[3]);
            $user->setEducational($row[4]);
            $user->setProfessional($row[5]);
            return $user;
        }
        return null;
    }
    public static function readAll()
    {
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('SELECT username, name FROM user;'))
            die($connection->error);
        if(!$statement->execute() || !$result=$statement->get_result())
            die($statement->error);
        return $result;
    }
    public static function update($user)
    {
        $username=$user->getUsername();
        $name=$user->getName();
        $email=$user->getEmail();
        $language=$user->getLanguage();
        $time_zone=$user->getTimeZone();
        $educational=$user->getEducational();
        $professional=$user->getProfessional();
        if(UserDAO::hasEmailBeenChanged($username, $email) && !UserDAO::validateEmail($email))
            return false;
        TimeZoneDAO::create($time_zone);
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('UPDATE user SET name=?, email=?, language=?, time_zone=(SELECT id FROM time_zone WHERE name=?), educational=?, professional=? WHERE username=?;'))
            die($connection->error);
        if(!$statement->bind_param('sssssss', $name, $email, $language, $time_zone, $educational, $professional, $username) || !$statement->execute())
            die($statement->error);
        return true;
    }
    public static function updatePassword($username, $old_password, $new_password)
    {
        echo '<script>alert()</script>';
        if(!UserDAO::signIn($username, $old_password))
            return false;
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('UPDATE user SET password=? WHERE username=?;'))
            die($connection->error);
        if(!$statement->bind_param('ss', $new_password, $username) || !$statement->execute())
            die($statement->error);
        return true;
    }
    public static function delete($username, $password)
    {
        if(!UserDAO::signIn($username, $password))
            return false;
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('DELETE FROM user WHERE username=?;'))
            die($connection->error);
        if(!$statement->bind_param('s', $username) || !$statement->execute())
            die($statement->error);
        return true;
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
    public static function hasEmailBeenChanged($username, $email)
    {
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('SELECT * FROM user WHERE username=? AND email=?;'))
            die($connection->error);
        if(!$statement->bind_param('ss', $username, $email) || !$statement->execute() || !$result=$statement->get_result())
            die($statement->error);
        return $result->num_rows== 0;
    }
}
