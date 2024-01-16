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
	<script type="text/javascript" src="../js/common.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/top_menu.css" media="all" />
</head>
<body>
<div id="wrap">	
<!-- Header : TOP MENU & SUB IMAGE시작 -->
<? include "../include/top_menu.php" ?>
<!-- SUB IMAGE 시작 -->
<div class="sub_img_back">
	<div class="sub_img5">
		<ul>
			<li class="img_font">customer center</li>
			<li class="img_font_title">고객센터</li>
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
			<h1 class="sub_title">자료실</h1>
			<span class="sub_nav"><img src="../images/icon_home.png" alt="home"> HOME &gt; 고객센터 &gt; 자료실</span>
		</div>
		<!-- SUB: 타이틀&네비 종료 -->
		
		
		<!-- SUB CONTENTS: 서브 내용 시작 -->
		<div class="content">
			<!-- TABLE: 자료실 표 시작 -->
			<div class="data_table">
				<table>
				<caption>공지사항 view</caption>
				<tbody>	
				<form id="frmGoods_Data" name="frmGoods_Data" method="post" action="data_write_proc.php" enctype="multipart/form-data">
				<tr style="background-color:#f9f9f9;border-top:2px solid #d5d5d5;">
					<td style="text-align:right;">제품/모델명</td>
					<td><input type="text" name="goods_model" id="goods_model" size="80"/></td>
				</tr>
				<tr>
					<td style="text-align:right;">제&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;목</td>
					<td><input type="text" name="goods_title" id="goods_title" size="80" /></td>
				</tr>
				<tr>
					<td style="text-align:right;" >첨부파일</td>
					<td><input type="file" name="goods_data" id="goods_data" size="51" style="margin-left:-187px;" /> </td>
				</tr>
				</form>
				</tbody>
				</table>
			</div>
			<!--
			<textarea cols="90" rows="15" id="comment"></textarea> 
			-->
			<div class="btn_position"><a href="javascript:goodsdata_check()" class="button">저장</a><!-- <a href="#" class="button">수정</a> <a href="#" class="button">삭제</a>-->  <a href="data_list.php?page=<?=$page?>" class="button">취소</a> </div><!--button -->
		</div>
			<!-- TABLE: 자료실 표 종료 -->
		</div>
		<!-- SUB CONTENTS: 서브 내용 종료 -->
		<div class="blank"></div>
	</div>

</div>
<!-- Footer :  시작 -->
<? include "../include/footer.php" ?>
<!-- Footer :  종료 -->
</div>
</body>
</html>