<?php
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
require_once $root.'controller/ControllerUsers.php';
session_start();
if($section!== 'unlogged' && !isset($_SESSION['user']))
    header('location: sign-in.php');
$user=isset($_SESSION['user']) ? ControllerUsers::get($_SESSION['user']) : null;
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
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>WebReq - Requirements Management System</title>
        <link rel="stylesheet" href="../../../../third-party/bootstrap/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="../../../css/style.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="<?php echo ($user=== null ? 'sign-in.php?lang='.$language : 'projects.php')?>">WebReq</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <div class="navbar-nav mr-auto">
                    <?php
                    if($user!== null)
                    {
                        $projects=$section=== 'projects' ? 'active' : '';
                        $users=$section=== 'users' ? 'active' : '';
                        echo '<a class="nav-link '.$projects.'" href="projects.php">'.PROJECTS.'</a>';
                        echo '<a class="nav-link '.$users.'" href="users.php">'.USERS.'</a>';
                    }
                    ?>
                    <a class="nav-link" href="#"><?php echo HELP?></a>
                    <a class="nav-link" href="about.php"><?php echo ABOUT?></a>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo ($user=== null ? ucfirst(Locale::getDisplayLanguage($language, $language)) : $user->getUsername())?></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown">
                            <?php
                            if($user=== null)
                            {
                                $english=$language=== 'en' ? ' active' : '';
                                $spanish=$language=== 'es' ? ' active' : '';
                                $portuguese=$language=== 'pt' ? ' active' : '';
                                echo '<a class="dropdown-item'.$english.'" href="?lang=en">English</a>';
                                echo '<a class="dropdown-item'.$spanish.'" href="?lang=es">Español</a>';
                                echo '<a class="dropdown-item'.$portuguese.'" href="?lang=pt">Português</a>';
                            }
                            else
                            {
                                echo '<a class="dropdown-item" href="user-profile.php">'.SETTINGS.'</a>';
                                echo '<a class="dropdown-item" href="sign-in.php?lang='.$language.'">'.SIGN_OUT.'</a>';
                            }
                            ?>
                        </div>
                    </li>
                </ul>';
            </div>
        </nav>