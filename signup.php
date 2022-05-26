<?php
/**
 * 
 * @Package category
 * 
 */
require "header.php";

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
    </head>
    <body>

    <form class="myform" action="includes/signup.inc.php" method="post">
        <input type="text" name="firstname" placeholder="First name">
        <input type="text" name="surname" placeholder="Other name">
        <input type="email" name="email" placeholder="E-mail">
        <input type="password" name="pwd" placeholder = "**********">
        <button type="submit" name="signup-submit">Sign up</button>
    </form>

        
    </body>
</html>