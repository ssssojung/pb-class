document.addEventListener('DOMContentLoaded',(()=>{
    const $QuickBtn = document.querySelectorAll('#quick_active a');
    $QuickBtn.forEach((e)=>{
        e.addEventListener('click',()=>{
            for(let i=0; i<$QuickBtn.length; i++){
                $QuickBtn[i].classList.remove('active');
            }
                e.classList.add('active');
        console.log(parseInt(window.scrollY));

        });
    });

    window.addEventListener('wheel',()=>{
        let offset = window.scrollY;
        console.log(parseInt(offset));
        
       
    })


}));