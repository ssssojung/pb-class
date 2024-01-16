<?php
	session_start();
	$siteTitle = "(주)윈투스시스템";
	
	$host="localhost";
	$dbid="wintus12";
	$dbpass="qawsed1212";
	$dbname="wintus12";
	
	// MYSQL 연결
	function db_connect( $host, $id, $pass, $db )
	{
		$connect = mysql_connect( $host, $id, $pass ); 
		mysql_select_db( $db );
		return $connect;
	}
	
	function err_msg( $msg, $bool = "1" )
	{
		if ($bool) {
			echo "<script>
						window.alert('$msg');
						history.go(-1);
					  </script>";
			exit;
		}
	}
	
	function err_msg1( $msg, $bool = "1" )
	{
		if ($bool) {
			echo "<script>
						window.alert('$msg');
					  </script>";
			exit;
		}
	}
	
	function page_avg( $totalpage, $cpage, $url )
	{
		if(!$pagenumber) {	       
			$pagenumber = 10;
		}
  
     	$startpage = intval(($cpage - 1) / $pagenumber) * $pagenumber +1  ;
     	$endpage = intVal(((($startpage -1) +  $pagenumber) / $pagenumber) * $pagenumber) ;

    	if ($totalpage <= $endpage)
       		$endpage = $totalpage;

    		if ( $cpage > $pagenumber) {

			$curpage = intval($startpage - 1);
			   $url_page = "<a href='$url"."&page=$curpage'>";
       			echo( "$url_page" );
				echo( "<img src='../images/paging_prev.gif' alt='이전' /></a> .. " );
       		}
			else{
			  echo( "<img src='../images/paging_prev.gif' alt='이전' /></a>  ");
			}

      		$curpage = $startpage;
           
			echo( "<span class='paging_list'>" );
      		while ($curpage <= $endpage):      
       			if ($curpage == $cpage) {
       				echo "<strong>$cpage</strong>";
       			} else {
       			  $url_page = "<a href='$url"."&page=$curpage'>";
       			  echo ("$url_page");
				  echo("[$curpage]</a>");
       			}
       			$curpage++;
     
			endwhile ;
			echo( "</span>" );
       	if ( $totalpage > $endpage) {
      		$curpage = intval($endpage + 1);  
      		$url_page = " .. <a href='$url"."&page=$curpage'>";
       		echo ("$url_page");
			echo("<img src='../images/paging_next.gif' alt='다음' /></a>");
      	}
		else{
		  echo("  <img src='../images/paging_next.gif' alt='다음' />");
		}
  }
?>