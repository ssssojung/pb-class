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
    let yOffset = 0; 
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
                container: document.querySelector('#scroll-section-1'),
                progress : document.querySelector('#scroll-section-1 .letter-progress')
            },
            values: {
                // progress height animation값
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
                container: document.querySelector('#scroll-section-3'),
                project_1: document.querySelector('#scroll-section-3 .project_1'),
                project_2: document.querySelector('#scroll-section-3 .project_2'),
                project_3: document.querySelector('#scroll-section-3 .project_3'),
                project_4: document.querySelector('#scroll-section-3 .project_4')
            },
            values: {
                project_1_opacity : [0,1,{start:0.1, end: 0.2}],
                project_1_opacity_out : [1,0,{start:0.25, end: 0.3}],
                project_2_opacity_in : [0,1,{start:0.3, end: 0.4}],
                // project_3_opacity_in : [0,1,{start:0.5, end: 0.6}],
                // project_4_opacity_in : [0,1,{start:0.7, end: 0.8}]
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
        yOffset = window.scrollY;
        let totalScrollHeight = 0;
        for(let i=0; i< sceneInfo.length; i++){ //새로고침
            totalScrollHeight += sceneInfo[i].scrollHeight;
            if(totalScrollHeight >= yOffset){
                currentScene = i;
                break;
            }
        }
    }

    const calcValues = (values, currentYOffset) =>{ 
        let rv;
        //현재 섹션에서 스크롤된 범위 비율
        const scrollHeight = sceneInfo[currentScene].scrollHeight;
        const scrollRatio = currentYOffset / scrollHeight;
        
        if(values.length === 3){ 
            //start ~ end 사이에 애니메이션 실행
            const partScrollStart = values[2].start * scrollHeight;
            const partScrollEnd = values[2].end * scrollHeight;
            const partScrollHeight = partScrollEnd - partScrollStart;
            
            if(currentYOffset >= partScrollStart && currentYOffset <= partScrollEnd){
                rv = (currentYOffset - partScrollStart) / partScrollHeight * (values[1]-values[0]) + values[0] ;
            }else if(currentYOffset < partScrollStart){
                rv = values[0];
            }else if(currentYOffset > partScrollEnd){
                rv = values[1];
            }
        }else{
            rv = scrollRatio * (values[1]-values[0]) + values[0] ;
        }

        return rv;
    };

    const playAnimation = () =>{
        const objs = sceneInfo[currentScene].objs;
        const values = sceneInfo[currentScene].values;
        const currentYOffset = yOffset - prevScrollHeight;
		const scrollHeight = sceneInfo[currentScene].scrollHeight;
		const scrollRatio = currentYOffset / scrollHeight;

        switch (currentScene) {
            case 0 : 
            // console.log('0 play');
            break;

            case 1 : 
            // console.log('1 play');
            break;

            case 2 : 
            // console.log('2 play');
            break;

            case 3 : 
            // console.log('3 play');
            let project_1_opacity_in = calcValues(values.project_1_opacity,currentYOffset);
            // let project_1_opacity_out = calcValues(values.project_1_opacity_out,currentYOffset);

            // if(scrollRatio <= 0.22){
            //     //in
                objs.project_1.style.opacity = project_1_opacity_in;
                console.log(project_1_opacity_in);
            // }else{
            //     //out
            //     objs.project_1.style.opacity = project_1_opacity_out;
            // }
            // // let project_1_opacity_out = values.project_3_opacity[1];
            break;

            case 4 : 
            // console.log('4 play');
            break;

            case 5 : 
            // console.log('5 play');
            break;
        }
    };

    const scrollLoop = () => {
        let enterNewScene = false; // 새로운 섹션 시작된 순간
        prevScrollHeight = 0;
        
        for(let i =0; i< currentScene; i++){
            prevScrollHeight += sceneInfo[i].scrollHeight;
        }

        if(yOffset > prevScrollHeight + sceneInfo[currentScene].scrollHeight){
            enterNewScene = true;
            currentScene++;
            document.body.setAttribute('id',`show-section-${currentScene}`)
        }

        if(yOffset < prevScrollHeight){
            enterNewScene = true;
            if(currentScene === 0) return; // 브라우저 바운스 효과로 마이너스 되는 것을 방지(모바일)
            currentScene--;
            document.body.setAttribute('id',`show-section-${currentScene}`)
        }

        if(enterNewScene) return;

        playAnimation();
    }

    window.addEventListener('scroll',()=>{
        yOffset = window.scrollY;
        scrollLoop();
    });
    window.addEventListener('reszie', setLayout);
    window.addEventListener('load',setLayout);
    setLayout();
 
})();