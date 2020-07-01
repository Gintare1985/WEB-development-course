<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP12 homework</title>
	</head>

	<body>

		<form action="<?php $_PHP_SELF ?>" method="post">
			<input name="first_name" type="text">
			<input name="l_name" type="text">
			<input type="submit">
		</form>

		<?php

		$first_name = $_POST['first_name'] ?? '';
		$last_name = $_POST['l_name'] ?? '';

		if ($first_name !== '' && $last_name !== '') {
			echo "Sveiki, jūsų vardas $first_name ir pavardė $last_name.";
		} else {
			echo "Įveskite savo vardą ir pavardę.";
		}

		?>

	</body>
</html>
