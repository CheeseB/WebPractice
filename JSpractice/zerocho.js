var word = '끝말잇기';

while (true) {
  var answer = prompt(word);
  if(word[word.length - 1] === answer[0]) {
    alert('correct');
    word = answer;
  }else {
    alert('try again');
  }
}