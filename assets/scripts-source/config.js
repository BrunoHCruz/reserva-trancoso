
$(document).scroll(function(){
	if ($(window).scrollTop() > 0) {
		$(".fixo").css("display","flex");
	}else {
		$(".fixo").css("display","none");
	}
});

$( document ).ready(function() {

	//Menu
	$('.header__btn-menu').on('click',function(){
		if($(this).hasClass("open")){
			$('.header__btn-menu, .header__lang--link, .webdoor-home__rodape--right a .icon, .webdoor-home__rodape--date span, .header__lang--icon').removeClass("open");
			$(this).find('span').text('MENU');
			$('.header__logo--image').attr('src','assets/images/logo-fasano-header.svg');
			$('.header__logo--image.menu-fixo').attr('src','assets/images/logo-fasano-header-color.svg');
			$('body').css('overflow-y', 'unset', 'overflow-x', 'hidden');
			$('.header__menu').css('display', 'none');
		}else{
			$('.header__btn-menu, .header__lang--link, .webdoor-home__rodape--right a .icon, .webdoor-home__rodape--date span, .header__lang--icon').addClass("open");
			$('.header__btn-menu.default').find('span').text('FECHAR');
			$('.header__logo--image').attr('src','assets/images/logo-fasano-header-color.svg');
			$('body').css('overflow', 'hidden');
			$('.header__menu').css('display', 'block');
		}
	});

	//Button Menu fixo
	$(".menu-fixo").click(function(){
		$(document).scrollTop(0);
	});

	// Webdoors Home - Background
	if(window.screen.width > 720){
		$('.webdoor-home__link').mouseenter(function() {
			var bg_img = "/" + $(this).attr('data-bg');
			$('.webdoor__home').css('background-image', 'url(' + bg_img + ')');

			if (bg_img != "/"){
				$('.webdoor-home__video').animate({
					opacity: 0
				}, 300 );
			}

			$(this).find("span").css("opacity","1");
		}).mouseleave(function() {
			$(this).find("span").css("opacity","0");
		});

		$('.webdoor-home__item, .webdoor-home__item div').mouseleave(function() {
			$('.webdoor-home__video').animate({
				opacity: 1
			}, 100 );
		});

		$('.webdoor-home__item .middle').mouseenter(function() {
			$('.webdoor-home__video').css({
				opacity: 1
			});
		});
	}

	// Arrow - Villas
	$(".middle .webdoor-home__link").on( "mouseenter", function() {
        $(".webdoor-home__item div").slideDown("fast");
      }
    );
    $(".webdoor-home__item div, .middle").on( "mouseleave", function() {
      $(".webdoor-home__item div").slideUp("fast");
    });
    if(window.screen.width < 720){
	//   $(".villas").attr("data-bg","assets/images/webdoor-home.jpg");
	}
	// End

	
	//INSTAGRAM

	// var token = '3593094336.MTY3N2VkMA==.ZjI3MzdlNjcwZjJh.NDYxZjk4YTY3ZDA5ZDJjODg2MWI=',
	// num_photos = 4;
  
	// $.ajax({
	// 	url: 'https://api.instagram.com/v1/users/self/media/recent/?access_token=3593094336.MTY3N2VkMA==.ZjI3MzdlNjcwZjJh.NDYxZjk4YTY3ZDA5ZDJjODg2MWI=',
	// 	dataType: 'jsonp',
	// 	type: 'GET',
	// 	data: {
	// 		access_token: token,
    //     	count: num_photos
	// 	},
	// 	success: function(data) {
	// 		console.log("Sucesso!");
	// 		console.log(data);
			
	// 		// for(var x in data.data ) {
	// 		// 	$(document).find('.lista-insta').slick('slickAdd', '<div class="insta-item" style="display:inline; background-imagem:url('+data.data[x].images.low_resolution.url+');"><a href="'+data.data[x].link+'" target="_blank"><div class="foto-item" style="background-image:url('+data.data[x].images.low_resolution.url+');></div><img src="'+data.data[x].images.low_resolution.url+'"></div></a>');
	// 		// }
	// 	},
	// 	error: function(data) {
    //         console.log("Erro!");
	// 		console.log(data);
	// 	}
	// });

	//FIM INSTAGRAM


});
