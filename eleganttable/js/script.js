
const Bg = document.querySelector('.BG');
let i = 0;
const ColorArr = ['#C2C2C2', '#F7F7F7', '#F4C9C0', '#B7AC90'];
const slideList = document.querySelectorAll('.slide_wrapper>div');
const $prev = document.querySelector('.slide_btn .prev');
const $next = document.querySelector('.slide_btn .next');
const btnline = document.querySelector('.slide_btn span');


//btn
Bg.addEventListener('click',(e)=>{
    console.log(i)
    e.preventDefault;
    if(e.target === $next){
        slideNextHandler();
    }
    if(e.target === $prev){
        slidePrevHandler();
    }

});

//wheel
window.addEventListener('wheel',(e)=>{
    console.log(e.deltaY)
    if(e.deltaY > 0){
        console.log('다음')

    }else if(e.deltaY < 0){
        console.log('이전')
    }
})

//auto
function autoPlay(){
    slideNextHandler();
}

let interval = setInterval(autoPlay, 5000);
let autotoggle = true;

const slide_section = document.querySelectorAll('.slide_section');
const slide_btn = document.querySelector('.slide_btn');
const slide_right = document.querySelectorAll('.slide_right');

for(let i=0; i<slide_section.length; i++){
    slide_section[i].querySelector('.banner-img').addEventListener('click',function(e){
        slide_section[i].querySelector('.contentBox').classList.add('open');
        slide_section[i].querySelector('.open-layout').classList.add('open');
        slide_btn.classList.add('fade-out-bottom');

        //autoPlay
        if(autotoggle){
            clearInterval(interval);
            autotoggle = false;
        }else{
            interval = setInterval(text, 500);
            autotoggle = true;
        }

    })

}

const slideNextHandler = () =>{
    slideList[i].classList.remove('active');
    if(i == ColorArr.length-1){
        i = 0;
    }else{
        i++;
    }
    slideList[i].classList.add('active');
    Bg.style.backgroundColor = ColorArr[i];

    if(i==1){
    $prev.style.color = '#131313';
    $next.style.color = '#131313';
    btnline.style.backgroundColor = '#131313';
    }else{
        $prev.style.color = '#fff';
        $next.style.color = '#fff';
        btnline.style.backgroundColor = '#fff';
    }
    $prev.innerText = `0${i+1}`;
    $next.innerText = `0${i+2}`;

}
const slidePrevHandler = () =>{
    slideList[i].classList.remove('active');
    if(i == 0){
        i = ColorArr.length-1;
    }else{
        i--;
    }
    slideList[i].classList.add('active');
    Bg.style.backgroundColor = ColorArr[i];

    if(i==1){
        $prev.style.color = '#131313';
        $next.style.color = '#131313';
        btnline.style.backgroundColor = '#131313';
        }else{
            $prev.style.color = '#fff';
            $next.style.color = '#fff';
            btnline.style.backgroundColor = '#fff';
        }
        $prev.innerText = `0${i+1}`;
        $next.innerText = `0${i+2}`;
}


// if(chk) {
//     // 휠 일정시간동안 막기
//     chk = false;
//     setTimeout(function(){
//         chk = true;
//     }, 500)

//     // 휠 방향 감지(아래: -120, 위: 120)
//     let w_delta = event.wheelDelta / 120;
    
//     // 휠 아래로
//     if(w_delta < 0 && $(this).next().length > 0) {
//         $('.container').animate({
//             left: -array[$(this).index()+1]
//         }, 500)
//     }
//     // 휠 위로
//     else if(w_delta > 0 && $(this).prev().length > 0) {
//         $('.container').animate({
//             left: -array[$(this).index()-1]
//         }, 500)
//     }
// }