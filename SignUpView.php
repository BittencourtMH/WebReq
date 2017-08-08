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
    <body>
        <?php
        if (isset($_SESSION['ja_cadastrado'])) {
            $name = $_SESSION['ja_cadastrado'];
            echo "<script>alert(' $name already registered ')</script>";
        }
        ?>
        <script>
            function validar2() {
                var username = form1.username.value;
                var password = form1.password.value;
                var name = form1.name.value;
                if (username == "") {
                    alert("username is void");
                    return false;
                }
                if (password == "") {
                    alert("password is void");
                    return false;
                }
                if (name == "") {
                    alert("name is void");
                    return false;
                }
            }
        </script>

        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../index.php">WebReq</a>
                </div>
                <div class="collapse navbar-collapse" id="barra">
                    </div>
            </div>
        </nav>
        <div class="container margin-bottom-medium">
            <h1 class="text-center margin-bottom-medium">Sign Up user</h1>
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                <form name="form1" action="../controller/Controller_SignUp.php" method="post" >

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input class="form-control" id="username" type="text" placeholder="Username" name="username">
                    </div>
                    <div class="form-group margin-bottom-medium">
                        <label for="name">Name</label>
                        <input class="form-control" id="name" type="text" placeholder="Name" name="name">
                    </div>
                    <div class="form-group margin-bottom-medium">
                        <label for="name">Password</label>
                        <input class="form-control" id="password" type="password" placeholder="Password" name="password">
                    </div>
                    <button class="btn btn-primary center-block" type="submit" onclick="return validar2()">Save</button>
                </form>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>