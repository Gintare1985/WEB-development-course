<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP04 homework</title>
</head>

<body>

	<?php
		$cities = ['Berlynas', 'Roma', 'Londonas'];
		$cities[] = 'Tokijas';

		print_r($cities);
		echo '<br><br>';

		$cities2 = [
			'tokijas' => 13.6,
			'vasingtonas' => 0.6,
			'maskva' => 11.5
		];

		print_r($cities2);
		echo '<br><br>';

		$cities2['londonas'] = 8.6;
		echo '<br><br>';

	?>
	<ul>
		<li>
			<?php echo $cities[1] ?>
		</li>
	</ul>

	<ul>
		<?php
			echo 'Gyventojų skaičius: ' . $cities2['tokijas'] . ' mln.';
		?>
	</ul>


</body>
</html>
