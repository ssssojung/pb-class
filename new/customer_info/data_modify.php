<!DOCTYPE HTML>
<?
	include "../include/global_var.php";	
	
	if( !isset( $_SESSION[wt_pid] ) or !isset( $_SESSION[wt_pidx] ) ) {
		echo "<meta http-equiv='Refresh' content='0; URL=../member_info/login.php'>"; 
		err_msg1( "로그인을 먼저 하여 주십시요" );
		exit;
	}

	$db_connect = db_connect( $host, $dbid, $dbpass, $dbname );

	if( $wd_idx ) {
		$db_query		= "select * from wt_data where wd_idx=$wd_idx";
		$result 			= mysql_query( $db_query, $db_connect );
		$record_rows	= mysql_fetch_array( $result );
		mysql_free_result( $result );

		if( $result ) {
			$wd_title				= stripslashes($record_rows["wd_title"]);
			$wd_file				= stripslashes($record_rows["wd_file"]);
			$wd_modelname	= stripslashes($record_rows["wd_modelname"]);
		} else {
			err_msg( "결과가 존재하지 않습니다." );
			exit;
		}		
	} else {
		err_msg( "접근 경로가 잘못되었습니다." );
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
				<input type="hidden" id="page" name="page" value="<?=$page?>">
				<input type="hidden" id="wd_idx" name="wd_idx" value="<?=$wd_idx?>">
				<tr style="background-color:#f9f9f9;border-top:2px solid #d5d5d5;">
					<td style="text-align:right;">제품/모델명</td>
					<td><input type="text" name="goods_model" id="goods_model" value="<?=$wd_modelname?>" size="80"/></td>
				</tr>
				<tr>
					<td style="text-align:right;">제&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;목</td>
					<td><input type="text" name="goods_title" id="goods_title" value="<?=$wd_title?>" size="80" /></td>
				</tr>
				<tr>
					<td style="text-align:right;" >첨부파일</td>
					<td><input type="file" name="goods_data" id="goods_data" size="51" style="margin-left:-187px;" /> </td>
				</tr>
				</form>
				</tbody>
				</table>
			</div>
			<div class="blank"></div>
			<!--
			<textarea cols="90" rows="15" id="comment"></textarea> 
			-->
			<div class="btn_position"><a href="javascript:goodsdata_check()" class="button">저장</a> <a href="data_delete_proc.php?page=<?=$page?>&wd_idx=<?=$wd_idx?>" class="button">삭제</a>  <a href="data_list.php?page=<?=$page?>" class="button">취소</a> </div><!--button -->
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