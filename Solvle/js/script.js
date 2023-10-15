$(document).ready(function(){
	const includeLayout = () => {
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
 
	$(function(){
	   includeLayout();
	});
 
	$(window).click((e) => {
	   console.log(e.target);
	});
 
	// console.log("ready!");
	$('#btn-menu').click(() => {
	   $('#menu-overlay').toggleClass('show');
	});
 });