$().ready(function() {

	$('ul.navbar-nav').hover(function() {
		jQuery(this).find('.dropdown-menu').stop(true, true).delay(50).fadeIn();

	}, function() {
		jQuery(this).find('.dropdown-menu').stop(true, true).delay(50).fadeOut();

	});
});