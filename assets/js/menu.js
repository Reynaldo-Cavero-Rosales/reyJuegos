jQuery(document).ready(function($){
var aboveHeight = $('#header-box').outerHeight();
$(window).scroll(function(){
	if ($(window).scrollTop() > aboveHeight){
	$('.barra-menu').addClass('fixed').css('top','0').next().css('margin-top','52px');
	} else {
	$('.barra-menu').removeClass('fixed').next().css('margin-top','0');
	}
});
});
