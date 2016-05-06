new WOW().init();

jQuery(document).ready(
  function() {
    //jQuery("html").niceScroll();
  }
);

jQuery(document).ready(function($) {
	$(window).scroll(function () {
		if ($(this).scrollTop() > 245) {
		  $("#navbar-topo").addClass("navbar-fixed-top animated fadeIn border-scroll nav-scroll");
		} else {
		  $("#navbar-topo").removeClass("navbar-fixed-top animated fadeIn border-scroll nav-scroll");
		}
	});
});

jQuery(document).ready(function($) {
	$('ul.nav li.dropdown, ul.nav li.dropdown-submenu').hover(function() {
		$(this).find(' > .dropdown-menu').stop(true, true).delay(200).fadeIn();
	}, function() {
		$(this).find(' > .dropdown-menu').stop(true, true).delay(200).fadeOut();
	});
});

/*==============================================================*/
/* faz o scroll nos botoes */
/*==============================================================*/
$(document).ready(function(){
    $('a[href^="#"]').bind('click.smoothscroll',function (e) {
        e.preventDefault();
        var target = this.hash,
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top-110
        }, 1900, 'swing', function () {
            window.location.hash = target;
        });
    });
});

jQuery(document).ready(function($) {
  $('.clientes-slider').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    autoPlay: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
});
jQuery(document).ready(function () {
	jQuery("#owl-depoimentos").owlCarousel({
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

jQuery(document).ready(function($) {
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
});
