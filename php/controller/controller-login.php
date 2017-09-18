<?php

include 'UserDAO.php';

UserDAO::login(htmlspecialchars($_POST['username']), htmlspecialchars($_POST['password']));
