(()=>{
    //menu
    const hd = document.querySelector('#hd');
    const menuBtn = document.querySelector('#menu_btn');
    const menu_li = document.querySelector('#menu_btn a');
    const menu_wrap = document.querySelector('#menu_wrap');
    const on_off = true;

    if(on_off){
        menuBtn.addEventListener('click',()=>{
            hd.classList.toggle('selected');
            menu_wrap.style.top = 0;
            menu_li.style.opacity = 1;
        });
    }else{
        menu_wrap.style.top = `${-100}%`;
        menu_li.style.opacity = 0;
    }
    


})();

(() =>{
    //intro
    const houseEle = document.querySelector('.house');
    const introEle = document.querySelector('.intro');
    const worldEle = document.querySelector('.world');
    
    const resizeHandler = () => {
        maxScrollValue = introEle.offsetHeight-window.innerHeight
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
            type : 'sticky',
            heightNum : 2, //브라우저 높이의 5배로 scrollHeight 세팅
            scrollHeight : 0,
            objs: {
                container: document.querySelector('#scroll-section-0')
            }
        },
        { //1
            type : 'normal',
            heightNum : 2.7,
            scrollHeight : 0,
            objs: {
                container: document.querySelector('#scroll-section-1'),
                progress : document.querySelector('#scroll-section-1 .letter-progress')
            },
            values: {
                // progress height animation값
                progress_height : [100,0,{start:0, end: 0.5}]
            }
        },
        { //2 skill
            type : 'sticky',
            heightNum : 5,
            scrollHeight : 0,
            objs: {
                container: document.querySelector('#scroll-section-2'),
                txt_list_1: document.querySelector('#scroll-section-2 #txt_list_1'),
                txt_list_2: document.querySelector('#scroll-section-2 #txt_list_2'),
                txt_list_3: document.querySelector('#scroll-section-2 #txt_list_3'),
            },
            values: {

                txt_list_1_opacity_in : [0,1,{start:0, end: 0.07}],
                txt_list_1_opacity_out : [1,0,{start: 0.2, end: 0.3}],

                txt_list_2_opacity_in : [0,1,{start: 0.3, end: 0.4}],
                txt_list_2_opacity_out : [1,0,{start: 0.5, end: 0.6}],

                txt_list_3_opacity_in : [0,1,{start: 0.6, end: 0.7}],
                txt_list_3_opacity_out : [1,0,{start: 0.8, end: 0.9}],

            }
        },
        { //3
            type : 'normal',
            heightNum : 4,
            scrollHeight : 0,
            objs: {
                container: document.querySelector('#scroll-section-3')
            }

            // objs: {
            //     container: document.querySelector('#scroll-section-2'),
            //     project_1: document.querySelector('#scroll-section-2 .project_1'),
            //     project_2: document.querySelector('#scroll-section-2 .project_2'),
            //     project_3: document.querySelector('#scroll-section-2 .project_3'),
            //     project_4: document.querySelector('#scroll-section-2 .project_4')
            // },
            // values: {
            //     project_1_opacity_in : [0,1,{start:0, end: 0.1}],
            //     project_1_translateY_in: [20,0,{start:0, end: 0.1} ],
            //     project_1_opacity_out : [1,0,{start: 0.1, end: 0.2}],
            //     project_1_translateY_out: [0,-20,{start: 0.1, end: 0.2} ],

            //     project_2_opacity_in : [0,1,{start:0.2, end: 0.3}],
            //     project_2_translateY_in: [20,0,{start:0.2, end: 0.3} ],
            //     project_2_opacity_out : [1,0,{start: 0.3, end: 0.4}],
            //     project_2_translateY_out: [0,-20,{start: 0.3, end: 0.4} ],

            //     project_3_opacity_in : [0,1,{start:0.4, end: 0.5}],
            //     project_3_translateY_in: [20,0,{start:0.4, end: 0.5} ],
            //     project_3_opacity_out : [1,0,{start: 0.5, end: 0.6}],
            //     project_3_translateY_out: [0,-20,{start: 0.5, end: 0.6} ],


            //     project_4_opacity_in : [0,1,{start:0.6, end: 0.7}],
            //     project_4_translateY_in: [20,0,{start:0.6, end: 0.7} ],
            //     project_4_opacity_out : [1,0,{start: 0.7, end: 0.8}],
            //     project_4_translateY_out: [0,-20,{start: 0.7, end: 0.8} ]
            // }
            
        },
        // { //4
        //     type : 'normal',
        //     heightNum : 1,
        //     scrollHeight : 0,
        //     objs: {
        //         container: document.querySelector('#scroll-section-4')
        //     }
        // },
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
        // for(let i = 0; i < sceneInfo.length; i++){
        //     if(sceneInfo[i].type === 'sticky'){
        //         sceneInfo[i].scrollHeight =  sceneInfo[i].heightNum * window.innerHeight ;
        //     }else if(sceneInfo[i].type === 'normal'){
        //         sceneInfo[i].scrollHeight = sceneInfo[i].objs.container.scrollY;
        //     }
        //     sceneInfo[i].objs.container.style.height = `${sceneInfo[i].scrollHeight}px`;

        // }
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
        // console.log(scrollRatio);
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
            // const progress_height = calcValues(values.progress_height,currentYOffset);
                objs.progress.style.height = `${calcValues(values.progress_height,currentYOffset)}%`;
            // console.log(sceneInfo[currentScene].objs.progress.style.height);
            break;

            case 2 : 
            // console.log(calcValues(values.rightBox_width,currentYOffset));
            if(scrollRatio <= 0.2){ //1
                //in
                objs.txt_list_1.style.opacity = calcValues(values.txt_list_1_opacity_in,currentYOffset);
            }else{
                //out
                objs.txt_list_1.style.opacity = calcValues(values.txt_list_1_opacity_out,currentYOffset);
            }
            if(scrollRatio <= 0.55){ //2
                objs.txt_list_2.style.opacity = calcValues(values.txt_list_2_opacity_in,currentYOffset);

            }else{
                objs.txt_list_2.style.opacity = calcValues(values.txt_list_2_opacity_out,currentYOffset);
            }
            if(scrollRatio <= 0.7){ //3
                objs.txt_list_3.style.opacity = calcValues(values.txt_list_3_opacity_in,currentYOffset);

                
            }else{
                objs.txt_list_3.style.opacity = calcValues(values.txt_list_3_opacity_out,currentYOffset);

            }
            break;
            
            case 3 : 
            // console.log('3 play');
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