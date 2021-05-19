<?php
	$pageTitle = 'Paslaugos ir kainos';
	$customStylesLink = '<link href="../app/css/massages-and-prices-styles.css" rel="stylesheet">';

	include('../app/views/header.php');
?>

<div id="main-content-wrapper">
	<div class="main-content">

		<div class="section-1">
			<h3>Suaugusiųjų masažai</h3>
			<img src="../app/images/adults-massage-2.jpg" alt="Suaugusiųjų masažas">
			<p>Suaugusiųjų masažas gali būti tiek nugaros srities, tiek viso kūno. Priklausomai nuo kliento pageidavimų, būklės atliekamas aktyvinantis, relaksacinis arba limfodrenažinis masažas.</p>
		</div>

		<div class="section-2">
			<h3>Nėščiųjų masažai</h3>
			<img src="../app/images/pregnant-massage-2.jpg" alt="Nėščiųjų masažas">
			<p>Nėščiosioms atliekamo masažo pobūdis priklauso nuo individualios būklės, nėštumo trukmės ir nėščiosios būklės. Masažas gali apimti tik nugaros sritį, arba visą kūną. Nėščiosioms atliekamas masažas gulint ant šono.</p>
		</div>

		<div class="section-3">
			<h3>Vaikų/kūdikių masažai</h3>
			<img src="../app/images/children-massage-4-1.jpg" alt="Vaikų/kūdikių masažas">
			<p>Vaikų ir kūdikių masažai yra trumpesni nei suaugusiųjų. Rekomenduojamas viso kūno, bet gali būti tik nugarytės masažas. Masažo pobūdis priklauso nuo mažojo kliento būklės ir nusiskundimų.</p>
		</div>

		<div class="section-4">
			<div>
				<h3>Kainos</h3>
				<br>
				<table id="prices-list">
					<tr>
						<th>Masažas</th>
						<th>Trukmė</th>
						<th>Kaina</th>
					</tr>
					<tr>
						<td>Suaugusiųjų nugaros masažas</td>
						<td>30 min</td>
						<td>20 &euro;</td>
					</tr>
					<tr>
						<td>Suaugusiųjų viso kūno masažas</td>
						<td>60 min</td>
						<td>35 &euro;</td>
					</tr>
					<tr>
						<td>Nėščiųjų nugaros masažas</td>
						<td>30 min</td>
						<td>20 &euro;</td>
					</tr>
					<tr>
						<td>Nėščiųjų nugaros masažas</td>
						<td>30 min</td>
						<td>20 &euro;</td>
					</tr>
					<tr>
						<td>Vaikų/kūdikų masažas</td>
						<td>20 min</td>
						<td>10 &euro;</td>
					</tr>
					<tr>
						<td>Vaikų/kūdikų masažas</td>
						<td>40 min</td>
						<td>20 &euro;</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

<?php include('../app/views/footer.php'); ?>

