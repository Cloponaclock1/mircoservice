<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
	<h1>Homepage</h1>
	<?php if (isset($_SESSION["user_id"])): ?>
		<b>You are logged in </b>
		<p> <a href="logout.php">Log Out</a>

		<?php else: ?>

			<a href="login.php">Log in</a>

			<?php endif; ?>
</body>
</html>