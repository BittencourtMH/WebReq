<?php

include '../model/persistence/UserDAO.php';

$username=htmlspecialchars(filter_input(INPUT_POST, 'username'));
$password=User::encryptPassword(htmlspecialchars(filter_input(INPUT_POST, 'password')));
if(UserDAO::signIn($username, $password)):
    session_start();
    $_SESSION['user']=$username;
    header("location: ../view/users.php");
else:
    header("location: ../view/sign-in.php");
endif;