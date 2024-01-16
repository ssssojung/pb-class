<!DOCTYPE HTML>
<?
	include "../include/global_var.php";	
	$db_connect = db_connect( $host, $dbid, $dbpass, $dbname );

	if( !isset( $_SESSION[wt_pid] ) or !isset( $_SESSION[wt_pidx] ) ) {
		echo "<meta http-equiv='Refresh' content='0; URL=../member_info/login.php'>"; 
		err_msg1( "로그인을 먼저 하여 주십시요" );
		exit;
	}
	
	if( $wm_idx ) {
		$db_query		= "select * from wt_member where wm_idx=$wm_idx";
		$result 		= mysql_query( $db_query, $db_connect );
		$record_rows	= mysql_fetch_array( $result );
		mysql_free_result( $result );

		if( $result ) {
			$wm_name		= $record_rows["wm_name"];
			$wm_id			= $record_rows["wm_id"];
			$wm_email		= $record_rows["wm_email"];
			$wm_phone		= $record_rows["wm_phone"];
			$wm_mobile		= $record_rows["wm_mobile"];
			$wm_auth		= $record_rows["wm_auth"];
		} else {
			err_msg(  "접근 경로가 잘못되었습니다." . mysql_error() );
		}		
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
	<link rel="stylesheet" type="text/css" href="../css/top_menu.css" media="all" />
	<script type="text/javascript" src="../js/member_info.js"></script>	
</head>
<body>
<div id="wrap">
<!-- Header : TOP MENU & SUB IMAGE시작 -->
<? include "../include/top_menu.php" ?>
<!-- SUB IMAGE 시작 -->
<div class="sub_img_back">
	<div class="sub_img5">
		<ul>
			<li class="img_font">Login</li>
			<li class="img_font_title">로그인</li>
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
			<h1 class="sub_title">신규관리자 등록</h1>
			<span class="sub_nav"><img src="../images/icon_home.png" alt="home"> HOME &gt; 로그인  &gt; 신규관리자등록</span>
		</div>
		<!-- SUB: 타이틀&네비 종료 -->
		
		
		<!-- SUB CONTENTS: 서브 내용 시작 -->
		<div class="content">
			<!-- TABLE: 공지사항 표 시작 -->
			<div class="mem_wrap">
				<ul>
					<li>
					<label for="id"><b class="icon_start">＊</b> 아이디</label>
					<span style="float:left">&nbsp;<?=$wm_id?></span>
					<!--<a href="id_overlap.php" class="button2" title="id_ok"  data-width="600"  data-height="400"class="popup">  중복확인</a><!--#######2014-11-23 팝업추가-->
					</li>
				</ul>
				<!--
				<ul>
					<li>
					<label for="pw"><b class="icon_start">＊</b>비밀번호</label>
					<input type="password" id="tPassword1" name="tPassword1"/>
					</li>
					<li class="text01">특수문자, 한글, 공백을 포함할 수 있으며 모든 소문자를 처리합니다.( 6 ~ 10자 사이) </li>
				</ul>
				<ul>
					<li>
					<label for="pw2"><b class="icon_start">＊</b>비밀번호 확인</label>
					<input type="password" id="tPassword2" name="tPassword2" />
					</li>
					<li class="text01">특수문자, 한글, 공백을 포함할 수 있으며 모든 소문자를 처리합니다.( 6 ~ 10자 사이) </li>
				</ul>
				-->
				<ul>
					<li>
					<label for="name"><b class="icon_start">＊</b>이름</label>
					<span style="float:left">&nbsp;<?=$wm_name?></span>
					</li>
				</ul>
				<ul>
					<li>
					<label for="mail"><b class="icon_start">＊</b>이메일주소</label>
					 <span style="float:left">&nbsp;<?=$wm_email?></span>
					 </li>
				</ul>
				<ul>
					<li>
					<label for="tel"><b class="icon_start">＊</b>전화번호</label>
					<span style="float:left">&nbsp;<?=$wm_phone?></span>
					</li>
				</ul>
				<ul>
					<li>
					<label for="phone"><b class="icon_start">＊</b>휴대폰번호</label>
					<span style="float:left">&nbsp;<?=$wm_mobile?></span>
					</li>
				</ul>
				<ul>
					<li>
					</li>
				</ul>
			</div>
			<div style="float:right;padding:30px 0;"><?if( $wm_auth != 1 ) {?><a href="member_view_proc.php?wm_idx=<?=$wm_idx?>&wm_auth=1" class="button2">승인</a><?} else {?><a href="member_view_proc.php?wm_idx=<?=$wm_idx?>&wm_auth=0" class="button2">승인취소</a><?}?> <a href="member_view_proc.php?wm_idx=<?=$wm_idx?>&wm_delete=1" class="button2">삭제</a> <a href="" class="button2">취소</a></div>
			<!-- SUB CONTENTS: 서브 내용 종료 -->
		</div>
	</div>
</div>
<!-- Footer :  시작 -->
<? include "../include/footer.php" ?>

<!-- Footer :  종료 -->
</div>
</body>
</html>