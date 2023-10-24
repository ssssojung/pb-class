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
				$('.product-area > a').not('.'+filter).fadeOut('slow');
			}
			$('.product-area > a').filter('.'+filter).fadeIn('slow');
		
	});
	
	// $(function(){
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
			
			let title = $('.text-area .title').text();
			let img = $('.img-area').attr("style");
			let price = $('.text-area .price > span').text();
			let totalNum = cartNum;
			var productInfo = 

				`                
					<div class="add-item border-top" data-name="${title}">  
						<div class="item-content">
							<div class="item-img" style="${img}"></div>
							<div class="item-center">
								<div>
									<p class="item-name">${title}</p>
									<p class="item-price">$ <span>${price}</span> USD</p>
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
			let totalPrice = totalNum * Number(price)
			$('#cart-layout .cart-total').text(totalPrice.toFixed(2));
			
			$('.cart-center').append(productInfo);
			var arr = $('.add-item').get();
			
			// $.each(arr, function(i,ele){
			// 	var item = ele.dataset.name;
			// 	if(arr[i].dataset.name == item){
			// 		console.log(true);
			// 		// console.log($(this));
			// 		$('.add-item[data-name=]')
			// 		$(this).find('.item-quantity').text(totalNum);
			// 	}else{
			// 		$('.cart-center').append(productInfo);
			// 	}
			// 	// console.log(item);
			// 	// console.log(arr[i].dataset.name)
			// })
		}

		const productremove = () =>{
			$('.btn-remove').click(function(){
				$(this).closest('.add-item').remove();
			});
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
				productremove();
			});
		};
		CartHandler();


	// });
	


	$('.details').click(()=>{
        $('#details-layout').addClass('show');
    });
	$('.btn-close').click(()=>{
        $('#details-layout').removeClass('show');
    });

		


	
	// console.log("ready!");
});


