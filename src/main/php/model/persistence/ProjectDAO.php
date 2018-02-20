<?php
require_once $root.'model/entities/Project.php';
require_once 'Connection.php';

class ProjectDAO
{
    public static function create($project)
    {
        $name=$project->getName();
        $start_date=$project->getStartDate()->format('Y-m-d');
        $end_date=$project->getEndDate()->format('Y-m-d');
        $public=$project->getPublic();
        $creator=$project->getCreator();
        $manager=$project->getManager();
        $connection=Connection::get();
        if(!$statement=$connection->prepare('INSERT INTO project(name, start_date, end_date, public, creator, manager) VALUES(?, ?, ?, ?, ?, ?);'))
            die($connection->error);
        if(!$statement->bind_param('sssiii', $name, $start_date, $end_date, $public, $creator, $manager) || !$statement->execute())
            die($statement->error);
        return true;
    }
    public static function read($id)
    {
        $connection=Connection::get();
        if(!$statement=$connection->prepare('SELECT name, start_date, end_date, public, creator, manager FROM project WHERE project.id=?;'))
            die($connection->error);
        if(!$statement->bind_param('i', $id) || !$statement->execute() || !$result=$statement->get_result())
            die($statement->error);
        if($row=$result->fetch_array(MYSQLI_NUM))
        {
            $project=new Project();
            $project->setId($id);
            $project->setName($row[0]);
            $project->setStartDate(new DateTime($row[1]));
            $project->setEndDate(new DateTime($row[2]));
            $project->setPublic($row[3]=== 1);
            $project->setCreator($row[4]);
            $project->setManager($row[5]);
            return $project;
        }
        return null;
    }
    public static function readAll()
    {
        $connection=Connection::get();
        if(!$statement=$connection->prepare('SELECT id, name, start_date, end_date, public FROM project;'))
            die($connection->error);
        if(!$statement->execute() || !$result=$statement->get_result())
            die($statement->error);
        $projects=array();
        for($i=0; $row=$result->fetch_array(MYSQLI_NUM); $i++)
        {
            $project=new Project();
            $project->setId($row[0]);
            $project->setName($row[1]);
            $project->setStartDate(new DateTime($row[2]));
            $project->setEndDate(new DateTime($row[3]));
            $project->setPublic($row[4]);
            $projects[$i]=$project;
        }
        return $projects;
    }
    public static function update($project)
    {
        $id=$project->getId();
        $name=$project->getName();
        $start_date=$project->getStartDate()->format('Y-m-d');
        $end_date=$project->getEndDate()->format('Y-m-d');
        $public=$project->getPublic();
        $connection=Connection::get();
        if(!$statement=$connection->prepare('UPDATE project SET name=?, start_date=?, end_date=?, public=? WHERE id=?;'))
            die($connection->error);
        if(!$statement->bind_param('sssii', $name, $start_date, $end_date, $public, $id) || !$statement->execute())
            die($statement->error);
        return true;
    }
    public static function delete($id)
    {
        $connection=Connection::get();
        if(!$statement=$connection->prepare('DELETE FROM project WHERE id=?;'))
            die($connection->error);
        if(!$statement->bind_param('i', $id) || !$statement->execute())
            die($statement->error);
        return true;
    }
}
