<?
	include "../include/global_var.php";

	if( !isset( $_SESSION[wt_pid] ) or !isset( $_SESSION[wt_pidx] ) ) {
		echo "<meta http-equiv='Refresh' content='0; URL=../member_info/login.php'>"; 
		err_msg1( "로그인을 먼저 하여 주십시요" );
		exit;
	}
	
	$db_connect 	= db_connect( $host, $dbid, $dbpass, $dbname );
	if( $wm_idx )  {
		if( $wm_delete ) {
			$db_query	= "delete from wt_member where wm_idx='$wm_idx'";
		} else {
			$db_query	= "update wt_member set wm_auth=$wm_auth where wm_idx='$wm_idx'";
		}
	} else {
		err_msg( "접근 경로가 잘못되었습니다." );
		exit;
	}
	$result	= mysql_query( $db_query, $db_connect );

	if( !$result ) {
		err_msg( "처리 중 오류가 발생하였습니다." );
	}
	echo "<meta http-equiv='Refresh' content='0; URL=member_list.php'>";
?>