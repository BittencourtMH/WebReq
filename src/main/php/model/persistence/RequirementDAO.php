<?php

include 'Requirement.php';
include 'Connection.php';

class RequirementDAO
{
    public static function insert($requirement)
    {
        $project=$requirement->get_project();
        $type=$requirement->get_type();
        $number=$requirement->get_number();
        $name=$requirement->get_name();
        $version=$requirement->get_version();
        $status=$requirement->get_status();
        $priority=$requirement->get_priority();
        $complexity=$requirement->get_complexity();
        $solicitor=$requirement->get_solicitor();
        $date_created=$requirement->get_date_created();
        $date_modified=$requirement->get_date_modified();
        $description=$requirement->get_description();
        $notes=$requirement->get_notes();
        $connection=Connection::getConnection();
        if(!($statement=$connection->prepare('INSERT INTO requirement(project, type, number, name, version, status, priority, complexity, solicitor, date_created, date_modified, description, notes) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)')))
            die($connection->error());
        if(!$statement->bind_param('isisiiiisssss', $project, $type, $number, $name, $version, $status, $priority, $complexity, $solicitor, $date_created, $date_modified, $description, $notes) || !$statement->execute())
            die($statement->error);
        $connection->close();
    }
}
