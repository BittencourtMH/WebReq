<?php

include '../model/persistence/UserDAO.php';

session_start();
$user=new User();
$user->setUsername($_SESSION['user']);
$user->setName(trim(htmlspecialchars(filter_input(INPUT_POST, 'name'))));
$user->setEmail(trim(htmlspecialchars(filter_input(INPUT_POST, 'email'))));
$user->setLanguage(filter_input(INPUT_POST, 'language'));
$user->setTimeZone(htmlspecialchars(filter_input(INPUT_POST, 'time-zone')));
$user->setEducational(htmlspecialchars(filter_input(INPUT_POST, 'educational')));
$user->setProfessional(htmlspecialchars(filter_input(INPUT_POST, 'professional')));
if(UserDAO::update($user))
    header('location: ../view/users.php');
else
    header('location: ../view/settings.php');
