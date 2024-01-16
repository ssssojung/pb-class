<?
	include "../include/global_var.php";
	
	$db_connect 	= db_connect( $host, $dbid, $dbpass, $dbname );
	$notice_contents	= $_REQUEST["notice_contents"];
	$notice_contents	= addslashes($notice_contents);
	
	if( $wn_idx ) {
		$db_query	= "update wt_notice set wn_title='$notice_title', wn_contents='$notice_contents' where wn_idx='$wn_idx'";
	} else {
		$db_query	= "insert into wt_notice( wn_title, wn_wm_idx, wn_contents, wn_hit, wn_wdate ) values( '$notice_title', $_SESSION[wt_pidx], '$notice_contents', 0, now() )";
	}
	$result	= mysql_query( $db_query, $db_connect );

	if( !$result ) {
		echo "failed : " . mysql_error();
	}
	if( $wn_idx ) {
		echo "<meta http-equiv='Refresh' content='0; URL=notice_list.php?page=$page'>";
	} else {
		echo "<meta http-equiv='Refresh' content='0; URL=notice_list.php'>";
	}
?>