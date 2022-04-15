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
		if($(this).hasClass('nav__link--nestedOpen')) {
			$('.nav__nested').removeClass('nav__nested--open');
			$(this).removeClass('nav__link--nestedOpen');

			setTimeout(() => {
				$('.nav__nested').hide();
			}, 500);
			
		}
		else {
			$('.nav__nested').show();
			$(this).addClass('nav__link--nestedOpen');

			setTimeout(() => {
				$('.nav__nested').addClass('nav__nested--open');
			});
		}
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
				breakpoint: 1550,
				settings: {
					slidesToShow: 3
				}
			},
			{
				breakpoint: 1240,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 1
				}
			},
		]
	});

	$('.expand__button').on('click', function() {
		$(this).closest('.expand').toggleClass('expand--open');
	});

	$('.promo__button--gift').on('click', function() {
		$('.lp9-widget-on').addClass('lp9-widget-a');
		$('.lp9-widget-bg-on').addClass('lp9-widget-bg-a');
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

	$('.reasons__item').hover(
		function() {
			$(this).addClass('reasons__item--hover');
			$(this).find('.reasons__text').slideDown(500);
		},
		function() {
			$(this).removeClass('reasons__item--hover');
			$(this).find('.reasons__text').slideUp(500);
		}
	)

	$('.catalog__select').on('change', function(e) {
	    $('.catalog__filter').submit();
	});

	$('.closePopup').on('click', closePopup);

	$('.popup').on('click', function(e) {
		let $wrapper = $(this);

		if ($wrapper.has(e.target).length === 0 ) {
			if($('.popup').hasClass('popup--video')) {
				$('.case__video').empty();
			}

			closePopup(e);
		}
	});

	$('.openPopup--common').on('click', function() {
	    openPopup('.popup--common');
	});

	$('.openPopup--service').on('click', function() {
	    openPopup('.popup--service');

	    let service = $(this).closest('.service__item').find('.service__title').text();

	    $('.popup--service .popup__title span').text(service.toLowerCase());
	    $('.popup--service input[name=popup-service-name]').val(service);
	});

	$('.openPopup--kp').on('click', function() {
	    openPopup('.popup--kp');
	});

	$('.openPopup--analysis').on('click', function() {
	    openPopup('.popup--analysis');
	});

	$('.openPopup--task').on('click', function() {
	    openPopup('.popup--task');
	});

	$('.openPopup--task-common').on('click', function() {
	    openPopup('.popup--task-common');
	});

	$('.openPopup--audit-prepare').on('click', function() {
	    openPopup('.popup--audit-prepare');
	});

	$('.openPopup--audit-buy').on('click', function() {
	    openPopup('.popup--audit-buy');
	});

	$('.openPopup--audit-violation').on('click', function() {
	    openPopup('.popup--audit-violation');
	});

	$('.openPopup--problem').on('click', function() {
	    openPopup('.popup--problem');
	});

	$('.openPopup--product').on('click', function() {
	    openPopup('.popup--product');
	});

	$('.case__play').on('click', function() {
		openPopup('.popup--video');
		$('.popup--video').addClass('popup--video-open');

		let videoLink = $(this).data('video').split('/');
		let title = $(this).data('caption');

		let videoId = videoLink[videoLink.length - 1];

		$('.case__video').html(`<iframe src="https://www.youtube-nocookie.com/embed/${videoId}?autoplay=1" title="${title}" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>`);
	});

	$('.closePopup--video').on('click', function(e) {
		closePopup(e);

		$('.case__video').empty();
	});

	$('.form__submit--advice').on('click', function(event) {
	    ajaxHandler(event, `${themeRoot}/php/advice.php`, $(this));
	});

	$('.form__submit--advice-home').on('click', function(event) {
	    ajaxHandler(event, `${themeRoot}/php/advice-home.php`, $(this));
	});

	$('.form__submit--advice-bottom').on('click', function(event) {
	    ajaxHandler(event, `${themeRoot}/php/advice-bottom.php`, $(this));
	});

	$('.form__submit--contacts').on('click', function(event) {
	    ajaxHandler(event, `${themeRoot}/php/contacts.php`, $(this));
	});

	$('.form__submit--popup-common').on('click', function(event) {
	    ajaxHandler(event, `${themeRoot}/php/popup-common.php`, $(this));
	});

	$('.form__submit--popup-extended').on('click', function(event) {
	    ajaxHandler(event, `${themeRoot}/php/popup-extended.php`, $(this));
	});

	$('.form__submit--popup-service').on('click', function(event) {
	    ajaxHandler(event, `${themeRoot}/php/popup-service.php`, $(this));
	});

	$('.form__submit--popup-kp').on('click', function(event) {
	    ajaxHandler(event, `${themeRoot}/php/popup-kp.php`, $(this));
	});

	$('.form__submit--popup-product').on('click', function(event) {
	    ajaxHandler(event, `${themeRoot}/php/popup-product.php`, $(this));
	});

	$('#popup-kp-file').on('change', function() {
		let file = $(this)[0].files[0];
		$('.form__label--file p').text(file.name);
	});

	function ajaxHandler(event, src, submit) {
	    let $submit = submit;
	    let $form = $submit.closest('.form');
	    let $inputWrap = $form.find('.form__label');

	    event.preventDefault();
	    $submit.attr('disabled', true);
	    
	    $.ajax({
	        url: src,
	        method: 'POST',
	        data: $form.serialize(),
	        dataType: 'json',
	        timeout: 10000,
	        success: function(data) {
	            onSucess(data, $form, $inputWrap);
	        },
	        complete: function() {
	            $submit.attr('disabled', false);
	        },
	    });
	}

	function onSucess(data, $form, $label) {
		if(data.res) {
	    	$label.removeClass('form__label--wrong');
	    	$form.trigger('reset');

	    	openPopup('.popup--done');
	    } else {
	       $label.attr('data-error', '').removeClass('form__label--wrong');

	        for( let name in data.errors) {
	            let target = $(`[name=${name}]`);
	            
	            if(target.length > 0){
	                target.closest($label).addClass('form__label--wrong').attr('data-error', data.errors[name]);
	            }
	        }
	    }
	}

	function openPopup(selector) {
	    $(selector).show();

	    setTimeout(() => {
	        $(selector).addClass('popup--open');
	    });

	    $('html').addClass('openMenu');
	}

	function closePopup(e) {
		$('.popup').removeClass('popup--open');

		if($('.popup').hasClass('popup--video')) {
			$('.popup').removeClass('popup--video-open');
		}

		setTimeout(() => {
	    	$('.popup').hide();
	    }, 500);

		$('html').removeClass('openMenu');
	}
});