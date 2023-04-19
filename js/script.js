//intro
(function(){
    const houseEle = document.querySelector('.house');
    const introEle = document.querySelector('.intro');
    const worldEle = document.querySelector('.world');
    const changeEle = document.querySelector('.change-notice');
    let maxScrollValue;
     
    const resizeHandler = () => {
        maxScrollValue = introEle.offsetHeight-window.innerHeight
        if(window.innerWidth>window.innerHeight){
            changeEle.style.display = 'none'
        }else{
            changeEle.style.display = 'flex'

        }
    };


    window.addEventListener('scroll', ()=>{
        const zMove = scrollY/maxScrollValue *1000;
        houseEle.style.transform = `translateZ(${zMove}vw)`//스크롤바 트랙의 범위
        console.log(scrollY);
        if(scrollY > 1272){
            worldEle.style.removeProperty = 'position';
        }else{
            worldEle.style.addProperty = 'fixed';
        }
    }); 
    
    //스크롤 1272일때 world가 포지션 변경 되야함

    window.addEventListener('resize', resizeHandler);
    resizeHandler();
})();