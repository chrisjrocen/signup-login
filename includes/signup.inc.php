<?php

/**
 * Sign up handler
 */
require 'dbhandler.inc.php';

if ( isset( $_POST['signup-submit'] ) ) {

	$firstname = $_POST['firstname'];
	$othername = $_POST['surname'];
	$email = $_POST['email'];
	$password = $_POST['pwd'];

	//insert into db.
	$sql = "INSERT INTO users (first_name, surname, email, pwd) VALUES (?,?,?,?)";
	$stmt = mysqli_stmt_init($conn);

	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ../signup.php?error=sqlerror");
		exit();
	} else {

		$hashedpwd = password_hash($password, PASSWORD_DEFAULT);

		mysqli_stmt_bind_param($stmt, "ssss", $firstname, $othername, $email, $hashedpwd);
		mysqli_stmt_execute($stmt);
		header("Location: ../signup.php?signup=success");
	}

	mysqli_stmt_close($stmt);
	mysqli_close($conn);
} else {
	header("Location: ../signup.php");
	exit();
}
