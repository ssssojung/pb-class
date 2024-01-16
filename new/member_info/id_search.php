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

	<script type="text/javascript" src="../js/member_info.js"></script>
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/top_menu.css" media="all" />
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
		<? include "login_left_menu.php" ?>
		<!-- LEFT MENU 종료 -->
		
	<div class="content_wrap">
		<!-- SUB: 타이틀&네비 시작 -->
		<div class="sub_top">
			<h1 class="sub_title">아이디&비밀번호찾기</h1>
			<span class="sub_nav"><img src="../images/icon_home.png" alt="home"> HOME &gt; 로그인  &gt; 아이디&비밀번호찾기</span>
		</div>
		<!-- SUB: 타이틀&네비 종료 -->
		
		
		<!-- SUB CONTENTS: 서브 내용 시작 -->
		<div class="content">	
			<!-- 아이디,비밀번호찾기 : 시작 -->
			<div class="id_title_tex">아이디/비밀번호를 잊어버리셨습니까? 회원가입 시 등록하신 정보를 입력해 주세요.</div>
			<!--텝메뉴 : 시작-->
			<div class="ubercolortabs">
			<ul>
			<li class="selected"><a href="id_search.php"><span><b>아이디</b>찾기</span></a></li>
			<li><a href="pwd_search.php"><span><b>비밀번호</b>찾기</span></a></li>
			</ul>
			</div>
			<!--텝메뉴 : 종료-->
			<div class="mem_wrap">
				<form action="id_search_proc.php" method="post" id="fmIdSearch" name="fmIdSearch">
					<fieldset>
						<legend style="font-size:13px;"></legend>
						<ul>
							<li>
							<label for="name"><b class="icon_start">＊</b>이름</label>
							<input type="text" id="tName" name="tName" />
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
					</fieldset>
				</form>
			</div>
			<div style="float:right;padding:30px 0;"><a href="javascript:idSearch()" class="button2">확 인</a></div>
			<!-- 회원가입 : 종료 -->
			
			
			<!-- 아이디,비밀번호찾기 : 종료 -->
		</div>	

		<!-- SUB CONTENTS: 서브 내용 종료 -->
		<div class="blank"></div>
	</div>
</div>
<!-- 서브:왼쪽메뉴,내용 종료 -->

<!-- Footer :  시작 -->
<? include "../include/footer.php" ?>
<!-- Footer :  종료 -->
</div>
</body>
</html>