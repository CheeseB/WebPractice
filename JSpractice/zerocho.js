var body = document.body;
var word = document.createElement('div');

word.textContent = '제로초';
body.append(word);

var input = document.createElement('input');
body.append(input);

var button = document.createElement('button');
button.textContent = '등록';
body.append(button);

var result = document.createElement('div');
body.append(result);

button.addEventListener('click', function callback() {
	// 콜백함수 이름은 생략 가능
	if (word.textContent[word.textContent.length - 1] === input.value[0]) {
		result.textContent = '오예';
		word.textContent = input.value;
		input.value = '';
	} else {
		result.textContent = '으엑';
	}
});