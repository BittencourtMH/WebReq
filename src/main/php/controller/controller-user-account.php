<?php
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
require_once $root.'model/persistence/UserDAO.php';
session_start();
$id=$_SESSION['user'];
$password=User::encryptPassword(htmlspecialchars(filter_input(INPUT_POST, 'password')));
if(UserDAO::delete($id, $password))
    header('location: ../view/pages/user-sign-in.php');
else
    header('location: ../view/pages/user-account.php');
