<?php
include_once $root.'model/persistence/RequirementDAO.php';

class ControllerRequirements
{
    public static function get($id)
    {
        return RequirementDAO::read($id);
    }
    public static function getAll($project)
    {
        $requirements=RequirementDAO::readAll($project);
        foreach($requirements as $requirement)
        {
            $id=$requirement->getId();
            $code=$requirement->code();
            $name=$requirement->getName();
            $version=$requirement->getVersion();
            $status=$requirement->status();
            $priority=$requirement->priority();
            $date_modified=$requirement->getDateModified()->format('d/m/Y');
            echo "<tr>
                    <td><a href=\"requirement.php?id=$id\">$code</td>
                    <td>$name</td>
                    <td>$version</td>
                    <td>$status</td>
                    <td>$priority</td>
                    <td>$date_modified</td>
                </tr>";
        }
    }
}