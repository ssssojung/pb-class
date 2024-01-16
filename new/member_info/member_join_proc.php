<?
	include "../include/global_var.php";
	
	$db_connect 	= db_connect( $host, $dbid, $dbpass, $dbname );
	
	$tId 					= addslashes( $tId );
	$db_query 		=	"select  wm_id from wt_member where wm_id='$tId'";
	$result 	 		= mysql_query( $db_query, $db_connect );
	$record_num	= mysql_num_rows( $result );
	if( $record_num ) {
		echo( "<script>
						window.alert( '이미 존재하는 아이디 입니다.' )
						history.go( -1 )	
				   </script>" );
		exit;
	} else {
		$tEmail1 			= addslashes( $tEmail1 );
		$tEmail2 			= addslashes( $tEmail2 );
		$email_addr 	= $tEmail1."@".$tEmail2;
		$phone_num 	= $slPhone."-".$tPhone1."-".$tPhone2;
		$mobile_num 	= $slMobile."-".$tMobile1."-".$tMobile2;
		
		// echo $tId.$tPassword1.$tName.$email_addr.$phone_num.$mobile_num;
		$db_query = "insert into wt_member ( wm_id, wm_passwd, wm_name, wm_email, wm_phone, wm_mobile, wm_wdate ) 
							 values( '$tId', '$tPassword1', '$tName', '$email_addr', '$phone_num', '$mobile_num', now() )";
		$result		 = mysql_query( $db_query, $db_connect );
		if ( !$result ) {      
		   err_msg( '신규 관리자 등록 중 오류가 발생하였습니다. - '.mysql_error() );
		}
		else {
			/*
			echo( "<script>
						window.alert( '정상적으로 관리자 등록이 완료되었습니다. 로그인 후 사용하세요!');
					  </script>" );
			*/
			echo "<meta http-equiv='Refresh' content='0; URL=member_join_ok.php'>"; 
		}
	}
?>
