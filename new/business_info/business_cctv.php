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
			<h1 class="sub_title">CCTV</h1>
			<span class="sub_nav"><img src="../images/icon_home.png" alt="home"> HOME &gt; 사업분야 &gt; CCTV</span>
		</div>
		<!-- SUB: 타이틀&네비 종료 -->
		
		
		<!-- SUB CONTENTS: 서브 내용 시작 -->
		<div class="content">	
			<div class="business_wrap"> 
				<div class="busi_cctv_tex">
					<h1>CCTV</h1>
					<h2>FIELD of BUSINESS</h2>
					<P>시민의 안전과 밝은 미래를 위해 위해 뛰어 다니는 
					일꾼 기업을 꿈꾸며..</P>
					<br/><a href="../product_info/goods_cctv.php" class="button1"><b style="color:#519ddc;">＋ CCTV제품보기</b></a>
				</div>
				<div class="busi_cctv_img"><img src="../images/img_busi_cctv_top.png" alt="CCTV사업분야"></div>
				<dl class="busi_cctv_01">		
					<dt><br><b>다목적 U-통합 방범 시스템</b></dt>
					<dd>통합 방범 CCTV 시스템 구축</dd>
					<dd>고화질 카메라를 통한 최적의 화질 제공</dd>
					<dd>방범, 불법주정차, 문제차량 등 다목적 CCTV 기능제공</dd>
					<dd>문제차량(체납, 수배)을 관련청 DB에 연동하여 객체의 좌표 값을 통항 자동 축적</dd>
					<dd>얼굴인식을 통한 범죄자 인식 및 추적
					<br><img src="../images/img_busi_cctv_01_1.png" alt="CCTV" style="margin-left:-28px;"></dd>
				</dl>
				<dl class="busi_cctv_02">		
					<dt><br><b>U-통합 관제 상황실 시스템</b></dt>
					<dd>실시간 모니터링에 의한 사건/사고 사전예방 효과</dd>
					<dd>직관적 화면 조작으로 상황실 운영 효율성 증대</dd>
					<dd>다중 영상 고화질 표출로 시스템 효용성 제고</dd>
					<dd>시스템 확장시 추가비용 절감</dd>
					<dd>통합관제 VMS 솔루션 및  3RD Party 를 통한 다양한 기능 제공</dd>
					<dd>영상분석 및 지능형 시스템을 통한  효율적인 운영</dd>
				</dl>
					<dl class="busi_cctv_03">		
					<dt><br><b>연간 유지보수 점검  ＆ 시스템 업그레이드</b></dt>
					<dd>연구인력 현장배치</dd>
					<dd>무빙센터 차량 및 크레인 운영</dd>
					<dd>검증된 장비 이중화 구성</dd>
					<dd>유지보수 조직 운영</dd>
				</dl>
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