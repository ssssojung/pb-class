<!DOCTYPE HTML>
<?
	include "../include/global_var.php";	
	$db_connect = db_connect( $host, $dbid, $dbpass, $dbname );

	if( $wq_idx ) {
		$db_query1	= "update wt_qanda set wq_hit=wq_hit+1 where wq_idx=$wq_idx";
		mysql_query( $db_query1, $db_connect );
		
		$db_query		= "select * from wt_qanda where wq_idx=$wq_idx";
		$result 			= mysql_query( $db_query, $db_connect );
		$record_rows	= mysql_fetch_array( $result );
		mysql_free_result( $result );

		if( $result ) {
			$wq_name			= $record_rows["wq_name"];
			$wq_title				= stripslashes($record_rows["wq_title"]);
			$wq_contents		= stripslashes($record_rows["wq_contents"]);
			$wq_wdate			= $record_rows["wq_wdate"];
			$wq_hit				= $record_rows["wq_hit"];
		} else {
			echo "error" . mysql_error();
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
			<h1 class="sub_title">Q＆A</h1>
			<span class="sub_nav"><img src="../images/icon_home.png" alt="home"> HOME &gt; 고객센터 &gt; Q＆A</span>
		</div>
		<!-- SUB: 타이틀&네비 종료 -->
		
		
		<!-- SUB CONTENTS: 서브 내용 시작 -->
		<div class="content">
			<!-- TABLE: 공지사항 표 시작 -->
			<div class="notice_table">
			<table>
			<caption>Q＆A view</caption>
			<thead>
			<tr>
			<th scope="col" colspan="3" ><a href="" style="color:#000;"><?=$wq_title?></a></th>
			</tr>
			</thead>
			<tbody>	
				<tr>	
					<td colspan="3">
					<span style="float:left">작성자 : <strong><?=$wq_name?></strong></span> 
					<span style="float:right;"><?=$wn_wdate?>&nbsp; | &nbsp; 조회 : <?=$wq_hit?></span>
					</td>
				</tr>
				<tr style="text-align:left;">
					<td colspan="3" style="line-height:20px" class="pst">
					<?=$wq_contents?>
				
					</td>
				</tr>

				<!--
				<tr>
					<td colspan="3" style="text-align:left;">
					<span style="padding-right:20px;"><img src="../images/icon_arrow01.png" alt="이전글"> 이전글</span>
					<a href="" style="color:#676767;" >홈페이지 관련 글입니다.</a>
					</td>
				</tr>
				<tr>
					<td colspan="3" style="text-align:left;">
					<span style="padding-right:20px;"><img src="../images/icon_arrow02.png" alt="이전글"> 다음글</span>
					<a href="" style="color:#676767;" >홈페이지 다음페이지에 나오는 글입니다.</a>
					</td>
				</tr>
				-->
				</tbody>
				</table>
				</div>
				<!-- TABLE: 공지사항 표 종료 -->
			<div class="btn_position"><a href="qna_pwcheck.php?wq_idx=<?=$wq_idx?>&page=<?=$page?>&mode=e" class="button">수정</a> 
			<?if( isset( $_SESSION[wt_pid] ) and isset( $_SESSION[wt_pidx] ) ) {?>
				<a href="qna_reply.php?wq_idx=<?=$wq_idx?>&page=<?=$page?>" class="button">답글</a>
			<?}?>
			<a href="qna_pwcheck.php?page=<?=$page?>&wq_idx=<?=$wq_idx?>&mode=d" class="button">삭제</a>  <a href="qna_list.php?page=<?=$page?>" class="button">목록</a> </div><!--button -->
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