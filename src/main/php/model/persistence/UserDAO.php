<?php
require_once $root.'model/entities/User.php';
require_once 'TimeZoneDAO.php';

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
        $academic=$user->getAcademic();
        $professional=$user->getProfessional();
        if(!UserDAO::validateUsername($username) || !UserDAO::validateEmail($email))
            return false;
        TimeZoneDAO::create($time_zone);
        $admin=UserDAO::admins()=== 0;
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('INSERT INTO user(username, password, name, email, language, time_zone, academic, professional, admin) VALUES(?, ?, ?, ?, ?, (SELECT id FROM time_zone WHERE name=?), ?, ?, ?);'))
            die($connection->error);
        if(!$statement->bind_param('ssssssssi', $username, $password, $name, $email, $language, $time_zone, $academic, $professional, $admin) || !$statement->execute())
            die($statement->error);
        return true;
    }
    public static function read($id)
    {
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('SELECT username, name, email, language, time_zone, academic, professional, admin FROM user WHERE id=?;'))
            die($connection->error);
        if(!$statement->bind_param('i', $id) || !$statement->execute() || !$result=$statement->get_result())
            die($statement->error);
        if($row=$result->fetch_array(MYSQLI_NUM))
        {
            $user=new User();
            $user->setId($id);
            $user->setUsername($row[0]);
            $user->setName($row[1]);
            $user->setEmail($row[2]);
            $user->setLanguage($row[3]);
            $user->setTimeZone($row[4]);
            $user->setAcademic($row[5]);
            $user->setProfessional($row[6]);
            $user->setAdmin($row[7]);
            return $user;
        }
        return null;
    }
    public static function readAll()
    {
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('SELECT id, username, name, admin FROM user;'))
            die($connection->error);
        if(!$statement->execute() || !$result=$statement->get_result())
            die($statement->error);
        $users=array();
        for($i=0; $row=$result->fetch_array(MYSQLI_NUM); $i++)
        {
            $user=new User();
            $user->setId($row[0]);
            $user->setUsername($row[1]);
            $user->setName($row[2]);
            $user->setAdmin($row[3]);
            $users[$i]=$user;
        }
        return $users;
    }
    public static function update($user)
    {
        $id=$user->getId();
        $name=$user->getName();
        $email=$user->getEmail();
        $language=$user->getLanguage();
        $time_zone=$user->getTimeZone();
        $academic=$user->getAcademic();
        $professional=$user->getProfessional();
        if(UserDAO::hasEmailBeenChanged($id, $email) && !UserDAO::validateEmail($email))
            return false;
        TimeZoneDAO::create($time_zone);
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('UPDATE user SET name=?, email=?, language=?, time_zone=(SELECT id FROM time_zone WHERE name=?), academic=?, professional=? WHERE id=?;'))
            die($connection->error);
        if(!$statement->bind_param('ssssssi', $name, $email, $language, $time_zone, $academic, $professional, $id) || !$statement->execute())
            die($statement->error);
        return true;
    }
    public static function updatePassword($id, $old_password, $new_password)
    {
        if(!UserDAO::signIn(UserDAO::read($id)->getUsername(), $old_password))
            return false;
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('UPDATE user SET password=? WHERE id=?;'))
            die($connection->error);
        if(!$statement->bind_param('si', $new_password, $id) || !$statement->execute())
            die($statement->error);
        return true;
    }
    public static function delete($id, $password)
    {
        if(!UserDAO::signIn(UserDAO::read($id)->getUsername(), $password))
            return false;
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('DELETE FROM user WHERE id=?;'))
            die($connection->error);
        if(!$statement->bind_param('i', $id) || !$statement->execute())
            die($statement->error);
        return true;
    }
    public static function signIn($username, $password)
    {
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('SELECT id FROM user WHERE username=? and password=?;'))
            die($connection->error);
        if(!$statement->bind_param('ss', $username, $password) || !$statement->execute() || !$result=$statement->get_result())
            die($statement->error);
        if($result->num_rows > 0)
            return $result->fetch_array(MYSQLI_NUM)[0];
        return null;
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
    public static function hasEmailBeenChanged($id, $email)
    {
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('SELECT * FROM user WHERE id=? AND email=?;'))
            die($connection->error);
        if(!$statement->bind_param('is', $id, $email) || !$statement->execute() || !$result=$statement->get_result())
            die($statement->error);
        return $result->num_rows== 0;
    }
    public static function admins()
    {
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('SELECT COUNT(*) FROM user WHERE admin=1;'))
            die($connection->error);
        if(!$statement->execute() || !$result=$statement->get_result())
            die($statement->error);
        return $result->fetch_array(MYSQLI_NUM)[0];
    }
}