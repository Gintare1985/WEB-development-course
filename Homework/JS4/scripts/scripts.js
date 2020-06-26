



function getInputValueFromElementById(idName) {
var inputObject = document.getElementById (idName);
var inputValue = inputObject.value;
	return inputValue;
}

var firstNumber = getInputValueFromElementById('first-number');
var secondNumber = getInputValueFromElementById('second-number');



function divideTwoNumbers(firstNumber, secondNumber) {
	var result = firstNumber / secondNumber;
	return result;
}

function getResultToConsole(result) {
	console.log(result);
}


