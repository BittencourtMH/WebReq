<?php

include '../model/persistence/UserDAO.php';

class ControllerUsers
{
    public static function get($username)
    {
        return UserDAO::read($username);
    }
    
    public static function getAll()
    {
        $result=UserDAO::readAll();
        while($row=$result->fetch_array(MYSQLI_NUM))
        {
            echo '<tr>
                    <td><a href="user.php?username='.$row[0].'">'.$row[0].'</td>
                    <td>'.$row[1].'</td>
                </tr>';
        }
    }
}
