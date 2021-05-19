<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
		<title><?php echo $pageTitle; ?> | Olgos masažai</title>
		<link href="../app/css/main-styles.css" rel="stylesheet">
		<?php echo $customStylesLink; ?>
	</head>

	<body>
		<div id="whole-page-container">

			<div id="heading">
				<h1><a href="index.php" target="_self" class="website-heading">Olgos masažai</a></h1>
				<h2>"Jūsų sveikata - mano tikslas!"</h2>
			</div>

	<!-- TODO: burger meniu for very small resolution -->
			<div id="navigation">
				<div>
					<a href="massages-and-prices.php" target="_self" class="navigation-items">Paslaugos</a>
				</div>
				<div>
					<a href="registration-form.php" target="_self" class="navigation-items">Registracija</a>
				</div>
				<div>
					<a href="contacts-about-me.php" target="_self" class="navigation-items">Kontaktai</a>
				</div>
			</div>
