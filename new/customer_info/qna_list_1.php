<!DOCTYPE HTML>
<?
	include "../include/global_var.php";	
	$search_str = "";
	if( $mode == "search" ) {
		if( $stype == 1 ) {
			$search_str = " where wq_name like '%$sear_str%'";
		} else if ( $stype == 2 ) {
			$search_str = " where wq_title like '%$sear_str%'";
		}
	}
	$db_connect 	= db_connect( $host, $dbid, $dbpass, $dbname );
	$db_query		= "select * from wt_qanda". $search_str ." order by wq_groupnum desc,wq_groupord asc";
	$result				= mysql_query( $db_query, $db_connect );
	$total_record	= mysql_num_rows( $result );
	// mysql_free_result( $result );
	
	$display_record = 10;	
?>
<html lang="ko">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<script type="text/javascript" src="../js/html5shiv.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/common.css">
	<link rel="shortcut icon" href="../images/favicon/favicon.ico">
	
	<title><?=$siteTitle?></title>
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
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
			<p class="tex_ex" >
				<b class="icon_tex">&nbsp;</b>(주)윈투스시스템에 궁금한 사항이 있으신가요? 
				질문해 주시면 성실히 답변해 드리겠습니다.
			</p>
			<!-- TABLE: 공지사항 표 시작 -->
			<div class="notice_table">
			<table>
			<caption>공지사항</caption>
			<thead>
			<tr>
			<th scope="col">NO.</th>
			<th scope="col">작성자</th>
			<th scope="col">제목</th>
			<th scope="col">작성일자</th>
			<th scope="col">조회수</th>
			</tr>
			</thead>
			<tbody>
				<?
					if( $total_record % $display_record == 0 ) {
						$total_page = floor( $total_record / $display_record );
					} else {
						$total_page = floor( $total_record / $display_record ) + 1;
					}
					if( !$page ) $page = 1;
					$start_num = ( $page - 1 ) * $display_record;
					$number = $total_record - $start_num;

					for( $i = $start_num; $i < $start_num+$display_record && $i < $total_record; $i++ ) {
						mysql_data_seek( $result, $i );
						$record_rows = mysql_fetch_array( $result );
				?>			
				<tr>
					<td><strong><?=$number?></strong></td>
					<td ><?=$record_rows[wq_name]?></td>
					<?if( $record_rows[wq_groupdepth] == 0  ) {?>
					<td  class="tex_left"><strong class="tex_q">질문</strong> <a href="qna_view.php?wq_idx=<?=$record_rows[wq_idx]?>&page=<?=$page?>"><font color="#1B7625"><?=$record_rows[wq_title]?></font></a></td>
					<?} else {?>
					<td class="tex_left"><? for( $j=0; $j<$record_rows[wq_groupdepth]; $j++ ) {?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?}?><b class="re-answer">└</b><strong class="tex_re">답변</strong><a href="qna_view.php?wq_idx=<?=$record_rows[wq_idx]?>&page=<?=$page?>"><font color="#777625"><?=$record_rows[wq_title]?></font></a></td>
					<?}?>
					<td><?=$record_rows[wq_wdate]?></td>
					<td><?=$record_rows[wq_hit]?></td>
				</tr>
				<? 
					$number--;
					}
				?>
				
			</tbody>
			</table>
			</div>
			<!-- TABLE: 공지사항 표 종료 -->
			
			<!--paging :  시작-->
			<div class="paging">
			<a href=""><img src="../images/paging_prev.gif" alt="이전" /></a>
			<?
				for( $i=1; $i<=$total_page; $i++ ) {
					if( $page == $i ) {
			?>
				<span class="paging_list">
				<strong><?=$i?></strong></span>
			<?} else {?>
				<!--<a href=""><img srcn="../images/paging_prev.gif" alt="이전" /></a>-->
				<span class="paging_list"><a href="qna_list.php?page=<?=$i?>"><?=$i?></a></span>
			<?} }?>
			<a href=""><img src="../images/paging_next.gif" alt="다음" /></a>
			</div>
			<!--paging :  종료-->
			<div class="btn_position"> <a href="qna_write.php" class="button">작성</a> </div><!--button -->
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