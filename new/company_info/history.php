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
	<div class="sub_img">
		<ul>
			<li class="img_font">Wintus System</li>
			<li class="img_font_title">윈투스시스템</li>
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
			<h1 class="sub_title">연혁</h1>
			<span class="sub_nav"><img src="../images/icon_home.png" alt="home"> HOME &gt; 윈투스시스템 &gt; 연혁</span>
		</div>
		<!-- SUB: 타이틀&네비 종료 -->
		
		
		<!-- SUB CONTENTS: 서브 내용 시작 -->
		<div class="content">	
			<div class="history_wrap">
			<img src="../images/img_history.png"alt="윈투스시스템 연혁" style="padding-top: 60px;">
			</div>
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