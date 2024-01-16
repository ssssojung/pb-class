<?
	include "../include/global_var.php";
	
	$db_connect 	= db_connect( $host, $dbid, $dbpass, $dbname );
	
	$tId 					= addslashes( $tId );
	$db_query 		=	"select  * from wt_member where wm_id='$tId' and wm_passwd='$tPwd'";
	$result 	 		= mysql_query( $db_query, $db_connect );
	$result_record = mysql_fetch_array( $result );
	mysql_free_result( $result );

	if( !$result_record ) {
		err_msg( '존재하지 않는 회원 아이디거나 비밀번호가 올바르지 않습니다.' );
		exit;
	} else {
		if( $result_record[wm_auth] == 1 ) {
			$_SESSION["wt_pid"]	= $tId;
			$_SESSION["wt_pidx"]	= $result_record[wm_idx];
		} else {
			echo("<meta http-equiv='Refresh' content='0; URL=../index.php'>");
			err_msg1( "회원 접수가 완료 되었습니다.\n 관리자 승인 후 로그인을 하실 수 있습니다." );
		}
		if( $_SESSION["wt_pid"] == "admin" ) {
			echo( "<meta http-equiv='Refresh' content='0; URL=member_list.php'>" );
		} else {
			if( $return_url ) {
				echo( "<meta http-equiv='Refresh' content='0; URL=$return_url'>" );
			} else {
				echo("<meta http-equiv='Refresh' content='0; URL=../index.php'>");
			}
		}
	}
?>
