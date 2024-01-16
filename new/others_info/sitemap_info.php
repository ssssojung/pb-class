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
	<div class="sub_img7">
		<ul>
			<li class="img_font">Terms of Use</li>
			<li class="img_font_title">이용안내</li>
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
			<h1 class="sub_title">사이트맵</h1>
			<span class="sub_nav"><img src="../images/icon_home.png" alt="home"> HOME &gt; 윈투스시스템 &gt; 사이트맵</span>
		</div>
		<!-- SUB: 타이틀&네비 종료 -->
		
		
		<!-- SUB CONTENTS: 서브 내용 시작 -->
		<div class="content">	
			<div class="sitemap_wrap">
			<span>윈투스시스템<br><br><img src="../images/icon_sitemap01.png" alt="윈투스시스템"><br><br>
			<a href="../company_info/greeting.php" class="button0">회사소개</a><br><br>
			<a href="../company_info/certificate.php" class="button0">인증현황</a><br><br>
			<a href="../company_info/history.php" class="button0">연 &nbsp;&nbsp;&nbsp;&nbsp; 혁</a><br><br>
			<a href="../company_info/map1.php" class="button0">오시는길</a><br><br>
			</span>
			<span>사업분야<br><br><img src="../images/icon_sitemap02.png" alt="사업분야"><br><br>
			<a href="../business_info/business_cctv.php" class="button0">CCTV</a><br><br>
			<a href="../business_info/business_led.php" class="button0">LED</a><br><br>
			<!--<a href="" class="button0">기타제품</a><br><br>--></span>
			<span>제품소개<br><br><img src="../images/icon_sitemap03.png" alt="제품소개"><br><br>
			<a href="../product_info/goods_cctv.php" class="button0">CCTV</a><br><br>
			<a href="../product_info/goods_led.php" class="button0">LED</a><br><br>
			<a href="../product_info/goods_etc.php" class="button0">SOLUTION</a><br><br></span>
			<span>파트너<br><br><img src="../images/icon_sitemap04.png" alt="파트너"><br><br><a href="../partner_info/partner.php" class="button0">파트너</a></span>
			<span>고객센터<br><br><img src="../images/icon_sitemap05.png" alt="고객센터"><br><br>
			<a href="../customer_info/notice_list.php" class="button0">공지사항</a><br><br>
			<a href="../customer_info/data_list.php" class="button0">자 료 실</a><br><br>
			<a href="../customer_info/contact.php" class="button0">CONTACT US</a><br><br>
			</span>
			<span>로그인<br><br><img src="../images/icon_sitemap06.png" alt="로그인"><br><br>
			<a href="../member_info/login.php" class="button0">로그인</a>&nbsp;<br><br>
			<a href="../member_info/id_search.php" class="button0">ID,PW찾기</a>&nbsp;<br><br>
			<a href="../member_info/member_join.php" class="button0">신규관리자등록</a>&nbsp;<br><br></span>
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