<?php
/*
	Template Name: Получение СЭЗ на мед. деятельность
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
	<section class="banner single__banner">
		<div class="container banner__wrapper">
			<div class="banner__info">
				<p class="banner__caption">Мы предлагаем</p>
				<h2 class="h2 banner__title">Предварительная экспертиза, сбор документов и проведение лабораторных бактериологических исследований</h2>
				<ul class="list banner__list">
					<li class="list__item list__item--document">Подготовим все документы за вас</li>
					<li class="list__item">Ваше помещение будет соответствовать нормам СанПиН</li>
					<li class="list__item list__item--team">Сопровождение проверки с Роспотребнадзором</li>
				</ul>
			</div>
			<div class="banner__person">
				<div class="banner__personInfo">
					<p class="banner__personTitle">Иван Иванов</p>
					<p class="banner__personText">Основатель консалтингового центра, юрист</p>
				</div>
				<div class="banner__personImg">
					<img src="<?php echo IMG_DIR ;?>/member.png" loading="lazy" alt="">
					<div class="banner__personMessage">
						Выезжаем на объект и помогаем подготовиться к внеплановой проверке
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="introduction">
		<div class="container">
			<div class="introduction__head">
				<div class="introduction__info">
					<p class="h3 introduction__caption">СЭЗ подтверждает, что</p>
					<h2 class="h2 introduction__title">Условия медорганизации соответствуют требованиям СанПиН и другим нормативным документам</h2>
				</div>
				<p class="text introduction__text">
					<span>Санитарно-эпидемиологическое заключение (СЭЗ)</span> – это документ, которым подтверждается факт соответствия/несоответствия продукции и/или условий оказания услуг (включая помещения, оборудование и иное имущество, используемое при осуществлении предпринимательской деятельности) установленным санитарно-гигиеническим требованиям.
				</p>
			</div>
			<div class="introduction__body">
				<p class="caption introduction__bodyCaption">СЭЗ необходимо для</p>
				<div class="introduction__list">
					<div class="introduction__item">
						<h3 class="h3 introduction__itemTitle">Работы с источниками ионизирующего излучения</h3>
						<p class="introduction__itemText">Причем не только в медицинских целях</p>
						<div class="introduction__img">
							<img src="<?php echo IMG_DIR ;?>/service-sez/sez-introduction-1.svg" loading="lazy" alt="">
						</div>
					</div>
					<div class="introduction__item">
						<h3 class="h3 introduction__itemTitle">Медицинской деятельности</h3>
						<p class="introduction__itemText">Частным медицинским центрам, салонам красоты, косметологическим клиникам</p>
						<div class="introduction__img">
							<img src="<?php echo IMG_DIR ;?>/service-sez/sez-introduction-2.svg" loading="lazy" alt="">
						</div>
					</div>
					<div class="introduction__item">
						<h3 class="h3 introduction__itemTitle">Фармацевтической деятельности</h3>
						<p class="introduction__itemText">Как реализации, так и производства фармпрепаратов</p>
						<div class="introduction__img">
							<img src="<?php echo IMG_DIR ;?>/service-sez/sez-introduction-3.svg" loading="lazy" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="promo">
		<div class="container">
			<div class="promo__wrapper promo__wrapper--arenda">
				<div class="promo__item promo__item--equipment">
					<h2 class="h2 promo__title">
						Собираете документы для Роспотребнадзора? <br>
						<span>Проведем экспресс-анализ бесплатно!</span>
					</h2>
					<p class="promo__text">
						Оставьте заявку, и мы проверим документы и укажем на ошибки, если обнаружим их. <br>
						Вы сможете исправить их и избежать отказа.
					</p>
					<div class="promo__img">
						<img src="<?php echo IMG_DIR ;?>/promo-left-bg.png" loading="lazy" alt="">
					</div>
					<button type="button" class="button button--filled openPopup--analysis promo__button">Получить бесплатную оценку</button>
				</div>
				<?php get_template_part('include/promo/gift'); ?>
			</div>
		</div>
	</section>
	<?php get_template_part('include/promo/wheel'); ?>
	<section class="carousel">
		<div class="container">
			<div class="carousel__info">
				<h2 class="h2 carousel__infoTitle">Виды санитарно-эпидемиологических заключений</h2>
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
					<?php foreach(getTypesSez() as $type) { ?>
						<div class="carousel__item">
							<h3 class="h3 carousel__title"><?php echo $type['title']; ?></h3>
							<div class="carousel__img">
								<?php echo $type['img']; ?>
							</div>
							<div class="carousel__expand">
								<h3 class="h3 carousel__expandTitle"><?php echo $type['title']; ?></h3>
								<div class="carousel__text"><?php echo wpautop($type['text']); ?></div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="carousel__footer">
				<h3 class="h3 carousel__footerTitle">Необходимо знать при получении СЭЗ</h3>
				<div class="text carousel__footerContent">
					<ul>
						<li>Оформляется данный документ органами Роспотребнадзора (точнее, входящими в эту структуру санэпидслужбами)</li>
						<li>Действительно СЭЗ в течение 5 лет</li>
						<li>Деятельность, ведущаяся при отсутствии данного документа в тех случаях, когда он законодательно необходим, является незаконной и влечет за собой административную ответственность</li>
					</ul>
					<button type="button" class="button openPopup--common carousel__footerButton">Бесплатная консультация</button>
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
	<section class="steps steps--fw">
		<div class="container">
			<h2 class="h2 steps__mainTitle">Мы готовы подключиться на любом этапе</h2>
			<ul class="steps__list">
				<li class="steps__item">
					<p class="steps__order">1</p>
					<h3 class="h3 steps__title">Бесплатная консультация</h3>
					<p class="steps__text">На ней вы узнаете, чего вам не хватает для получения СЭЗ, поймете, как сэкономить, и сможете задать свои вопросы.</p>
					<button type="button" class="button openPopup--task-common steps__button">
						Рассказать про задачу
					</button>
				</li>
				<li class="steps__item">
					<p class="steps__order">2</p>
					<h3 class="h3 steps__title">Подготовка документов</h3>
					<p class="steps__text">Собираем и изучаем: договор аренды и свидетельство о собственности на помещение; экспликация и план БТИ; договоры (на вывоз мусора, утилизацию биоотходов, утилизацию люминесцентных ламп, стирку спецодежды и белья, дезинфекцию, медосмотр персонала) и др.</p>
				</li>
				<li class="steps__item">
					<p class="steps__order">3</p>
					<h3 class="h3 steps__title">Выезд на объект</h3>
					<p class="steps__text">Проведем опись оборудования по стандартам оснащения. Проверим регистрационные удостоверения, маркировки. Проверим санитарные книжки ваших сотрудников.</p>
				</li>
				<li class="steps__item">
					<p class="steps__order">4</p>
					<h3 class="h3 steps__title">Регистрация заявления</h3>
					<p class="steps__text">Отправим документы в Роспотребнадзор</p>
				</li>
				<li class="steps__item">
					<p class="steps__order">5</p>
					<h3 class="h3 steps__title">Контрольный выезд перед проверкой</h3>
					<p class="steps__text">Проверяем наличие необходимых изделий и инвентаря в достаточном количестве для прохождения проверки. <br>
					А так же научим правильной маркировке изделий и составлению необходимых инструкций и схем</p>
				</li>
				<li class="steps__item">
					<p class="steps__order">6</p>
					<h3 class="h3 steps__title">Прохождение проверки</h3>
					<p class="steps__text">Инспекторы Роспотребнадзора оценивают наличие пакета документов по программе производственного контроля и проводят осмотр объекта на соответствие помещения требованиям СанПиН. </p>
				</li>
				<li class="steps__item">
					<p class="steps__order">7</p>
					<h3 class="h3 steps__title">Выдача СЭЗ</h3>
					<p class="steps__text">После регистрации заявления на получение СЭЗ через 30 календарных дней вы получите заключение</p>
				</li>
			</ul>
		</div>
	</section>
	<?php get_template_part('include/popup/task-common'); ?>
	<section class="formBlock">
		<div class="container">
			<div class="formBlock__wrapper formBlock__wrapper--single">
				<div class="formBlock__info">
					<p class="formBlock__caption">Сделайте первый шаг к получению СЭЗ</p>
					<h2 class="h2 formBlock__title">
						Получите <span>бесплатную консультацию</span> и пошаговый план действий
					</h2>
				</div>
				<div class="formBlock__body">
					<form class="form">
						<input type="hidden" class="vh" name="advice-from" value="Заявка со первой формы страницы СЭЗ">
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
						За 2021 год 55 клиентов - от кабинетов до клиник - получили СЭЗ. <br>
						Посмотрите, что они говорят о нас
					</h2>
					<p class="text reviews__text">
						Мы сэкономили нашим заказчикам свыше 11,5 млн ₽ за 2021 год за счет быстрой и качественной работы.
					</p>
				</div>
				<?php get_template_part('include/reviews/controls'); ?>
			</div>
			<?php get_template_part('include/reviews/body'); ?>
		</div>
	</section>
	<section class="advantage">
		<div class="container">
			<div class="advantage__wrapper">
				<div class="advantage__info">
					<h2 class="h2 advantage__title">
						Наши заказчики не получили ни одного отказа за 11 лет работы
					</h2>
					<div class="text advantage__text">
						<p>В 100% случаев СЭЗ было оформлено с первого раза.</p>
						<p>Мы даем 4 вида гарантии в договоре.</p>
					</div>
				</div>
				<?php get_template_part('include/advantage/dialog'); ?>
			</div>
			<?php get_template_part('include/advantage/list'); ?>
		</div>
	</section>
	<section class="formBlock">
		<div class="container">
			<div class="formBlock__wrapper">
				<h2 class="h2 formBlock__title">
					<span>Нам уже доверились 120+ компаний</span> и остались довольны сотрудничеством
				</h2>
				<div class="formBlock__body">
					<form class="form">
						<input type="hidden" class="vh" name="advice-from" value="Заявка со второй формы страницы СЭЗ">
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
					<p class="text sliderTeam__text">Мы специализируемся на получении СЭЗ для медицинской деятельности</p>
				</div>
				<?php get_template_part('include/sliderTeam/controls'); ?>
			</div>
		</div>
		<?php get_template_part('include/sliderTeam/body'); ?>
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
	<section class="faq">
		<div class="container faq__wrapper">
			<h2 class="h2 faq__mainTitle">Часто задаваемые вопросы</h2>
			<div class="faq__list">
				<div class="faq__item">
					<h3 class="h3 faq__title">Для каких отраслей необходимо получение СЭЗ</h3>
					<div class="text faq__text">
						<p>Речь идет о получении лицензии для</p>
						<ul>
							<li>работы с источниками ионизирующего излучения (причем не только в медицинских целях);</li>
							<li>непосредственно самой медицинской деятельности;</li>
							<li>фармацевтической деятельности (как реализации, так и производства фармпрепаратов)</li>
						</ul>
					</div>
				</div>
				<div class="faq__item">
					<h3 class="h3 faq__title">СЭЗ для медицинской деятельности</h3>
					<div class="text faq__text">
						<p>Речь идет о получении лицензии для</p>
						<ul>
							<li>работы с источниками ионизирующего излучения (причем не только в медицинских целях);</li>
							<li>непосредственно самой медицинской деятельности;</li>
							<li>фармацевтической деятельности (как реализации, так и производства фармпрепаратов)</li>
						</ul>
					</div>
				</div>
				<div class="faq__item">
					<h3 class="h3 faq__title">Переоформление СЭЗ</h3>
					<div class="text faq__text">
						<p>Речь идет о получении лицензии для</p>
						<ul>
							<li>работы с источниками ионизирующего излучения (причем не только в медицинских целях);</li>
							<li>непосредственно самой медицинской деятельности;</li>
							<li>фармацевтической деятельности (как реализации, так и производства фармпрепаратов)</li>
						</ul>
					</div>
				</div>
				<div class="faq__item">
					<h3 class="h3 faq__title">Какие документы нужны для СЭЗ на медицинскую деятельность</h3>
					<div class="text faq__text">
						<p>Речь идет о получении лицензии для</p>
						<ul>
							<li>работы с источниками ионизирующего излучения (причем не только в медицинских целях);</li>
							<li>непосредственно самой медицинской деятельности;</li>
							<li>фармацевтической деятельности (как реализации, так и производства фармпрепаратов)</li>
						</ul>
					</div>
				</div>
				<div class="faq__item">
					<h3 class="h3 faq__title">Сроки получения СЭЗ на медицинскую деятельность</h3>
					<div class="text faq__text">
						<p>Речь идет о получении лицензии для</p>
						<ul>
							<li>работы с источниками ионизирующего излучения (причем не только в медицинских целях);</li>
							<li>непосредственно самой медицинской деятельности;</li>
							<li>фармацевтической деятельности (как реализации, так и производства фармпрепаратов)</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part('include/single/bottom'); ?>
</main>
<?php get_footer(); ?>