<?php

include '../model/persistence/UserDAO.php';

$user=new User();
$user->setUsername(htmlspecialchars(filter_input(INPUT_POST, 'username')));
$user->setPassword(htmlspecialchars(filter_input(INPUT_POST, 'password')));
$user->setName(trim(htmlspecialchars(filter_input(INPUT_POST, 'name'))));
$user->setEmail(trim(htmlspecialchars(filter_input(INPUT_POST, 'email'))));
$user->setLanguage(filter_input(INPUT_POST, 'language'));
$user->setTimeZone(htmlspecialchars(filter_input(INPUT_POST, 'time-zone')));
$user->setEducational(htmlspecialchars(filter_input(INPUT_POST, 'educational')));
$user->setProfessional(htmlspecialchars(filter_input(INPUT_POST, 'professional')));
if($user->validate() && UserDAO::create($user))
    header('location: ../view/users.php');
else
    header('location: ../view/sign-up.php');
