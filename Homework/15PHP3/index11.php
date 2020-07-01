<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP11 homework</title>
	</head>

	<body>

		<form action="<?php $_PHP_SELF ?>" method="post">
			<input name="rect_height" type="number">
			<input name="rect_width" type="number">
			<input type="submit">
		</form>

		<?php

		$rect_height = $_POST['rect_height'] ?? '';
		$rect_width = $_POST['rect_width'] ?? '';

		function rectangleArea($rect_height, $rect_width)
			{
				$rectangleAreaResult = $rect_height * $rect_width;
				echo "Stačiakampio plotas: $rectangleAreaResult" ;
			}

		rectangleArea($rect_height, $rect_width);

		?>

	</body>
</html>
