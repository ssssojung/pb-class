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

	let lastScroll = 0;
	$(window).on('scroll',function(){
		let scrollTop = $(this).scrollTop();
		if(scrollTop > lastScroll){
			$('header').addClass('nav-up');
		}else{
			$('header').removeClass('nav-up');
		}
		lastScroll = scrollTop;
	})


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
				$('.product-area > a').not('.'+filter).hide();
			}
			$('.product-area > a').filter('.'+filter).fadeIn('slow');
		
	});
	
	$(function(){

		let quantity = $('.quantity-num');
		let totalCount = 1;
		let cartNum = 0;
		
		let i = 1;
		const $plus = $('.quantity-plus');
		const $minus = $('.quantity-minus');
		
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
		 
   

		let title = $('.text-area .title').text();
		let img = $('.img-area').attr("style");
		let price = $('.text-area .price > span').text();
		let totalNum = 0;
		let totalPrice = 0;

		const productadd = () =>{
			
			totalNum = totalCount;
			var productInfo = 

				`                
					<div class="add-item border-top" data-name="${title}">  
						<div class="item-content">
							<div class="item-img" style="${img}"></div>
							<div class="item-center">
								<div>
									<p class="item-name">${title}</p>
									<p class="item-priceCon">$ <span class="item-price">${(totalNum * Number(price)).toFixed(2)}</span> USD</p>
								</div>
								<span class="btn-remove">Remove</span>
							</div>
						</div>
						<div class="item-right">
							<p class="item-quantity">${totalNum}</p>
						</div>
					</div>
				`
			;
			
			
			// $('.cart-center').append(productInfo);
			let currProduct = $('.cart-center').append(productInfo);

			$(function(){
				var PriceArr = currProduct.find('.item-price').get();
				let num = 0;
				for(var i=0; i<PriceArr.length; i++){
					num += Number(PriceArr[i].innerHTML);
				}
				totalPrice = num

			})
	  
			$('#cart-layout .cart-total').text(totalPrice.toFixed(2));
			
   
			// const prevProduct = $('.cart-center').find('.add-item');
   

			// console.log(prevProduct,currProduct)

			// if(prevProduct.length > 1){
			// 	var ProductArr = prevProduct.get()
			// 	for(let i=0; i<ProductArr.length; i++){
			// 		// console.log(ProductArr[i].dataset['name'])
			// 		console.log(ProductArr[i].dataset['name'])

			// 		if(ProductArr[0].dataset['name']==ProductArr[1].dataset['name']){
			// 			ProductArr[0].remove()
			// 			prducuctArr[0].
			// 			console.log(ProductArr)
			// 		}
	
			// 	};
			// };
			
		};

		const productremove = () =>{
			$('.btn-remove').click(function(){
				let removeProduct = $(this).closest('.add-item')
				removeProduct.addClass('remove');
				let removeNum = Number(removeProduct.find('.item-quantity').text());
				let removePrice = Number(removeProduct.find('.item-price').text());
				cartNum -= removeNum
				totalPrice -= removePrice
				$('.cart-num').text(cartNum);
				$('#cart-layout .cart-total').text(totalPrice.toFixed(2));
				$(this).closest('.add-item').remove();
			});
		};



		const CartHandler = () =>{ //카트추가

			$('.addCart').click(function(){ 
				cartNum += totalCount;
				$('.cart-num').text(cartNum);
				
				quantity.text(totalCount);
				productadd();
				i = 1;
				totalCount = 1;
				quantity.text(totalCount);
				// totalNum = totalCount;

				$('#cart-layout').addClass('open').fadeIn();
				productremove();

			});

		};
		CartHandler();
		

		
		



	});
	


	$('.details').click(()=>{
        $('#details-layout').fadeIn();
    });
	$('.btn-close').click(()=>{
        $('#details-layout').fadeOut();

    });
	var detailBg = $("#details-layout");
        $("#details-layout").mouseup(function (e){
            if(cartBg.has(e.target).length == 0 ){
                $('#details-layout').fadeOut();
                // $("#cart-layout").off('scroll touchmove mousewheel');
            };
        });

		


	
	// console.log("ready!");
});


