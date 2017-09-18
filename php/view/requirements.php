<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WebReq - Requirements Management System</title>
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="../css/estilo.css" rel="stylesheet">
        <script type="text/javascript" src="../js/scripts.js"></script>
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
                    <a class="navbar-brand" href="index.php">WebReq</a>
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
            <h1 class="text-center margin-bottom-medium">Requirements</h1>
            <div class="btn-toolbar margin-bottom-small" role="toolbar">
                <a href="edit-requirement.html" class="btn btn-default">
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
            <table class="table table-bordered" id="requirements">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Version</th>
                    <th>Status</th>
                    <th>Priority</th>
                    <th>Date modified</th>

                </tr>
                <tr id="1">
                    <td>RF-1</td>
                    <td><a href="edit-requirement.html">Sign in</a></td>
                    <td>1.0</td>
                    <td>Finished</td>
                    <td>High</td>
                    <td>2 May 2017</td>
                </tr>
                <tr id="2">
                    <td>RF-2</td>
                    <td><a href="edit-requirement.html">Sign out</a></td>
                    <td>1.0</td>
                    <td>Finished</td>
                    <td>High</td>
                    <td>2 May 2017</td>
                </tr>
            </table>
        </div>
        <script type="text/javascript" src="../jquery/jquery-3.2.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/controller-requirements.js"></script>
    </body>
</html>