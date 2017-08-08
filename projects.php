<!DOCTYPE html>
<?php session_start(); ?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WebReq - Requirements Management System</title>
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="estilo.css" rel="stylesheet">
    </head>
    <body>
        <?php
        if (isset($_SESSION['seiLa'])) {
            echo "<script> alert('User not in Registers'); </script>";
            $_SESSION['seiLa'] = null;
        }
        $i=0;
        $_SESSION[$i]="";
        ?>
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" >WebReq</a>
                </div>
                <div class="collapse navbar-collapse" id="barra">
                    <ul class="nav navbar-nav">
                        <li><a href="projects.php">Projects</a></li>
                        <li><a href="users.php">Users</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="about.html">About</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">	
                        <li class="active"><a href="settings.html">Settings</a></li>
                        <li><a href="../index.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container margin-bottom-medium">
            <h1 class="text-center margin-bottom-medium">Projects</h1>
            <div style="margin-bottom: 15px;">
                <a href="include-users.php">
                    <button type="button" class="btn btn-default btn-lg">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> add
                    </button>
                </a>
                <button type="button" class="btn btn-default btn-lg">
                        <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> remove
                    </button>

            </div>
            <table class="table table-bordered">
                <tr>
                    <th>Project name</th>
                    <th>Start date</th>
                    <th>End date</th>
                </tr>
                
                
                <?php include '../controller/controle_tabela_projetos.php';
                writeAll2();
                ?>
                
            </table>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>