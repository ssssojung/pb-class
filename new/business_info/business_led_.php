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
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/top_menu.css" media="all" />
</head>
<body>
<div id="wrap">
<!-- Header : TOP MENU & SUB IMAGE시작 -->
<? include "../include/top_menu.php" ?>
<!-- Hearder : TOP MENU & SUB IMAGE종료 -->

<!-- 서브:왼쪽메뉴,내용 시작 -->
<div id="sub_wrap">
		<!-- LEFT MENU 시작 -->
		<? include "left_menu.php" ?>
		<!-- LEFT MENU 종료 -->		
	<div class="content_wrap">
		<!-- SUB: 타이틀&네비 시작 -->
		<div class="sub_top">
			<h1 class="sub_title">LED</h1>
			<span class="sub_nav"><img src="../images/icon_home.png" alt="home"> HOME &gt; 사업분야 &gt; LED</span>
		</div>
		<!-- SUB: 타이틀&네비 종료 -->
		
		
		<!-- SUB CONTENTS: 서브 내용 시작 -->
		<div class="content">	
			<div class="business_wrap"> 
			<img src="../images/img_business02.png"alt="CCTV 사업분야">
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