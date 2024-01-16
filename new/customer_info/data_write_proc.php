<?
	include "../include/global_var.php";
	
	// echo $_FILES["goods_data"]["size"];
	
	if( $_FILES["goods_data"]["size"] > 0 ) {
		$file_type 		= $_FILES["goods_data"]["type"];
		$file_name	= $_FILES["goods_data"]["name"];
		$tmp_name	= $_FILES["goods_data"]["tmp_name"];
		$path_parts 	= pathinfo( $file_name );    // 확장자 추출     
		$upload_file = uniqid( "" ).".".$path_parts['extension'];   // 파일명 변경한 파일 
		$data_dir 		= $_SERVER['DOCUMENT_ROOT']."/data/";
		if( move_uploaded_file( $tmp_name, $data_dir.$upload_file ) ) {
			$db_connect 	= db_connect( $host, $dbid, $dbpass, $dbname );
			if( $wd_idx ) {
				$db_query	= "update wt_data set wd_title='$goods_title', wd_modelname='$goods_model', wd_file='$upload_file' where wd_idx='$wd_idx'";
			} else {
				$db_query	= "insert into wt_data( wd_title, wd_wm_idx, wd_modelname, wd_file, wd_hit, wd_wdate ) values( '$goods_title', $_SESSION[wt_pidx], '$goods_model', '$upload_file',
				0, now() )";
			}
			$result	= mysql_query( $db_query, $db_connect );
			if( !$result ) {
				err_msg( "데이터 저장 중 오류 발생" );
			} else {
				if( $wd_idx ) {
					echo "<meta http-equiv='Refresh' content='0; URL=data_list.php?page=$page'>";
				} else {
					echo "<meta http-equiv='Refresh' content='0; URL=data_list.php'>";
				}
			}
		} else {
			err_msg( "파일 업로드 실패" );
		}
	} else {
		err_msg( "첨부한 파일이 잘못되었습니다." );
	}
?>