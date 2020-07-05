var yourFirstName;
var yourLastName;
var yourAge;
var yourEmail;
var yourPhoneNumber;
var yourChildAge;
var pregnancyWeeksNumber;

function getInputValueFromElementById(idName) {
	var inputObject = document.getElementById(idName);
	var inputValue = inputObject.value;
	return inputValue;
}

function checkYourAge() {
	var yourAge = getInputValueFromElementById('age');
	if (yourAge < 0) {
		alert('Prašau įveskite savo amžių!');
	}
}

checkYourAge();


var selectedChildMassageType = document.getElementsByClassName('massage-type-q1')[7];

var selectedBabyMassageType = document.querySelectorAll('.massage-type-q1')[8];


if (selectedChildMassageType === 'Vaikų masažas' || selectedBabyMassageType === 'Kūdikių masažas') {
	var visibleChildAge = document.querySelectorAll('td.child-age-info');
	visibleChildAge.style.display = 'block';
}

var selectedPregnantMassageType1 = document.getElementsByClassName('massage-type-q1')[5];

var selectedPregnantMassageType2 = document.getElementsByClassName('massage-type-q1')[6];

if (selectedPregnantMassageType1 === 'Nėščiųjų nugaros masažas' || selectedPregnantMassageType2 === 'Nėščiųjų viso kūno masažas') {
	var visiblePregnancyInfo1 = document.querySelectorAll('td.pregnancy-info-1');
	visiblePregnancyInfo1.style.display = 'block';

	var visiblePregnancyInfo2 = document.querySelectorAll('.pregnancy-info-2');
	visiblePregnancyInfo2.style.display = 'block';
}
