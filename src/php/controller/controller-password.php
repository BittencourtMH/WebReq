<?php

include '../model/persistence/UserDAO.php';

session_start();
$username=$_SESSION['user'];
$old_password=User::encryptPassword(htmlspecialchars(filter_input(INPUT_POST, 'old-password')));
$new_password=htmlspecialchars(filter_input(INPUT_POST, 'new-password'));
$new_password2=htmlspecialchars(filter_input(INPUT_POST, 'new-password2'));
if($new_password===$new_password2 && UserDAO::updatePassword($username, $old_password, User::encryptPassword($new_password)))
    header('location: ../view/users.php');
else
    header('location: ../view/password.php');