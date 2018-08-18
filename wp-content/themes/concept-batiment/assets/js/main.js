
;(function($){
	$(document).ready(function(){

		$('body').addClass('js');

		var img = document.getElementById('heightimage');

		if ( img !== null ) {
			var height = img.clientHeight + 70;
			$('.header-home').css('height', + height +'px');
		}

		// Animation hamburger
		if ($('.hamburger').length > 0) {
			$('.hamburger').click(function() {
				$(this).toggleClass('active').parent().find('#primary-menu').slideToggle('medium');
			});
		}

		// Slick inspiration homepage
		if ($('.wrapper-inspirations').length > 0) {
			$('.wrapper-inspirations').slick({
				dots: false,
				speed: 500,
				infinite: false,
				arrows: true,
				prevArrow: '<span class="slickArrow slickArrow-prev"></span>',
	            nextArrow: '<span class="slickArrow slickArrow-next"></span>',
			});
		}

		// Slick clients homepage
		if ($('.wrapper-clients').length > 0) {
			$('.wrapper-clients').slick({
				dots: false,
				arrows: true,
				prevArrow: '<span class="slickArrow slickArrow-prev"></span>',
	            nextArrow: '<span class="slickArrow slickArrow-next"></span>',
				speed: 500,
			});
		}

		// Mobile
		var breakpoint = 768;

		if($(document).width() < breakpoint) {
			// Slider prestations only mobile
			$('.wrapper-prestations').slick({
				arrows: false,
				dots: true,
				infinite: false,
				slidesToShow: 1,
				slidesToScroll: 1
			});
		}

		/********************************************
		 * 		Mmenu navigation menu
		 ********************************************/
		var $btn_mobile_menu = $("#btn-mobile-menu");
		$("#navmob").mmenu({
			"navbar": {
				"add": false
			}
		}, {
			// configuration
			offCanvas: {
				pageSelector: "#playground"
			},
			classNames: {
				selected: "current-menu-item"
			}
		});
		var API = $("#navmob").data( "mmenu" );

		$btn_mobile_menu.on('click', function() {
			API.open();
		});

		API.bind( "open:finish", function() {
			setTimeout(function() {
				$btn_mobile_menu.addClass( "active" );
			}, 100);
		});

		API.bind( "close:finish", function() {
			setTimeout(function() {
				$btn_mobile_menu.removeClass( "active" );
			}, 100);
		});



		/********************************************
		 * 		when items become links
		 ********************************************/
		// ex 1: <div data-link="http://www.redpik.net">...</div>
		// ex 2: <div data-link="http://www.redpik.net" data-blank="1">...</div>
		$('[data-link]').on('click', function() {
			var url = $(this).data('link');
			var blank = $(this).data('blank');
			if (blank)
				window.open(url);
			else {
				window.location = url;
			}
			return false;
		});
		// propagation problem?
		$('[data-link] a').on('click', function(e) {
			e.stopPropagation();
		});



		/********************************************
		 * 		rel attribute for galleries
		 ********************************************/
		$('.gallery').each(function() {
			var $_gal = $(this);
			var idgal = $_gal.attr('id');
			$('a', $_gal).attr('data-fancybox', idgal);
		});



		/********************************************
		 * 		Popin images with fancybox
		 ********************************************/
		$('.fancybox, a[href$=".jpg"], a[href$=".jpeg"], a[href$=".png"], a[href$=".gif"]').fancybox({
			loop: true
		});



		/********************************************
		 * 		fitvids.js
		 ********************************************/
		$(".entry-content").fitVids();
		$(".entry-content").fitVids({ customSelector: "iframe[src*='dailymotion.com']"});

	});
})(window.jQuery);
