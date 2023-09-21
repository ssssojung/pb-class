const $timer = document.querySelector('#timer');
const $score = document.querySelector('#score');
const $game = document.querySelector('#game');
const $start = document.querySelector('#start');
const $$cells = document.querySelectorAll('.cell');
const $replay = document.querySelector('#replay');
const over_bg = document.querySelector('.over_bg');

const holes = [0,0,0,0,0,0,0,0,0];
let started = false;
let score = 0;
let time = 30;

$start.addEventListener('click',()=>{
    const start_bg = document.querySelector('.start_bg');
    start_bg.style.display = 'none';
    Game();
});

$replay.addEventListener('click',()=>{
    score = 0;
    time = 10;
    started = false;
    over_bg.style.display = 'none';
    Game();
});

const Game = () =>{
    if(started) return;
    started = true;
    console.log('시작')
    const timerId = setInterval(()=>{
        time = (time * 10 -1) /10;
        $timer.textContent = time;
        if(time === 0){
            clearInterval(timerId);
            clearInterval(tickId);
            setTimeout(()=>{
                over_bg.style.display = 'flex';
                const Fscore = document.querySelector('#FinalScore');
                Fscore.textContent = score;
            },50);
        }
    },100);
    const tickId = setInterval(tick, 1000);
    tick();
};
    

let BizPercent = 0.3;
let BombPercent = 0.5;

const tick = () =>{
    holes.forEach((hole,index)=>{
        if(hole) return; // setTimeout을 2초로 변경시켜줌
        const randomValue = Math.random();
        if(randomValue < BizPercent){
            const $BIZ = $$cells[index].querySelector('.Biz')
            holes[index] = setTimeout(()=>{ //1초 뒤에 사라짐
                $BIZ.classList.add('hidden');
                holes[index] = 0;
               // console.log('안녕')//실행순서2
            },1000);
            $BIZ.classList.remove('hidden');
            //console.log('하세요')//실행순서1
        } else if(randomValue < BombPercent){
            const $Bomb = $$cells[index].querySelector('.bomb')
            holes[index] = setTimeout(()=>{ //1초 뒤에 사라짐
                console.log('Bomb');
                $Bomb.classList.add('hidden');
                holes[index] = 0;
               // console.log('안녕')//실행순서2
            },1000);
            $Bomb.classList.remove('hidden');
        }
    });
}

$$cells.forEach(($cell, index)=>{
    $cell.querySelector('.Biz').addEventListener('click',(e)=>{
        e.target.classList.add('dead');
        e.target.classList.add('hidden');
        score+=10;
        $score.textContent =score;
        clearTimeout(holes[index]); //기존 내려가는 타이머 제거
        setTimeout(()=>{
            holes[index] = 0;
            e.target.classList.remove('dead');
        },1000);
    });
    $cell.querySelector('.bomb').addEventListener('click',(e)=>{
        e.target.classList.add('boom');
        e.target.classList.add('hidden');
        score-=10;
        $score.textContent =score;
        clearTimeout(holes[index]);
        setTimeout(()=>{
            holes[index]=0;
            e.target.classList.remove('boom');
        },1000)
    })
});