(function ($) {

  "use strict";

	// Counter Js
  	$('.counter').counterUp({
        delay: 10,
        time: 1000
    });

  	// OwlCarousel Js
  	$("#clients").owlCarousel({
     
          navigation : true, // Show next and prev buttons
          slideSpeed : 400,
          paginationSpeed : 400,
          singleItem:true,
          autoPlay: true
          // "singleItem:true" is a shortcut for:
          // items : 1, 
          // itemsDesktop : false,
          // itemsDesktopSmall : false,
          // itemsTablet: false,
          // itemsMobile : false
     
      });

  	// Preloaded Js
  	$(window).load(function(){
	    $(".page-loader").fadeOut("slow"); 
	  });


  	$.stellar();
  	
  	// Filter Js
  	$('#grid').mixItUp();

  	// lightbox Js
  	lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true,
      'fadeDuration':900,
      'imageFadeDuration':600,
      'positionFromTop':150,
      'disableScrolling':false
    })

})(jQuery);