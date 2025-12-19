jQuery(function ($) {

	'use strict';

	$('#quote-carousel').carousel({
		pause: true,
		interval: 4000,
	});

	new WOW().init();

	$('#header_wrapper').scrollToFixed();
	$('.res-nav_click').click(function () {
		$('.mainNav').slideToggle();
		return false

	});

});