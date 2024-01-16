<!DOCTYPE HTML>
<?
	include "../include/global_var.php";	
?>
<html lang="ko">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	
	<script type="text/javascript" src="../js/html5shiv.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/common.css">
	<link rel="shortcut icon" href="../images/favicon/favicon.ico">
	
	<title><?=$siteTitle?></title>

	
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/top_menu.css" media="all" />
	<script type="text/javascript" src="../js/member_info.js"></script>	
	
	<!--/////팝업창 띄우기/////--><!--#######2014-11-23 팝업추가-->
	<script type="text/javascript">
	 $(function(){
	  $('.popup').click(function(event){
	   var href = $(this).attr('href');
	   var width = $(this).attr('data-width');
	   var height = $(this).attr('data-height');
	   
	   //팝업창 생성
	   window.open(href,'popup','width='+width+',height='+height+'');
	   
	   //기본이벤트 제거
	   event.preventDefault();
	  });
	 });
	 /* 이벤트 생성시 인라인 방식은 권장사항이 아니며 이벤트 연결은 script에서 연결 및 실행하도록 하는 것이 권장사항임 */
	 
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
<!-- Hearder : TOP MENU & SUB IMAGE종료 -->



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
		<img src="../images/tab_mem01_on.gif" alt="회원정보입력"><img src="../images/tab_mem02_off.gif" alt="회원가입완료">
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
						<!--<a href="id_overlap.php" class="button2" title="id_ok"  data-width="600"  data-height="400"class="popup">  중복확인</a><!--#######2014-11-23 팝업추가-->
						<a href="javascript:check_ID_Window('id_overlap.php')" class="button2"> 중복확인</a>
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
		
		
		
		<!-- 팝업뜰때 배경 --><!--####2014-11-23 삭제-->

		
		<!--Popup Start --><!--####2014-11-23 삭제-->
		
	</div>
</div>
<!-- 서브:왼쪽메뉴,내용 종료 -->

<!-- Footer :  시작 -->
<? include "../include/footer.php" ?>
<!-- Footer :  종료 -->
</div>
</body>
</html>