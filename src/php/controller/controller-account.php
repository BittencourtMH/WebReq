<?php

include '../model/persistence/UserDAO.php';

session_start();
$username=$_SESSION['user'];
$password=User::encryptPassword(htmlspecialchars(filter_input(INPUT_POST, 'password')));
if(UserDAO::delete($username, $password))
    include 'controller-sign-out.php';
else
    header("location: ../view/account.php");