$('.js-menu-toggle').click(function () {
	$('.mobile-menu').toggleClass('is-active');
	$('html').toggleClass('nav-open');
});

var header_position = $(".header").offset().top;
var height = $('.header').outerHeight();

$(window).scroll(function () {
	if ($(window).scrollTop() > (height)) {
		$('header').addClass('is-scrolled');
	}
	if ($(window).scrollTop() < (height)) {
		$('header').removeClass('is-scrolled');
	}
});
