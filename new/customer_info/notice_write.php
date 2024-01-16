<!DOCTYPE HTML>
<?
	include "../include/global_var.php";	
	
	if( !isset( $_SESSION[wt_pid] ) or !isset( $_SESSION[wt_pidx] ) ) {
		echo "<meta http-equiv='Refresh' content='0; URL=../member_info/login.php'>"; 
		err_msg1( "로그인을 먼저 하여 주십시요" );
		exit;
	}
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
	<script type="text/javascript" src="../navereditor/js/HuskyEZCreator.js" charset="utf-8"></script>
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
			<h1 class="sub_title">공지사항</h1>
			<span class="sub_nav"><img src="../images/icon_home.png" alt="home"> HOME &gt; 고객센터 &gt; 공지사항</span>
		</div>
		<!-- SUB: 타이틀&네비 종료 -->
		
		
		<!-- SUB CONTENTS: 서브 내용 시작 -->
		<div class="content">
			<div class="notice_table">
			<form name="fmNoticeWrite" id="fmNoticeWrite" method="post" action="notice_write_proc.php">
				<table>
				<caption>공지사항 view</caption>
				<tbody>	
				<tr style="background-color:#f9f9f9;border-top:2px solid #d5d5d5;">
					<td style="text-align:right;">제&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;목</td>
					<td><input type="text" name="notice_title" id="notice_title"  size="80" placeholder="제목을 입력하세요"  required/></td>
				</tr>
				<!--
				<tr>
					<td style="text-align:right;">작 &nbsp;성 자</td>
					<td><input type="text" name="" value="" size="80" /></td>
				</tr>
				
				<tr>
					<td style="text-align:right;" >작성일자</td>
					<td><input type="text" name="" value=""  size="80" /></td>
				</tr>
				-->
				</tbody>
				</table>
			</div>
			<textarea cols="100" rows="15" id="notice_contents" name="notice_contents"></textarea> 
			<script type="text/javascript">
				var oEditors = [];
					nhn.husky.EZCreator.createInIFrame({
					oAppRef: oEditors,
					elPlaceHolder: "notice_contents",
					sSkinURI: "../navereditor/SmartEditor2Skin.html",
					fCreator: "createSEditor2",
						htParams :
						{ 
							  fOnBeforeUnload : function()
							  { 
							  }
						} 
				});
				function submitContents() {
					if( !document.fmNoticeWrite.notice_title.value ) {
						alert( "제목을 입력하세요" );
						document.fmNoticeWrite.notice_title.focus();
						return;
					}
					oEditors.getById["notice_contents"].exec("UPDATE_CONTENTS_FIELD", []); 
					try {
						document.fmNoticeWrite.submit();
					} catch(e) {alert("글쓰기 작성 중 오류 발생");}
				}
			</script>
			<div class="btn_position"><a href="javascript:submitContents()" class="button">저장</a><!-- <a href="#" class="button">수정</a> <a href="#" class="button">삭제</a>  --><a href="notice_list.php" class="button">취소</a> </div><!--button -->
			</form>
		</div>
		<div class="blank"></div>
		<!-- SUB CONTENTS: 서브 내용 종료 -->
	</div>
</div>
<!-- Footer :  시작 -->
<? include "../include/footer.php" ?>
<!-- Footer :  종료 -->
</div>
</body>
</html>