<!DOCTYPE HTML>
<?
	include "../include/global_var.php";	
	$search_str = "";
	if( $stype == 1 ) {
		$search_str = " where wn_name like '%$sear_str%'";
	} else if ( $stype == 2 ) {
		$search_str = " where wn_title like '%$sear_str%'";
	}
	$db_connect 	= db_connect( $host, $dbid, $dbpass, $dbname );
	$db_query		= "select * from wt_member order by wm_idx desc";
	$result				= mysql_query( $db_query, $db_connect );
	$total_record	= mysql_num_rows( $result );
	mysql_free_result( $result );
	
	$display_record = 7;
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
	<div class="sub_img6">
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
			<h1 class="sub_title">신규관리자 리스트</h1>
			<span class="sub_nav"><img src="../images/icon_home.png" alt="home"> HOME &gt; 로그인  &gt; 신규관리자리스트</span>
		</div>
		<!-- SUB: 타이틀&네비 종료 -->
		
		
		<!-- SUB CONTENTS: 서브 내용 시작 -->
		<div class="content">
			<p class="tex_ex" >
				<b class="icon_tex">&nbsp;</b>(주)윈투스시스템 신규관리자를 리스트를 보실 수 있습니다.
			</p>
			<!-- TABLE: 공지사항 표 시작 -->
			<div class="notice_table">
			<table>
			<caption>신규관리자</caption>
			<thead>
			<tr>
			<th scope="col">NO.</th>
			<th scope="col">이름</th>
			<th scope="col">아이디</th>
			<th scope="col">이메일</th>
			<th scope="col">연락처</th>
			<th scope="col">등록일</th>
			<th scope="col">승인</th>
			</tr>
			</thead>
			<tbody>	
				<?
					$db_query1  = "select * from wt_member order by wm_idx desc";
					// echo  $db_query1;
					$result1		= mysql_query( $db_query1, $db_connect );
					
					for( $i=1; $record_rows = mysql_fetch_array( $result1 ); $i++ ) {
					$number = $total_record - $i+1;
				?>	
				<tr>
					<td><strong><?=$number?></strong></td>
					<td><a href="member_view.php?wm_idx=<?=$record_rows[wm_idx]?>"><font color="#FB7625"><?=$record_rows[wm_name]?></font></a></td>
					<td><a href="member_view.php?wm_idx=<?=$record_rows[wm_idx]?>"><font color="#FB7625"><?=$record_rows[wm_id]?></font></a></td>
					<td class="tex_left"><?=$record_rows[wm_email]?></td>
					<td><?=$record_rows[wm_mobile]?></td>
					<td><?=$record_rows[wm_wdate]?></td>
					<td><?if( $record_rows[wm_auth]==1 ){?>승인<?} else {?><font color="#FF0000">미승인</font><?}?></td>
				</tr>
				<? 
					}
					mysql_free_result( $result1 );
				?>
				
			</tbody>
			</table>
			</div>
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