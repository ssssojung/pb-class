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
			<h1 class="sub_title">회사소개</h1>
			<span class="sub_nav"><img src="../images/icon_home.png" alt="home"> HOME &gt; 윈투스시스템 &gt; 회사소개</span>
		</div>
		<!-- SUB: 타이틀&네비 종료 -->
		
		
		<!-- SUB CONTENTS: 서브 내용 시작 -->
		<div class="content">	
			<div class="greeting_wrap">
				<div style="text-align:center; margin-top:30px; padding-bottom:20px;"><img src="../images/img_greeting_01.png" alt="회사소개"></div>
				<p style="font-size:20px; color:#006FCF; padding:20px 0; text-align:center; font-weight:500; line-height:26px;">
					(주)윈투스시스템은 지속적인 기술 개발과 가치 창출을 통해<br />정보통신분야 사업을 주력으로 하는 IT 전문기업입니다
				</p>
				<p style="font-size:20px; color:#3f3f3f; margin-bottom: 50px; text-align:center; font-weight:400; line-height:26px;">
					CCTV 통합관제센터의 생활안전, 교통, 재난/재해 등의<br />유지보수 및 관제 서비스를 중심으로 다양한 솔루션을 확보,<br />통합 방범 및 보안 시스템을 구축하고 있습니다
				</p>
				<div style="float:left; text-align:center; padding-bottom:70px;"><img src="../images/img_greeting_02.png" alt="회사소개02"></div>
				<!-- <p style="font-size:13px;">특히,  CCTV 중에서도 교통, 안전, 재난.재해 등의 서비스를 중심으로 
국내 우수기업과의 공동 사업으로  통합관제 및 다양한  지능형 솔루션을 솔루션을 확보하고 통합방범 및 보안시스템을 구축하고 있습니다.
<br><br>

				또한 LED 제품개발, 생산을 통해 가정용 램프부터 산업용까지 생활에 필요한 LED Lamp 를 다양하게 생산, 공급하고 미국 UL인증취득을 통해 해외시장에서도 인정받고 있습니다.
<br><br>

				각 분야별 전문가로 구성되어있는 전 임직원은 고객 여러분께서 만족할 수 있는 차별화된 서비스를 통해, 신뢰받는 사업 동반자가 될 것 을 약속합니다.
<br>

				<br>윈투스시스템         대표이사 
				</p> -->
				<table class="company_info_table">
					<tr>
						<th>회사명</th>
						<td>(주)윈투스시스템</td>
					</tr>
					<tr>
						<th>사업분야</th>
						<td>전자, 통신기기, 정보통신공사, 폐쇄회로(CCTV), 컴퓨터관련(SI)포함 서비스산업,<br/> 패키지 소프트웨어 개발공급사업</td>
					</tr>
					<tr>
						<th>주소</th>
						<td>서울특별시 성동구 연무장5가길 7 (현대테라스타워) E동 1101, 1102호</td>
					</tr>
					<tr>
						<th>공장주소</th>
						<td>경기도 포천시 소홀읍 조가팔로 49-33</td>
					</tr>
					<tr>
						<th>설립연도</th>
						<td>2012년 11월</td>
					</tr>
				</table>
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