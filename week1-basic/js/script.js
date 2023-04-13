//IntersecrionObserver 센션 이동
const tabs = document.querySelectorAll(".tab")
const pages = document.querySelectorAll(".page")
const scrollToTop = document.querySelector(".scrollToTop")

const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      console.log(entry.target);
      const index = Array.from(pages).indexOf(entry.target)
      tabs.forEach(tab => {
        tab.classList.remove("activeTab")
      })
      tabs[index].classList.add("activeTab")
    }
  })
}, {
  threshold: 0.25,
})


pages.forEach(page => {
  observer.observe(page)
})





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





