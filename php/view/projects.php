<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WebReq - Requirements Management System</title>
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/estilo.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">WebReq</a>
                </div>
                <div class="collapse navbar-collapse" id="barra">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="projects.html">Projects</a></li>
                        <li><a href="users.html">Users</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="about.html">About</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">    
                        <li><a href="settings.html">Settings</a></li>
                        <li><a href="index.html">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container margin-bottom-medium">
            <h1 class="text-center margin-bottom-medium">Projects</h1>
            <div class="btn-toolbar margin-bottom-small" role="toolbar">
                <a href="edit-project.html" class="btn btn-default">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add
                </a>
                <button class="btn btn-default" type="button">
                    <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Remove
                </button>
                <button class="btn btn-default" type="button">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
                </button>
                <button class="btn btn-default" type="button">
                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> View
                </button>
            </div>
            <table class="table table-bordered">
                <tr>
                    <th>Project name</th>
                    <th>Start date</th>
                    <th>End date</th>
                    <th>Collaborators</th>
                </tr>
                <tr>
                    <td><a href="requirements.html">WebReq</a></td>
                    <td>2 May 2017</td>
                    <td>8 August 2017</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td><a href="requirements.html">Bi-Moto SGV</a></td>
                    <td>1 August 2016</td>
                    <td>15 December 2017</td>
                    <td>5</td>
                </tr>
            </table>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>