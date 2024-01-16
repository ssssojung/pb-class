<?
	include "../include/global_var.php";
	
	$db_connect 	= db_connect( $host, $dbid, $dbpass, $dbname );

	$qna_contents	= addslashes( $qna_contents );
	
	if( $wq_idx ) {
		if( $wq_mode == "r" ) { 
		
			$db_query		= "select * from wt_qanda where wq_idx=$wq_idx";
			$result 			= mysql_query( $db_query, $db_connect );
			$record_row	= mysql_fetch_array( $result );
			mysql_free_result( $result );
			$wq_groupnum	= $record_row[wq_groupnum];
			$wq_groupdepth 	= $record_row[wq_groupdepth] + 1;
			$wq_groupord		= $record_row[wq_groupord] + 1;
			$db_query = "update wt_qanda set wq_groupord=wq_groupord+1 where wq_groupnum=$record_row[wq_groupnum] and wq_groupord>$record_row[wq_groupord]";
			mysql_query( $db_query, $db_connect );
			$db_query 	= "insert into wt_qanda( wq_name, wq_title, wq_passwd, wq_contents, wq_groupnum, wq_groupdepth, wq_groupord, wq_hit, wq_wdate ) ";
			$db_query 	.= "values('$qna_wname', '$qna_title', '$qna_password', '$qna_contents', $wq_groupnum, $wq_groupdepth, $wq_groupord, 0,  now() )";
			$result 		= mysql_query( $db_query, $db_connect );
		} else {
			$db_query 	= "update wt_qanda set wq_name='$qna_wname', wq_title='$qna_title', wq_passwd='$qna_password', wq_contents='$qna_contents' where wq_idx=$wq_idx";
			$result  	 	= mysql_query( $db_query, $db_connect );
			$_SESSION["wt_pwcheck"] = "";
		}
	} else {
		$db_query	= "insert into wt_qanda( wq_name, wq_title, wq_passwd, wq_contents, wq_groupdepth, wq_groupord, wq_hit, wq_wdate ) 
		                        values( '$qna_wname', '$qna_title', '$qna_password', '$qna_contents', 0, 0, 0, now() )";
		$result			= mysql_query( $db_query, $db_connect );
		$db_query 	= "select last_insert_id()";
		$result			= mysql_query( $db_query, $db_connect );
		$record_row= mysql_fetch_array( $result );
		mysql_free_result( $result );
		$auto_num	= $record_row[0];
		$db_query = "update wt_qanda set wq_groupnum=$auto_num where wq_idx=$auto_num";
		mysql_query( $db_query, $db_connect );
	}

	if( !$result ) {
		echo "failed : " . mysql_error();
		exit;
	}
	echo "<meta http-equiv='Refresh' content='0; URL=qna_list.php?page=$page'>";
?>
