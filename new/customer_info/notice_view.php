<!DOCTYPE HTML>
<?
	include "../include/global_var.php";	
	$db_connect = db_connect( $host, $dbid, $dbpass, $dbname );

	if( $wn_idx ) {
		$db_query1	= "update wt_notice set wn_hit=wn_hit+1 where wn_idx=$wn_idx";
		mysql_query( $db_query1, $db_connect );
		
		$db_query		= "select wn.*, wm.wm_name from wt_notice as wn inner join wt_member as wm on wm.wm_idx=wn.wn_wm_idx where wn_idx=$wn_idx";
		$result 			= mysql_query( $db_query, $db_connect );
		$record_rows	= mysql_fetch_array( $result );
		mysql_free_result( $result );

		if( $result ) {
			$wm_name		= $record_rows["wm_name"];
			$wn_title			= stripslashes($record_rows["wn_title"]);
			$wn_contents	= stripslashes($record_rows["wn_contents"]);
			$wn_wdate		= $record_rows["wn_wdate"];
			$wn_hit			= $record_rows["wn_hit"];
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
			<!-- TABLE: 공지사항 표 시작 -->
			<div class="notice_table">
			<table>
			<caption>공지사항 view</caption>
			<thead>
			<tr>
			<th scope="col"  ><a href="" style="color:#000;"><?=$wn_title?></a></th>
			</tr>
			</thead>
			<tbody>	
				<tr>	
					<td >
					<span style="float:left">작성자 : <strong><?=$wm_name?></strong></span> 
					<span style="float:right;"><?=$wn_wdate?>&nbsp; | &nbsp; 조회 : <?=$wn_hit?></span>
					</td>
				</tr>
				<tr style="text-align:left;">
					<td  style="line-height:20px" class="pst">
					<?=$wn_contents?>
					</td>
				</tr>
				</tbody>
				</table>
				</div>
				<div class="blank"></div>
				
				<!-- TABLE: 공지사항 표 종료 -->
			<div class="btn_position"> <a href="notice_modify.php?wn_idx=<?=$wn_idx?>&page=<?=$page?>" class="button">수정</a> <a href="notice_delete_proc.php?page=<?=$page?>&wn_idx=<?=$wn_idx?>" class="button">삭제</a> <a href="notice_list.php?page=<?=$page?>" class="button">목록</a> </div><!--button -->
			<div class="blank"></div>
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