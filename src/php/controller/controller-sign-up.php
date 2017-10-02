<?php

include '../model/entities/User.php';
include '../model/persistence/UserDAO.php';

$user=new User();
$user->setUsername(htmlspecialchars(filter_input(INPUT_POST, 'username')));
$user->setPassword(hash('sha256', htmlspecialchars(filter_input(INPUT_POST, 'password')), true));
$user->setName(htmlspecialchars(filter_input(INPUT_POST, 'name')));
$user->setEmail(htmlspecialchars(filter_input(INPUT_POST, 'email')));
$user->setLanguage(filter_input(INPUT_POST, 'language'));
$user->setTimeZone(htmlspecialchars(filter_input(INPUT_POST, 'time-zone')));
$user->setEducational(htmlspecialchars(filter_input(INPUT_POST, 'educational')));
$user->setProfessional(htmlspecialchars(filter_input(INPUT_POST, 'professional')));
if(UserDAO::create($user))
    header('location: ../view/sign-in.php');
else
    header('location: ../view/sign-up.php');
