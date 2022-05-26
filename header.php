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
    <link type="text/css" rel="stylesheet" href="css/styles.css" />
</head>

<body>

    <header>
        <nav class="nav-header-main">

            <ul>
                <li> <a href="index.php">Home</a></li>
                <li> <a href="#">About</a></li>
                <li> <a href="signup.php">Sign up</a></li>
            </ul>

            <?php
        if (isset($_SESSION['id'])) {
            echo "<p>You are logged in as </p>";
        } else
            echo "<p>You are logged out</p>";
        ?>

            <a href="login.php" class="nav-button">Log in</a>
            <form action="includes/logout.inc.php" method="post">    
                <button class="nav-button" type="submit" name="logout-submit">Log out</button>
            </form>

        </nav>
    </header>