<?php

include 'RequirementDAO.php';

$requirement=new Requirement();
$requirement->set_project(1); // correct this
switch(htmlspecialchars($_POST['type'])[0])
{
    case 'F': $requirement->set_type(1); break;
    case 'N': $requirement->set_type(2); break;
    case 'O': $requirement->set_type(3); break;
}
$requirement->set_number(1); // correct this
$requirement->set_name(htmlspecialchars($_POST['name']));
$requirement->set_version(htmlspecialchars($_POST['version']));
$requirement->set_status(htmlspecialchars($_POST['status']));
$requirement->set_priority(htmlspecialchars($_POST['priority']));
$requirement->set_complexity(htmlspecialchars($_POST['complexity']));
$requirement->set_solicitor(htmlspecialchars($_POST['solicitor']));
$date_created=$date_modified=new DateTime();
$requirement->set_date_created($date_created->format('Y-m-d H:i:s'));
$requirement->set_date_modified($date_modified->format('Y-m-d H:i:s'));
$requirement->set_description(htmlspecialchars($_POST['description']));
$requirement->set_notes(htmlspecialchars($_POST['notes']));
RequirementDAO::insert($requirement);
