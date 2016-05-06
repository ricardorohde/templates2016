
new WOW().init();

/*===================================================================================*/
/*	HEADER SHRINK
/*===================================================================================*/

$(document).ready(function() {
	
	var s = skrollr;
	var sActive = false;
	
	if ($(window).width() > 977) {
		s.init();
		sActive = true;
	}
	
	$(window).on('resize', function() {
		if ($(window).width() < 977 && sActive) {
			s.init().destroy();
			sActive = false;
		}
		else if ($(window).width() > 977) {
			s.init();
			sActive = true;
		}
	});
	
});


/*===================================================================================*/
/*	STICKY NAVIGATION
/*===================================================================================*/

$(document).ready(function() {
	$('.navbar .navbar-collapse').waypoint('sticky');
});


/*===================================================================================*/
/*	DROPDOWN ON HOVER (NAVIGATION)
/*===================================================================================*/

$(document).ready(function () {
	
	$('.js-activated').dropdownHover({
		instantlyCloseOthers: false,
		delay: 0
	}).dropdown();
	
});

/*==============================================================*/
/* faz o scroll nos botoes */
/*==============================================================*/
$(document).ready(function(){
    $('a[href^="#"]').bind('click.smoothscroll',function (e) {
        e.preventDefault();
      
        var target = this.hash,
        $target = $(target);
		
		 $('a').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
      
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top-110
        }, 1900, 'swing', function () {
            window.location.hash = target;
        });
    });
});
/*==============================================================*/
/* termina o scroll nos botoes */
/*==============================================================*/

$(document).ready(function () {

	$("#owl-clients").owlCarousel({
		autoPlay: 5000,
		stopOnHover: true,
		rewindNav: true,
		items: 4,
		itemsDesktopSmall: [1199, 4],
		itemsTablet: [977, 3],
		navigation: true,
		pagination: true,
		navigationText: ["<i class='icon-left-open-mini'></i>", "<i class='icon-right-open-mini'></i>"]
	});

	$("#owl-depoimentos").owlCarousel({
		autoPlay: 5000,
		stopOnHover: true,
		rewindNav: true,
		items: 1,
		itemsDesktopSmall: [1199, 4],
		itemsTablet: [977, 3],
		navigation: false,
		pagination: true,
		navigationText: ["<i class='icon-left-open-mini'></i>", "<i class='icon-right-open-mini'></i>"]
	});

});

/*===================================================================================*/
/*	ANIMATIONS ON SCROLL
/*===================================================================================*/

$(document).ready(function() {
	/*var waypointClass = '[class*="animate"]';
	$(waypointClass).css({opacity: '0'});
	
	$(waypointClass).waypoint(function() {
		var animationClass = $(this).attr('class').split('animate-')[1];
		var delayTime = $(this).data('delay');
		$(this).delay(delayTime).queue(function(next){
			$(this).toggleClass('animated');
			$(this).toggleClass(animationClass);
			next();
		});
	},
	{
		offset: '90%',
		triggerOnce: true
	});*/
	
	/*var waypointClass = 'main [class*="col-"]';
	var animationClass = 'fadeInUp';
	var delayTime;
	$(waypointClass).css({opacity: '0'});
	
	$(waypointClass).waypoint(function() {
		delayTime += 100;
		$(this).delay(delayTime).queue(function(next){
			$(this).toggleClass('animated');
			$(this).toggleClass(animationClass);
			delayTime = 0;
			next();
		});
	},
	{
		offset: '90%',
		triggerOnce: true
	});*/
});


/*===================================================================================*/
/*	ISOTOPE PORTFOLIO
/*===================================================================================*/

$(document).ready(function () {
	
	var $container = $('.items');
	
	$container.imagesLoaded(function () {
		$container.isotope({
			itemSelector: '.item'
		});
	});
	
	$('.portfolio .filter li a').click(function () {
		
		$('.portfolio .filter li a').removeClass('active');
		$(this).addClass('active');
		
		var selector = $(this).attr('data-filter');
	
		$container.isotope({
			filter: selector
		});
		
		return false;
		
	});
	
});


/*===================================================================================*/
/*	ISOTOPE PORTFOLIO FULLSCREEN
/*===================================================================================*/

$(document).ready(function () {
	
	var isotopeBreakpoints = [
		
		{
			// Desktop
			min_width: 1680,
			columns: 6
		},
		
		{
			// iPad Landscape
			min_width: 1140,
			max_width: 1680,
			columns: 5
		},
		
		{
			// iPad Portrait
			min_width: 1024,
			max_width: 1440,
			columns: 4
		},
		
		{
			// iPhone Landscape
			min_width: 768,
			max_width: 1024,
			columns: 3
		},
		
		{
			// iPhone Portrait
			max_width: 768,
			columns: 1
		}
		
	];
	
	var $container = $('.items.fullscreen');
	
	$container.imagesLoaded(function () {
		$container.isotope({
			itemSelector: '.item'
		});
	});
	
	// hook to resize the portfolio items for fluidity / responsiveness
	$(window).smartresize(function () {
		var windowWidth = $(window).width();
		var windowHeight = $(window).height();
		
		for (var i = 0; i < isotopeBreakpoints.length; i++) {
			if (windowWidth >= isotopeBreakpoints[i].min_width || !isotopeBreakpoints[i].min_width) {
				if (windowWidth < isotopeBreakpoints[i].max_width || !isotopeBreakpoints[i].max_width) {
					$container.find('.item').each(function () {
						$(this).width(Math.floor($container.width() / isotopeBreakpoints[i].columns));
					});
					
					break;
				}
			}
		}
	});
	
	$(window).trigger('smartresize');
	
});


/*===================================================================================*/
/*	ISOTOPE BLOG
/*===================================================================================*/

$(document).ready(function () {
	
	var $container = $('.posts');
	
	$container.imagesLoaded(function () {
		$container.isotope({
			itemSelector: '.post'
		});
	});
	
	$('.format-filter li a, .format-wrapper a').click(function () {
		
		var selector = $(this).attr('data-filter');
		
		$container.isotope({
			filter: selector
		});
		
		$('.format-filter li a').removeClass('active');
		$('.format-filter li a[data-filter="'+selector+'"]').addClass('active');
		
		$('html, body').animate({
			scrollTop: $('.format-filter').offset().top -130
		}, 600);
		
		return false;
		
	});
	
	$(window).on('resize', function () {
		$('.posts').isotope('reLayout')
	});
	
});


/*===================================================================================*/
/*	TABS
/*===================================================================================*/

$(document).ready(function () {
	
	/*$('.tabs.tabs-services').easytabs({
		cycle: 5000
	});*/
	
	$('.tabs.tabs-top, .tabs.tabs-circle-top, .tabs.tabs-2-big-top, .tabs.tabs-side').easytabs({
		animationSpeed: 200,
		updateHash: false
	});
	
});


/*===================================================================================*/
/*	ACCORDION (FOR ISOTOPE HEIGHT CALCULATION)
/*===================================================================================*/

$(document).ready(function () {
	if ($('.panel-group .portfolio').length > 0) {
		$('.panel-group .collapse.in').collapse({
			toggle: true
		});
	}
});


/*===================================================================================*/
/*	GO TO TOP / SCROLL UP
/*===================================================================================*/

! function (a, b, c) {
	a.fn.scrollUp = function (b) {
		a.data(c.body, "scrollUp") || (a.data(c.body, "scrollUp", !0), a.fn.scrollUp.init(b))
	}, a.fn.scrollUp.init = function (d) {
		var e = a.fn.scrollUp.settings = a.extend({}, a.fn.scrollUp.defaults, d),
			f = e.scrollTitle ? e.scrollTitle : e.scrollText,
			g = a("<a/>", {
				id: e.scrollName,
				href: "#top"/*,
				title: f*/
			}).appendTo("body");
		e.scrollImg || g.html(e.scrollText), g.css({
			display: "none",
			position: "fixed",
			zIndex: e.zIndex
		}), e.activeOverlay && a("<div/>", {
			id: e.scrollName + "-active"
		}).css({
			position: "absolute",
			top: e.scrollDistance + "px",
			width: "100%",
			borderTop: "1px dotted" + e.activeOverlay,
			zIndex: e.zIndex
		}).appendTo("body"), scrollEvent = a(b).scroll(function () {
			switch (scrollDis = "top" === e.scrollFrom ? e.scrollDistance : a(c).height() - a(b).height() - e.scrollDistance, e.animation) {
			case "fade":
				a(a(b).scrollTop() > scrollDis ? g.fadeIn(e.animationInSpeed) : g.fadeOut(e.animationOutSpeed));
				break;
			case "slide":
				a(a(b).scrollTop() > scrollDis ? g.slideDown(e.animationInSpeed) : g.slideUp(e.animationOutSpeed));
				break;
			default:
				a(a(b).scrollTop() > scrollDis ? g.show(0) : g.hide(0))
			}
		}), g.click(function (b) {
			b.preventDefault(), a("html, body").animate({
				scrollTop: 0
			}, e.scrollSpeed, e.easingType)
		})
	}, a.fn.scrollUp.defaults = {
		scrollName: "scrollUp",
		scrollDistance: 300,
		scrollFrom: "top",
		scrollSpeed: 300,
		easingType: "linear",
		animation: "fade",
		animationInSpeed: 200,
		animationOutSpeed: 200,
		scrollText: "Scroll to top",
		scrollTitle: !1,
		scrollImg: !1,
		activeOverlay: !1,
		zIndex: 2147483647
	}, a.fn.scrollUp.destroy = function (d) {
		a.removeData(c.body, "scrollUp"), a("#" + a.fn.scrollUp.settings.scrollName).remove(), a("#" + a.fn.scrollUp.settings.scrollName + "-active").remove(), a.fn.jquery.split(".")[1] >= 7 ? a(b).off("scroll", d) : a(b).unbind("scroll", d)
	}, a.scrollUp = a.fn.scrollUp
}(jQuery, window, document);

$(document).ready(function () {
	$.scrollUp({
		scrollName: "scrollUp", // Element ID
		scrollDistance: 300, // Distance from top/bottom before showing element (px)
		scrollFrom: "top", // "top" or "bottom"
		scrollSpeed: 1000, // Speed back to top (ms)
		easingType: "easeInOutCubic", // Scroll to top easing (see http://easings.net/)
		animation: "fade", // Fade, slide, none
		animationInSpeed: 200, // Animation in speed (ms)
		animationOutSpeed: 200, // Animation out speed (ms)
		scrollText: "<i class='icon-up-open-mini'></i>", // Text for element, can contain HTML
		scrollTitle: " ", // Set a custom <a> title if required. Defaults to scrollText
		scrollImg: 0, // Set true to use image
		activeOverlay: 0, // Set CSS color to display scrollUp active point, e.g "#00FFFF"
		zIndex: 1001 // Z-Index for the overlay
	});
});


/*===================================================================================*/
/*	IMAGE HOVER
/*===================================================================================*/

$(document).ready(function () {
	$('.icon-overlay a').prepend('<span class="icn-more"></span>');
});


/*===================================================================================*/
/*	FORM
/*===================================================================================*/

jQuery(document).ready(function ($) {
	$('.forms').dcSlickForms();
});

$(document).ready(function () {
	
	$('.comment-form input[title], .comment-form textarea').each(function () {
		
		if ($(this).val() === '') {
			$(this).val($(this).attr('title'));
		}
		
		$(this).focus(function () {
			if ($(this).val() == $(this).attr('title')) {
				$(this).val('').addClass('focused');
			}
		});
		
		$(this).blur(function () {
			if ($(this).val() === '') {
				$(this).val($(this).attr('title')).removeClass('focused');
			}
		});
		
	});
	
});


/*===================================================================================*/
/*	DATA REL
/*===================================================================================*/

$(document).ready(function () {
	$('a[data-rel]').each(function () {
		$(this).attr('rel', $(this).data('rel'));
	});
});


/*===================================================================================*/
/*	TOOLTIP
/*===================================================================================*/

$(document).ready(function () {
	if ($("[rel=tooltip]").length) {
		$("[rel=tooltip]").tooltip();
	}
});


/*===================================================================================*/
/*	GOOGLE MAPS
/*===================================================================================*

$(document).ready(function () {
	
	function initialize() {
		var mapOptions = {
			zoom: 13,
			center: new google.maps.LatLng(40.7902778, -73.9597222),
			disableDefaultUI: true
		}
		var map = new google.maps.Map(document.getElementById('map'), mapOptions);
	}
	
	google.maps.event.addDomListener(window, 'load', initialize);
	
});


/*===================================================================================*/
/*	CONVERTING iOS SAFARI VIEWPORT UNITS (BUGGY) INTO PIXELS
/*===================================================================================*/

$(document).ready(function () {
	window.viewportUnitsBuggyfill.init(true);
});