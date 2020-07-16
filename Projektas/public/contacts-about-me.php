<?php

	include('../app/config/database.php');
	include('../app/objects/contact-form.inc.php');

$database = new Database();
$db = $database->getConnection();

$messageOne = new Message($db);

//TODO:embed reCAPTCHA

if (isset($_POST['submit'])) {
	if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {
		$messageOne->name = trim($_POST['name']);
		$messageOne->email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
		$messageOne->message = htmlspecialchars(trim($_POST['message']));

//TODO: Test code if someoene changes it in html.

		if ($messageOne->createNewMessageItem()) {
			echo "<script>alert('Dėkojame už Jūsų žinutę. Netrukus su Jumis susisieksime.')</script>";
		} else {
			echo "<script>alert('Deja, Jūsų žinutė nebuvo gauta. Prašome pabandykite dar kartą.')</script>";
		}
	} else {
		echo "<script>alert('Prašau užpildykite visus laukelius.')</script>";
	}
}

	$pageTitle = 'Kontaktai';
	$customStylesLink = '<link href="../app/css/contacts-about-me-styles.css" rel="stylesheet">';

	include('../app/views/header.php');

?>

	<div id="main-content-wrapper">
		<div class="main-content">

			<div class="section-1">
				<h3>Apie mane</h3>
				<br>
				<img src="../app/images/about-me-1.jpg" alt="Olga Orlova nuotrauka" title="Esu Olga Orlova">
				<p>Esu Olga Orlova. Kineziterapiją baigiau 2000 m. Nuo tada atidariau savo privatų masažo kabinetą ir darau masažus tiek suaugusiems, tiek vaikams. Praktikoje naudoju holistinio masažo principus. Darydama masažą, žmogų laikau psichologinių ir fiziologinių veiksnių visuma. Kiekvienam masažas daromas unikaliai, priklausomai nuo žmogaus būklės. Klientų atsiliepimus rasite mano Facebook puslapyje.</p>
			</div>

			<div class="section-2">
				<h3>Bendraukime! Vieta Jūsų klausimams ir atsliepimams:</h3>
				<br>
				<div class="form-container">
					<form id="contact-form" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
						<p><input type="text" name="name" placeholder="Jūsų vardas" required autofocus></p>
						<p><input type="email" name="email" placeholder="Jūsų el.pašto adresas" required></p>
						<p><textarea placeholder="Jūsų atsiliepimas\ klausimas..." name="message" required></textarea></p>
						<p><button type="submit" name="submit" id="contact-form-submit">Siųsti</button></p>
					</form>
				</div>
			</div>

			<div class="section-3">
				<h3>Kontaktai</h3>
				<br>
				<div>Šiuo metu dirbu <span class="address">"Tvinksnis"</span> šeimos medicinos klinikoje.</div>
				<div>Priimami tik iš anksto užsiregistravę pacientai.</div>
				<br>
				<div class="work-time">Darbo laikas:</div>
				<div>Antradienis - Penktadienis:</div>
				<div>9.00 - 19.00 val.</div>
				<br>
				<div><span class="address">Galite susisiekti:</span></div>
				<div>tel. nr. <a href="tel:+37060615148">+370 606 15148</a> arba</div>
				<div>el.pašto adresu <a href="mailto:olga.orlova@gmail.com">olga.orlova@gmail.com</a></div>
				<br>
				<div id="facebook-site">
					<a href="https://www.facebook.com/Olgos.Masazai" target="_blank">Facebook puslapis</a>
				</div>
				<br>
				<div><span class="address">Adresas:</span> Ukmergės g. 283 B, Vilnius</div>
				<br>
				<div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9214.718992943082!2d25.228240742397944!3d54.73284778468547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd917346960f67%3A0x2ea84e6fdfe0f9cf!2sUkmerg%C4%97s%20g.%20283b%2C%20Vilnius%2006313!5e0!3m2!1sen!2slt!4v1593857289757!5m2!1sen!2slt" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="3"></iframe>
				</div>
			</div>
		</div>
	</div>

<?php include('../app/views/footer.php'); ?>

