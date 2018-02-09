<?php
include_once $root.'model/entities/Project.php';
include_once $root.'model/entities/User.php';
include_once 'Connection.php';

class ProjectDAO
{
    public static function create($project)
    {
        $name=$project->getName();
        $start_date=$project->getStartDate()->format('Y-m-d');
        $end_date=$project->getEndDate()->format('Y-m-d');
        $manager=$project->getManager();
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('INSERT INTO project(name, start_date, end_date, manager) VALUES(?, ?, ?, ?);'))
            die($connection->error);
        if(!$statement->bind_param('sssi', $name, $start_date, $end_date, $manager) || !$statement->execute())
            die($statement->error);
        return true;
    }
    public static function read($id)
    {
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('SELECT project.name, start_date, end_date, user.id, user.name FROM project, user WHERE manager=user.id AND project.id=?;'))
            die($connection->error);
        if(!$statement->bind_param('i', $id) || !$statement->execute() || !$result=$statement->get_result())
            die($statement->error);
        if($row=$result->fetch_array(MYSQLI_NUM))
        {
            $project=new Project();
            $manager=new User();
            $project->setId($id);
            $project->setName($row[0]);
            $project->setStartDate(new DateTime($row[1]));
            $project->setEndDate(new DateTime($row[2]));
            $manager->setId($row[3]);
            $manager->setName($row[4]);
            $project->setManager($manager);
            return $project;
        }
        return null;
    }
    public static function readAll()
    {
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('SELECT id, name, start_date, end_date FROM project;'))
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
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('UPDATE project SET name=?, start_date=?, end_date=? WHERE id=?;'))
            die($connection->error);
        if(!$statement->bind_param('sssi', $name, $start_date, $end_date, $id) || !$statement->execute())
            die($statement->error);
        return true;
    }
    public static function delete($id)
    {
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('DELETE FROM project WHERE id=?;'))
            die($connection->error);
        if(!$statement->bind_param('i', $id) || !$statement->execute())
            die($statement->error);
        return true;
    }
}