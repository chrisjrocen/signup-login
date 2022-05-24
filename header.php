<?php
session_start()
?>
<header>
<nav class="nav-header-main">
    
    </nav>

    <form class="myform" action="includes/login.inc.php" action="post">
        <input type="email" name="email" placeholder="E-mail">
        <input type="password" name="pwd">
        <button type="submit" name="login-submit">Login</button>
    </form>
        <a href="signup.php">Sign up</a>


    <form action="includes/logout.inc.php" method="post">
        <button type="submit" name="logout-submit">Log out</button>
    </form>

    <?php
        if (isset($_SESSION['userId'])) {
            echo "<p>You are logged in</p>";
        } else
            echo "<p>You are logged out</p>"
        ?>

</header>