<?php

/**
 * Login page
 *
 * @Package category
 */
require 'header.php';

?>

<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
</head>

<body>

	<form class="myform" action="includes/login.inc.php" action="post">
		<input type="text" name="mailuid" placeholder="E-mail">
		<input type="password" name="pwd">
		<button type="submit" name="login-submit" >Login</button>
	</form>

</body>

</html>
