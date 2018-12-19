$('.js-menu-toggle').click(function () {
	$('.mobile-menu').toggleClass('is-active');
	$('html').toggleClass('nav-open');
});

var header_position = $(".header").offset().top;
var height = $('.header').outerHeight();

$(window).scroll(function () {
	if ($(window).scrollTop() > (160)) {
		$('header').addClass('is-scrolled');
	}
	if ($(window).scrollTop() < (160)) {
		$('header').removeClass('is-scrolled');
	}
});
