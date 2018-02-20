<!DOCTYPE html>
<html lang="<?php echo $language?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $title?> - WebReq</title>
        <link rel="stylesheet" href="../../../../third-party/bootstrap/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="<?php echo ($user=== null ? "user-sign-in.php?lang=$language" : 'projects.php')?>">WebReq</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <div class="navbar-nav mr-auto">
                    <?php
                    if($user!== null)
                    {
                        $projects=$section=== 'projects' ? ' active' : '';
                        $users=$section=== 'users' ? ' active' : '';
                        echo "<a class='nav-link$projects' href='projects.php'>".PROJECTS.'</a>';
                        echo "<a class='nav-link$users' href='users.php'>".USERS.'</a>';
                    }
                    ?>
                    <a class="nav-link" href="#"><?php echo HELP?></a>
                    <a class="nav-link" href="about.php?lang=<?php echo $language?>"><?php echo ABOUT?></a>
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
                                echo "<a class='dropdown-item$english' href='?lang=en'>English</a>";
                                echo "<a class='dropdown-item$spanish' href='?lang=es'>Español</a>";
                                echo "<a class='dropdown-item$portuguese' href='?lang=pt'>Português</a>";
                            }
                            else
                            {
                                $settings=$section=== 'settings' ? ' active' : '';
                                echo "<a class='dropdown-item$settings' href='user-profile.php'>".SETTINGS.'</a>';
                                echo "<a class='dropdown-item' href='user-sign-in.php?lang=$language'>".SIGN_OUT.'</a>';
                            }
                            ?>
                        </div>
                    </li>
                </ul>';
            </div>
        </nav>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo ($user=== null ? "user-sign-in.php?lang=$language" : 'projects.php')?>"><?php echo HOME?></a></li>
                    <?php
                    foreach($nav as $link=> $title)
                        if($link=== '')
                            echo "<li class='breadcrumb-item active' aria-current='page'>$title</li>";
                        else
                            echo "<li class='breadcrumb-item'><a href='$link'>$title</a></li>";
                    ?>
            </ol>
        </nav>