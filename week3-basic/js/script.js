


//modal
const modal = document.querySelector("#modal");
const $btnModal = document.querySelector("#btn-modal");
const $close = document.querySelector('#close-area');
// con/st overlay = document.querySelector('')/
window.addEventListener('click',(e)=>{
  console.log(e.target)
  if(e.target === $btnModal){
    modal.classList.add('show');
  }else if(e.target === modal || e.target === $close){
    modal.classList.remove('show');
  }
});
