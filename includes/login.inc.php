<?php


//check if the user got here by clicking on the login button
if (isset($_POST['login-submit'])) {

    require 'dbhandler.inc.php';

    $email = $_POST['email'];
    $password = $_POST['pwd'];

    
} else {
    header("Location: ../index.php?error=url");
    exit();
}
