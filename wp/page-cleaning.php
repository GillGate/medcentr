<?php
/*
	Template Name: Клининг
*/
?>
<?php get_header(); ?>
<main class="single">
	<div class="single__head single__head--cleaning">
		<div class="container single__headWrapper">
			<h1 class="h1 single__title"><?php the_title(); ?></h1>
			<div class="single__headInfo">
				<div class="text single__headText"><?php the_content(); ?></div>
				<button type="button" class="button openPopup--common">Бесплатная консультация</button>
			</div>
		</div>
	</div>
	<section class="banner single__banner">
		<div class="container banner__wrapper">
			<div class="banner__info">
				<p class="banner__caption">Мы предлагаем</p>
				<h2 class="h2 banner__title">
					Все виды комплексной уборки.
					Знаем все о дезинфекции медицинских помещений и уборочного инвентаря
				</h2>
				<ul class="list banner__list">
					<li class="list__item list__item--location">Используем <span>сертифицированные средства,</span> разрешенные для мед. учреждений</li>
					<li class="list__item list__item--team"><span>Бесплатный выезд</span> с оценкой графика текущих и генеральных уборок и расчетом стоимости</li>
					<li class="list__item list__item--time">Выезд день в день. Время уборки <span>от 1 часа</span></li>
					<li class="list__item list__item--wallet">Оплата клининга после подписания акта приемки</li>
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
						Постоянным клиентам оказываем услуги по клинингу в подарок!
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="introduction introduction--simple">
		<div class="container">
			<div class="introduction__head">
				<div class="introduction__info">
					<h2 class="h2 introduction__title">В каких ситуациях заказывают у нас клининг</h2>
				</div>
			</div>
			<div class="introduction__body">
				<div class="introduction__list">
					<div class="introduction__item">
						<h3 class="h3 introduction__itemTitle">Клининг после ремонта</h3>
						<div class="introduction__img">
							<img src="<?php echo IMG_DIR ;?>/service-cleaning/cleaning-introduction-1.svg" loading="lazy" alt="">
						</div>
					</div>
					<div class="introduction__item">
						<h3 class="h3 introduction__itemTitle">Текущие ежедневные уборки поверхностей помещений</h3>
						<div class="introduction__img">
							<img src="<?php echo IMG_DIR ;?>/service-cleaning/cleaning-introduction-2.svg" loading="lazy" alt="">
						</div>
					</div>
					<div class="introduction__item">
						<h3 class="h3 introduction__itemTitle">Генеральные уборки</h3>
						<p class="introduction__itemText">По программе производственного контроля</p>
						<div class="introduction__img">
							<img src="<?php echo IMG_DIR ;?>/service-cleaning/cleaning-introduction-3.svg" loading="lazy" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="promo">
		<div class="container">
			<div class="promo__wrapper">
				<div class="promo__item promo__item--cleaning">
					<h2 class="h2 promo__title">
						<span>Бесплатный выезд</span> с оценкой необходимой частоты уборки и расчетом стоимости
					</h2>
					<p class="promo__text">
						Оставьте заявку, и мы перезвоним вам в течение 30 минут для согласования даты и времени выезда.
					</p>
					<div class="promo__img">
						<img src="<?php echo IMG_DIR ;?>/promo-cleaning-bg.png" loading="lazy" alt="">
					</div>
					<button type="button" class="button button--filled openPopup--common promo__button">Заказать бесплатный выезд</button>
				</div>
				<div class="promo__item promo__item--gift">
					<h2 class="h2 promo__title">
						Уже являетесь нашим клиентом? <br>
						<span>Клининг - в подарок!</span>
					</h2>
					<p class="promo__text">Клиентам, которые открывают клиники или проходят ремонтно-строительные работы с нами, дарим клининговые услуги</p>
					<button type="button" class="button button--filled promo__button promo__button--gift">Получить подарок</button>
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part('include/promo/wheel'); ?>
	<section class="reasons">
		<div class="container">
			<h2 class="h2 reasons__mainTitle">7 причин, почему вам стоит заказать клининговые услуги</h2>
			<ol class="reasons__list">
				<li class="reasons__item">
					<span class="reasons__order">01</span>
					<div class="reasons__content">
						<h3 class="h3 reasons__title"><span>Экономия в 1,5 раза</span> по сравнению с нанятым персоналом</h3>
						<p class="reasons__text">Оплачивайте услуги по факту вызова клининга </p>
					</div>
				</li>
				<li class="reasons__item">
					<span class="reasons__order">02</span>
					<div class="reasons__content">
						<h3 class="h3 reasons__title"><span>Дез. средства,</span> уборочный инвентарь и одноразовая ветошь по желанию <span>предоставляется нами</span></h3>
						<p class="reasons__text">Вам не придется думать о том, что и где покупать. Оборудование, средства для уборки и другие расходные материалы - за наш счет</p>
					</div>
				</li>
				<li class="reasons__item">
					<span class="reasons__order">03</span>
					<div class="reasons__content">
						<h3 class="h3 reasons__title">Используем <span>сертифицированные</span> разрешенные <span>средства</span></h3>
						<p class="reasons__text">Используем только разрешенные для медицинских учреждений средства. Предоставляем сертификаты</p>
					</div>
				</li>
				<li class="reasons__item">
					<span class="reasons__order">04</span>
					<div class="reasons__content">
						<h3 class="h3 reasons__title">Качественная уборка за счет <span>проверенного оборудования</span></h3>
						<p class="reasons__text">Пользуемся немецким оборудованием, которое используют большие клининговые компании: специальные ведра, мопы, пылесосы для полов</p>
					</div>
				</li>
				<li class="reasons__item">
					<span class="reasons__order">05</span>
					<div class="reasons__content">
						<h3 class="h3 reasons__title">Настроены на <span>долгосрочное сотрудничество</span></h3>
						<p class="reasons__text">Наша задача - работать так, чтобы вам захотелось остаться</p>
					</div>
				</li>
				<li class="reasons__item">
					<span class="reasons__order">06</span>
					<div class="reasons__content">
						<h3 class="h3 reasons__title"><span>Трехступенчатый контроль</span> сотрудников</h3>
						<div class="reasons__text">
							<ol>
								<li>Сотрудники по клинингу с опытом от 1 года</li>
								<li>Обучены нюансам работы в мед. учреждениях</li>
								<li>Контроль сотрудников менеджером по клинингу</li>
							</ol>
						</div>
					</div>
				</li>
				<li class="reasons__item">
					<span class="reasons__order">07</span>
					<div class="reasons__content">
						<h3 class="h3 reasons__title"><span>Оплата после уборки</span></h3>
						<p class="reasons__text">Оплачивайте наши услуги только после подписания акта приемки</p>
					</div>
				</li>
			</ol>
		</div>
	</section>
	<section class="promo promo--mobile">
		<div class="container">
			<div class="promo__wrapper">
				<div class="promo__item promo__item--gift">
					<h2 class="h2 promo__title">
						Уже являетесь нашим клиентом? <br>
						<span>Клининг - в подарок!</span>
					</h2>
					<p class="promo__text">Клиентам, которые открывают клиники или проходят ремонтно-строительные работы с нами, дарим клининговые услуги</p>
					<div class="promo__img">
						<img src="<?php echo IMG_DIR ;?>/promo-right-bg.png" loading="lazy" alt="">
					</div>
					<button type="button" class="button button--filled openPopup--common promo__button">Получить подарок</button>
					<p class="promo__caption">
						Нажимая на кнопку, вы соглашаетесь с «​политикой конфиденциальности»
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="info info--cleaning">
		<div class="container">
			<div class="info__head">
				<h2 class="h2 info__mainTitle"><span>Рассчитайте стоимость клининга</span> и получите график текущих и генеральных уборок</h2>
				<div class="text info__content">
					<p>Пройдите тест за 1 минуту и узнайте, какая именно уборка вам нужна. В зависимости от площади, типа уборки и пациентопотока. <span>Это бесплатно!</span></p>
				</div>
			</div>
			<div class="info__quiz">
				
			</div>
		</div>
	</section>
	<section class="steps steps--fw">
		<div class="container">
			<div class="steps__head">
				<h2 class="h2 steps__mainTitle">Посмотрите, в какие 4 этапа проходит клининг</h2>
				<p class="text steps__mainText">
					Освободите свое время, делегируя контроль выполнения текущих и генеральных уборок в соответствии с нормами СанПиН
				</p>
			</div>
			<ul class="steps__list">
				<li class="steps__item">
					<p class="steps__order">1</p>
					<h3 class="h3 steps__title">Бесплатный выезд на объект</h3>
					<p class="steps__text">Оставьте заявку на выезд, на котором мы рассчитаем стоимость клининга и составим график уборки. Выезд бесплатный и ни к чему вас не обязывает.</p>
					<button type="button" class="button openPopup--common steps__button">
						Оставить заявку на выезд
					</button>
				</li>
				<li class="steps__item">
					<p class="steps__order">2</p>
					<h3 class="h3 steps__title">Заключение договора</h3>
					<p class="steps__text">Подробно прописываем все договоренности и нашу ответственность - от текущей до генеральной уборки.</p>
				</li>
				<li class="steps__item">
					<p class="steps__order">3</p>
					<h3 class="h3 steps__title">Уборка</h3>
					<p class="steps__text">Сотрудник по клинингу приезжает в нужный день в нужное время. Контроль сотрудника на объекте менеджером по клинингу.</p>
				</li>
				<li class="steps__item">
					<p class="steps__order">4</p>
					<h3 class="h3 steps__title">Оплата после уборки</h3>
					<p class="steps__text">Только после подписания акта приемки работ. Вы оплачиваете только качественно выполненную уборку.</p>
				</li>
			</ul>
		</div>
	</section>
	<section class="formBlock">
		<div class="container">
			<div class="formBlock__wrapper formBlock__wrapper--cleaning">
				<div class="formBlock__info">
					<h2 class="h2 formBlock__title">
						По желанию предоставим комплекты уборочного инвентаря и ветоши
					</h2>
					<div class="formBlock__notion formBlock__notion--desktop">
						<h3 class="h3 formBlock__notionTitle">Обращаем внимание на то, что понадобится от вас</h3>
						<p class="formBlock__notionText">В любом учреждении, которое оказывает медицинские услуги, должно быть выделено помещение или стеллажная система хранения уборочного инвентаря и дез. средств в объеме на месяц вперед.</p>
					</div>
				</div>
				<div class="formBlock__body">
					<p class="formBlock__text">
						Оставьте заявку, и мы перезвоним вам в течение 30 минут для согласования даты и времени выезда.
					</p>
					<form class="form">
						<input type="hidden" class="vh" name="advice-from" value="Заявка со страницы Клининга">
						<?php get_template_part('include/form/advice'); ?>
					</form>
					<div class="formBlock__notion formBlock__notion--mobile">
						<h3 class="h3 formBlock__notionTitle">Обращаем внимание на то, что понадобится от вас</h3>
						<p class="formBlock__notionText">В любом учреждении, которое оказывает медицинские услуги, должно быть выделено помещение или стеллажная система хранения уборочного инвентаря и дез. средств в объеме на месяц вперед.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="reviews">
		<div class="container">
			<div class="reviews__header">
				<div class="reviews__info">
					<h2 class="h2 reviews__title">
						80% наших клиентов приходят к нам по рекомендации. Посмотрите, что они говорят о нас.
					</h2>
				</div>
				<?php get_template_part('include/reviews/controls'); ?>
			</div>
			<?php get_template_part('include/reviews/body'); ?>
		</div>
	</section>
	<section class="why">
		<div class="container why__wrapper">
			<div class="why__info">
				<h2 class="h2 why__title">
					Почему мы?
				</h2>
				<div class="text why__text">
					<p>Все наши клиенты получили санитарно-эпидемиологическое заключение в срок.</p>
					<p>Мы фиксируем в договоре сроки и каждый этап работы. Учитываем тысячи мелочей в каждом проекте. <span>Берем на себя 100% задач.</span></p>
				</div>
			</div>
			<?php get_template_part('include/why/list'); ?>
		</div>
	</section>
	<?php get_template_part('include/single/bottom'); ?>
</main>
<?php get_footer(); ?>