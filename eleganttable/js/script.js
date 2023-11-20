const cursor = document.querySelector('#cursor');
const cursorCircle = cursor.querySelector('.cursor__circle');
const cursorCircle2 = cursor.querySelector('.cursor__circle2');

const mouse = { x: -100, y: -100 }; // mouse pointer's coordinates
const pos = { x: 0, y: 0 }; // cursor's coordinates
const speed = 0.1; // between 0 and 1

const updateCoordinates = e => {
  mouse.x = e.clientX;
  mouse.y = e.clientY;
}

window.addEventListener('mousemove', updateCoordinates);


function getAngle(diffX, diffY) {
  return Math.atan2(diffY, diffX) * 180 / Math.PI;
}

function getSqueeze(diffX, diffY) {
  const distance = Math.sqrt(
    Math.pow(diffX, 2) + Math.pow(diffY, 2)
  );
  const maxSqueeze = 0.15;
  const accelerator = 1500;
  return Math.min(distance / accelerator, maxSqueeze);
}


const updateCursor = () => {
  const diffX = Math.round(mouse.x - pos.x);
  const diffY = Math.round(mouse.y - pos.y);
  
  pos.x += diffX * speed;
  pos.y += diffY * speed;
  
  const angle = getAngle(diffX, diffY);
  const squeeze = getSqueeze(diffX, diffY);
  
  const scale = 'scale(' + (1 + squeeze) + ', ' + (1 - squeeze) +')';
  const rotate = 'rotate(' + angle +'deg)';
  const translate = 'translate3d(' + pos.x + 'px ,' + pos.y + 'px, 0)';

  cursor.style.transform = translate;
  cursorCircle.style.transform = rotate + scale;
};

function loop() {
  updateCursor();
  requestAnimationFrame(loop);
}

requestAnimationFrame(loop);



const cursorModifiers = document.querySelectorAll('[cursor-class]');

cursorModifiers.forEach(curosrModifier => {
  curosrModifier.addEventListener('mouseenter', function() {
    const className = this.getAttribute('cursor-class');
    cursor.classList.add(className);
  });
  
  curosrModifier.addEventListener('mouseleave', function() {
    const className = this.getAttribute('cursor-class');
    cursor.classList.remove(className);
  });
});


const Bg = document.querySelector('.BG');
let i = 0;
const ColorArr = ['#C2C2C2','#F7F7F7','#F4C9C0','#B7AC90' ];
const slideList = document.querySelectorAll('.slide_wrapper>div');
const $prev = document.querySelector('.slide_btn .prev');
const $next = document.querySelector('.slide_btn .next');
const btnline = document.querySelector('.slide_btn span');


//btn
Bg.addEventListener('click',(e)=>{
    console.log(i)
    e.preventDefault;

    if (!moving) {
        if(e.target === $next){
            slideNextHandler();
        }
        if(e.target === $prev){
            slidePrevHandler();
        }
        clearInterval(interval);
        playtoggle = false;
    }

    clearTimeout(moving);
    moving = setTimeout(() => {
        console.log('stop');
        moving = undefined;

            interval = setInterval(autoPlay, 5000);
            playtoggle = true;
    }, 400);


});


let moving; 

//touch
let start_X,end_X; 
window.addEventListener('touchstart', touchStart);
window.addEventListener('touchend', touchEnd);

function touchStart(e){
    start_X = e.touches[0].pageX;
}
function touchEnd(e){
    end_X = e.changedTouches[0].pageX;
    if (!moving) {
    	console.log('start');
        if(start_X > end_X ){
            console.log('다음')
            slideNextHandler();
        }else{
            console.log('이전')
            slidePrevHandler();
        }
        clearInterval(interval);
        playtoggle = false;
    }

    clearTimeout(moving);
    moving = setTimeout(() => {
        console.log('stop');
        moving = undefined;

            interval = setInterval(autoPlay, 5000);
            playtoggle = true;
    }, 400);

}

// //wheel
window.addEventListener('wheel',(e)=>{

    if (!moving) {
    	console.log('start');
            if(e.deltaY > 0){
                console.log('다음')
                slideNextHandler();

            }else if(e.deltaY < 0){
                console.log('이전')
                slidePrevHandler();
            }

                clearInterval(interval);
                playtoggle = false;
    }

    clearTimeout(moving);
    moving = setTimeout(() => {
        console.log('stop');
        moving = undefined;

            interval = setInterval(autoPlay, 5000);
            playtoggle = true;
    }, 400);
})


//auto
function autoPlay(){
    console.log('5초 끝')
    slideNextHandler();
}
//autoPlay 막기
let interval = setInterval(autoPlay, 5000);
let playtoggle = true;

// if(playtoggle){
//     clearInterval(interval);
//     playtoggle = false;
// }else{
//     interval = setInterval(autoPlay, 5000);
//     playtoggle = true;
// }




const slide_section = document.querySelectorAll('.slide_section');
const slide_btn = document.querySelector('.slide_btn');
const slide_right = document.querySelectorAll('.slide_right');

for(let i=0; i<slide_section.length; i++){
    slide_section[i].querySelector('.banner-img').addEventListener('click',function(e){
        slide_section[i].querySelector('.contentBox').classList.add('open');
        slide_section[i].querySelector('.open-layout').classList.add('open');
        slide_btn.classList.add('fade-out-bottom');


        // if(playtoggle){
            clearInterval(interval);
            playtoggle = false;
        // }else{
        //     interval = setInterval(autoPlay, 5000);
        //     playtoggle = true;
        // }


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


