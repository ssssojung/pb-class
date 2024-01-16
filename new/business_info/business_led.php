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
	<div class="sub_img2">
		<ul>
			<li class="img_font">Field of Business</li>
			<li class="img_font_title">사업분야</li>
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
			<h1 class="sub_title">LED</h1>
			<span class="sub_nav"><img src="../images/icon_home.png" alt="home"> HOME &gt; 사업분야 &gt; LED</span>
		</div>
		<!-- SUB: 타이틀&네비 종료 -->
		
		<!-- SUB CONTENTS: 서브 내용 시작 -->
		<div class="content">	
			<div class="business_wrap"> 
				<div class="busi_cctv_tex">
					<h1>LED</h1>
					<h2>FIELD of BUSINESS</h2>
					<P>다양한 디자인, 효과, 빛으로 차별화를 선도하는 기업</P>
					<br/><a href="../product_info/goods_led.php" class="button1"><b style="color:#519ddc;">＋ LED제품보기</b></a>
				</div>
				<div class="busi_cctv_img"><img src="../images/img_busi_led_top.png" alt="led사업분야"></div>

				<ul class="busi_led">
					<li>
						<dl class="busi_led_01">		
							<dt><br><b>전기료, 발열</b></dt>
							<dd>Electricity Comparison</dd>
							<dd>전기료 비교<br>
							1일 10시간, 365일 사용시 전기료 <br>
							약 30,6600원<br>
							기존 조명에 비해<br> 전기료 대폭절약(70w 기준)<br>
							<img src="../images/img_busi_led_01_1.png" alt="전기료,발열" style="padding-left:-70px;">
							</dd>
							
						</dl>
					</li>
					<li>
					<dl class="busi_led_02">		
						<dt><br><b>친환경- 자외선,적외선</b></dt>
						<dd>No-infrared, ultraviolet<br>
						<img src="../images/img_busi_led_01_2.png" alt="친환경-자외선,적외선"  style="padding-left:-70px;">
						</dd>
						
					</dl>
					</li>
					<li>
						<dl class="busi_led_03">		
						<dt><br><b>긴수명</b></dt>
						<dd>Long life-span & Eco-friendly</dd>
						<dd>Life time comparison 수명비교<br>
						일반 메탈할라이드에 비해 에너지효율이 <br>약 5배 높아최대 5만 시간 이상 사용
						<br>
						<img src="../images/img_busi_led_01_3.png" alt="긴수명"  style="padding-left:-70px;">
						</dd>
						
						</dl>
					</li>
				</ul>
				<div style="text-align:left;">
				<h1><img src="../images/icon_dot.png" alt="LED설치현장" style="vertical-align:middle"> LED설치현장</h1><br>
				<img src="../images/img_busi_led_01_4.png" alt="설치사진"><br><br><br><br>
				</div>
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