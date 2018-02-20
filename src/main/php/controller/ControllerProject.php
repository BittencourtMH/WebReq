<?php
require_once $root.'model/persistence/ProjectDAO.php';

class ControllerProject
{
    public static function get($id)
    {
        return ProjectDAO::read($id);
    }
    public static function getAll()
    {
        $projects=ProjectDAO::readAll();
        foreach($projects as $project)
        {
            $id=$project->getId();
            $name=$project->getName();
            $start_date=$project->getStartDate()->format('d/m/Y');
            $end_date=$project->getEndDate()->format('d/m/Y');
            echo "<tr>
                    <td><a href='project-info.php?id=$id'>$name</td>
                    <td>$start_date</td>
                    <td>$end_date</td>
                </tr>";
        }
    }
}
