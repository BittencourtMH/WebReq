<?php
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
require_once $root.'model/persistence/UserDAO.php';
session_start();
$id=$_SESSION['user'];
$old_password=User::encryptPassword(htmlspecialchars(filter_input(INPUT_POST, 'old-password')));
$new_password=htmlspecialchars(filter_input(INPUT_POST, 'new-password'));
$new_password2=htmlspecialchars(filter_input(INPUT_POST, 'new-password2'));
if($new_password===$new_password2 && UserDAO::updatePassword($id, $old_password, User::encryptPassword($new_password)))
    header('location: ../view/pages/users.php');
else
    header('location: ../view/pages/user-password.php');
