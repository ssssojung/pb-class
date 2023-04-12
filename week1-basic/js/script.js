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






