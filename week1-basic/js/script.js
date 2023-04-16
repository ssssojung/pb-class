

//IntersecrionObserver 센션 이동
const tabs = document.querySelectorAll(".tab")
const pages = document.querySelectorAll(".page")
const scrollToTop = document.querySelector(".scrollToTop")

const observer1 = new IntersectionObserver((entries, observer) => {
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
  observer1.observe(page)
})

//네비 해당 섹션 이동
const aTags = document.querySelectorAll('#gnb a');
 aTags.forEach((e)=>{
  e.addEventListener('click',()=>{
    e.preventDefault();
    let target = document.querySelector(this.getAttribute("href"));
    window.scrollTo({
        behavior: "smooth",
        top: target.offsetTop
      });
  });
 });

//Intersection Observer 애니메이션

const options = { //뷰포트가 무엇인지, 교차영역은 어떻게 할 것인지 정해줌
  root: null,
  rootMargin: "0px",
  threshold: 0.3
};

//new IntersectionObserver객체의 콜백함수를 인자로 줌.
//이때 entries는 스크롤 이벤트를 적용할 모든 dom 객체임.
const observer = new IntersectionObserver((entries)=>{
  entries.forEach((entry)=>{
    //해당 dom이 교차영역에 진입 시 적용하고 싶은 로직 작성
    if(entry.isIntersecting){
      entry.target.classList.add('active');
    }
    // else{
    //   entry.target.classList.remove('active');
    // }
  });
},options);

const List = document.querySelectorAll('.page');
List.forEach((el)=>observer.observe(el));



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





