<html>
    <head>
        <title>title</title>

        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <?php session_start(); ?>
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
            <h1 class="text-center margin-bottom-medium">Create project</h1>
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                <form name="form2" action="#" method="post">
                    <div class="form-group">
                        <label for="name">Add users</label>
                        <input class="form-control" type="text" placeholder="Search and add users to your project" name="username">
                        <button class="btn btn-default pull-right" type="submit">Add</button>
                    </div>
                </form>
                <?php include '../model/User.php'; ?>
                <?php
                $host = "localhost";
                $user = "root";
                $pass = "";
                $db = "registers";
                $conexao = @mysql_connect($host, $user, $pass) or die(mysql_error());
                mysql_select_db($db) or die(mysql_error());
                ?>
                <?php
                if (isset($_POST['username']) == false) {
                    session_destroy();
                    session_start();
                }

                if (isset($_SESSION['nomes']) === false) {
                    $_SESSION['nomes'] = array();
                } else if (isset($_POST['username']) && $_POST['username'] != "") {
                    $username = $_POST['username'];
                    $consulta_sql = mysql_query("SELECT * FROM users WHERE username = '$username'");
                    if (mysql_fetch_row($consulta_sql) > 0) {

                        $ja_ta_ali = false;
                        foreach ($_SESSION['nomes'] as $value) {
                            if ($value == $_POST['username']) {
                                $ja_ta_ali = true;
                                break;
                            }
                        }

                        if ($ja_ta_ali === false) {
                            array_push($_SESSION['nomes'], $_POST['username']);
                        }

                        foreach ($_SESSION['nomes'] as $value) {
                            echo "<br> $value  </br>";
                        }
                    } else {
                        if (isset($_SESSION['nomes']) === true) {


                            foreach ($_SESSION['nomes'] as $value) {

                                echo "<br> $value <br> ";
                            }
                        }
                    }
                }
                ?>    
                
                <form method="post" action="../view/edit-project.php">
                   <?php $_SESSION['projeto1']=$_SESSION['nomes']; ?>
                    <div style="margin-top: 100px">
                        <button class="btn btn-success pull-right" type="submit">Finish</button>
                    </div>
                </form>

            </div>
        </div>

    </body>
</html>
