<?php
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
include_once $root.'model/persistence/UserDAO.php';
$user=new User();
$user->setUsername(htmlspecialchars(filter_input(INPUT_POST, 'username')));
$user->setPassword(htmlspecialchars(filter_input(INPUT_POST, 'password')));
$user->setName(trim(htmlspecialchars(filter_input(INPUT_POST, 'name'))));
$user->setEmail(trim(htmlspecialchars(filter_input(INPUT_POST, 'email'))));
$user->setLanguage(filter_input(INPUT_POST, 'language'));
$user->setTimeZone(htmlspecialchars(filter_input(INPUT_POST, 'time-zone')));
$user->setAcademic(htmlspecialchars(filter_input(INPUT_POST, 'academic')));
$user->setProfessional(htmlspecialchars(filter_input(INPUT_POST, 'professional')));
if($user->validate() && UserDAO::create($user))
    header('location: ../view/pages/users.php');
else
    header('location: ../view/pages/sign-up.php');
