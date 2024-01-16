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
						<dd>(도로명)서울시 성동구 연무장 5가길 7 현대테라스타워 E동 1102호<br>(지번) 서울 성동구 성수동2가 314-13 현대테라스타워 E동 1102호</dd>
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
				<div id="map_daum" style="width:850px;height:550px;"></div>
	
				<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=31383a3c9ee0567642c55f14f841aa99"></script>
				<script>
					var mapContainer = document.getElementById('map_daum'), // 지도를 표시할 div 
						mapOption = { 
							center: new kakao.maps.LatLng(37.543823, 127.053904), // 지도의 중심좌표
							level: 3 // 지도의 확대 레벨
						};

					// 지도를 표시할 div와  지도 옵션으로  지도를 생성합니다
					var map = new kakao.maps.Map(mapContainer, mapOption); 
					// 일반 지도와 스카이뷰로 지도 타입을 전환할 수 있는 지도타입 컨트롤을 생성합니다
					var mapTypeControl = new kakao.maps.MapTypeControl();

					// 지도에 컨트롤을 추가해야 지도위에 표시됩니다
					// kakao.maps.ControlPosition은 컨트롤이 표시될 위치를 정의하는데 TOPRIGHT는 오른쪽 위를 의미합니다
					map.addControl(mapTypeControl, kakao.maps.ControlPosition.TOPRIGHT);

					// 지도 확대 축소를 제어할 수 있는  줌 컨트롤을 생성합니다
					var zoomControl = new kakao.maps.ZoomControl();
					map.addControl(zoomControl, kakao.maps.ControlPosition.RIGHT);
					/*
					// 마커가 표시될 위치입니다 
					var markerPosition  = new kakao.maps.LatLng(37.543823, 127.053904); 

					// 마커를 생성합니다
					var marker = new kakao.maps.Marker({
						position: markerPosition
					});
					*/
					var imageSrc = 'https://t1.daumcdn.net/localimg/localimages/07/mapapidoc/marker_red.png', // 마커이미지의 주소입니다    
						imageSize = new kakao.maps.Size(64, 69), // 마커이미지의 크기입니다
						imageOption = {offset: new kakao.maps.Point(27, 69)}; // 마커이미지의 옵션입니다. 마커의 좌표와 일치시킬 이미지 안에서의 좌표를 설정합니다.

					// 마커의 이미지정보를 가지고 있는 마커이미지를 생성합니다
					var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize, imageOption),
						markerPosition = new kakao.maps.LatLng(37.543823, 127.053904); // 마커가 표시될 위치입니다

					// 마커를 생성합니다
					var marker = new kakao.maps.Marker({
					  position: markerPosition,
					  image: markerImage // 마커이미지 설정 
					});
					// 마커가 지도 위에 표시되도록 설정합니다
					marker.setMap(map);
				</script>				
				<div>
					<h1 class="txt01">대중교통</h1>
					<dl class="description_list01 type1">
						<dt>지하철</dt>
						<dd>성수역 4번 출구에서 도보 5분 | 현대테라스타워 E동 1102호</dd>
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