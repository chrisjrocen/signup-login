<?php

if (isset($_POST['login-submit'])) {

    require 'dbhandler.inc.php';

    $email1 = $_POST['email'];
    $password = $_POST['pwd'];

    //check if the fields are not empty 
    if (empty($email1) || empty($password)) {
        header("Location: ../index.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE email=? OR first_name=?;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $email1, $email1);
            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {

                $pwdCheck = password_verify($password, $row['pwd']);
                if ($pwdCheck == false) {
                    header("Location: ../index.php?error=wrongpassword");
                    exit();
                } else if ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['id'];
                    $_SESSION['firstName'] = $row['first_name'];
                    $_SESSION['email'] = $row['email'];

                    header("Location: ../index.php?login=success");
                } else {
                    header("Location: ../index.php?error=wrongpassword");
                }
            } else {
                header("Location: ../index.php?error=nouser");
            }
        }
    }
} else {
    header("Location: ../index.php");
    exit();
}
