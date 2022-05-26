<?php
session_start();
?>
<header>
<nav class="nav-header-main">
    
    </nav>

    <ul>
        <li> <a href="signup.php">Sign up</a></li>
        <li> <a href="login.php">Log in</a></li>

    </ul>

    <form action="includes/logout.inc.php" method="post">
        <button type="submit" name="logout-submit">Log out</button>
    </form>

    <?php
        if (isset($_SESSION['id'])) {
            echo "<p>You are logged in as </p>";
        } else
            echo "<p>You are logged out</p>";
        ?>

</header>