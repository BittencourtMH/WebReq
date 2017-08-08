<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WebReq - Requirements Management System</title>
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="estilo.css" rel="stylesheet">
    </head>
    <body><nav class="navbar navbar-inverse navbar-static-top">
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
            <h1 class="text-center margin-bottom-medium">Create project</h1>
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                <form method="POST" action="../controller/controle_projeto2.php">

                    <div class="form-group">
                        <label for="name">Project name</label>
                        <input class="form-control" id="name" type="text" placeholder="Project name" name="project_name">
                    </div>
                    <div class="form-group">
                        <label for="start-date">Start date</label>
                        <input class="form-control" id="start-date" type="date" name="start_date">
                    </div>
                    <div class="form-group margin-bottom-medium">
                        <label for="end-date">End date</label>
                        <input class="form-control" id="end-date" type="date" name="end_date">
                    </div>
                    <button class="btn btn-primary center-block" type="submit">Save</button>

                </form>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html> 