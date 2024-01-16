<?
	include "../include/global_var.php";	
	
	if( !isset( $_SESSION[wt_pwcheck] ) or ( $_SESSION[wt_pwcheck] != "ok" ) ){
		err_msg( "접근 경로가 잘못되었습니다." );
		exit;
	}
	
	if( !$wq_idx ) {
		err_msg( "접근 경로가 잘못되었습니다." );
		exit;
	}
	
	$db_connect = db_connect( $host, $dbid, $dbpass, $dbname );

	$db_query	= "delete from wt_qanda where wq_idx='$wq_idx' or wq_groupnum='$wq_idx'";
	$result	= mysql_query( $db_query, $db_connect );

	if( !$result ) {
		err_msg( "접근 경로가 잘못되었습니다.". mysql_error() );
		exit;
	}

	echo "<meta http-equiv='Refresh' content='0; URL=qna_list.php?page=$page'>";
?>