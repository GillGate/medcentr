$(function(){
	$('.header__bar').on('click', function() {
		$(this).toggleClass('header__bar--open');

		$('.nav').toggleClass('nav--open');
		$('html').toggleClass('openMenu');
	});

	$('.nav__link--services').on('click', function() {
		$(this).toggleClass('nav__link--nestedOpen');
		$('.nav__nested').slideToggle(300);
	});

	$('.reviews__slider').slick({
		slidesToShow: 1,
		prevArrow: '.reviews__button--prev',
		nextArrow: '.reviews__button--next',
		dots: true,
		appendDots: '.reviews__dots'
	});
});