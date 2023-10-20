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
		//$(this) 왜 안먹히는지 해결해야함 =>화살표함수써서
		$('.controls li').removeClass('active');
		$(e.target).addClass('active');


		var filter = $(e.target).attr('data-filter');
			if(filter == 'all'){
				$('.product-area > a').fadeIn('slow');
		
			}else{
				$('.product-area > a').not('.'+filter).fadeOut('slow');
			}
			$('.product-area > a').filter('.'+filter).fadeIn('slow');
		
	});
	
	$(function(){
		const $plus = $('.quantity-plus');
		const $minus = $('.quantity-minus');

		var quantity = $('.quantity-num');
		let i = 1;
		let totalCount = 1;
		let cartNum = 0;

		$plus.click(function(){
			i++;
			totalCount = i;
			quantity.text(totalCount);
		});

		$minus.click(function(){
			if(i > 1){
				i--;
				totalCount = i;
				quantity.text(totalCount);
			}
			else{
				alert('최소수량 입니다.')
			}
		});

		const productadd = () =>{
			var productInfo = '상품추가 할라고 함';
			$('.cart-center').append(productInfo);
			console.log(productInfo);
		}

		const CartHandler = () =>{ //카트추가
			$('.addCart').click(function(){ 
				cartNum += totalCount
				// console.log([cartNum],[totalCount]);
				$('.cart-num').text(cartNum);
				totalCount = 1;
				i = 1;
				quantity.text(totalCount);
				productadd();
				
			});
		};
		CartHandler();
		
		

	});
	


	$('.details').click(()=>{
        $('#details-layout').addClass('show');
    });
	$('.btn-close').click(()=>{
        $('#details-layout').removeClass('show');
    });

		


	
	// console.log("ready!");
});


