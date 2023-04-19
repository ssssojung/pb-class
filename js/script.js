//intro
(function(){
    const houseEle = document.querySelector('.house');
    // const introEle = document.querySelector('.intro');
    let maxScrollValue;
     
    const resizeHandler = () => {
        maxScrollValue = document.body.offsetHeight-window.innerHeight
    };


    window.addEventListener('scroll', ()=>{
        const zMove = scrollY/maxScrollValue *1000 -490;
        houseEle.style.transform = `translateZ(${zMove}vw)`//스크롤바 트랙의 범위
    }); 

    window.addEventListener('resize', resizeHandler);
    resizeHandler();
})();