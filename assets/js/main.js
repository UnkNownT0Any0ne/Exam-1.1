jQuery(document).ready(function() {
	jQuery('.hamburger').click(function () {
		jQuery(this).toggleClass('hamburger_active');
		jQuery('.header__footer').stop().slideToggle(400);
	});
});