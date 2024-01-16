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
	<script type="text/javascript">
		function pw_check() {
			var form = document.frmPasswordConform;
			if( !form.qna_passwd.value  ) {
				alert( "비밀번호를 입력하여 주십시요" );
				form.qna_passwd.focus();
				return false;
			}
			form.submit();
		}
	</script>
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
			<h1 class="sub_title">Q&ampA </h1>
			<span class="sub_nav"><img src="../images/icon_home.png" alt="home"> HOME &gt; 고객센터  &gt; Q&ampA </span>
		</div>
		<!-- SUB: 타이틀&네비 종료 -->
		
		
		<!-- SUB CONTENTS: 서브 내용 시작 -->
		<div class="content">	
			<!-- qna 시작 -->
			<div class="qna_pw">
				<p>
					<strong> Q&ampA확인</strong><br />
					   비밀번호를 입력 후 내용을 확인 또는 삭제 하실 수 있습니다.
				</p>
				<!-- formWrap 시작 -->
				<div class="formWrap">
					<form name="frmPasswordConform" id="frmPasswordConform" method="post" action="qna_pwcheck_proc.php">
					<input type="hidden" id="mode" name="mode" value="<?=$mode?>">
					<input type="hidden" id="wq_idx" name="wq_idx" value="<?=$wq_idx?>">
					<input type="hidden" id="page" name="page" value="<?=$page?>">
					<br />
					<label>비밀번호</label>
					<input id="qna_passwd" name="qna_passwd" class="inpTxt" type="password">
					<input class="btnType2" type="button" onclick="pw_check()" value="확인">
					</form>
				</div>
				<!-- formWrap 종료-->
			</div>
			<!-- qna 종료 -->
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