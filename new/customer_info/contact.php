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
</head>
<body>
<div id="wrap">	
<!-- Header : TOP MENU & SUB IMAGE시작 -->
<? include "../include/top_menu.php" ?>
<!-- SUB IMAGE 시작 -->
<div class="sub_img_back">
	<div class="sub_img5"><!--#######2014-11-24  클래시명 변경-->
		<ul>
			<li class="img_font">customer center</li>
			<li class="img_font_title">고객센터</li>
		</ul>
	</div>
</div>
<!-- SUB IMAGE 종료 -->



<!-- 서브:왼쪽메뉴,내용 시작 -->
<div id="sub_wrap">
		<!-- LEFT MENU 시작 -->
		<? include "left_menu.php" ?>
		<!-- LEFT MENU 종료 -->
		
	<div class="content_wrap">
		<!-- SUB: 타이틀&네비 시작 -->
		<div class="sub_top">
			<h1 class="sub_title">CONTACT US</h1>
			<span class="sub_nav"><img src="../images/icon_home.png" alt="home"> HOME &gt; 고객센터  &gt; CONTACT US</span>
		</div>
		<!-- SUB: 타이틀&네비 종료 -->
		
		
		<!-- SUB CONTENTS: 서브 내용 시작 -->
		<div class="content">	
			<!-- contact : 시작 -->
			<p class="contact_title_tex"><!--img src="../images/icon_bullet_blue.png" alt="아이콘"--> 궁금하신 사항이 있으시면 문의 주십시요. 친절히 답변해드리겠습니다.</p>
			<img src="../images/img_contact.png" alt="contact">
			<ul class="contact">
				<li class="tex"> CCTV 사업부</li>
				<li>TEL : 070-7798-3698 , FAX : 02-6455-3698 &nbsp; /&nbsp;&nbsp;  E-mail : shinkik@wintussystem.com</li>
			</ul>
			<ul class="contact">
				<li class="tex">&nbsp; LED 사업부&nbsp;</li>
				<li>TEL : 070-8271-0293 , FAX : 02-6455-3698 &nbsp;  /&nbsp;&nbsp;  E-mail : hionglobal@gmail.com</li>
			</ul>
			
			<!-- contact : 종료 -->
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