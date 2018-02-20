<?php
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
require_once $root.'model/persistence/ProjectDAO.php';
session_start();
$user=$_SESSION['user'];
$project=new Project();
$project->setName(trim(htmlspecialchars(filter_input(INPUT_POST, 'name'))));
$project->setStartDate(new DateTime(htmlspecialchars(filter_input(INPUT_POST, 'start'))));
$project->setEndDate(new DateTime(htmlspecialchars(filter_input(INPUT_POST, 'end'))));
$project->setPublic(htmlspecialchars(filter_input(INPUT_POST, 'privacy')));
$project->setCreator($user);
$project->setManager($user);
if(ProjectDAO::create($project))
    header('location: ../view/pages/projects.php');
else
    header('location: ../view/pages/project-new.php');
