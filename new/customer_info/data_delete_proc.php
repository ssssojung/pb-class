<?
	include "../include/global_var.php";	
	
	if( !isset( $_SESSION[wt_pid] ) or !isset( $_SESSION[wt_pidx] ) ) {
		echo "<meta http-equiv='Refresh' content='0; URL=../member_info/login.php'>"; 
		err_msg1( "로그인을 먼저 하여 주십시요" );
		exit;
	}
	
	if( !$wd_idx ) {
		err_msg( "접근 경로가 잘못되었습니다." );
		exit;
	}
	
	$db_connect = db_connect( $host, $dbid, $dbpass, $dbname );

	$db_query	= "delete from wt_data where wd_idx='$wd_idx'";
	$result			= mysql_query( $db_query, $db_connect );

	if( !$result ) {
		err_msg( "삭제 처리중 오류가 발생하였습니다." );
		exit;
	}

	echo "<meta http-equiv='Refresh' content='0; URL=data_list.php?page=$page'>";
?>