<!DOCTYPE HTML>
<?
	include "../include/global_var.php";	
?>
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
	<div class="sub_img4">
		<ul>
			<li class="img_font">Partner</li>
			<li class="img_font_title">파트너</li>
		</ul>
	</div>
</div>
<!-- SUB IMAGE 종료 -->
<!-- Hearder : TOP MENU & SUB IMAGE종료 -->



<!-- 서브:왼쪽메뉴,내용 시작 -->
<div id="sub_wrap">
		<!-- LEFT MENU 시작 -->
		<div class="left_wrap">	
			<ul class="left_menu_title">
				<li class="left_menu_title_text"><strong>파트너</strong></li>
				<li style="padding-top:5px;">Partner</li>
			</ul>
			<div class="nav_left">
				<ul>
					<li>파트너</li>
				</ul>
			</div>
		</div>
		<!-- LEFT MENU 종료 -->
		
	<div class="content_wrap">
		<!-- SUB: 타이틀&네비 시작 -->
		<div class="sub_top">
			<h1 class="sub_title">파트너</h1>
			<span class="sub_nav"><img src="../images/icon_home.png" alt="home"> HOME &gt; 파트너</span>
		</div>
		<!-- SUB: 타이틀&네비 종료 -->
		
		
		<!-- SUB CONTENTS: 서브 내용 시작 -->
		<div class="content">	
			<div class="partner_wrap"> 
			<img src="../images/img_partner.png"alt="파트너">
			<!--ul>
				<li><img src="../images/img_partner_logo01.png" alt="롯데건설"></li>
				<li><img src="../images/img_partner_logo02.png" alt="Lucis"></li>
				<li><img src="../images/img_partner_logo03.png" alt="Global Telecom"></li>
			</ul>
			<ul>
				<li><img src="../images/img_partner_logo04.png" alt="영현정보통신"></li>
				<li><img src="../images/img_partner_logo05.png" alt="건아정보기술"></li>
				<li><img src="../images/img_partner_logo06.png" alt="서울의문동대문구"></li>
			</ul-->
			<ul>
				<li><img src="../images/img_partner_logo07.png" alt="KT"></li>
				<li><img src="../images/img_partner_logo08.png" alt="KT commerce"></li>
				<li><img src="../images/img_partner_logo09.png" alt="코오롱베니트(주)"></li>
			</ul>
			<ul>
				<li><img src="../images/img_partner_logo10.png" alt="S-FORM"></li>
				<li><img src="../images/img_partner_logo11.png" alt="IBM"></li>
				<li><img src="../images/img_partner_logo12.png" alt="INNODEP"></li>
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