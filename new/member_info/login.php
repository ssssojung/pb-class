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
	
	<script type="text/javascript" src="../js/common.js"></script>
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
			<h1 class="sub_title">로그인</h1>
			<span class="sub_nav"><img src="../images/icon_home.png" alt="home"> HOME &gt; 로그인  &gt; 로그인</span>
		</div>
		<!-- SUB: 타이틀&네비 종료 -->
		
		
		<!-- SUB CONTENTS: 서브 내용 시작 -->
		<div class="content">	
			<!-- login 시작 -->
			<div class="login">
				<p>
					<strong>관리자 로그인</strong><br />
					   일반사용자는 사용하실 수 없습니다.
					
				</p>
				<!-- formWrap 시작 -->
				<div class="formWrap">
					<form name="fmLogin" id="fmLogin" method="post" action="login_proc.php">
					<label><img src="../images/icon_id.png" alt="아이디"> 아이디</label>
					<input id="tId"  name="tId"  class="inpTxt" type="text" autofocus>
					<br />
					<label><img src="../images/icon_pw.png" alt="아이디"> 비밀번호</label>
					<input id="tPwd" name="tPwd" class="inpTxt" type="password" onkeydown="if ( event.keyCode == 13 ) { login_check(); return false; }">
					<input class="btnType" type="button" onclick="login_check()" value="LOGIN">
					</form>
				</div>
				<!-- formWrap 종료-->
				<div style="padding-left:28px;"><a href="member_join.php" class="button1">신규관리자등록</a>
				<a href="../index.php" class="button1">취소</a></div>
			</div>
			<!-- login 종료 -->
		</div>	

		<!-- SUB CONTENTS: 서브 내용 종료 -->
	</div>
</div>
<!-- 서브:왼쪽메뉴,내용 종료 -->

<!-- Footer :  시작 -->
<? include "../include/footer.php" ?>
<!-- Footer :  종료 -->
</div>
</body>
</html>