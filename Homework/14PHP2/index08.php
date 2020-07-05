<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP08 homework</title>
	</head>

	<body>
		<?php
			$temperature = [4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];

			/*foreach ($temperature as $temp) {
				$sum +=$temp;
				echo $sum;
			}*/

			function averageTemperature($temperature)
			{
				$sumOfAllTemperatures = array_sum($temperature);
				$average = $sumOfAllTemperatures / count($temperature);
				$averageResultRounded = round($average);
				echo $averageResultRounded;
			}

			averageTemperature($temperature);
			echo '<br><br>';

			rsort($temperature);
			print_r($temperature);
			echo '<br><br>';

			echo 'Five highest temperatures in april in Vilnius.';
			echo '<br>';
			$fiveHighestTemp = array_slice($temperature, 0, 5);
		 	print_r ($fiveHighestTemp);
			echo '<br><br>';

			echo 'Five lowest temperatures in april in Vilnius.';
			echo '<br>';
			$fiveLowestTemp = array_slice($temperature, -5, 5);
		 	print_r ($fiveLowestTemp);


		?>

	</body>
</html>
