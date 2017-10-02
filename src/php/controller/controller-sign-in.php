<?php

include '../model/persistence/UserDAO.php';

$username=htmlspecialchars(filter_input(INPUT_POST, 'username'));
$password=hash('sha256', htmlspecialchars(filter_input(INPUT_POST, 'password')), true);
if(UserDAO::signIn($username, $password)):
    session_start();
    $_SESSION['user']=$username;
    header("location: ../view/projects.php");
else:
    header("location: ../view/sign-in.php");
endif;