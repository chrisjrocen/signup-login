<?php

/**
 * Doc comment
 *
 * @package category
 */

require 'header.php';

require_once 'includes/db.php';
// if we need access to the databse, we just need to refer to $conn.


if ( isset( $_SESSION['id'] ) ) {
	
	// Get first name of the logged in user
	$userLogged = $_SESSION['first'];

	echo "You are logged in as " . $userLogged ;
} else {
	echo "You are not logged in";
}

?>
<main>
	<section class="section-default">
		<?php

		$sql = "SELECT * FROM users;";
		$result = mysqli_query($conn, $sql);
		$logged = array();

		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				$logged[] = $row;
			}
		}

		//print_r($logged);

		echo "<h2>The people logged in are:</h2>";

		?>
		<ul>

			<?php

			//displaying a multidimensional array.
			foreach ($logged as $key => $person) {
				echo "<li>" . $person['first_name'] . "</li>";
			}
			?>

		</ul>
	</section>
	<section>
		<form action="uploads.php" method="POST" enctype="multipart/form-data">
			<input type="file" name="file">
			<button type="submit" name="upload-submit">Upload file</button>
		</form>
	</section>
</main>
