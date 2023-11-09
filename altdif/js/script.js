

// flatpickr

var dateSelector = document.querySelector('.dateSelector');dateSelector.flatpickr();
const dateWrap = document.querySelector('.flatpickr');



flatpickr.localize(flatpickr.l10ns.ko);
flatpickr("mySelector");
dateSelector.flatpickr({
    local: 'ko',
    inline: true,
    altInput: true,
    allowInput: true,
    altFormat: " Y년 j월 H시 ", //
    dateFormat: "Y-M-d",
    minDate: "today",
    maxDate: new Date().fp_incr(21),
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
    // minuteIncrement: 0,
    disableMobile: "true",
    appendTo: dateWrap,
    






})
