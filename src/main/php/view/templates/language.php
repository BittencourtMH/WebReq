<?php
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
require_once $root.'controller/ControllerCollaborator.php';
require_once $root.'controller/ControllerProject.php';
require_once $root.'controller/ControllerRequirement.php';
require_once $root.'controller/ControllerTimeZone.php';
require_once $root.'controller/ControllerUser.php';
session_start();
if($section!== 'unlogged' && !isset($_SESSION['user']))
    header('location: user-sign-in.php');
$user=isset($_SESSION['user']) ? ControllerUser::get($_SESSION['user']) : null;
if($user)
    $language=$user->getLanguage();
else
{
    $language=htmlspecialchars(filter_input(INPUT_GET, 'lang'));
    if($language!== 'en' && $language!== 'es' && $language!== 'pt')
        $language='en';
}
require_once $root.'view/text/'.$language.'.php';
?>