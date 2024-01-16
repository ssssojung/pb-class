<?
	include "../include/global_var.php";
	$data_dir 		= $_SERVER['DOCUMENT_ROOT']."/product/";
	if( !$wp_idx ) {
		if( $_FILES["wp_productimage"]["size"] > 0 ) {
			$file_type 		= $_FILES["wp_productimage"]["type"];
			// if ($file_type != "image/jpeg" && $file_type != "image/x-png"  && $file_type != "image/pjpeg"  && $file_type != "image/png" && $file_type != "image/gif" && $filetype != "image/bmp") { 
			if( !strpos( $file_type, "image" ) ) {
				err_msg( "리스트 이미지 파일 형식이 잘못되었습니다." );
				exit;
			}
			$productimage_name				= $_FILES["wp_productimage"]["name"];
			$productimage_temp_name		= $_FILES["wp_productimage"]["tmp_name"];
			$productimage_extname 			= pathinfo( $productimage_name );    // 확장자 추출    
			$productimage_upload_name 	= uniqid( "" ).".".$productimage_extname['extension'];   // 파일명 변경한 파일 
			move_uploaded_file( $productimage_temp_name, $data_dir.$productimage_upload_name ) ;
		}
		if( $_FILES["wp_modelplan"]["size"] > 0 ) {
			$file_type 		= $_FILES["wp_modelplan"]["type"];
			// if ($file_type != "image/jpeg" && $file_type != "image/x-png"  && $file_type != "image/pjpeg"  && $file_type != "image/png" && $file_type != "image/gif" && $filetype != "image/bmp") { 
			if( !strpos( $file_type, "image" ) ) {
				err_msg( "상세보기 이미지(도면) 파일 형식이 잘못되었습니다." );
				exit;
			}
			$modelplan_name				= $_FILES["wp_modelplan"]["name"];
			$modelplan_temp_name		= $_FILES["wp_modelplan"]["tmp_name"];
			$modelplan_extname 			= pathinfo( $modelplan_name );    // 확장자 추출    
			$modelplan_upload_name 	= uniqid( "" ).".".$modelplan_extname['extension'];   // 파일명 변경한 파일 
			move_uploaded_file( $modelplan_temp_name, $data_dir.$modelplan_upload_name ) ;
		}
		if( $_FILES["wp_catadata"]["size"] > 0 ) {
			$catadata_name				= $_FILES["wp_catadata"]["name"];
			$catadata_temp_name		= $_FILES["wp_catadata"]["tmp_name"];
			$catadata_extname 			= pathinfo( $catadata_name );    // 확장자 추출    
			$catadata_upload_name 	= uniqid( "" ).".".$catadata_extname['extension'];   // 파일명 변경한 파일 
			move_uploaded_file( $catadata_temp_name, $data_dir.$catadata_upload_name ) ;
		}	
		if( $_FILES["wp_plan"]["size"] > 0 ) {
			$plan_name					= $_FILES["wp_plan"]["name"];
			$plan_temp_name		= $_FILES["wp_plan"]["tmp_name"];
			$plan_extname 			= pathinfo( $plan_name );    // 확장자 추출    
			$plan_upload_name 	= uniqid( "" ).".".$plan_extname['extension'];   // 파일명 변경한 파일 
			move_uploaded_file( $plan_temp_name, $data_dir.$plan_upload_name ) ;
		}		
		if( $_FILES["wp_testreport"]["size"] > 0 ) {
			$testreport_name					= $_FILES["wp_testreport"]["name"];
			$testreport_temp_name		= $_FILES["wp_testreport"]["tmp_name"];
			$testreport_extname 			= pathinfo( $testreport_name );    // 확장자 추출    
			$testreport_upload_name 	= uniqid( "" ).".".$testreport_extname['extension'];   // 파일명 변경한 파일 
			move_uploaded_file( $testreport_temp_name, $data_dir.$testreport_upload_name ) ;
		}		
		if( $_FILES["wp_auth"]["size"] > 0 ) {
			$auth_name					= $_FILES["wp_auth"]["name"];
			$auth_temp_name		= $_FILES["wp_auth"]["tmp_name"];
			$auth_extname 			= pathinfo( $auth_name );    // 확장자 추출    
			$auth_upload_name 	= uniqid( "" ).".".$authextname['extension'];   // 파일명 변경한 파일 
			move_uploaded_file( $auth_temp_name, $data_dir.$auth_upload_name ) ;
		}
		if( $_FILES["wp_manual"]["size"] > 0 ) {
			$manual_name					= $_FILES["wp_manual"]["name"];
			$manual_temp_name		= $_FILES["wp_manual"]["tmp_name"];
			$manualextname 			= pathinfo( $manual_name );    // 확장자 추출    
			$manual_upload_name 	= uniqid( "" ).".".$manualextname['extension'];   // 파일명 변경한 파일 
			move_uploaded_file( $manual_temp_name, $data_dir.$manual_upload_name ) ;
		}	
	} else {
		if( $_FILES["wp_productimage"]["size"] > 0 ) {
			$file_type 		= $_FILES["wp_productimage"]["type"];
			// if ($file_type != "image/jpeg" && $file_type != "image/x-png"  && $file_type != "image/pjpeg"  && $file_type != "image/png" && $file_type != "image/gif" && $filetype != "image/bmp") { 
			if( eregi( "image", $file_type ) != 1 ) {
				err_msg( "리스트 이미지 파일 형식이 잘못되었습니다." );
				exit;
			}
			$productimage_name				= $_FILES["wp_productimage"]["name"];
			$productimage_temp_name		= $_FILES["wp_productimage"]["tmp_name"];
			$productimage_extname 			= pathinfo( $productimage_name );    // 확장자 추출    
			$productimage_upload_name 	= uniqid( "" ).".".$productimage_extname['extension'];   // 파일명 변경한 파일 
			move_uploaded_file( $productimage_temp_name, $data_dir.$productimage_upload_name ) ;
		} else {
			$productimage_upload_name  = $wp_bef_productimage;
		}
		if( $_FILES["wp_modelplan"]["size"] > 0 ) {
			$file_type 		= $_FILES["wp_modelplan"]["type"];
			// if ($file_type != "image/jpeg" && $file_type != "image/x-png"  && $file_type != "image/pjpeg"  && $file_type != "image/png" && $file_type != "image/gif" && $filetype != "image/bmp") { 
			if( eregi( "image", $file_type ) != 1 ) {
				err_msg( "상세보기 이미지(도면) 파일 형식이 잘못되었습니다." );
				exit;
			}
			$modelplan_name				= $_FILES["wp_modelplan"]["name"];
			$modelplan_temp_name		= $_FILES["wp_modelplan"]["tmp_name"];
			$modelplan_extname 			= pathinfo( $modelplan_name );    // 확장자 추출    
			$modelplan_upload_name 	= uniqid( "" ).".".$modelplan_extname['extension'];   // 파일명 변경한 파일 
			move_uploaded_file( $modelplan_temp_name, $data_dir.$modelplan_upload_name ) ;
		} else {
			$modelplan_upload_name = $wp_modelplan;
		}
		if( $_FILES["wp_catadata"]["size"] > 0 ) {
			$catadata_name				= $_FILES["wp_catadata"]["name"];
			$catadata_temp_name		= $_FILES["wp_catadata"]["tmp_name"];
			$catadata_extname 			= pathinfo( $catadata_name );    // 확장자 추출    
			$catadata_upload_name 	= uniqid( "" ).".".$catadata_extname['extension'];   // 파일명 변경한 파일 
			move_uploaded_file( $catadata_temp_name, $data_dir.$catadata_upload_name ) ;
		} else {
			$catadata_upload_name = $wp_catadata;
		}
		if( $_FILES["wp_plan"]["size"] > 0 ) {
			$plan_name					= $_FILES["wp_plan"]["name"];
			$plan_temp_name		= $_FILES["wp_plan"]["tmp_name"];
			$plan_extname 			= pathinfo( $plan_name );    // 확장자 추출    
			$plan_upload_name 	= uniqid( "" ).".".$plan_extname['extension'];   // 파일명 변경한 파일 
			move_uploaded_file( $plan_temp_name, $data_dir.$plan_upload_name ) ;
		} else {
			$plan_upload_name = $wp_plan;
		}
		if( $_FILES["wp_testreport"]["size"] > 0 ) {
			$testreport_name					= $_FILES["wp_testreport"]["name"];
			$testreport_temp_name		= $_FILES["wp_testreport"]["tmp_name"];
			$testreport_extname 			= pathinfo( $testreport_name );    // 확장자 추출    
			$testreport_upload_name 	= uniqid( "" ).".".$testreport_extname['extension'];   // 파일명 변경한 파일 
			move_uploaded_file( $testreport_temp_name, $data_dir.$testreport_upload_name ) ;
		} else {
			$testreport_upload_name = $wp_testreport;
		}
		if( $_FILES["wp_auth"]["size"] > 0 ) {
			$auth_name					= $_FILES["wp_auth"]["name"];
			$auth_temp_name		= $_FILES["wp_auth"]["tmp_name"];
			$auth_extname 			= pathinfo( $auth_name );    // 확장자 추출    
			$auth_upload_name 	= uniqid( "" ).".".$authextname['extension'];   // 파일명 변경한 파일 
			move_uploaded_file( $auth_temp_name, $data_dir.$auth_upload_name ) ;
		} else {
			$auth_upload_name = $wp_auth;
		}
		if( $_FILES["wp_manual"]["size"] > 0 ) {
			$manual_name					= $_FILES["wp_manual"]["name"];
			$manual_temp_name		= $_FILES["wp_manual"]["tmp_name"];
			$manualextname 			= pathinfo( $manual_name );    // 확장자 추출    
			$manual_upload_name 	= uniqid( "" ).".".$manualextname['extension'];   // 파일명 변경한 파일 
			move_uploaded_file( $manual_temp_name, $data_dir.$manual_upload_name ) ;
		} else {
			$manual_upload_name = $wp_manual;
		}
	}
	$wp_modelinfo 	= addslashes( $wp_modelinfo );
	$wp_feature1 		= addslashes( $wp_feature1 );
	$wp_feature2	 	= addslashes( $wp_feature2 );
	$wp_spec 			= addslashes( $wp_spec );

	$db_connect 	= db_connect( $host, $dbid, $dbpass, $dbname );
	if( $wp_idx ) {
		$db_query	= "update wt_product set wp_modelname='$wp_modelname', wp_productimage='$productimage_upload_name', wp_modelinfo='$wp_modelinfo', wp_modelplan='$modelplan_upload_name', wp_feature1='$wp_feature1', wp_feature2='$wp_feature2', wp_spec='$wp_spec', wp_catadata='$catadata_upload_name', wp_plan='$plan_upload_name', wp_testreport='$testreport_upload_name', wp_auth='$auth_upload_name', wp_manual='$manual_upload_name' where wp_idx='$wp_idx'";
	} else {
		$db_query	= "insert into wt_product( wp_modelname, wp_productimage, wp_modelinfo, wp_modelplan, wp_feature1, wp_feature2,wp_spec,wp_catadata,wp_plan,wp_testreport,wp_auth,wp_manual,wp_wdate ) values( '$wp_modelname', '$productimage_upload_name', '$wp_modelinfo', '$modelplan_upload_name','$wp_feature1','$wp_feature2','$wp_spec','$catadata_upload_name','$plan_upload_name','$testreport_upload_name','$auth_upload_name','$manual_upload_name',now() )";
	}
	$result	= mysql_query( $db_query, $db_connect );
	if( !$result ) {
		err_msg( "데이터 저장 중 오류 발생" );
	} else {
		echo "<meta http-equiv='refresh' content='0; url=goods_cctv1.php'>";
	}
?>