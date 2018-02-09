<?php
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
include_once $root.'model/persistence/ProjectDAO.php';
session_start();
$project=new Project();
$project->setName(trim(htmlspecialchars(filter_input(INPUT_POST, 'name'))));
$project->setStartDate(new DateTime(htmlspecialchars(filter_input(INPUT_POST, 'start'))));
$project->setEndDate(new DateTime(htmlspecialchars(filter_input(INPUT_POST, 'end'))));
$project->setManager($_SESSION['user']);
ProjectDAO::create($project);
header('location: ../view/pages/projects.php');
