<?php
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
require_once $root.'model/persistence/ProjectDAO.php';
require_once $root.'model/persistence/UserDAO.php';
session_start();
$user_id=$_SESSION['user'];
$password=User::encryptPassword(htmlspecialchars(filter_input(INPUT_POST, 'password')));
$project_id=htmlspecialchars(filter_input(INPUT_POST, 'project'));
if(UserDAO::signIn(UserDAO::read($user_id)->getUsername(), $password) && ProjectDAO::delete($project_id))
    header('location: ../view/pages/projects.php');
else
    header('location: ../view/pages/project-settings.php?id='.$project_id);