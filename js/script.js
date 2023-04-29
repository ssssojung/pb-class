(() =>{
    //intro
    const houseEle = document.querySelector('.house');
    const introEle = document.querySelector('.intro');
    const worldEle = document.querySelector('.world');
    const changeEle = document.querySelector('.change-notice');
    let maxScrollValue;
    let yOffset = 0;
    let prevScrollHeight = 0; 
    let currentSection = 0;
    let enterNewSection = false;
    
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
    
    // project
    const sectionInfo = [
        
        {//intro
            heightNum: 5,
            scrollHeight: 0,
        },
        {//about
            heightNum: 5,
            scrollHeight: 0,
            objs:{
                container: document.querySelector('#scroll-section-1')
            }
        },
        {//skill
            heightNum: 5,
            scrollHeight: 0,
            objs:{
                container: document.querySelector('#scroll-section-2')
            }
        },
        {//project
            type : 'sticky',
            heightNum: 5,
            scrollHeight: 0,
            objs:{
                container : document.querySelector('#scroll-section-3'),
                projectA : document.querySelector('#scroll-section-3 .scroll-project-0'), 
                projectB : document.querySelector('#scroll-section-3 .scroll-project-1'), 
                projectC : document.querySelector('#scroll-section-3 .scroll-project-2'), 
                projectD : document.querySelector('#scroll-section-3 .scroll-project-3') 
            },
            values:{
                projectA_opacity : [0,1, {start: 0.1, end: 0.2}], 
                projectB_opacity : [0,1, {start: 0.3, end: 0.4}], 
                projectC_opacity : [0,1, {start: 0.5, end: 0.6}], 
                projectD_opacity : [0,1, {start: 0.7, end: 0.8}] 
            }
        },
        {//contact
            heightNum: 5,
            scrollHeight: 0,
            objs:{
                container: document.querySelector('#scroll-section-4')
            }
        },
    ];

    const setLayout = () => {
        for(let i=0; i<sectionInfo.length; i++){
            sectionInfo[i].scrollHeight = sectionInfo[i].heightNum*window.innerHeight;
            sectionInfo[i].objs.container.style.height = `${sectionInfo[i].scrollHeight}px`;
        }
        console.log(yoffset,currentSection);
        yOffset = window.scrollY;
        let totalScrollHeight = 0;
        for(let i=0; i<sectionInfo.length; i++){
            totalScrollHeight += sectionInfo[i].scrollHeight;
            if(totalScrollHeight>=yOffset){
                currentSection = i;
                break;
            }
        }
    };

     

    window.addEventListener('resize', resizeHandler);
    resizeHandler();

})();