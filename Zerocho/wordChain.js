var body = document.body;
var word = document.createElement('div');

word.textContent = '제로초';
body.append(word);

var form = document.createElement('form');
body.append(form);

var input = document.createElement('input');
form.append(input);

var button = document.createElement('button');
button.textContent = '등록';
form.append(button);

var result = document.createElement('div');
body.append(result);

form.addEventListener('submit', function (event) {
	event.preventDefault();
	
	if (word.textContent[word.textContent.length - 1] === input.value[0]) {
		result.textContent = '정답';
		word.textContent = input.value;
		input.value = '';
		input.focus();
	} else {
		result.textContent = '땡';
		input.value = '';
		input.focus();
	}
});