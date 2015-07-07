/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can 
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

// Use this variable to set up the common and page specific functions. If you 
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  // All pages
  common: {
    init: function() {
      // JavaScript to be fired on all pages
    }
  },
  // Home page
  home: {
    init: function() {
      // JavaScript to be fired on the home page
      
	$(document).ready(function(){
	  $('#main-banner').slick({
		infinite: true,
		autoplay: true,
		autoplaySpeed: 2000
	  });
	  
	  $('.home-news .section-contents').slick({
		  infinite: true,
		  speed: 300,
		  slidesToShow: 3,
		  slidesToScroll: 3,
		  responsive: [
			{
			  breakpoint: 9999,
			  settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
				infinite: true
			  }
			},
			{
			  breakpoint: 992,
			  settings: {
				slidesToShow: 2,
				slidesToScroll: 2,
				infinite: true
			  }
			},
			{
			  breakpoint: 768,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true
			  }
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
		  ]
	  });


	});
	  
    }
  },
  // News page
  news: {
    init: function() {
      // JavaScript to be fired on the home page
      
	$(document).ready(function(){
		
		
		$('.have-excerpt .news-content-container').hide();
		$('.have-excerpt .news-excerpt-container').show();
		
		$('.have-excerpt .expend-btn').click(function(e){
			e.preventDefault();
			// hide all span
			var $thisexcerpt = $(this).parent().find('.news-excerpt-container');
			var $thiscontent = $(this).parent().find('.news-content-container');
			
			$thisexcerpt.slideToggle(1000);
			$thiscontent.slideToggle(1000);
			
			$(this).toggleClass('expended');
			
			
		});



	  });
	  
    }
  },



  // Product Content page
  single_product: {
    init: function() {
      // JavaScript to be fired on the home page
      
	$(document).ready(function(){
		
		/*
		$('#product-slider').slick({
		  infinite: true,
		  speed: 300,
		  slidesToShow: 3,
		  slidesToScroll: 3,
		  responsive: [
			{
			  breakpoint: 1024,
			  settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
				infinite: true,
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
	  */
	  
	   $('.product-left-container').slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  arrows: false,
		  fade: true,
		  asNavFor: '#product-slider',
		  responsive: [
			{
			  breakpoint: 480,
			  settings: {
				arrows: true
			  }
			}
		  ]
		});
		$('#product-slider').slick({
		  slidesToShow: 3,
		  slidesToScroll: 1,
		  asNavFor: '.product-left-container',
		  centerMode: true,
		  focusOnSelect: true
		});
				
				
				

	$('#collection-slider').slick({
		  infinite: true,
		  speed: 300,
		  slidesToShow: 5,
		  slidesToScroll: 5,
		  responsive: [
			{
			  breakpoint: 1024,
			  settings: {
				slidesToShow: 5,
				slidesToScroll: 5,
				infinite: true,
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
	  
    }
  },
  
  
  
  // About us page, note the change from about-us to about_us.
  about_us: {
    init: function() {
      // JavaScript to be fired on the about us page
    }
  }
};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
