
const Bg = document.querySelector('.BG');
let i = 0;
const ColorArr = ['#C2C2C2', '#F7F7F7', '#F4C9C0', '#B7AC90'];
const slideList = document.querySelectorAll('.slide_wrapper>div');
const $prev = document.querySelector('.slide_btn .prev');
const $next = document.querySelector('.slide_btn .next');
const btnline = document.querySelector('.slide_btn span');


Bg.addEventListener('click',(e)=>{
    console.log(i)
    e.preventDefault;
    if(e.target === $next){
        slideNextHandler();
    }
    if(e.target === $prev){
        slidePrevHandler();
    }
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
});

const slideNextHandler = () =>{
    slideList[i].classList.remove('active');
    if(i == ColorArr.length-1){
        i = 0;
    }else{
        i++;
    }
    slideList[i].classList.add('active');
    Bg.style.backgroundColor = ColorArr[i];

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
}

const slide_section = document.querySelectorAll('.slide_section');
const slide_btn = document.querySelector('.slide_btn');
const slide_right = document.querySelectorAll('.slide_right');

for(let i=0; i<slide_section.length; i++){
    slide_section[i].querySelector('.banner-img').addEventListener('click',function(e){
        slide_section[i].querySelector('.contentBox').classList.add('open');
        // slide_right.classList.add('open');
        slide_btn.classList.add('fade-out-bottom');
        // slide_btn.classList.add('fade-out-bottom');
        // slide_right.border ="1px solid red";
        // setTimeout(function() {
        //     console.log('dispay:none');
        //     slide_section[i].querySelector('.open span').classList.add('D-none');
        //   }, 1000);
    })

}

// const moreViewHandler = () =>{

// }

