 <!--
 function login_check() {
	var fmLogin = document.fmLogin;
	if( !fmLogin.tId.value ) {
		alert( "아이디를 입력하세요!" );
		fmLogin.tId.focus();
		return false;
	}
	if( !fmLogin.tPwd.value ) {
		alert( "비밀번호를 입력하세요!" );
		fmLogin.tPwd.focus();
		return false;
	}
	
	fmLogin.submit();
}

function goodsdata_check() {
	var frmGoodsData = document.frmGoods_Data;
	/*
	if( !frmGoodsData.goods_model.value ) {
		alert( "아이디를 입력하세요!" );
		frmGoodsData.goods_model.focus();
		return false;
	}
	*/
	if( !frmGoodsData.goods_title.value ) {
		alert( "제목을 입력하세요!" );
		frmGoodsData.goods_title.focus();
		return false;
	}
	if( !frmGoodsData.goods_data.value ) {
		alert( "첨부할 파일을 입력하세요!" );
		frmGoodsData.goods_data.focus();
		return false;
	}
	
	frmGoodsData.submit();
}

function etcdata_check() {
	var frmEtcData = document.frmEtc_Data;
	/*
	if( !frmEtcData.etc_photo.value ) {
		alert( "사진을 입력하세요!" );
		frmEtcData.etc_photo.focus();
		return false;
	}
	*/
	if( !frmEtcData.etc_title.value ) {
		alert( "제목을 입력하세요!" );
		frmGoodsData.etc_title.focus();
		return false;
	}
	if( !frmEtcData.etc_data.value ) {
		alert( "첨부할 파일을 입력하세요!" );
		frmGoodsData.etc_data.focus();
		return false;
	}
	
	frmEtcData.submit();
}


-->