
$(document).ready(function(){
    

	$(function(){
		includeLayout();
	});
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
		$(window).click((e)=>{
			console.log(e.target);
		})
	// console.log("ready!");
		$('#btn-menu').click(()=>{
			$('#menu-overlay').toggleClass('show');
		})
});

