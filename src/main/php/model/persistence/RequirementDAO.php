<?php
include_once $root.'model/entities/Requirement.php';
include_once 'Connection.php';

class RequirementDAO
{
    public static function create($requirement)
    {
        $project=$requirement->getProject();
        $type=$requirement->getType();
        $number=RequirementDAO::nextNumber($type);
        $name=$requirement->getName();
        $version=$requirement->getVersion();
        $status=$requirement->getStatus();
        $priority=$requirement->getPriority();
        $complexity=$requirement->getComplexity();
        $solicitor=$requirement->getSolicitor();
        $author=$requirement->getAuthor();
        $date_created=$requirement->getDateCreated()->format('Y-m-d H:i:s.u');
        $date_modified=$requirement->getDateModified()->format('Y-m-d H:i:s.u');
        $description=$requirement->getDescription();
        $notes=$requirement->getNotes();
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('INSERT INTO requirement(project, type, number, name, version, status, priority, complexity, solicitor, author, date_created, date_modified, description, notes) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);'))
            die($connection->error);
        if(!$statement->bind_param('isisssiisissss', $project, $type, $number, $name, $version, $status, $priority, $complexity, $solicitor, $author, $date_created, $date_modified, $description, $notes) || !$statement->execute())
            die($statement->error);
        return true;
    }
    public static function read($id)
    {
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('SELECT project, type, number, name, version, status, priority, complexity, solicitor, author, date_created, date_modified, description, notes FROM requirement WHERE id=?;'))
            die($connection->error);
        if(!$statement->bind_param('i', $id) || !$statement->execute() || !$result=$statement->get_result())
            die($statement->error);
        if($row=$result->fetch_array(MYSQLI_NUM))
        {
            $requirement=new Requirement();
            $requirement->setId($id);
            $requirement->setProject($row[0]);
            $requirement->setType($row[1]);
            $requirement->setNumber($row[2]);
            $requirement->setName($row[3]);
            $requirement->setVersion($row[4]);
            $requirement->setStatus($row[5]);
            $requirement->setPriority($row[6]);
            $requirement->setComplexity($row[7]);
            $requirement->setSolicitor($row[8]);
            $requirement->setAuthor($row[9]);
            $requirement->setDateCreated(new DateTime($row[10]));
            $requirement->setDateModified(new DateTime($row[11]));
            $requirement->setDescription($row[12]);
            $requirement->setNotes($row[13]);
            return $requirement;
        }
        return null;
    }
    public static function readAll($project)
    {
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('SELECT id, type, number, name, version, status, priority, date_modified FROM requirement WHERE project=?;'))
            die($connection->error);
        if(!$statement->bind_param('i', $project) || !$statement->execute() || !$result=$statement->get_result())
            die($statement->error);
        $requirements=array();
        for($i=0; $row=$result->fetch_array(MYSQLI_NUM); $i++)
        {
            $requirement=new Requirement();
            $requirement->setId($row[0]);
            $requirement->setType($row[1]);
            $requirement->setNumber($row[2]);
            $requirement->setName($row[3]);
            $requirement->setVersion($row[4]);
            $requirement->setStatus($row[5]);
            $requirement->setPriority($row[6]);
            $requirement->setDateModified(new DateTime($row[7]));
            $requirements[$i]=$requirement;
        }
        return $requirements;
    }
    public static function update($requirement)
    {
        $name=$requirement->getName();
        $version=$requirement->getVersion();
        $status=$requirement->getStatus();
        $priority=$requirement->getPriority();
        $complexity=$requirement->getComplexity();
        $solicitor=$requirement->getSolicitor();
        $date_modified=$requirement->getDateModified()->format('Y-m-d H:i:s.u');
        $description=$requirement->getDescription();
        $notes=$requirement->getNotes();
        $id=$requirement->getId();
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('UPDATE requirement SET name=?, version=?, status=?, priority=?, complexity=?, solicitor=?, date_modified=?, description=?, notes=? WHERE id=?;'))
            die($connection->error);
        if(!$statement->bind_param('sssiissssi', $name, $version, $status, $priority, $complexity, $solicitor, $date_modified, $description, $notes, $id) || !$statement->execute())
            die($statement->error);
        return true;
    }
    public static function delete($id)
    {
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('DELETE FROM requirement WHERE id=?;'))
            die($connection->error);
        if(!$statement->bind_param('i', $id) || !$statement->execute())
            die($statement->error);
        return true;
    }
    public static function nextNumber($type)
    {
        $connection=Connection::getConnection();
        if(!$statement=$connection->prepare('SELECT MAX(number) FROM requirement WHERE type=?;'))
            die($connection->error);
        if(!$statement->bind_param('s', $type) || !$statement->execute() || !$result=$statement->get_result())
            die($statement->error);
        if($result->num_rows=== 0)
            return 1;
        return $result->fetch_array(MYSQLI_NUM)[0] + 1;
    }
}