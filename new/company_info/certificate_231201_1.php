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
			<h1 class="sub_title">인증현황</h1>
			<span class="sub_nav"><img src="../images/icon_home.png" alt="home"> HOME &gt; 윈투스시스템 &gt; 인증현황</span>
		</div>
		<!-- SUB: 타이틀&네비 종료 -->
		
		
		<!-- SUB CONTENTS: 서브 내용 시작 -->
		<div class="content" style="padding:0;">	
			<div class="certificate_wrap">
				<!-- <img src="../images/img_cer.png" alt="특허 및 인증현황"> -->
				<!--p> <img src="../images/icon_bullet_blue.png" alt="아이콘"> 이미지를 클릭하시면 확대된 화면을 보실 수 있습니다.</p-->
				<ul>
					<li><img src="../images/certificate/img_certificate01_s.png" alt="" /><br><br><b>사업자등록증</b></li>
					<li><img src="../images/certificate/img_certificate02_s.png" alt="" /><br><br><b>공장등록증</b></li>
					<li><img src="../images/certificate/img_certificate03_s.png" alt="" /><br><br><b>정보통신공사업등록증</b></li>				
					<li><img src="../images/certificate/img_certificate04_s.png" alt="" /><br><br><b>소프트웨어<br>사업자신고확인서</b></li>
					<li><img src="../images/certificate/img_certificate05_s.png" alt="" /><br><br><b>중소기업확인서</b></li>
				</ul>
				<ul>
					<li><img src="../images/certificate/img_certificate06_s.png" alt="" /><br><br><b>조달청경쟁입찰<br>참가자격등록증</b></li>				
					<li><img src="../images/certificate/img_certificate07_s.jpg" alt="" /><br><br><b>기업부설연구소<br>인정서</b></li>
					<li><img src="../images/certificate/img_certificate08_s.jpg" alt="" /><br><br><b>경영혁신형<br>중소기업확인서</b></li>
					<li><img src="../images/certificate/img_certificate09_s.jpg" alt="" /><br><br><b>기술혁신형<br>중소기업확인서<br>&nbsp;</br></li>				
					<li><img src="../images/certificate/img_certificate10_s.jpg" alt="" /><br><br><b>ISO90001<br>인증서</br></li>
				</ul>
				<ul>
				</ul>
				<ul>
					<li><img src="../images/certificate/img_certificate11_s.jpg" alt="" /><br><br><b>ISO안전보건경영시스템<br>인증서</br></li>
					<li><img src="../images/certificate/img_certificate12_s.jpg" alt="" /><br><br><b>직접생산확인증명서<br>감시및탐지장비</b></li>
					<li><img src="../images/certificate/img_certificate13_s.jpg" alt="" /><br><br><b>직접생산확인증명서<br>소프트웨어</b></li>
					<li><img src="../images/certificate/img_certificate14_s.jpg" alt="" /><br><br><b>소프트웨어품질인증서(GS)<br><i style="font-size:12px;">CCTV 통합운영관리프로그램 v1.0(TM-Watch v1.0)</i></br></li>
					<li><img src="../images/certificate/img_certificate15_s.jpg" alt="" /><br><br><b>15.소프트웨어품질인증서(GS)<br><i style="font-size:12px;">CCTV관리시스템 v1.0.0.0 (TM-NMS v1.0.0.0)</i></b></li>
				</ul>
				<ul>
				</ul>
				<ul>
					<li><img src="../images/img_certificate16_s.jpg" alt="" /><br><br><b>000</b></li>
					<li><img src="../images/img_certificate17_s.jpg" alt="" /><br><br><b>000</b></li>
					<li><img src="../images/img_certificate18_s.jpg" alt="" /><br><br><b>000</b></li>
					<li><img src="../images/img_certificate19_s.jpg" alt="" /><br><br><b>000</b></li>
					<li><img src="../images/img_certificate19-1_s.jpg" alt="" /><br><br><b>000</b></li>
				</ul>
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