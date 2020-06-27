

function getInputValueFromElementById(idName) {
	var inputObject = document.getElementById(idName);
	var inputValue = inputObject.value;
	return inputValue;
}

function divideTwoNumbers(firstNumber, secondNumber) {
	var result = firstNumber / secondNumber;
	return result;
}


function division() {
	var firstNumber = getInputValueFromElementById('first-number');
	var secondNumber = getInputValueFromElementById('second-number');
	var divisionResult = divideTwoNumbers(firstNumber, secondNumber);
	console.log(divisionResult);
}






