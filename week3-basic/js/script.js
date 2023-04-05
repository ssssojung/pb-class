const $tab1 = document.querySelectorAll('.tabs');
const $tab2 = document.querySelectorAll('.tab');
const tab2Con = document.querySelectorAll('.tab>ul');

$tab1.forEach((tab, index) => {

  tab.addEventListener('mouseover',() => {
    $tab1[index].classList.add('show');
    $tab2[index].classList.add('active');
  })
  tab.addEventListener('mouseout',()=>{
    $tab1[index].classList.remove('show');
    $tab2[index].classList.remove('active');

  })
});
$tab2.forEach((tab, index) => {

  tab.addEventListener('mouseover',() => {
    $tab1[index].classList.add('show');
    $tab2[index].classList.add('active');
  })
  tab.addEventListener('mouseout',()=>{
    $tab1[index].classList.remove('show');
    $tab2[index].classList.remove('active');

  })
});






//modal
const modal = document.querySelector("#modal");
const $btnModal = document.querySelector("#btn-modal");
const $close = document.querySelector('#close-area');

window.addEventListener('click',(e)=>{
  console.log(e.target)
  if(e.target === $btnModal){
    modal.classList.add('show');
  }else if(e.target === modal || e.target === $close){
    modal.classList.remove('show');
  }
});

//menu
