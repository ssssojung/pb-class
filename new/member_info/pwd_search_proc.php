<?
	include "../include/global_var.php";
	
	$db_connect 	= db_connect( $host, $dbid, $dbpass, $dbname );
	
	if( !$tName || !$tId ||!$tEmail1 || !$tEmail2 ) {
		err_msg( '접속 경로가 올바르지 않습니다.' );
	}
	$tEmail1 			= addslashes( $tEmail1 );
	$tEmail2 			= addslashes( $tEmail2 );
	$email_addr 	= $tEmail1."@".$tEmail2;	
	
	$tId 					= addslashes( $tId );
	$db_query 		=	"select  wm_passwd from wt_member where wm_id='$tId' and wm_name='$tName' and wm_email='$email_addr'";
	
	$result 	 		= mysql_query( $db_query, $db_connect );
	$result_record = mysql_fetch_array( $result );
	mysql_free_result( $result );

	if( !$result_record ) {
		err_msg( '일치하는 정보가 존재하지 않습니다.' );
	} else {
		err_msg( "비밀번호는 [$result_record[wm_passwd]] 입니다." );
		echo("<meta http-equiv='Refresh' content='0; URL=../index.php'>");
	}
?>
