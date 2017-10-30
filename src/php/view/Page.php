<?php

class Page
{
    public static function header($page)
    {
        session_start();
        if($page!== 'unlogged' && !isset($_SESSION['user']))
            header('location: sign-in.php');
        echo '<!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                    <title>WebReq - Requirements Management System</title>
                    <link href="../../third-party/bootstrap/css/bootstrap.min.css" rel="stylesheet">
                    <link href="../../css/style.css" rel="stylesheet">
                </head>
                <body>
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <a class="navbar-brand" href="sign-in.php">WebReq</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse">
                            <ul class="navbar-nav mr-auto">';
        if($page!== 'unlogged'):
            echo '<li class="nav-item">
                    <a class="nav-link';
            if($page=== 'projects')
                echo ' active';
            echo '" href="projects.php">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link';
            if($page=== 'users')
                echo ' active';
            echo '" href="users.php">Users</a>
                </li>';
        endif;
        echo '<li class="nav-item">
                    <a class="nav-link" href="#">Help</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
            </ul>';
        if($page!== 'unlogged')
        {
            echo '<ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link';
            if($page==='settings')
                echo ' active';
            echo '" href="profile.php">Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../controller/controller-sign-out.php">Sign out</a>
                    </li>
                </ul>';
        }
        echo '</div>
            </nav>';
    }
    public static function footer($page)
    {
        echo '<script src="../../third-party/jquery/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                    <script src="../../third-party/popper/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
                    <script src="../../third-party/bootstrap/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
                    <script type="text/javascript" src="../../js/controller-'.$page.'.js"></script>
                </body>
            </html>';
    }
    public static function settings($page)
    {
        echo '<h1 class="text-center margin-top-small">Settings</h1>
            <nav class="nav nav-pills justify-content-center margin-top-small margin-bottom-small">
                <a class="nav-link';
        if($page==='profile')
            echo ' active';
        echo '" href="profile.php">Profile</a>
            <a class="nav-link';
        if($page==='password')
            echo ' active';
        echo '" href="password.php">Password</a>
            <a class="nav-link';
        if($page==='account')
            echo ' active';
        echo '" href="account.php">Account</a>
            </nav>';
    }
}
