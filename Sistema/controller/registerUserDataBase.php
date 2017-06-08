<!DOCTYPE html>
<html>
<head>
	<title></title>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

<?php

include '../model/class/classUser.php';
	$UserNow = new User();
    $UserNow->setName(htmlspecialchars($_POST['name']));
    $UserNow->setUsername(htmlspecialchars($_POST['username']));
    $UserNow->setYourOcupation(htmlspecialchars($_POST['yourOcupation']));
    $UserNow->setYourGraduation(htmlspecialchars($_POST['yourGraduation']));
    $UserNow->setEmail(htmlspecialchars($_POST['email']));
    $UserNow->setPassword(htmlspecialchars($_POST['password']));
    $RPassword=htmlspecialchars($_POST['rPassword']);

    if($UserNow->getPassword() != $RPassword){

      header("Location: ../view/signup/signupSCREEN.php?wrongPW=1");

    }


  ?>

</body>
</html>