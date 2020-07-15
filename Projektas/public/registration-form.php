<?php

	include('../app/config/database.php');
	include('../app/objects/registration-form.inc.php');

	$database = new Database();
	$db = $database->getConnection();

	$registrationOne = new Registration($db);

	if (isset($_POST['submit'])) {

		print_r($_POST);

		if ($_POST['question1'] !== '0' && !empty($_POST['name']) && !empty($_POST['lname']) && !empty($_POST['phone'])) {

			if (!preg_match("/^[\+0-9]*$/", ($_POST['phone']))) {
				echo "<script>alert('Įveskite galiojantį telefono numerį.')</script>";
				header('Location: registration-form.php?phone=invalid');
				exit();
			} else {
				$registrationOne->telephone = trim($_POST['phone']);
			}

			$registrationOne->firstName = trim($_POST['name']);
			$registrationOne->lastName = trim($_POST['lname']);
			$registrationOne->massageType = trim($_POST['question1']);

			if (is_numeric($_POST['age'])) {
				if ($_POST['age'] > 0) {
					$registrationOne->age = trim($_POST['age']);
				}
			} else {
				echo "<script>alert('Patikslinkite savo amžių.')</script>";
				header('Location: registration-form.php?age=invalid');
				exit();
			}

			$registrationOne->email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);

			if (isset($_POST['registration_time'])) {
				$registrationOne->massageTime = trim($_POST['registration_time']);
			}

			$registrationOne->message = trim($_POST['contraindications']);
			$registrationOne->childAge = trim($_POST['child-age']);
			$registrationOne->pregnancyWeeks = trim($_POST['pregnancy-weeks']);


			if (isset($_POST['question-2'])) {
				$registrationOne->doctorPermission = trim($_POST['question-2']);
			}

			if ($registrationOne->createNewRegistrationItem()) {
				echo "<script>alert('Dėkojame už pateiktą registracijos formą. Netrukus su Jumis susisieksime.')</script>";
			} else {
				echo "<script>alert('Deja, Jūsų registracijos forma nebuvo gauta. Prašome pabandyti dar kartą.')</script>";
			}
		} else {
		echo "<script>alert('Norėdami užsiregistruoti masažui prašau užpildykite žvaigždute pažymėtus būtinus laukelius.')</script>";
	}
	}

	$pageTitle = 'Registracija';
	$customStylesLink = '<link href="../app/css/registration-form-styles.css" rel="stylesheet">';

	include('../app/views/header.php');
?>

	<div id="main-content-wrapper">
		<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
		<fieldset>
			<legend>Jūsų informacija:</legend>
			<br>

			<table class="main-info">
				<tr>
					<td class="reg-table">
						<label for="name">*Vardas:</label>
					</td>
					<td class="reg-table">
						<input type="text" id="name" name="name" required autofocus>
					</td>
				</tr>

				<tr>
					<td class="reg-table">
						<label for="lname">*Pavardė:</label>
					</td>
					<td class="reg-table">
						<input type="text" id="lname" name="lname" required>
					</td>
				</tr>

				<tr>
					<td class="reg-table">
						<label for="age">Amžius:</label>
					</td>
					<td class="reg-table">
						<input type="number" id="age" name="age">
					</td>
				</tr>

				<tr>
					<td class="reg-table">
						<label for="email">El.pašto adresas:</label>
					</td>
					<td class="reg-table">
						<input type="email" id="email" name="email">
					</td>
				</tr>

				<tr>
					<td class="reg-table">
						<label for="phone">*Telefono numeris:</label>
					</td>
					<td class="reg-table">
						<input type="tel" id="phone" name="phone" required>
					</td>
				</tr>
			</table>

		</fieldset>
		<br>
		<fieldset>
			<legend>Klausimai:</legend>
			<br>
			<label class="massage-type-q1" for="question1">*Koks masažas Jus domina?</label>
			<select class="massage-type-q1" name="question1" id="question1" required>
				<option value="0" class="massage-type-q1">--Pasirinkite masažo rūšį--</option>
				<option value="adults-massage-1" class="massage-type-q1">Suaugusiųjų nugaros masažas</option>
				<option value="adults-massage-2" class="massage-type-q1">Suaugusiųjų viso kūno masažas</option>
				<option value="pregnant-massage-1" class="massage-type-q1">Nėščiųjų nugaros masažas</option>
				<option value="pregnant-massage-2" class="massage-type-q1">Nėščiųjų viso kūno masažas</option>
				<option value="children-massage" class="massage-type-q1">Vaikų masažas</option>
				<option value="baby-massage" class="massage-type-q1">Kūdikių masažas</option>
			</select>
			<br>
			<br>
			<table>
				<tr>
					<td>Koks laikas tinkamiausias masažui? (galimi keli variantai)</td>
				</tr>
				<tr>
					<td>
						<input type="checkbox" id="morning-time" name="registration_time" value="morning_time">
						<label for="morning-time">9-12 val.</label>
					</td>
				</tr>
				<tr>
					<td>
						<input type="checkbox" id="day-time" name="registration_time" value="day_time">
						<label for="day-time">13-16 val.</label>
					</td>
				</tr>
				<tr>
					<td>
						<input type="checkbox" id="evening-time" name="registration_time" value="evening_time">
						<label for="evening-time">17-19 val.</label>
					</td>
				</tr>
				<tr>
					<td>
						<input type="checkbox" id="any-time" name="registration_time" value="any_time">
						<label for="any-time">Tinka bet kuris laikas nuo 9 iki 19 val.</label>
					</td>
				</tr>
			</table>
			<br>
			<label for="contraindications">Kokių turite sveikatos nusiskundimų, galinčių turėti įtakos masažui?</label>
			<br>

			<textarea id="contraindications" name="contraindications" cols="60" rows="6"></textarea>
			<br>

			<table class="additional-info">
				<tr class="child-age-info">
					<td class="child-age-info">
						<label for="child-age">Koks Jūsų vaiko amžius? (Jei pasirinkote vaiko/kūdikio masažą.)</label>
					</td>
					<td class="child-age-info">
						<input type="number" id="child-age" name="child-age">
					</td>
				</tr>
				<tr class="pregnancy-info-1">
					<td class="pregnancy-info-1">
						<label for="pregnancy-weeks">Kelinta nėštumo savaitė? (Jei pasirinkote nėščiosios masažą.)</label>
					</td>
					<td class="pregnancy-info-1">
						<input type="number" id="pregnancy-weeks" name="pregnancy-weeks">
					</td>
				</tr>
			</table>
			<br>

			<div class="pregnancy-info-2">Ar gydytojas Jums leidžia masažą? (Jei pasirinkote nėščiosios masažą.)</div>
				<label for="yes" class="pregnancy-info-2">Taip</label>
				<input type="radio" id="yes" name="question2" value="yes" class="pregnancy-info-2">
				<label for="no" class="pregnancy-info-2">Ne</label>
				<input type="radio" id="no" name="question2" value="no" class="pregnancy-info-2">
				<label for="maybe" class="pregnancy-info-2">Neklausiau</label>
				<input type="radio" id="maybe" name="question2" value="maybe" class="pregnancy-info-2">
			<br>
			<br>
			<br>
			<input type="submit" name="submit" id="submit-button" value="Siųsti">
		</fieldset>

	</form>
</div>

<?php include('../app/views/footer.php'); ?>

