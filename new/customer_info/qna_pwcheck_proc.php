<?
	include "../include/global_var.php";	
	
	$db_connect = db_connect( $host, $dbid, $dbpass, $dbname );

	$db_query		= "select wq_passwd from wt_qanda where wq_idx=$wq_idx";
	$result 			= mysql_query( $db_query, $db_connect );
	$record_rows	= mysql_fetch_array( $result );
	$url = "";
	mysql_free_result( $result );
	if( $result ) {
		$wq_passwd	= $record_rows["wq_passwd"];
		if( $wq_passwd != $qna_passwd ) {
			err_msg( "비밀번호가 일치하지 않습니다." );
			exit;
		} else {
			if( $mode == "e" ) {
				$url = "qna_modify.php";
				$_SESSION["wt_pwcheck"] = "ok";
			} else if( $mode == "d" ) {
				$url = "qna_delete_proc.php";
				$_SESSION["wt_pwcheck"] = "ok";
			}
		}
	} else {
		err_msg( "접근 경로가 잘못되었습니다." );
		exit;
	}	

	echo "<meta http-equiv='Refresh' content='0; URL=$url?wq_idx=$wq_idx&page=$page'>";
?>