<?php
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
include_once $root.'model/persistence/ProjectDAO.php';
session_start();
$id=htmlspecialchars(filter_input(INPUT_POST, 'id'));
$project=new Project();
$project->setId($id);
$project->setName(trim(htmlspecialchars(filter_input(INPUT_POST, 'name'))));
$project->setStartDate(new DateTime(htmlspecialchars(filter_input(INPUT_POST, 'start'))));
$project->setEndDate(new DateTime(htmlspecialchars(filter_input(INPUT_POST, 'end'))));
if(ProjectDAO::update($project))
    header('location: ../view/pages/project-info.php?id='.$id);
else
    header('location: ../view/pages/project-edit.php?id='.$id);