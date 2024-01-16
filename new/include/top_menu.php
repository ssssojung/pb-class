<!-- Header : TOP MENU & SUB IMAGE시작 -->
<div id="header_wrap">
	<h1 class="logo"><a href="../index_main.php"><img src="../images/logo.png" alt="윈투스시스템"></a></h1>
	<!-- TOP MENU 시작 -->
	<div>
		<ul id="nav">
			<li><a href="../company_info/greeting.php">윈투스시스템</a>
				<ul>
					<li><a href="../company_info/greeting.php">회사소개</a></li>
					<li><a href="../company_info/certificate.php">인증현황</a></li>
					<li><a href="../company_info/history.php">연 &nbsp;&nbsp;&nbsp;&nbsp; 혁</a></li>
					<li><a href="../company_info/map1.php">오시는길</a></li>
				</ul>
			</li>
			<li><a href="../business_info/business_cctv.php">사업분야</a>
				<ul style="margin-left:-25px;">
					<!--<li><a href="../business_info/business_si.html">SI 사업</a></li>-->
					<li><a href="../business_info/business_cctv.php">CCTV</a></li>
					<li><a href="../business_info/business_led.php">LED</a></li>
					
				</ul>
			</li>
			<li><a href="../product_info/goods_cctv.php">제품소개</a>
				<ul style="margin-left:-25px;">
					<li><a href="../product_info/goods_cctv.php">CCTV</a></li>
					<li><a href="../product_info/goods_led.php">LED</a></li>
					<li><a href="../product_info/goods_etc.php">SOLUTION</a></li>
				</ul>
			</li>
			<li ><a href="../partner_info/partner.php" style="padding-right:30px;" >파트너</a></li>
			<li><a href="../customer_info/notice_list.php">고객센터</a>
				<ul style="margin-left:-25px;">
					<li><a href="../customer_info/notice_list.php">공지사항</a></li>
					<li><a href="../customer_info/data_list.php">자 료 실</a></li>
					<li><a href="../customer_info/contact.php">CONTACT us</a></li>
				</ul>
			</li>
			<li><?if( !isset( $_SESSION[wt_pid] ) or !isset( $_SESSION[wt_pidx] ) ) {?>
					<a href="../member_info/login.php">로그인</a></li>
				<?} else {?>
					<a href="../member_info/logout.php">로그아웃</a></li>
				<?}?>
		</ul>
	</div>
	<script type="text/javascript">
	// $(document).ready(function() {	
	// 	$('#nav li').hover(function() {
	// 		$('ul', this).slideDown(200);
	// 		$(this).children('a:first').addClass("hov");
	// 	}, function() {
	// 		$('ul', this).slideUp(100);
	// 		$(this).children('a:first').removeClass("hov");		
	// 	});
	// });
	</script>
	<!-- TOP MENU 종료 -->	
	
	<!--// 페이스북, 블로그, 트위터 : 시작-->
	<!-- + -->
	<!--// 페이스북, 블로그, 트위터 : 종료-->
</div>
<!-- Hearder : TOP MENU & SUB IMAGE종료 -->