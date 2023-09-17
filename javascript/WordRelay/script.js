const $button = document.querySelector('button');
const $input = document.querySelector('input');
const $word = document.querySelector('#word');
$input.focus();

let word;
let newWord; 

const onclickButton = () =>{
    if(!word || word[word.length-1] === newWord[0]){
        word = newWord;
        $word.textContent = word;
    }else{
        //틀림
        alert('다시 입력해주세요!');
    }
    $input.value = '';
    $input.focus();

};
const onInput = (e) =>{
    newWord = e.target.value;
};


$input.addEventListener('keyup',(e)=>{
    if(e.key === 'Enter'){
        onclickButton();
    }
});

$button.addEventListener('click',onclickButton);
$input.addEventListener('input',onInput);