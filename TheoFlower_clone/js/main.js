// var win = $(window);
// // $("h1>p").text("scrollTop:" + win.scrollTop());

// var offset = $('h1').offset();

$(function(){
    $('#gnb li').mouseover(function(){
        $('#gnb a::after').css({display:'block'});
        // $('#snb').css({display:'block'}).animate({opacity: 1},500);
    })
    .mouseout(function(){
        // $(this).css({borderBottom: 'none'});
        // $('#snb').css({display:'none'});
    })
});