document.addEventListener('DOMContentLoaded', function(){
    // (()=>{
        const $menuBtn = document.querySelector("#menu_btn");
        const menu_wrap = document.querySelector('#menu_wrap');
        const slide = document.querySelector('.slide_wrap');

        let slide_width = slide.clientWidth;
        const $prevBtn = document.querySelector('.slide_prev');
        const $nextBtn = document.querySelector('.slide_next');
        const slide_items = document.querySelectorAll('.slide_item');
        const max_slide = slide_items.length;
        let currSlide = 1;

        const nextMove = () => {
            currSlide++;
            if(currSlide <= max_slide){
                const offset = slide_width * (currSlide -1);
                slide_items.forEach((i)=>{
                    i.setAttribute("style",`left: ${-offset}px`);
                });
            }else{
                currSlide--;
            }
        }
        const prevMove = () => {
            currSlide--;
            if(currSlide > 0){
                const offset = slide_width * (currSlide -1);
                slide_items.forEach ((i)=>{
                    i.setAttribute("style",`left: ${-offset}px`);
                });
            }else{
                currSlide++;
            }
        }
        $nextBtn.addEventListener("click",()=>{
            nextMove();
        });
        $prevBtn.addEventListener("click",()=>{
            prevMove();
        });

        window.addEventListener("resize",()=>{
            slide_width = slide.clientWidth;
        });

        for(let i=0; i<max_slide; i++){
            currSlide = i + 1;
            const offset = slide_width * (currSlide -1);
            slide_items.forEach((i)=>{
                i.setAttribute("style", `left: ${-offset}px`);
            });
        }

        let startPoint = 0;
        let endPoint = 0;
        //pc 드래그 
        slide.addEventListener("mousedown",(e)=>{
            // console.log("mousedown",e.pageX);
            startPoint = e.pageX;
        });
        slide.addEventListener("mouseup",(e)=>{
            // console.log("mouseup", e.pageX);
            endPoint = e.pageX;
            //endPoint<startPOint로 next/prev가 결정
            if(startPoint < endPoint){
                console.log("prev move");
                prevMove();
            }else if(startPoint > endPoint){
                console.log("next move");
                nextMove();
            }
        });
        //모바일 그래그
        slide.addEventListener("touchstart",(e)=>{
            // console.log("touchstart",e.touches[0].pageX);
            startPoint = e.touches[0].pageX;
        });
        slide.addEventListener("touchend",(e)=>{
            // console.log("touchend", e.changedTouches[0].pageX);
            endPoint =  e.changedTouches[0].pageX;
            //endPoint<startPOint로 next/prev가 결정
            if(startPoint < endPoint){
                console.log("prev move");
                prevMove();
            }else if(startPoint > endPoint){
                console.log("next move");
                nextMove();
            }
        });
        console.log(currSlide);

        


        // 메뉴
        $menuBtn.addEventListener("click", function(e){
            if ( menu_wrap.classList.contains('on') ){
                menu_wrap.classList.remove('on');
                $menuBtn.classList.remove('on');

            } else {
                menu_wrap.classList.add('on');
                $menuBtn.classList.add('on');
            }
        });

        // 슬라이드 

    // });
 });