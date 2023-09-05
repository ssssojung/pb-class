document.addEventListener('DOMContentLoaded', function(){
        const $menuBtn = document.querySelector("#menu_btn");
        const menu_wrap = document.querySelector('#menu_wrap');
        $menuBtn.addEventListener("click", function(e){
            if ( menu_wrap.classList.contains('on') ){
                menu_wrap.classList.remove('on');
                $menuBtn.classList.remove('on');

            } else {
                menu_wrap.classList.add('on');
                $menuBtn.classList.add('on');
            }
        });
    });