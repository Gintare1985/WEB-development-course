var yourName;
var yourAge;
var yourNameLength;
var counter;




yourName = prompt ('What is your name?');
yourNameLength = yourName.length;


if (yourNameLength < 3) {
	alert ('Your name contains less than 3 symbols. Please enter your full first name');
	console.log('Prompt name value >>' + yourName);
} else {
	document.getElementById('your-name').innerHTML = yourName;
}




yourAge = prompt ('What is your age?');

if (yourAge < 18){
	alert ('Only aduls can visit this site');
	console.log('Prompt age value >>' + yourAge);
} else {
	document.getElementById('your-age').innerHTML = yourAge;
}


// Second part with for cycle


yourName = prompt ('What is your name?');
yourAge = prompt ('What is your age?');


if (yourNameLength < 3 || yourAge < 18) {
	for (var counter = 1; counter < 3; counter++) {
		console.log(counter)
		prompt('Please enter your full first name and age')
	}
}
