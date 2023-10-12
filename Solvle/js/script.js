$(document).ready(function(){
    $(function(){
		includeLayout();
	});
    $('#btn-menu').click(()=>{
        console.log('눌림')
        $('#menu-overlay').toggleClass('show');
        //레이아웃밖 클릭시 닫기 추가
    })

	const includeLayout = ()=> {
		var includeArea = $('[data-include]');
		var self, url;
		$.each(includeArea, function() {
			self = $(this);
			url = self.data("include");
			self.load(url, function() {
				self.removeAttr("data-include");
			});
		});
	}
    // console.log("ready!");

});