<?php
/*
	Template Name: Проектирование и ремонт мед. клиник
*/
?>
<?php get_header(); ?>
<main class="single">
	<div class="single__head">
		<div class="container single__headWrapper">
			<h1 class="h1 single__title"><?php the_title(); ?></h1>
			<div class="single__headInfo">
				<div class="text single__headText"><?php the_content(); ?></div>
				<button type="button" class="button openPopup--common">Бесплатная консультация</button>
			</div>
		</div>
	</div>
	<section class="banner banner--extended single__banner">
		<div class="container banner__wrapper">
			<div class="banner__info">
				<p class="banner__caption">Мы предлагаем</p>
				<h2 class="h2 banner__title">Подготовим помещение любой сложности для оказания медицинских услуг в соответствии с СанПиН ЛПУ</h2>
				<ul class="list banner__list">
					<li class="list__item list__item--location">Спроектировали <span>более 73 клиник</span> от 50м² до 3000м² </li>
					<li class="list__item list__item--team"><span>Учитываем не только требования,</span> но и комфорт врачей и пациентов клиники</li>
					<li class="list__item list__item--gos">Проект будет <span>согласован с Роспотребнадзором</span></li>
					<li class="list__item list__item--gos">Ремонт <span>по нормам СП,</span> который не придется переделывать</li>
				</ul>
			</div>
			<div class="banner__person">
				<div class="banner__personInfo">
					<p class="banner__personTitle">Александра Смирнова</p>
					<p class="banner__personText">Основатель консалтингового центра, юрист</p>
				</div>
				<div class="banner__personImg">
					<img src="<?php echo IMG_DIR ;?>/member.png" loading="lazy" alt="">
					<div class="banner__personMessage">
						<span>5 лет</span>
						<p>Средний стаж работы проектировщиков, архитекторов и юристов в нашей компании</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="promo promo--mobile">
		<div class="container">
			<div class="promo__wrapper">
				<?php get_template_part('include/promo/gift'); ?>
			</div>
		</div>
	</section>
	<?php get_template_part('include/promo/wheel'); ?>
	<section class="carousel">
		<div class="container">
			<div class="carousel__info">
				<h2 class="h2 carousel__infoTitle">Мы <span>сэкономили</span> нашим заказчикам <span>свыше 11,5 млн ₽</span> за 2021 год</h2>
				<p class="text carousel__infoText">За счет быстрой работы, правильных проектов помещений и собственных ремонтно-строительных бригад.</p>
			</div>
			<div class="carousel__body">
				<div class="slider__controls carousel__controls">
					<button class="slider__button carousel__button carousel__button--prev">
						<span class="vh">Назад</span>
						<svg width="22" height="16" viewBox="0 0 22 16" fill="#848498" xmlns="http://www.w3.org/2000/svg">
							<path d="M5.34005 1.08414C5.7078 0.719657 6.30138 0.722305 6.66586 1.09005C7.03034 1.4578 7.02769 2.05138 6.65995 2.41586L4.45624 4.6C3.56187 5.48642 2.94837 6.09647 2.53324 6.61338C2.39833 6.78137 2.29308 6.92925 2.21135 7.0625L21 7.0625C21.5178 7.0625 21.9375 7.48223 21.9375 8C21.9375 8.51777 21.5178 8.9375 21 8.9375L2.21135 8.9375C2.29307 9.07075 2.39833 9.21863 2.53324 9.38662C2.94837 9.90353 3.56187 10.5136 4.45624 11.4L6.65995 13.5841C7.02769 13.9486 7.03034 14.5422 6.66586 14.9099C6.30138 15.2777 5.7078 15.2803 5.34005 14.9159L3.09663 12.6924C2.25166 11.8549 1.56108 11.1705 1.07132 10.5607C0.562035 9.92652 0.193367 9.28284 0.0948868 8.5102C0.0732956 8.34081 0.0625 8.17041 0.0625 8C0.0625 7.82959 0.0732956 7.65919 0.0948868 7.4898C0.193367 6.71716 0.562035 6.07348 1.07132 5.43932C1.56108 4.82948 2.25167 4.14505 3.09665 3.30761L5.34005 1.08414Z"/>
						</svg>
					</button>
					<button class="slider__button carousel__button carousel__button--next">
						<span class="vh">Вперёд</span>
						<svg width="22" height="16" viewBox="0 0 22 16" fill="#848498" xmlns="http://www.w3.org/2000/svg">
							<path d="M16.6599 1.08414C16.2922 0.719657 15.6986 0.722305 15.3341 1.09005C14.9697 1.4578 14.9723 2.05138 15.3401 2.41586L17.5438 4.6C18.4381 5.48642 19.0516 6.09647 19.4668 6.61338C19.6017 6.78137 19.7069 6.92925 19.7887 7.0625L1 7.0625C0.482233 7.0625 0.0625 7.48223 0.0625 8C0.0625 8.51777 0.482233 8.9375 1 8.9375L19.7887 8.9375C19.7069 9.07075 19.6017 9.21863 19.4668 9.38662C19.0516 9.90353 18.4381 10.5136 17.5438 11.4L15.3401 13.5841C14.9723 13.9486 14.9697 14.5422 15.3341 14.9099C15.6986 15.2777 16.2922 15.2803 16.6599 14.9159L18.9034 12.6924C19.7483 11.8549 20.4389 11.1705 20.9287 10.5607C21.438 9.92652 21.8066 9.28284 21.9051 8.5102C21.9267 8.34081 21.9375 8.17041 21.9375 8C21.9375 7.82959 21.9267 7.65919 21.9051 7.4898C21.8066 6.71716 21.438 6.07348 20.9287 5.43932C20.4389 4.82948 19.7483 4.14505 18.9034 3.30761L16.6599 1.08414Z"/>
						</svg>
					</button>
				</div>
				<div class="carousel__list carousel__list--expand">
					<?php foreach(getAdvantagesRemont() as $advantage) { ?>
						<div class="carousel__item">
							<h3 class="h3 carousel__title"><?php echo $advantage['title']; ?></h3>
							<div class="carousel__img">
								<?php echo $advantage['img']; ?>
							</div>
							<div class="carousel__expand">
								<h3 class="h3 carousel__expandTitle"><?php echo $advantage['title']; ?></h3>
								<div class="carousel__text"><?php echo wpautop($advantage['text']); ?></div>
							</div>
						</div>
					<?php } ?>
					<div class="carousel__item">
						<h3 class="h3 carousel__title">Сопровождаем до результата</h3>
						<div class="carousel__img">
							<img src="<?php echo IMG_DIR ;?>/service-remont/carousel-remont-2.jpg" loading="lazy" alt="">
						</div>
						<div class="carousel__expand">
							<h3 class="h3 carousel__expandTitle">Сопровождаем до результата</h3>
							<p class="carousel__text">От подбора помещения <span>до чистовой отделки</span></p>
						</div>
					</div>
					<div class="carousel__item">
						<h3 class="h3 carousel__title">Работаем по госнормам</h3>
						<div class="carousel__img">
							<img src="<?php echo IMG_DIR ;?>/service-remont/carousel-remont-3.jpg" loading="lazy" alt="">
						</div>
						<div class="carousel__expand">
							<h3 class="h3 carousel__expandTitle">Работаем по госнормам</h3>
							<p class="carousel__text">Соблюдаем требования нормативных документов и получаем СЭЗ и лицензию с первого раза <span>с гарантией без переделки</span></p>
						</div>
					</div>
					<div class="carousel__item">
						<h3 class="h3 carousel__title">Составляем полную проектную документацию</h3>
						<div class="carousel__img">
							<img src="<?php echo IMG_DIR ;?>/service-remont/carousel-remont-4.jpg" loading="lazy" alt="">
						</div>
						<div class="carousel__expand">
							<h3 class="h3 carousel__expandTitle">Составляем полную проектную документацию</h3>
							<p class="carousel__text"><span>Спроектируем архитектурную, конструктивную часть,</span> инженерные системы и дизайн-проект клиники +  проекты систем вентиляций и электроснабжения</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="promo">
		<div class="container">
			<div class="promo__wrapper">
				<div class="promo__item promo__item--evaluation">
					<h2 class="h2 promo__title">
						Присмотрели помещение, но не уверены в выборе? <br>
						<span>Проведем бесплатную консультацию!</span>
					</h2>
					<p class="promo__text">
						Оставьте заявку, и мы проверим помещение до покупки, укажем на плюсы и минусы и дадим свои рекомендации по подбору и ремонту помещения.
					</p>
					<div class="promo__img">
						<img src="<?php echo IMG_DIR ;?>/promo-left-bg.png" loading="lazy" alt="">
					</div>
					<button type="button" class="button button--filled openPopup--common promo__button">Бесплатная консультация</button>
				</div>
				<?php get_template_part('include/promo/gift'); ?>
			</div>
		</div>
	</section>
	<section class="steps">
		<div class="container">
			<h2 class="h2 steps__mainTitle">Посмотрите, какие этапы проходят наши клиенты при проектировании и ремонте</h2>
			<ul class="steps__list">
				<li class="steps__item">
					<p class="steps__order">1</p>
					<h3 class="h3 steps__title">Подберем помещение или выедем на Ваш объект</h3>
					<p class="steps__text">Проверим все - от метража кабинетов и высоты потолков до соблюдения норм пожарной безопасности, вентиляции и освещения</p>
				</li>
				<li class="steps__item">
					<p class="steps__order">2</p>
					<h3 class="h3 steps__title">Составим проект в соответствии с требованиями, с учетом эффективности и комфорта</h3>
					<p class="steps__text">Спроектируем архитектурную, конструктивную часть, инженерные системы и дизайн-проект клиники. А также проекты систем вентиляции и электроснабжения</p>
				</li>
				<li class="steps__item">
					<p class="steps__order">3</p>
					<h3 class="h3 steps__title">Согласуем проект с Роспотребнадзором</h3>
					<p class="steps__text">Наш главный специалист отдела проектирования открыла более 37 клиник по всей России. Разных масштабов и профилей: от 50м² до 3000м². Этот опыт позволяет успешно согласовывать наши проекты с первого раза</p>
				</li>
				<li class="steps__item">
					<p class="steps__order">4</p>
					<h3 class="h3 steps__title">Проведем ремонтно-строительные работы со своими бригадами или проконтролируем ваших подрядчиков</h3>
					<p class="steps__text">Осуществляем черновую и чистовую отделки по СП 119.13330.2012, СП 70.13330.2012 и СП 59.13330.2012. Монтируем пожарную сигнализацию и вентиляцию в соответствии с проектом</p>
				</li>
				<li class="steps__item">
					<p class="steps__order">5</p>
					<h3 class="h3 steps__title">Сдача готового объекта</h3>
					<p class="steps__text">Помещение для оказания медицинских услуг в соответствии с CанПиН 2.1.3.2630-10,	СанПиН 2.1.7 2790-10 и	СанПин 2.1.3678-20 - готово</p>
				</li>
			</ul>
		</div>
	</section>
	<section class="formBlock">
		<div class="container">
			<div class="formBlock__wrapper">
				<h2 class="h2 formBlock__title">
					<span>Не рискуйте деньгами и временем,</span> подбирая помещение и ремонтную бригаду самостоятельно
				</h2>
				<div class="formBlock__body">
					<form class="form">
						<input type="hidden" class="vh" name="advice-from" value="Заявка с первой формы страницы Проектирование и ремонт">
						<?php get_template_part('include/form/advice'); ?>
					</form>
				</div>
			</div>
		</div>
	</section>
	<section class="reviews">
		<div class="container">
			<div class="reviews__header">
				<div class="reviews__info">
					<h2 class="h2 reviews__title">
						Учитываем сотни мелочей в проектировании и ремонте 
					</h2>
					<p class="text reviews__text">
						80% наших клиентов приходят к нам по рекомендации. Посмотрите, что они говорят о нас.
					</p>
				</div>
				<?php get_template_part('include/reviews/controls'); ?>
			</div>
			<?php get_template_part('include/reviews/body'); ?>
		</div>
	</section>
	<?php get_template_part('include/advantage/common'); ?>
	<section class="formBlock">
		<div class="container">
			<div class="formBlock__wrapper formBlock__wrapper--single">
				<div class="formBlock__info">
					<p class="formBlock__caption">Сделайте первый шаг к открытию клиники</p>
					<h2 class="h2 formBlock__title">
						Получите <span>бесплатную консультацию</span> и пошаговый план действий
					</h2>
				</div>
				<div class="formBlock__body">
					<form class="form">
						<input type="hidden" class="vh" name="advice-from" value="Заявка со второй формы страницы Проектирование и ремонт">
						<?php get_template_part('include/form/advice'); ?>
					</form>
				</div>
			</div>
		</div>
	</section>
	<section class="sliderTeam">
		<div class="container">
			<div class="sliderTeam__head">
				<div class="sliderTeam__info">
					<h2 class="h2 sliderTeam__title">Команда</h2>
					<p class="text sliderTeam__text">Мы специализируемся на подборе помещения, проектировании и проведении ремонтно-строительных работ для медицинской деятельности</p>
				</div>
				<?php get_template_part('include/sliderTeam/controls'); ?>
			</div>
		</div>
		<?php get_template_part('include/sliderTeam/body'); ?>
	</section>
	<?php get_template_part('include/why'); ?>
	<?php get_template_part('include/single/bottom'); ?>
</main>
<?php get_footer(); ?>