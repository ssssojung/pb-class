(() =>{
    //intro
    const houseEle = document.querySelector('.house');
    const introEle = document.querySelector('.intro');
    const worldEle = document.querySelector('.world');
    const changeEle = document.querySelector('.change-notice');
    
    const resizeHandler = () => {
        maxScrollValue = introEle.offsetHeight-window.innerHeight
        if(window.innerWidth>window.innerHeight){
            changeEle.style.display = 'none';
        }else{
            changeEle.style.display = 'flex';
        }
    };

    window.addEventListener('scroll', ()=>{
        const zMove = scrollY/maxScrollValue *1000;
        houseEle.style.transform = `translateZ(${zMove}vw)`//스크롤바 트랙의 범위
        if(scrollY > 1272){
            worldEle.style.position = 'absolute';
        }else{
            worldEle.style.position = 'fixed';
        }
    }); 

    window.addEventListener('resize', resizeHandler);
    resizeHandler();
    
})();


(()=>{
    let yOffset = 0; // scrollY대신 쓸 변수
    let prevScrollHeight = 0; // 현재 스크롤 위치보다 이전에 위치한 스크롤 높이값의 합
    let currentScene = 0; // 현재 활성화된 섹션

    const sceneInfo = [
        { //0
            type : 'normal',
            heightNum : 2, //브라우저 높이의 5배로 scrollHeight 세팅
            scrollHeight : 0,
            objs: {
                container: document.querySelector('#scroll-section-0')
            }
        },
        { //1
            type : 'sticky',
            heightNum : 3.5,
            scrollHeight : 0,
            objs: {
                container: document.querySelector('#scroll-section-1')
            }
        },
        { //2
            type : 'normal',
            heightNum : 1,
            scrollHeight : 0,
            objs: {
                container: document.querySelector('#scroll-section-2')
            }
            
        },
        { //3
            type : 'sticky',
            heightNum : 5,
            scrollHeight : 0,
            objs: {
                container: document.querySelector('#scroll-section-3')
            }
        },
        { //4
            type : 'normal',
            heightNum : 1,
            scrollHeight : 0,
            objs: {
                container: document.querySelector('#scroll-section-4')
            }
        },
        { //5
            type : 'normal',
            heightNum : 1,
            scrollHeight : 0,
            objs: {
                container: document.querySelector('#scroll-section-5')
            }
        }
    ];

    const setLayout = () =>{
        //각 스크롤 섹션의 높이 세팅
        for(let i = 0; i < sceneInfo.length; i++){
            sceneInfo[i].scrollHeight =  sceneInfo[i].heightNum * window.innerHeight ;
            sceneInfo[i].objs.container.style.height = `${sceneInfo[i].scrollHeight}px`;
        }

    }
    const scrollLoop = () => {
        prevScrollHeight = 0;
        for(let i =0; i< currentScene; i++){
            prevScrollHeight += sceneInfo[i].scrollHeight;
        }
        if(yOffset > prevScrollHeight + sceneInfo[currentScene].scrollHeight){
            currentScene++;
        }
        if(yOffset < prevScrollHeight){
            currentScene--;
        }
        console.log(currentScene);
    }

    window.addEventListener('reszie', setLayout);
    window.addEventListener('scroll',()=>{
        yOffset = window.scrollY;
        scrollLoop();
    });
    setLayout();
 
})();