<!DOCTYPE HTML>
<?
	include "../include/global_var.php";	
?>
<html lang="ko">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<script type="text/javascript" src="../js/html5shiv.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/common.css">
	<link rel="shortcut icon" href="../images/favicon/favicon.ico">
	
	<title><?=$siteTitle?></title>
	
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/top_menu.css" media="all" />
	<script type="text/javascript" src="../js/member_info.js"></script>	
	<!--////팝업//////-->
	
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script> 	
<!--드래그 할수 있는 기능을 사용하기 위해서 draggable();-->
	<script>
		function wrapWindowByMask() {
			//화면의 높이와 너비를 구한다.
			var maskHeight = $(document).height(); 
			var maskWidth = $(window).width();

			//문서영역의 크기 
			console.log( "document 사이즈:"+ $(document).width() + "*" + $(document).height()); 
			//브라우저에서 문서가 보여지는 영역의 크기
			console.log( "window 사이즈:"+ $(window).width() + "*" + $(window).height());		

			//마스크의 높이와 너비를 화면 것으로 만들어 전체 화면을 채운다.
			$('#mask').css({
				'width' : maskWidth,
				'height' : maskHeight
			});

			//애니메이션 효과
			//$('#mask').fadeIn(1000);      
			$('#mask').fadeTo("slow", 0.5);
		}

		function popupOpen() {
			$('.layerpop').css("position", "absolute");
			//영역 가운에데 레이어를 뛰우기 위해 위치 계산 
			$('.layerpop').css("top",(($(window).height() - $('.layerpop').outerHeight()) / 2) + $(window).scrollTop());
			$('.layerpop').css("left",(($(window).width() - $('.layerpop').outerWidth()) / 2) + $(window).scrollLeft());
			$('.layerpop').draggable();
			$('#layerbox').show();
		}

		function popupClose() {
			$('#layerbox').hide();
			$('#mask').hide();
		}

		function goDetail() {

			/*팝업 오픈전 별도의 작업이 있을경우 구현*/ 

			popupOpen(); //레이어 팝업창 오픈 
			wrapWindowByMask(); //화면 마스크 효과 
		}
	</script>
	
</head>
<body>
<div id="wrap">	
<!-- Header : TOP MENU & SUB IMAGE시작 -->
<? include "../include/top_menu.php" ?>
<!-- SUB IMAGE 시작 -->
<div class="sub_img_back">
	<div class="sub_img6">
		<ul>
			<li class="img_font">Login</li>
			<li class="img_font_title">로그인</li>
		</ul>
	</div>
</div>
<!-- SUB IMAGE 종료 -->
<!-- Header : TOP MENU & SUB IMAGE끝 -->

<!-- 서브:왼쪽메뉴,내용 시작 -->
<div id="sub_wrap">
		<!-- LEFT MENU 시작 -->
		<? include "left_menu.php" ?>
		<!-- LEFT MENU 종료 -->
		
	<div class="content_wrap">
		<!-- SUB: 타이틀&네비 시작 -->
		<div class="sub_top">
			<h1 class="sub_title">신규관리자 등록</h1>
			<span class="sub_nav"><img src="../images/icon_home.png" alt="home"> HOME &gt; 로그인  &gt; 신규관리자등록</span>
		</div>
		<!-- SUB: 타이틀&네비 종료 -->
		
		
		<!-- SUB CONTENTS: 서브 내용 시작 -->
		<div class="content">	
		<!--텝메뉴 : 시작-->
		<div class="member_tabs">
		<img src="../images/tab_mem01_on.gif"><img src="../images/tab_mem02_off.gif">
		</div>
		<!--텝메뉴 : 종료-->
		<!-- 회원가입 : 시작 -->
		<div class="mem_wrap">
			<form action="member_join_proc.php" method="post" id="fmMemberInfo" name="fmMemberInfo">
				<fieldset>
					<legend>(주)윈투스시스템 신규관리자를 등록하실 수 있습니다.</legend>
					<ul>
						<li>
						<label for="id"><b class="icon_start">＊</b> 아이디</label>
						<input type="text" id="tId" name="tId" style="margin-left:-143px;" />
						<a href="javascript:check_ID_Window('id_overlap.php')" class="button2" onClick="javascript:goDetail('테스트');"> 중복확인</a>
						</li>
					</ul>
					<ul>
						<li>
						<label for="pw"><b class="icon_start">＊</b>비밀번호</label>
						<input type="password" id="tPassword1" name="tPassword1"/>
						</li>
						<li class="text01">특수문자, 한글, 공백을 포함할 수 있으며 모든 소문자를 처리합니다.( 6 ~ 10자 사이) </li>
					</ul>
					<ul>
						<li>
						<label for="pw2"><b class="icon_start">＊</b>비밀번호 확인</label>
						<input type="password" id="tPassword2" name="tPassword2" />
						</li>
						<li class="text01">특수문자, 한글, 공백을 포함할 수 있으며 모든 소문자를 처리합니다.( 6 ~ 10자 사이) </li>
					</ul>
					<ul>
						<li>
						<label for="name"><b class="icon_start">＊</b>이름</label>
						<input type="text" id="tName" name="tName"/>
						</li>
					</ul>
					<ul>
						<li>
						<label for="mail"><b class="icon_start">＊</b>이메일주소</label>
						 <input type="text" id="tEmail1" name="tEmail1" class="box_m" style="margin:0 25px 0 52px;"/>
						 <span style="float:left;padding-right:10px;margin-top:3px;">＠</span>
						 <input type="text" id="tEmail2" name="tEmail2" class="box_m" />
						 <select id="slEmail" name="slEmail" class="box01" style="margin-left:20px;">
							<option value="naver.com">naver.com</option>
							<option value="daum.com">daum.com</option>
							<option value="google.com">google.com</option>
							<option value="yahoo.com">yahoo.com</option>
						</select>
						</li>
					</ul>
					<ul>
						<li>
						<label for="tel"><b class="icon_start">＊</b>전화번호</label>
						<select id="slPhone" name="slPhone" class="box01">
							<option value="02">02</option>
							<option value="032">032</option>
							<option value="031">031</option>
						</select>
						<span style="float:left;padding:0 0px 0 10px;margin-top:3px;">-</span>
						<input type="text" id="tPhone1" name="tPhone1" class="box_s"/>
						<span style="float:left;padding:0 0px 0 10px;margin-top:3px;">-</span>
						<input type="text" id="tPhone2" name="tPhone2" class="box_s" />
						</li>
					</ul>
					<ul>
						<li>
						<label for="phone"><b class="icon_start">＊</b>휴대폰번호</label>
						<select id="slMobile" name="slMobile" class="box01">
							<option value="010">010</option>
							<option value="011">011</option>
							<option value="017">017</option>
						</select>
						<span style="float:left;padding:0 0px 0 10px;margin-top:3px;">-</span>
						<input type="text" id="tMobile1" name="tMobile1" class="box_s"/>
						<span style="float:left;padding:0 0px 0 10px;margin-top:3px;">-</span>
						<input type="text" id="tMobile2" name="tMobile2" class="box_s"/>
						</li>
					</ul>
				</fieldset>
			</form>
		</div>
		<div style="float:right;padding:30px 0;"><a href="javascript:input_check()" class="button2">회원가입</a> <a href="" class="button2">취소</a></div>
		
		<!-- 회원가입 : 종료 -->
		</div>	

		<!-- SUB CONTENTS: 서브 내용 종료 -->
		
		
		
		<!-- 팝업뜰때 배경 -->
		<div id="mask"></div>
		
		<!--Popup Start -->
		<div id="layerbox" class="layerpop"style="width: 422px; height: 297px;">
			<div class="layerpop_area">
				<div class="title">아이디 중복확인</div>
				<a href="javascript:popupClose();" class="layerpop_close" id="layerbox_close"></a> <br>
				<div class="content">
				<ul>
					<li><b>systemid11</b>는 사용 가능한 회원 ID 입니다.<br/>
					<b>systemid11</b>을(를) 사용하시겠습니까?</li>
					<li><input type="text" id="tel" class="box_s" /><a href="" class="button4">조회하기</a></li>
					<li><a href="" class="button5">사용하기</a></li>
				</ul>
				</div>
			</div>
		</div>
		<!--Popup End -->
	</div>
</div>
<!-- 서브:왼쪽메뉴,내용 종료 -->

<!-- Footer :  시작 -->
<? include "../include/footer.php" ?>
<!-- Footer :  종료 -->
</div>
</body>
</html>