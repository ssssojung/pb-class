

// flatpickr

var dateSelector = document.querySelector('.dateSelector');
dateSelector.flatpickr();
const dateWrap = document.querySelector('.flatpickr');




flatpickr.localize(flatpickr.l10ns.ko);
flatpickr("mySelector");
dateSelector.flatpickr({
    local: 'ko',
    inline: true,
    altInput: true,
    allowInput: true,
    altFormat: " Y-M-J K h시 ", 
    dateFormat: "Y-M-d",
    minDate: "today",
    maxDate: new Date().fp_incr(30),
    "disable" : [
        function(date){
            return(date.getDay()===1);
        }
    ],
    "local": {
        "firstDayOfWeek": 1
    },


    //시간 제한
    enableTime: true,
    dateFormat: "H:i",
    defaultDate: "11:00",
    minTime: "11:00 ",
    maxTime: "21:00",
    hourIncrement: 2,
    disableMobile: "true",
    appendTo: dateWrap,
    defaultHour: 11
})





const TelChange = (target) =>{ 
    target.value = target.value
    .replace(/[^0-9]/g, '')
    .replace(/^(\d{2,3})(\d{3,4})(\d{4})$/, `$1-$2-$3`);
}

    const checkForm = (e) =>{
        const f = document.querySelector('form');
        var name = f.name.value;
        var email = f.email.value;
        var phone = f.phone.value;
        var people = f.people.value;
        var date = document.querySelector('.dateSelector.form-control.input').value;

        var nameTest = /^[가-힣a-zA-Z]+$/;
        var emailTest = /^[A-Za-z0-9_\.\-]+@[A-Za-z0-9\-]+\.[A-Za-z0-9\-]+/;
        var telTest = /^[0-9]{2,3}-[0-9]{3,4}-[0-9]{4}$/;
        var dateTest = "";

        var bookingInfo = [name,email,phone,people,date]
        for(let i=0; i<bookingInfo.length; i++){ //굳이 필요한가?
            if(bookingInfo[i] == ''){
                swal("","필수 입력란이 비어있습니다. 다시 확인해주세요.","error");
                break;

            }
        }
        if(date == dateTest){
            swal("","입력형식이 올바르지 않습니다." ,"error");
            console.log(f.date)
            return false;

        }else if(nameTest.test(name) == false){
            swal("","입력형식이 올바르지 않습니다." ,"error");
            console.log(f.name);
            
            return false;

        }else if(emailTest.test(email) == false){
            swal("","입력형식이 올바르지 않습니다." ,"error");
            console.log(f.email);
            return false;

        }else if(telTest.test(phone) == false){
            swal("","입력형식이 올바르지 않습니다." ,"error");
            console.log(f.phone);
            return false;
        }else{
            swal({
            title: "예약 확인",
            text: `
            예약자 : ${name}
            예약 날짜/시간 : ${date}
            인원 : ${people}
            `,
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              swal("예약이 완료되었습니다!","", {
                icon: "success",
              });
              f.reset();
            } else {
              swal("예약이 실패되었습니다.");
            }
          });
          
        }
        e.preventDefault();
        
        
        
      
        

    }

// swiper
const swiper = new Swiper('.swiper', {
    loop: true,
    keyboard: {
        enabled: true,
      },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
  });

