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
        <div class="container">
            <h1 class="text-center margin-bottom-medium">Edit requirement</h1>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <form name="formRequirement" action="../php/controller-requirement.php" method="post">
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select class="form-control" id="type" name="type">
                            <option>Functional requirement (FR)</option>
                            <option>Non-functional requirement (NFR)</option>
                            <option>Organizational requirement (OR)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="number">Number</label>
                        <p class="form-control-static" id="number">1</p>
                    </div>
                    <div class="form-group" id="form-name">
                        <label class="control-label" for="name">Requirement name</label>
                        <input class="form-control" id="name" name="name" type="text" placeholder="Requirement name">
                        <span class="help-block" id="help-name"></span>
                    </div>
                    <div class="form-group">
                        <label for="version">Version</label>
                        <select class="form-control" id="version" name="version">
                            <option>1.2.4</option>
                            <option>1.3.0</option>
                            <option>2.0.0</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option>Submitted</option>
                            <option>Pending</option>
                            <option>Finished</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="priority">Priority</label>
                        <select class="form-control" id="priority" name="priority">
                            <option>High</option>
                            <option selected>Medium</option>
                            <option>Low</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="complexity">Complexity</label>
                        <select class="form-control" id="complexity" name="complexity">
                            <option>High</option>
                            <option selected>Medium</option>
                            <option>Low</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="solicitor">Solicitor</label>
                        <input class="form-control" id="solicitor" name="solicitor" type="text" placeholder="Solicitor">
                    </div>
                    <div class="form-group">
                        <label for="author">Author</label>
                        <p class="form-control-static" id="author">Marcelo Henrique Bittencourt (marcelohbittencourt)</p>
                    </div>
                    <div class="form-group">
                        <label for="date-created">Date created</label>
                        <p class="form-control-static" id="date-created">2 May 2017</p>
                    </div>
                    <div class="form-group">
                        <label for="date-modified">Date modified</label>
                        <p class="form-control-static" id="date-modified">16 June 2017</p>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="20" placeholder="Description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="notes">Notes</label>
                        <textarea class="form-control" id="notes" name="notes" rows="10" placeholder="Notes"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="dependencies">Dependencies</label>
                        <input class="form-control" id="dependencies" name="dependencies" type="text" placeholder="Dependencies"/>
                    </div>
                    <div class="form-group margin-bottom-medium">
                        <label for="attachments">Attachments</label>
                        <input id="attachments" type="file" name="attachments"/>
                    </div>
                    <button class="btn btn-primary center-block" id="save" type="submit">Save</button>
                </form>
            </div>
        </div>
        <script type="text/javascript" src="../jquery/jquery-3.2.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/controller-edit-requirement.js"></script>
    </body>
</html>