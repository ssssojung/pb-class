(function($){  //자가 실행함수 내부에 jQuery객체를 $에 참조 전달
	$(function(){	//jQuery ready()를 통해 문서가 준비 되면 실행.
		//alert("로드 완료");
		/*
			IE7~IE8브라우저를 위한 PIE 라이브러리 활용
			border-radius / box-shadow / linear-gradient
		*/
		if($.browser.msie && $.browser.version > 6 && $.browser.version < 9) {

			//alert("IE 브라우저의 버전 : "+$.browser.version);
			$.getScript("js/PIE.js", function(){
				//alert("PIE.js 로드 완료")
				$(".tooltip").each(function(){
					PIE.attach(this);
				});

			});
		}


		//CSS3트랜지션을 지원하지 않는 브라우저 판별
		//modernizr.min.js 추가 
		//alert("Modernizr.csstransitions:"+Modernizr.csstransitions);
		if(!Modernizr.csstransitions) {
			// .tooltip-box 요소를 감춥니다.
			$(".tooltip-box").fadeTo(10, 0);
		
			// a.tooltip에 마우스가 올라가면
			$(".tooltip").hover(
				function(){
					// 마우스가 올라왔을 때 처리 동작
					$(this).stop().animate({"border-color":"#fff"},400)
					.find(".tooltip-box").stop()
					.animate({"opacity":1, "bottom":"90px"},400);
				},
				function(){
					// 마우스가 내려갔을 때 처리 동작
					$(this).stop().animate({"border-color":"#4b4b4b"}, 400)
					.find(".tooltip-box").stop()
					.animate({"opacity":0, "bottom":"100px"},400);
				}
			);
		}

	});
		
})(jQuery); //내부에서 jQuery대신 $를 사용하도록 설정
