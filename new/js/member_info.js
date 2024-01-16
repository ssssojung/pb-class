<!--
function input_check() {
	var fmMemberInfo = document.fmMemberInfo;
	if( !fmMemberInfo.tId.value ) {
		alert( "아이디(ID)를 입력하세요" );
		fmMemberInfo.tId.focus();
		return ;
	}
	if( !idCheck( fmMemberInfo.tId.name ) ) {
		alert( "아이디는 4~10자의 영문소문자 숫자 또는 조합된 문자열이어야 합니다!" ) ;
		fmMemberInfo.tId.focus();
		fmMemberInfo.tid.select();
	}
	if( !pwCheck( fmMemberInfo.tPassword1.name ) ) {
		alert( "비밀번호는 4~10자의 영문자나 숫자 또는 조합된 문자열이어야 합니다!" );
		fmMemberInfo.tPassword1.focus();
		fmMemberInfo.tPassword1.select();
		return ;
	}
	if( fmMemberInfo.tPassword1.value != fmMemberInfo.tPassword2.value ) {
		alert( "입력하신 비밀번호가 일치하지 않습니다.\n다시 확인하시고 넣어주십시오!" );
		fmMemberInfo.tPassword2.focus();
		fmMemberInfo.tPassword2.select();
		return ;
	}
	if( !fmMemberInfo.tName.value ) {
		alert( "이름을 입력하세요" );
		fmMemberInfo.tName.focus();
		return ;
	}	
 	if( !fmMemberInfo.tEmail1.value ) {
		alert( "이메일을 입력하세요!" );
		fmMemberInfo.tEmail1.focus();
		return;
	}	
 	if( !fmMemberInfo.tEmail2.value ) {
		alert( "이메일을 입력하세요!" );
		fmMemberInfo.tEmail2.focus();
		return;
	}		
	if( fmMemberInfo.tPhone1.value ) {
		if( !IsNumber( fmMemberInfo.tPhone1.name ) ) { 
			alert( "전화번호는 숫자이어야 합니다!" );
			fmMemberInfo.tPhone1.focus();
			return;
		}
	}
	if( fmMemberInfo.tPhone2.value ) {
		if( !IsNumber( fmMemberInfo.tPhone2.name ) ) { 
			alert( "전화번호는 숫자이어야 합니다!" );
			fmMemberInfo.tPhone2.focus();
			return;
		}
	}
 	if( fmMemberInfo.tMobile1.value ) {
		if( !IsNumber( fmMemberInfo.tMobile1.name ) ) { 
			alert( "전화번호는 숫자이어야 합니다!" );
			fmMemberInfo.tMobile1.focus();
			return;
		}
	}
 	if( fmMemberInfo.tMobile2.value ) {
		if( !IsNumber( fmMemberInfo.tMobile2.name ) ) { 
			alert( "전화번호는 숫자이어야 합니다!" );
			fmMemberInfo.tMobile2.focus();
			return;
		}
	}	
	fmMemberInfo.submit();
}

function idCheck( unitName )  {
	var unitControl = eval( "document.fmMemberInfo." + unitName );
	if( unitControl.value.length < 4 || unitControl.value.length > 10 ) {
		return false;
	}
	for( var i=0; i<unitControl.value.length; i++ ) {
		var chr = unitControl.value.substr( i, 1 );
		if( ( chr < '0' || chr > '9' ) && ( chr < 'a' || chr > 'z' ) ) {
			return false;
		}
	}
	return true;
}

function pwCheck( unitName ) {
	var unitControl = eval( "document.fmMemberInfo." + unitName );

	if( unitControl.value.length < 4 || unitControl.value.length > 10 ) {
		return false;
	}
	for( var i=0; i<unitControl.value.length; i++ ) {
		var chr = unitControl.value.substr( i, 1 );
		if( ( chr < '0' || chr > '9' ) && ( chr < 'a' || chr > 'z' ) && ( chr < 'A' || chr > 'Z' ) ) {
			return false;
		}
	}
	return true;
}

function IsNumber( unitName ) {
	 var unitControl = eval( "document.fmMemberInfo." + unitName );

	 for( var i=0; i<unitControl.value.length; i++ ) {
		 var chr = unitControl.value.substr( i, 1 );
		 if( ( chr < '0' || chr > '9' ) ) {
			return false;
		}
	}
	return true;
}

function idSearch() {
	var fmIdSearch = document.fmIdSearch;
	if( !fmIdSearch.tName.value ) {
		alert( "이름을 입력하세요" );
		fmIdSearch.tName.focus();
		return ;
	}	
 	if( !fmIdSearch.tEmail1.value ) {
		alert( "이메일을 입력하세요!" );
		fmIdSearch.tEmail1.focus();
		return;
	}	
 	if( !fmIdSearch.tEmail2.value ) {
		alert( "이메일을 입력하세요!" );
		fmIdSearch.tEmail2.focus();
		return;
	}		
	fmIdSearch.submit();
}

function pwdSearch() {
	var fmPwdSearch = document.fmPwdSearch;
	if( !fmPwdSearch.tName.value ) {
		alert( "이름을 입력하세요" );
		fmPwdSearch.tName.focus();
		return ;
	}	
	if( !fmPwdSearch.tId.value ) {
		alert( "아이디를 입력하세요" );
		fmPwdSearch.tId.focus();
		return ;
	}	
 	if( !fmPwdSearch.tEmail1.value ) {
		alert( "이메일을 입력하세요!" );
		fmPwdSearch.tEmail1.focus();
		return;
	}	
 	if( !fmPwdSearch.tEmail2.value ) {
		alert( "이메일을 입력하세요!" );
		fmPwdSearch.tEmail2.focus();
		return;
	}		
	fmPwdSearch.submit();
}

 function check_ID_Window(ref) {
   var id= eval(document.fmMemberInfo.tId);

   if(!id.value) {
      alert('아이디(ID)를 입력하신 후에 확인하세요!');
	  id.focus();
	  return;
   }else {
      ref = ref + "?id=" + id.value;
	  var window_left = (screen.width-640)/2;
	  var window_top = (screen.height-480)/2;
	  window.open(ref,"checkIDWin",'width=400,height=303,scrollbars=no,status=no,top=' + window_top + ',left=' + window_left + '');
   }
}



-->