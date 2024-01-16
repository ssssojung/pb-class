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
	<link rel = "stylesheet" href="../css/tooltip.css" />
		<!-- javascript-->
	<!-- HTML5인식하지 못하는 브러우저 처리 라이브러리 -->
	<script src="http://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.0.6-development-only.js"></script> 
<!-- 
	<script src="http://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.7.2"></script>  -->

	<!-- jQuery 라이브러리  -->
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<!-- 하위 브라우저 맞추기 위한 스크립트 -->
	<script src="../js/js_tool/tooltip.js"></script>	
	
	<title><?=$siteTitle?></title>

	
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/top_menu.css" media="all" />
	<script type="text/javascript">
		function product_check() {
			var fmCCTV = frmCCTVWrite;
			fmCCTV.submit();
		}
	</script>
	
	
	
</head>
<body>
<div id="wrap">	
<!-- Header : TOP MENU & SUB IMAGE시작 -->
<? include "../include/top_menu.php" ?>
<!-- SUB IMAGE 시작 -->
<div class="sub_img_back">
	<div class="sub_img3"><!--#######2014-11-24  클래시명 변경-->
		<ul>
			<li class="img_font">product descriptions</li>
			<li class="img_font_title">제품소개</li>
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
			<span class="sub_nav"><img src="../images/icon_home.png" alt="home"> HOME &gt; 제품소개 &gt; CCTV</span>
		</div>
		<!-- SUB: 타이틀&네비 종료 -->
		
		
		<!-- SUB CONTENTS: 서브 내용 시작 -->
		<div class="content">	
		<!-- 제품소개입력 : 시작 -->
		<div class="cctv_write_wrap">
			<form id="frmCCTVWrite" name="frmCCTVWrite" method="post" action="goods_cctv_write_proc.php" enctype="multipart/form-data">
				<fieldset>
					<legend>새로운 CCTV 제품을 등록하실 수 있습니다. <img src="../images/icon_help.png">를 마우스 오버하시면 도움말을 보실 수 있습니다.</legend>
					<ul>
						<li>
						<label for=""><b class="icon_start">＊</b> 제품명
						<a class="tooltip photo1" href="#none" style="float:right;">
							<div class="tooltip-box">
								<h4 class="tooltip-title">▼ 빨간색으로 표시된부분이 적용됩니다.</h4><br>
								<img src="../images/help01.png">
							</div>
						</a>
						</label>
						<input type="text" id="wp_modelname" name="wp_modelname"/>
						</li>
					</ul>
					<ul>
						<li>
						<label for=""><b class="icon_start">＊</b> 리스트이미지
						<a class="tooltip photo1" href="#none" style="float:right;">
							<div class="tooltip-box">
								<h4 class="tooltip-title">▼ 빨간색으로 표시된부분이 적용됩니다.</h4><br>
								<img src="../images/help02.png">
							</div>
						</a>
						</label>
						<input type="file" id="wp_productimage" name="wp_productimage"/>
						</li>
					</ul>
					<ul>
						<li style="height:60px;">
						<label for=""><b class="icon_start">＊</b> 리스트제목
						<a class="tooltip photo1" href="#none" style="float:right;">
							<div class="tooltip-box">
								<h4 class="tooltip-title">▼ 빨간색으로 표시된부분이 적용됩니다.</h4><br>
								<img src="../images/help03.png">
							</div>
						</a>
						</label>
						<textarea rows="3" cols="67" name="wp_modelinfo" id="wp_modelinfo"></textarea>
						</li>
					</ul>
					<!--
					<ul>
						<li>
						<label for=""><b class="icon_start">＊</b> 상세보기이미지1</label>
						<input type="file" id="search_detail1" name="search_detail1" />
						</li>
					</ul>
					-->
					<ul>
						<li>
						<label for=""><b class="icon_start">＊</b> 상세보기이미지(도면)
						<a class="tooltip photo1" href="#none" style="float:right;">
							<div class="tooltip-box">
								<h4 class="tooltip-title">▼ 빨간색으로 표시된부분이 적용됩니다.</h4><br>
								<img src="../images/help04.png">
							</div>
						</a>
						</label>
						<input type="file" id="wp_modelplan" name="wp_modelplan" />
						</li>
					</ul>
					<ul>
						<li style="height:60px;">
						<label for=""><b class="icon_start">＊</b> 제품 개요및 특징 요약
						<a class="tooltip photo1" href="#none" style="float:right;">
							<div class="tooltip-box">
								<h4 class="tooltip-title">▼ 빨간색으로 표시된부분이 적용됩니다.</h4><br>
								<img src="../images/help05.png">
							</div>
						</a>
						</label>
						<textarea rows="3" cols="67" name="wp_feature2" id="wp_feature2"></textarea>
						</li>
					</ul>
					<ul>
						<li style="height:60px;">
						<label for=""><b class="icon_start">＊</b> 제품 개요및 특징</label>
						<textarea rows="3" cols="67" name="wp_feature1" id="wp_feature1"></textarea>
						</li>
					</ul>
					<ul>
						<li style="height:60px;">
						<label for=""><b class="icon_start">＊</b> 제품사양<br>(ex : 항목:내용)</label>
						<textarea rows="3" cols="67" name="wp_spec" id="wp_spec"></textarea>
						</li>
					</ul>
					<hr>
					<h1> 다운로드 </h1>
					<ul>
						<li>
						<label for=""><b class="icon_start">＊</b> 카다로그</label>
						<input type="file" id="wp_catadata" name="wp_catadata" />
						</li>
					</ul>
					<ul>
						<li>
						<label for=""><b class="icon_start">＊</b> 도면</label>
						<input type="file" id="wp_plan" name="wp_plan" />
						</li>
					</ul>
					<ul>
						<li>
						<label for=""><b class="icon_start">＊</b> 시험성적서</label>
						<input type="file" id="wp_testreport" name="wp_testreport" />
						</li>
					</ul>
					<ul>
						<li>
						<label for=""><b class="icon_start">＊</b> 인증서</label>
						<input type="file" id="wp_auth" name="wp_auth" />
						</li>
					</ul>
					<ul>
						<li>
						<label for=""><b class="icon_start">＊</b> 메뉴얼</label>
						<input type="file" id="wp_manual" name="wp_manual" />
						</li>
					</ul>
				</fieldset>
			</form>
		</div>
		<div style="float:right;padding:30px 0;"><a href="javascript:product_check()" class="button5">저장</a> <a href="goods_cctv1.php" class="button5">취소</a></div>
		
		<!-- 제품소개입력 : 종료 -->
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