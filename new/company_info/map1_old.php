<!DOCTYPE HTML>
<?
	include "../include/global_var.php";	
?>
<html lang="ko">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<script type="text/javascript" src="../js/html5shiv.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/common.css">
	<link rel="shortcut icon" href="../images/favicon/favicon.ico">
	
	<title><?=$siteTitle?></title>
	
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/top_menu.css" media="all" />
	
	<!--구글맵/////////-->
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"></script>
	 
	 <script>
	  var map;
	  var myCenter=new google.maps.LatLng(37.540216, 127.054542); //(위도, 경도)
	  var marker;
	  var infoWin = new google.maps.InfoWindow();	//말풍선

	window.onload = myStart;
	 
	  function myStart(){
	   var mapProp = {
		center:myCenter, //가운데에 위치적용
		zoom:16, //확대 및 축소
		//mapTypeId:google.maps.MapTypeId.HYBRID //위성맵적용
		mapTypeId:google.maps.MapTypeId.ROADMAP
	   };
	 
	   map=new google.maps.Map(document.getElementById("googleMap"),mapProp); //해당<div>에 map속성적용 
	 
	   //애니메이션 마크 맵에 적용
	   marker=new google.maps.Marker({
		position:myCenter,
		animation:google.maps.Animation.BOUNCE
	   });
	   marker.setMap(map);
	   
	   //말풍선
		infoWin.setContent("윈투스 시스템  : " + lat + "," + lon);
		infoWin.setPosition(initLoc);
		infoWin.open(map);
	  }
	 
	  //myStart()메소드를 모든페이지가 로딩될때까지 대기시켜주는 메소드
	  google.maps.event.addDomListener(window, 'load', myStart);
	  
	 
	 </script>
	 
	 
	  <script>
	  var map1;
	  var myCenter1=new google.maps.LatLng(37.538814, 127.057428); //(위도, 경도)
	  var marker1;
	 
	  function myStart1(){
	   var mapProp1 = {
		center:myCenter1, //가운데에 위치적용
		zoom:16, //확대 및 축소
		//mapTypeId:google.maps.MapTypeId.HYBRID //위성맵적용
		mapTypeId:google.maps.MapTypeId.ROADMAP
	   };
	 
	   map1=new google.maps.Map(document.getElementById("googleMap01"),mapProp1); //해당<div>에 map속성적용 
	 
	   //애니메이션 마크 맵에 적용
	   marker=new google.maps.Marker({
		position:myCenter1,
		animation:google.maps.Animation.BOUNCE
	   });
	   marker.setMap(map1);
	  }
	 
	  //myStart()메소드를 모든페이지가 로딩될때까지 대기시켜주는 메소드
	  google.maps.event.addDomListener(window, 'load', myStart1);
	  
	 
	 </script>
</head>
<body>
<div id="wrap">
<!-- Header : TOP MENU & SUB IMAGE시작 -->
<? include "../include/top_menu.php" ?>
<!-- SUB IMAGE 시작 -->
<div class="sub_img_back">
	<div class="sub_img">
		<ul>
			<li class="img_font">Wintus System</li>
			<li class="img_font_title">윈투스시스템</li>
		</ul>
	</div>
</div>
<!-- SUB IMAGE 종료 -->
<!-- Hearder : TOP MENU & SUB IMAGE종료 -->

<!-- 서브:왼쪽메뉴,내용 시작 -->
<div id="sub_wrap">
		<!-- LEFT MENU 시작 -->
		<? include "left_menu.php" ?>
		<!-- LEFT MENU 종료 -->
		
	<div class="content_wrap">
		<!-- SUB: 타이틀&네비 시작 -->
		<div class="sub_top">
			<h1 class="sub_title">오시는길</h1>
			<span class="sub_nav"><img src="../images/icon_home.png" alt="home"> HOME &gt; 윈투스시스템 &gt; 오시는길</span>
		</div>
		<!-- SUB: 타이틀&네비 종료 -->
		
		
		<!-- SUB CONTENTS: 서브 내용 시작 -->
		<div class="content">	
			<!--텝메뉴 : 시작-->
			<div class="ubercolortabs">
			<ul>
			<li class="selected"><a href="map1.php"><span>윈투스시스템<b> 본사</b></span></a></li>
			<li ><a href="map2.php"><span>윈투스시스템<b> 공장</b></span></a></li>
			</ul>
			</div>
			<!--텝메뉴 : 종료-->
			<div class="map">
				<h1 class="txt01">본사</h1>
				<div class="map_contents">
					<dl class="description_list01 type1">
						<dt>Adrees</dt>
						<dd>(도로명)서울특별시 성동구 성수이로7길 7 (성수동2가)<br>(지번) 서울시 성동구 성수동 2가 333-15 서울숲 한라시그마벨리2 9층 905호</dd>
					</dl>
					<dl class="description_list01 type1">
						<dt>Tel</dt>
						<dd>070-7798-3698 </dd>
					</dl>
					<dl class="description_list01 type1">
						<dt>Fax</dt>
						<dd>02-6455-3698 </dd>
					</dl>
				</div>
				<div id="googleMap" style="width:850px;height:550px;"></div>
				<div>
					<h1 class="txt01">대중교통</h1>
					<dl class="description_list01 type1">
						<dt>지하철</dt>
						<dd>성수역 3번 출구에서 도보 5분 | 서울숲 한라시그마밸리 2차(공장형 아파트)</dd>
					</dl>
				</div>
			</div>
		</div>
		<!-- SUB CONTENTS: 서브 내용 종료 -->
		<div class="blank"></div>
	</div>
</div>
<!-- 서브:왼쪽메뉴,내용 종료 -->

<!-- Footer :  시작 -->
<? include "../include/footer.php" ?>
<!-- Footer :  종료 -->
</div>
</body>
</html>