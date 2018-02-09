<?php
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
include_once $root.'model/persistence/UserDAO.php';
$username=htmlspecialchars(filter_input(INPUT_POST, 'username'));
$password=User::encryptPassword(htmlspecialchars(filter_input(INPUT_POST, 'password')));
$id=UserDAO::signIn($username, $password);
if($id== null)
    header("location: ../view/pages/sign-in.php");
session_start();
$_SESSION['user']=$id;
header("location: ../view/pages/projects.php");
