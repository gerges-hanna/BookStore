$(function () {
	'use strict';
	// Adjust Slider Height 
	var winH    = $(window).height(),
	    upperH  = $('.upper-bar').innerHeight(),
		navH    = $('.navbar').innerHeight();
	$('.slider, .carousel-item').height(winH - ( upperH + navH ));
//end slider


// Start featured work shuffle
   $('.featured-work ul li').on('click', function() {
	$(this).addClass('active').siblings().removeClass('active') ;
	if ($(this).data('class') === 'ALL' )
	{
		$('.shuffle-images .col-md').css('opacity', 1);
	} else {
		$('.shuffle-images .col-md').css('opacity', '.08');
		$($(this).data('class')).parent().css('opacity', 1) ;
	}
    

   });


});