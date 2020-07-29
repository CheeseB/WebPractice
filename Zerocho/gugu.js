var num1 = Math.ceil(Math.random() * 9);
var num2 = Math.ceil(Math.random() * 9);
var answer = num1 * num2;

var body = document.body;
var word = document.createElement('div');

word.textContent = String(num1) + '*' + String(num2) + ' = ?';
body.append(word);

var form = document.createElement('form');
body.append(form);

var input = document.createElement('input');
form.append(input);

var button = document.createElement('button');
button.textContent = '입력';
form.append(button);

var result = document.createElement('div');
body.append(result);

form.addEventListener('submit', function (e) {
	e.preventDefault();

	if (answer === Number(input.value)) {
		result.textContent = '딩동댕';

		num1 = Math.ceil(Math.random() * 9);
		num2 = Math.ceil(Math.random() * 9);
		answer = num1 * num2;
		word.textContent = String(num1) + '*' + String(num2) + ' = ?';

		input.value = '';
		input.focus();
	} else {
		result.textContent = '땡';
		input.value = '';
		input.focus();
	}
})