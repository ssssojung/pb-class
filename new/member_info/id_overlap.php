<!DOCTYPE HTML>
<?
	include "../include/global_var.php";	
	$db_connect = db_connect( $host, $dbid, $dbpass, $dbname );

	$db_query		= "select wm_id from wt_member where wm_id='$id'";
	$result 			= mysql_query( $db_query, $db_connect );
	$record_count	= mysql_num_rows( $result );
	mysql_free_result( $result );

	$used_id = true;
	if( $record_count  ) {
		$used_id = false;
	}
?>
<html lang="ko">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<script type="text/javascript" src="../js/html5shiv.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/common.css">
	
	<title><?=$siteTitle?></title>
	<script type="text/javascript">
		function send() {
			if(!document.fmOverlap.id.value) {
				alert("ID를 입력하세요.");
				document.fmOverlap.id.focus();	
				return;
			}
			document.fmOverlap.submit();
		}
		function form_send() {
			opener.document.fmMemberInfo.tId.value=document.fmOverlap.id.value;
			self.close();
		}
	</script>
</head>

<body>
	<!--Popup Start -->
	
	<div class="layerpop">
		<div class="layerpop_area">
			<div class="title">아이디 중복확인</div>
			<!--a href="javascript:popupClose();" class="layerpop_close" id="layerbox_close"></a--> <br>
			<div class="content">
			<form method='post' name='fmOverlap' id="fmOverlap" action='id_overlap.php'>
			<ul>
				<? if( $used_id )  {?>
				<li><b><?=$id?></b>는 사용 가능한 회원 ID 입니다.<br/>
				<b><?=$id?></b>을(를) 사용하시겠습니까?</li>
				<?} else {?>
				<li><b><?=$id?></b>는 이미 사용중인 ID 입니다.<br/>
				다른 아이디를 사용하여 주시기 바랍니다.</li>
				<?}?>
				<li><input type="text" id="id" name="id" value="<?=$id?>" class="box_s" /><a href="javascript:send()" class="button4">조회하기</a></li>
				<? if( used_id )  {?>
				<li><a href="javascript:form_send()" class="button5">사용하기</a></li>
				<?}?>
			</ul>
			</form>
			</div>
		</div>
	</div>
	<!--Popup End -->
</body>

</html>