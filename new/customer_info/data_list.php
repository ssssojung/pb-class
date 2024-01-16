<!DOCTYPE HTML>
<?
	include "../include/global_var.php";	
	
	$search_str = "";
	if( $stype == 1 ) {
		$search_str = " where wd_modelname like '%$sear_str%'";
	} else if ( $stype == 2 ) {
		$search_str = " where wd_title like '%$sear_str%'";
	}
	$db_connect 	= db_connect( $host, $dbid, $dbpass, $dbname );
	$db_query		= "select * from wt_data ". $search_str ." order by wd_idx desc";
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
			<p class="tex_ex" >
				<b class="icon_tex">&nbsp;</b>자료실에서 원하시는 자료를 다운로드 받으실 수 있습니다.
			</p>
			<div class="goods_table" >
			<table>
			<caption>자료실</caption>
			<thead>
			<tr>
			<th scope="col">NO.</th>
			<th scope="col">제품/모델명</th>
			<th scope="col">제목</th>
			<th scope="col">첨부일자</th>
			<th scope="col">다운로드</th>
			</tr>
			</thead>
			<tbody>	
				<?
					if( !$page ) $page = 1;
					$current_page 	= intval( $page );
					$total_page 			= intval( $total_record / $display_record );
					if( $total_page * $display_record != $total_record ) $total_page = $total_page + 1;
					if( $display_record == 1 ) $current_line = 0;
					else $current_line = ( $current_page * $display_record ) - $display_record;
					
					$limit_record = $current_line + $display_record;
					if( $limit_record >= $total_record ) $limit_record = $total_record;
					
					$display_record1 = $limit_record - $current_line;
					
					// echo "current_line = ".$current_line.", display_record1=".$display_record1."<br>";
					$db_query1  = "select * from wt_data ". $search_str ." order by wd_idx desc limit $current_line, $display_record1";
					// echo  $db_query1;
					$result1		= mysql_query( $db_query1, $db_connect );
					
					for( $i=1; $record_rows = mysql_fetch_array( $result1 ); $i++ ) {
					$number = $total_record - ( $i + $current_line ) + 1;
				?>	
				<tr>
					<td><strong><?=$number?></strong></td>
					<td><?=$record_rows[wd_modelname]?></td>
					<td><? if( isset( $_SESSION[wt_pid] ) and isset( $_SESSION[wt_pidx] ) ) {?><a href="data_modify.php?page=<?=$page?>&wd_idx=<?=$record_rows[wd_idx]?>"><font color="#FB7625"><?=$record_rows[wd_title]?></font></a><?} else {?><?=$record_rows[wd_title]?><?}?></td>
					<td><?=$record_rows[wd_wdate]?></td>
					<td><a href="../data/<?=$record_rows[wd_file]?>"><img src="../images/btn_download.png" alt="다운로드"></a></td>
				</tr>
				<? 
					}
					mysql_free_result( $result1 );
				?>
			</tbody>
			</table>
			</div>
			<!-- TABLE: 자료실 표 종료 -->
			
			<!--paging :  시작-->
			<div class="paging">
			<?
				$type = 0;
				$searstr = "";
				$url = "data_list.php?stype=$type&sear_str=$searstr";
				page_avg( $total_page, $current_page, $url );
			?>
			</div>
			<? if( isset( $_SESSION[wt_pid] ) and isset( $_SESSION[wt_pidx] ) ) {?>
			<!--paging :  종료-->
			<div class="btn_position"> <a href="data_write.php" class="button">작성</a> </div><!--button -->
			<?}?>
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