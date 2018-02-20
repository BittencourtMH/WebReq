<?php
require_once $root.'model/persistence/CollaboratorDAO.php';

class ControllerCollaborator
{
    public static function get($id)
    {
        return CollaboratorDAO::read($id);
    }
    public static function getAll($project)
    {
        $collaborators=CollaboratorDAO::readAll($project);
        foreach($collaborators as $collaborator)
        {
            $id=$collaborator->getId();
            $name=ControllerUser::get($collaborator->getUser())->getName();
            $role=$collaborator->role();
            $status=$collaborator->status();
            echo "<tr>
                    <td><a href='collaborator.php?id=$id'>$name</td>
                    <td>$role</td>
                    <td>$status</td>
                </tr>";
        }
    }
}
