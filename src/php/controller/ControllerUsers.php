<?php

include '../model/persistence/UserDAO.php';

class ControllerUsers
{
    public static function get()
    {
        $result=UserDAO::read();
        while($row=$result->fetch_array(MYSQLI_NUM))
        {
            echo '<tr>
                    <td><a href="edit-user.html">'.$row[0].'</td>
                    <td>'.$row[1].'</td>
                </tr>';
        }
    }
}
