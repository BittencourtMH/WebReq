<?php

class Page
{
    public static function header($pagina)
    {
        echo '<!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <title>WebReq - Requirements Management System</title>
                <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
                <link href="css/estilo.css" rel="stylesheet">
            </head>
            <body>
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="/webreq">WebReq</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/webreq/php/view/projects.php">Projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/webreq/php/view/users.php">Users</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Help</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/webreq/php/view/about.php">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/webreq/php/view/settings.php">Settings</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/webreq/php/view/login.php">Sign out</a>
                            </li>
                        </ul>
                    </div>
                </nav>';
    }
    
    public static function footer($pagina)
    {
        echo '<script src="jquery/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="popper/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
                <script src="bootstrap/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
                <script type="text/javascript" src="js/controller-login.js"></script>
            </body>
        </html>';
    }
}
