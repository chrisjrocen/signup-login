<?php

require "header.php";

include_once 'includes/db.php';
//if we need access to the databse, we just need to refer to $conn.

?>

<main class="wrapper-main">
        <section class="section-default">
            <?php
            if (isset($_SESSION['userId'])) {
                echo "<p>You are logged in</p>";
            } else
                echo "<p>You are logged out</p>"
            ?>
        </section>
</main>