<script src="../../../../third-party/jquery/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="../../../../third-party/popper/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="../../../../third-party/bootstrap/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php
if(isset($page))
{
    echo '<script type="text/javascript" src="../../../js/model/Project.js"></script>';
    echo '<script type="text/javascript" src="../../../js/model/Requirement.js"></script>';
    echo '<script type="text/javascript" src="../../../js/model/User.js"></script>';
    echo '<script type="text/javascript" src="../../../js/controller/controller.js"></script>';
    echo "<script type='text/javascript' src='../../../js/controller/controller-$page.js'></script>";
}
?>
</body>
</html>
