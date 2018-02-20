<?php
require_once $root.'model/entities/Collaborator.php';
require_once 'Connection.php';

class CollaboratorDAO
{
    public static function create($collaborator)
    {
        $project=$collaborator->getProject();
        $user=$collaborator->getUser();
        $role=$collaborator->getRole();
        $status=$collaborator->getStatus();
        $connection=Connection::get();
        if(!$statement=$connection->prepare('INSERT INTO collaborator(project, user, role, status) VALUES(?, ?, ?, ?);'))
            die($connection->error);
        if(!$statement->bind_param('iiss', $project, $user, $role, $status) || !$statement->execute())
            die($statement->error);
        return true;
    }
    public static function read($id)
    {
        $connection=Connection::get();
        if(!$statement=$connection->prepare('SELECT project, user, role, status FROM collaborator WHERE id=?;'))
            die($connection->error);
        if(!$statement->bind_param('i', $id) || !$statement->execute() || !$result=$statement->get_result())
            die($statement->error);
        if($row=$result->fetch_array(MYSQLI_NUM))
        {
            $collaborator=new Collaborator();
            $collaborator->setId($id);
            $collaborator->setProject($row[0]);
            $collaborator->setUser($row[1]);
            $collaborator->setRole($row[2]);
            $collaborator->setStatus($row[3]);
            return $collaborator;
        }
        return null;
    }
    public static function readAll($project)
    {
        $connection=Connection::get();
        if(!$statement=$connection->prepare('SELECT id, user, role, status FROM collaborator WHERE project=?;'))
            die($connection->error);
        if(!$statement->bind_param('i', $project) || !$statement->execute() || !$result=$statement->get_result())
            die($statement->error);
        $collaborators=array();
        for($i=0; $row=$result->fetch_array(MYSQLI_NUM); $i++)
        {
            $collaborator=new Collaborator();
            $collaborator->setId($row[0]);
            $collaborator->setUser($row[1]);
            $collaborator->setRole($row[2]);
            $collaborator->setStatus($row[3]);
            $collaborators[$i]=$collaborator;
        }
        return $collaborators;
    }
    public static function update($collaborator)
    {
        $id=$collaborator->getId();
        $role=$collaborator->getRole();
        $connection=Connection::get();
        if(!$statement=$connection->prepare('UPDATE collaborator SET role=? WHERE id=?;'))
            die($connection->error);
        if(!$statement->bind_param('si', $role, $id) || !$statement->execute())
            die($statement->error);
        return true;
    }
    public static function delete($id)
    {
        $connection=Connection::get();
        if(!$statement=$connection->prepare('DELETE FROM collaborator WHERE id=?;'))
            die($connection->error);
        if(!$statement->bind_param('i', $id) || !$statement->execute())
            die($statement->error);
        return true;
    }
}
