<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <?php
        session_start();
        echo '<br> Data send error <br>';
        if (isset($_SESSION['ja_existe_no_banco'])) {
            echo "There is already a record of <b>".$_SESSION['ja_existe_no_banco']."</b> in the database";
            $_SESSION['ja_existe_no_banco']=null;
           session_destroy(); 
        }
        ?>
    </body>
</html>
