$(function(){
	let clWidth = document.documentElement.clientWidth;

	$('.navigateLink').on('click', function(e) {
	    e.preventDefault();

	    let target = $(this).attr('href');

	    $('html, body').animate({
	      scrollTop: $(target).offset().top
	    }, 700);
	});

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

	$('.partners__slider').slick({
		slidesToShow: 5,
		autoplay: true,
		arrows: false,
		dots: true,
		appendDots: '.partners__dots',
		responsive: [
			{
				breakpoint: 1240,
				settings: {
					slidesToShow: 4
				}
			},
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2
				}
			},
		]
	});

	if(clWidth < 769) {
		$('.team__list').slick({
			slidesToShow: 1,
			prevArrow: '.team__button--prev',
			nextArrow: '.team__button--next'
		});
	}

	$('.similar__list').slick({
		slidesToShow: 4,
		prevArrow: '.similar__button--prev',
		nextArrow: '.similar__button--next',
		responsive: [
			{
				breakpoint: 1240,
				settings: {
					slidesToShow: 3
				}
			},
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1
				}
			},
		]
	});

	$('.sliderTeam__list').slick({
		slidesToShow: 4,
		prevArrow: '.sliderTeam__button--prev',
		nextArrow: '.sliderTeam__button--next',
		responsive: [
			{
				breakpoint: 1240,
				settings: {
					slidesToShow: 3
				}
			},
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 581,
				settings: {
					slidesToShow: 1
				}
			},
		]
	});

	$('.expand__button').on('click', function() {
		$(this).closest('.expand').toggleClass('expand--open');
	});

	$('.carousel__list').slick({
		slidesToShow: 3,
		prevArrow: '.carousel__button--prev',
		nextArrow: '.carousel__button--next',
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 581,
				settings: {
					slidesToShow: 1,
					autoplay: true
				}
			},
		]
	});

	$('.faq__title').on('click', function() {
		$(this).closest('.faq__item').toggleClass('faq__item--opened');
		$(this).next().slideToggle(500);
	});
});