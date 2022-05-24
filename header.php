<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="description" content="description example" />
    <meta name="viewport" content="width=content-width, initial scale=1" />
    <title></title>
    <link type="text/css" rel="stylesheet" href="styles/styles.css" />
</head>

<body>
    <header>
        <nav class="nav-header-main">

                <!-- Simple nav-->
                <ul>
                    <li><a href="#home">HOME</a></li>
                    <li><a href="#about">ABOUT</a></li>
                </ul>

                <!--Login form-->
                <form class="myform" action="includes/login.inc.php" action="post">
                    <input type="email" name="email" placeholder="E-mail">
                    <input type="password" name="pwd">
                    <input type="button" name="login-submit" value="Login">
                </form>

                <!--signup form-->
                <form class="myform" action="includes/signup.inc.php" method="post">
                    <input type="text" name="firstname" placeholder="First name">
                    <input type="text" name="surname" placeholder="Other name">
                    <input type="email" name="email" placeholder="E-mail">
                    <input type="password" name="pwd" placeholder="**********">
                    <input type="button" name="signup-submit" value="Sign up">
                </form>

                <!--Logout button-->
                <form class="myform" action="includes/logout.inc.php" method="post">
                    <input type="button" name="logout-submit" value="Log out">
                </form>

        </nav>
    </header>