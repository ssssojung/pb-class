<!DOCTYPE HTML>
<?
	include "../include/global_var.php";
	
	$db_connect 	= db_connect( $host, $dbid, $dbpass, $dbname );
	
	if( !$tName || !$tEmail1 || !$tEmail2 ) {
		err_msg( '접속 경로가 올바르지 않습니다.' );
	}
	$tEmail1 			= addslashes( $tEmail1 );
	$tEmail2 			= addslashes( $tEmail2 );
	$email_addr 	= $tEmail1."@".$tEmail2;	
	
	$tId 					= addslashes( $tId );
	$db_query 		=	"select  wm_id from wt_member where wm_name='$tName' and wm_email='$email_addr'";
	
	$result 	 		= mysql_query( $db_query, $db_connect );
	$result_record = mysql_fetch_array( $result );
	mysql_free_result( $result );
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
	<div class="sub_img6"><!--#######2014-11-24  클래시명 변경-->
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
			<h1 class="sub_title">아이디＆비밀번호찾기</h1>
			<span class="sub_nav"><img src="../images/icon_home.png" alt="home"> HOME &gt; 로그인  &gt; 아이디＆비밀번호찾기</span>
		</div>
		<!-- SUB: 타이틀&네비 종료 -->
		
		
		<!-- SUB CONTENTS: 서브 내용 시작 -->
		<div class="content">	
			<!-- 아이디,비밀번호찾기 : 시작 -->
			<div class="id_title_tex">아이디/비밀번호를 잊어버리셨습니까? 회원가입 시 등록하신 정보를 입력해 주세요.</div>
			<!--텝메뉴 : 시작-->
			<div class="ubercolortabs">
			<ul>
			<li class="selected"><a href="id_search.php"><span><b>아이디</b>찾기</span></a></li>
			<li><a href="pwd_search.php"><span><b>비밀번호</b>찾기</span></a></li>
			</ul>
			</div>
			<!--텝메뉴 : 종료-->
			
			<!-- 아이디찾기 결과 : 시작 --><!--#####2014-11-24 수정 : 시작-->
			<dl class="id_result">
				<dd><img src="../images/img_idfind.png" alt="아이디조회결과"></dd>
				<dd>아이디 조회결과 입력하신 정보와 일치하는아이디 입니다</dd>
				<?
					if( !$result_record ) {
				?>
						<dd>일치하는 정보가 존재하지 않습니다.</dd>
				<?
					} else {
				?>
						<dd><b><?=$result_record[wm_id]?> </b>입니다.</dd>
				<?
					}
				?>
			</dl>
			<div><a href="login.php" class="button4">로그인</a> <a href="../index.php" class="button1">윈투스시스템 메인화면</a></div>
			<!-- 아이디찾기 결과 : 종료 --><!--#####2014-11-24 수정 : 종료-->
		</div>	

		<!-- SUB CONTENTS: 서브 내용 종료 -->
		<div class="blank"></div>
	</div>
</div>
<!-- 서브:왼쪽메뉴,내용 종료 -->

<!-- Footer :  시작 -->
<? include "../include/footer.php" ?>
<!-- Footer :  종료 -->
</div>
</body>
</html>
