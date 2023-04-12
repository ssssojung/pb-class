//IntersecrionObserver
// let observer = new IntersectionObserver((e)=>{
//     e.forEach((box)=>{
//         if(box.isIntersecting){
//             box.target.style.opacity = 1;
//         }else{
//             box.target.style.opacity = 0;

//         }
//     });
// });
// const section = document.querySelectorAll('section');

// observer.observe(section[0]);
// observer.observe(section[1]);
// observer.observe(section[2]);
// observer.observe(section[3]);

//반응형 header
const $toggleBtn = document.querySelector('.m__menuBtn');
const gnb = document.querySelector('#gnb');
const user = document.querySelector('.user');

$toggleBtn.addEventListener('click',()=>{
    gnb.classList.toggle('active');
    user.classList.toggle('active');
});

//스크롤 감지 헤더
const hd = document.querySelector("#hd");

// function scrollEvent(){
//     document.addEventListener("scroll", function(){
//         if(document.documentElement.scrollTop > 0){
//             hd.classList.add("nav-up");
//         }else{
//             hd.classList.remove("nav-up");
//         }
//     });
// }

// function init(){
//     document.addEventListener("scroll", scrollEvent);
// }

// init();
const headerMoving = function(nav){
  if (nav === "up"){
    hd.className = '';
  } else if (nav === "down"){
    hd.className = 'nav-down';
  }
};
let prevScrollTop = 0;
document.addEventListener("scroll", function(){
  let nextScrollTop = window.scrollY || 0;
   console.log( nextScrollTop)
  if (nextScrollTop > prevScrollTop){
    headerMoving("down");
  } else if (nextScrollTop < prevScrollTop){
    headerMoving("up");
  }
   prevScrollTop = nextScrollTop;
});





