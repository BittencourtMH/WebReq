<?php
include_once $root.'model/persistence/UserDAO.php';

class ControllerUsers
{
    public static function get($id)
    {
        return UserDAO::read($id);
    }
    public static function getAll()
    {
        $users=UserDAO::readAll();
        foreach($users as $user)
        {
            $id=$user->getId();
            $username=$user->getUsername();
            $name=$user->getName();
            $type=$user->type();
            echo "<tr>
                    <td><a href=\"user.php?id=$id\">$username</td>
                    <td>$name</td>
                    <td>$type</td>
                </tr>";
        }
    }
}