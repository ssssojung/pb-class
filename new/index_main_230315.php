<!DOCTYPE HTML>
<?include "include/global_var.php";

	$db_connect 	= db_connect( $host, $dbid, $dbpass, $dbname );
	$db_query		= "select wn_idx, wn_title, wn_wdate from wt_notice order by wn_idx desc limit 1, 4";
	$result				= mysql_query( $db_query, $db_connect );
	if( !$result ) {
		;
	}
?>
<html lang="ko">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<script type="text/javascript" src="js/html5shiv.js"></script>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<link rel="shortcut icon" href="images/favicon/favicon.ico">
	
	<title><?=$siteTitle?></title>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/top_menu.css" media="all" />
	<script type="text/javascript" language="javascript" src="js/jquery-syaku.rolling.js"></script>
	
	
	<!--////// 제품소개 효과주기 ///////-->
	<script type="text/javascript">
		
		$(function(){
			var interval = 3000;  // 간격은 3초
			var slideshow = $('.slideshow_wrap'); 
			var imgs = slideshow.find('.slideshow');
			var last = imgs.last().index();
			imgs.hide(); // .slideshow를 전부 숨김
			imgs.eq(0).show(); // 첫화면을 출력해준다.
			var count = -1;
			/* 
				-1부터 시작하는 이유는 라스트목록과 번호를 맞추기 위함이다.
				switchImg() 함수는 실행하는 순간 +1 이 되기때문에 
				번호를 맞추려면 -1을 해줘야한다.
			*/


			// slideshow라는 클래스가 부여된 요소 각각에 대해서 처리하기
			slideshow.each(function(){
				
				// 페이드 전환 1회분의 함수
				function switchImg(){
					count++;
					
					// 마지막 리스트까지 가면 초기화
					if (count == last){
						count = -1;
					} 
					imgs.fadeOut(200);
					imgs.eq(count).fadeIn(500);
				}
				// 3초 마다 switchImg를 실행
				setInterval(switchImg, interval);
			});

		});
		
	</script>
</head>
<body>
<div id="wrap">
<!-- Header : TOP MENU & SUB IMAGE시작 -->
<div id="header_wrap">
	<h1 class="logo"><a href="index_main.php"><img src="images/logo.png" alt="윈투스시스템"></a></h1>
	<!-- TOP MENU 시작 -->
	<div>
		<ul id="nav">
			<li><a href="company_info/greeting.php">윈투스시스템</a>
				<ul>
					<li><a href="company_info/greeting.php">인 사 말</a></li>
					<li><a href="company_info/certificate.php">인증현황</a></li>
					<li><a href="company_info/history.php">연 &nbsp;&nbsp;&nbsp;&nbsp; 혁</a></li>
					<li><a href="company_info/map1.php">오시는길</a></li>
				</ul>
			</li>
			<li><a href="business_info/business_cctv.php">사업분야</a>
				<ul style="margin-left:-25px;">
					<!--<li><a href="business_info/business_si.html">SI 사업</a></li>-->
					<li><a href="business_info/business_cctv.php">CCTV</a></li>
					<li><a href="business_info/business_led.php">LED</a></li>
				</ul>
			</li>
			<li><a href="product_info/goods_cctv.php">제품소개</a>
				<ul style="margin-left:-25px;">
					<li><a href="product_info/goods_cctv.php">CCTV</a></li>
					<li><a href="product_info/goods_led.php">LED</a></li>
					<li><a href="product_info/goods_etc.php">SOLUTION</a></li>
				</ul>
			</li>
			<li ><a href="partner_info/partner.php" style="padding-right:30px;" >파트너</a></li>
			<li><a href="customer_info/notice_list.php">고객센터</a>
				<ul style="margin-left:-25px;">
					<li><a href="customer_info/notice_list.php">공지사항</a></li>
					<li><a href="customer_info/data_list.php">자 료 실</a></li>
					<li><a href="customer_info/contact.php">Contact Us</a></li>
				</ul>
			</li>
			<li><? if( !isset( $_SESSION[wt_pid] ) or !isset( $_SESSION[wt_pidx] ) ) {?>
					<a href="member_info/login.php">로그인</a></li>
				<?} else {?>
					<a href="member_info/logout.php">로그아웃</a></li>
				<?}?>
		</ul>
	</div>
	<script type="text/javascript">
	$(document).ready(function() {	
		$('#nav li').hover(function() {
			$('ul', this).slideDown(200);
			$(this).children('a:first').addClass("hov");
		}, function() {
			$('ul', this).slideUp(100);
			$(this).children('a:first').removeClass("hov");		
		});
	});
	</script>
	<!-- TOP MENU 종료 -->
	
	<!--// 페이스북, 블로그, 트위터 : 시작-->
	<div class="side-menu">	
		<ul>
			<li style="background-color:#254bb0;"><a href="">f</a></li>
			<li style="background-color:#a0ca49;"><a href="">N</a></li>
			<li style="background-color:#0792ba;"><a href="">t</a></li>
		</ul>
	</div>
	<!--// 페이스북, 블로그, 트위터 : 종료-->
</div>
<!-- MAIN IMAGE  : 시작 -->
<div class="main_img_back">
	<div class="main_img">
	  <ul class="movie">
	  <li id='p_click3' class="p_click3"><img src="images/arrow_left.png" alt="이전"></li>
	  <ul id='srolling_bullet' class='bullet'>
	  <li id='srolling_bullet_item'><img src='./images/bullet_off.png'></li>
	  </ul>
	  <!-- width 를 늘일 경우 노출되는 아이템이 늘어납니다. 다음 이전 버튼은 필수는 아닙니다. -->
	  <li><div id="srolling3" style="position:absolute;overflow:hidden;width:1095px;height:381px;"></div></li>
	  <li id='n_click3' class="n_click3"><img src="images/arrow_right.png" alt="다음"></li>
	  </ul>
	  <!-- 블릿을 사용할 경우 추가하세요. 꼭 id 값을 이용해야 하며, srolling_bullet_item 아이템 수만큼 노출되는 블릿영역입니다. 블릿 idx 값을 얻고 싶다면 {idx}  를 삽입하시면 idx 값으로 치환됩니다.-->
	 </div>
</div>
<script type="text/javascript">
    jQuery(function() {
    
    var data = [
      "<div style='border:1px solid #000;width:100px;height:20px;'>1</div>",
      "<div style='border:1px solid #000;width:100px;height:20px;'>2</div>",
      "<div style='border:1px solid #000;width:100px;height:20px;'>3</div>",
      "<div style='border:1px solid #000;width:100px;height:20px;'>4</div>",
      "<div style='border:1px solid #000;width:100px;height:20px;'>5</div>",
      "<div style='border:1px solid #000;width:100px;height:20px;'>6</div>",
      "<div style='border:1px solid #000;width:100px;height:20px;'>7</div>"
    ];

    var data2 = [
      "<img src='./images/a.png' width='1095' height='381'>",
      "<img src='./images/b.png' width='1095' height='381'>",
      "<img src='./images/c.png' width='1095' height='381'>"
    ];
    
    /*
    data : [ ], // 롤링될 아이템 데이터
    name : '#srolling_area', // 롤링 대상 element
    item_count : 1, // 한번 이동될 아이템 수
    cache_count : 5, // 최초 한번 임시로 생성될 아이템 수 (고치지마세요)
    width : 100, // 노출될 아이템 크기 (필수 : 실제 아이템 보다 약간 크게 설정하세요)
    height : 100, // 노출될 아이템 크기 (필수 : 실제 아이템 보다 약간 크게 설정하세요)
    auto : false, // 자동 이동 설정
    delay : 1000, // 자동 이동 후 대기 시간
    delay_frame : 500, // 이동 속도 (움직이는 효과를 없애고 싶으면 0)
    move : 'left', // 이동 방향 left , right , up , down 
    prev : '#srolling_prev', // 이전 아이템 이동 버튼 element
    next : '#srolling_next', // 다음 아이템 이동 버튼 element
    is_bullet : false, // 블릿 사용여부
    bullet : '#srolling_bullet', // 블릿 버튼 element
    bullet_item : '#srolling_bullet_item', // 블릿 버튼 item element
    bullet_style_func : null // 선택된 블릿 효과주기
    */

   

    // 좌우 블릿 자동 슬라이드 예제
    jQuery("#srolling3").srolling({
      data : data2,
      auto : true,
      item_count : 1, // 블릿은 아이템 1개만 사용할 수 있습니다.
      cache_count : 3 * 2, // 블릿을 사용할 경우 아이템수 2배로 입력하세요
      width : 1095,
      height : 381,
      delay_frame : 1200,
      move : 'left',
      prev : '#p_click3',
      next : '#n_click3',
      is_bullet : true,
      bullet_style_func : function(bullet,get_bullet) {
        // bullet = $('#srolling_bullet_item') 리턴받음
       // get_bullet = $('선택된 class 블릿') 리턴받음

        // 모든 버튼 블릿 초기화
        jQuery('li',bullet).each(function() {
          var img = jQuery('img',this);
          var src = img.attr('src');
          src = src.replace('on','off');
          img.attr('src',src);
        });

        // 선택된 블릿 효과 주기
        var img = jQuery('img',get_bullet);
        var src = img.attr('src');
        src = src.replace('off','on');
        img.attr('src',src);

      }
    });

  });
</script>
<!-- MAIN IMAGE :  종료 -->
<!-- Hearder : TOP MENU & MAIN IMAGE종료 -->

<!-- MAIN CONTENT : 시작 -->
<div id="main_wrap">
	<!--  공지사항 :  시작--> <!--####2014-11-21 공지사항 수정 -->
	<div class="m_notice">
		<ul>
			<li><b>공지사항</b> <a href="customer_info/notice_list.php" ><img src="images/icon_more.png" alt="더보기"></a></li>
			<li><img src="images/main_notice_img.png"></li>
			<?
				for( $i=1; $record_rows = mysql_fetch_array( $result ); $i++ ) {
			?>
			<li><a href="customer_info/notice_view.php?wn_idx=<?=$record_rows["wn_idx"]?>" class="m_notice_tex"><?=$record_rows["wn_title"]?><span class="m_notice_date"><?=$record_rows["wn_wdate"]?></span></a> </li>
			<?
				}
				mysql_free_result( $reesult );
			?>
		</ul>
	</div>
	<!--  공지사항 :  종료-->
	
	<!--  회사소개 :  시작-->
	<div class="m-company">
		<a href="company_info/greeting.php"><img src="images/main_contents01.png" alt="intro"></a>
		<a href="customer_info/data_list.php"><img src="images/main_contents02.png" alt="support"></a>
		<a href="partner_info/partner.php"><img src="images/main_contents03.png" alt="partnership"></a>	
	</div>
	<!--  회사소개 :  종료-->
	
	<!--  제품소개 :  시작--><!--######14-11-25 애니메이션효과 : 시작-->
	<div class="m_product">
		<ul style="padding:15px 20px;">
			<li><b>제품소개</b><a href="product_info/goods_cctv.php"><img src="images/icon_more.png" alt="더보기"></a></li>
		</ul>
		<div class="slideshow_wrap">
			<div class="slideshow" style="margin:8px 0px;" class="alt">
				<ul class="m_product_ex" style="border-right:1px solid #ececec;" >	
					<li><img src="images/main_goods01_5.png" alt="WSD-V22"></li>
					<li class="font_color">WSD-V22</li>
					<li><a href="product_info/goods_cctv05.php" class="button0">자세히보기 +</a></li>
				</ul>
				<ul class="m_product_ex" >	
					<li><img src="images/main_goods02_5.png" alt="LED FLOOD LIGHT"></li>
					<li class="font_color">LED FLOOD LIGHT</li>
					<li><a href="product_info/goods_led05.php" class="button0">자세히보기 +</a></li>
				</ul>
			</div>
			<div class="slideshow" style="margin:8px 0px;"  class="alt">
				<ul class="m_product_ex" style="border-right:1px solid #ececec;">	
					<li><img src="images/main_goods01_4.png" alt="WSD-25IP"></li>
					<li class="font_color">WSD-25IP</li>
					<li><a href="product_info/goods_cctv04.php" class="button0">자세히보기 +</a></li>
				</ul>
				<ul class="m_product_ex"  >	
					<li><img src="images/main_goods02_4.png" alt="LED TUNNEL LIGHT"></li>
					<li class="font_color">LED TUNNEL LIGHT</li>
					<li><a href="product_info/goods_led04.php" class="button0">자세히보기 +</a></li>
				</ul>
			</div>
			<div class="slideshow" style="margin:8px 0px;"  class="alt">
				<ul class="m_product_ex" style="border-right:1px solid #ececec;">	
					<li><img src="images/main_goods01_3.png" alt="WIB-3040"></li>
					<li class="font_color">WIB-3040</li>
					<li><a href="product_info/goods_cctv03.php" class="button0">자세히보기 +</a></li>
				</ul>
				<ul class="m_product_ex"  >	
					<li><img src="images/main_goods02_3.png" alt="LED SECURITY LAMP"></li>
					<li class="font_color">LED SECURITY LAMP</li>
					<li><a href="product_info/goods_led03.php" class="button0">자세히보기 +</a></li>
				</ul>
			</div>
			<div class="slideshow" style="margin:8px 0px;" class="alt">
				<ul class="m_product_ex" style="border-right:1px solid #ececec;">	
					<li><img src="images/main_goods01_2.png" alt="WIB-1020"></li>
					<li class="font_color">WIB-1020</li>
					<li><a href="product_info/goods_cctv02.php" class="button0">자세히보기 +</a></li>
				</ul>
				<ul class="m_product_ex"  >	
					<li><img src="images/main_goods02_2.png" alt="LED SECURITY LAMP"></li>
					<li class="font_color">LED SECURITY LAMP</li>
					<li><a href="product_info/goods_led02.php" class="button0">자세히보기 +</a></li>
				</ul>
			</div>
			<div class="slideshow" style="margin:8px 0px;" class="show">
				<ul class="m_product_ex" style="border-right:1px solid #ececec;">	
					<li><img src="images/main_goods01.png" alt="WSHD-200IR-2M"></li>
					<li class="font_color">WSHD-200IR-2M</li>
					<li><a href="product_info/goods_cctv01.php" class="button0">자세히보기 +</a></li>
				</ul>
				<ul class="m_product_ex">	
					<li><img src="images/main_goods02.png" alt="LED FACTORY LIGHT"></li>
					<li class="font_color">LED FACTORY LIGHT</li>
					<li><a href="product_info/goods_led01.php" class="button0">자세히보기 +</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!--  제품소개 :  종료--><!--######14-11-24 애니메이션효과 : 종료-->

</div>
<!-- MAIN CONTENT : 종료 -->

<!-- Footer :  시작 -->
<div class="footer_wrap">
	<div class="customer_center_wrap">
		<div class="customer_center">
			<div class="customer_center_contents">
				<ul>
					<li style="font-size:14px;"><strong>고객센터</strong></li>
					<li> 070-7798-3698</li>
					<li>전화문의 평일 : 09:00 ~ 18:00 / 주말-공휴일은 휴무</li>
					<li>FAX : 02-6455-3698 </li>
				</ul>
			</div>
			<div class="sitemap">
				<ul>
					<li><a href="others_info/sitemap_info.php"> 사이트맵</a>  </li>
					<!--<li><a href="#"> 이메일 무단 수집 거부</a>&nbsp;&nbsp; | </li>-->
					<li><a href="others_info/terms02.php">  개인정보취급방침</a>&nbsp;&nbsp; | </li>
					<li><a href="others_info/terms01.php"> 이용약관</a>&nbsp;&nbsp; |</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer">
		<h1><img src="images/logo_bottom.png" alt="윈투스시스템"></h1>
		<p>㈜윈투스시스템 &nbsp;&nbsp;  사업자등록번호 : 106-86-90366 <br>
		본사 : 서울시 성동구 연무장 5가길 7 현대테라스타워 E동 1102호   |   공장 : 서울시 성동구 뚝섬로 424지층    |   TEL : 070) 7798-3698    FAX : 02) 6455-3698 <br>
		 COPYRIGHT 2014 WINTUS SYSTEM ALL RIGHTS RESERVED</p>
	</div>
</div>
<!-- Footer :  종료 -->

</div>
</body>
</html>