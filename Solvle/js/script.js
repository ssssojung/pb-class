
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
	};
	// $('header').load("./include/header.html");

	// shop
	$('.controls li').click((e)=>{

		e.preventDefault();

		$('.controls li').removeClass('active');
		$(e.target).addClass('active');


		var filter = $(e.target).attr('data-filter');
		// console.log(filter);
			if(filter == 'all'){
				$('.product-area > a').fadeIn('slow');
		
			}else{
				$('.product-area > a').not('.'+filter).fadeOut('slow');
			}
			$('.product-area > a').filter('.'+filter).fadeIn('slow');
		
	});

	
	// console.log("ready!");
});

