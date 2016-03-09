jQuery(document).ready(function ($) {
	
    //init BxSlider
    $('.bxslider').each(function(){

	 	var bx_slidewidth = $(this).data('bx-slidewidth');
		var bx_minslides = $(this).data('bx-minslides');
		var bx_maxslides = $(this).data('bx-maxslides');
		var bx_slidemargin = $(this).data('bx-slidemargin');
		var bx_pager = $(this).data('bx-pager');
		var bx_captions = $(this).data('bx-captions');
		var bx_moveslides = $(this).data('bx-moveslides');
	 	$(this).bxSlider({
			slideWidth : bx_slidewidth,
			minSlides : bx_minslides,
			maxSlides : bx_maxslides,
			slideMargin : bx_slidemargin,
			pager: bx_pager,
			captions : bx_captions,
			moveSlides : bx_moveslides
		});
   });	
});
