


var chechYourAgeButton = document.getElementById('your-age-button');
chechYourAgeButton.addEventListener('click', checkYourAge);

function checkYourAge() {
	var yourAge = document.getElementById('your-age').value;
	if (yourAge >= 18) {
		alert('Jūs galite užeiti į šią svetainę');
		console.log(yourAge);
	} else {
		alert('Jūs negalite užeiti į šią svetainę');
		console.log(yourAge);
	}
}
