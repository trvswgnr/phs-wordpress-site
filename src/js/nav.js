$('.js-menu-toggle').click(function () {
	$('.mobile-menu').toggleClass('is-active');
	$('html').toggleClass('nav-open');
});

var header_position = $(".header").offset().top;
var header_height = $('.header').outerHeight();

$('head').append(`<style>@media (min-width: 920px) {#page {padding-top: ${header_height}px;}}</style>`);

$(window).scroll(function () {
	if ($(window).scrollTop() > (header_height + 70)) {
		$('header').addClass('is-scrolled');
	}
	if ($(window).scrollTop() < (header_height + 70)) {
		$('header').removeClass('is-scrolled');
	}
});

