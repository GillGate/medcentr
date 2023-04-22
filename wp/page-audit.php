<?php
/*
	Template Name: Аудит клиник в Москве
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
				<h2 class="h2 banner__title">Широкий спектр услуг по юридическому сопровождению любых проверок</h2>
				<ul class="list banner__list">
					<li class="list__item list__item--document">При подготовке к плановой, внеплановой проверкам и покупке мед. бизнеса</li>
					<li class="list__item list__item--team">Видео-обзор клиники на факты нарушений - <span>бесплатно</span></li>
					<li class="list__item list__item--gos"><span>Проверим и подготовим</span> недостающие документы, проведем обучение работников</li>
					<li class="list__item list__item--award"><span>Сопровождаем</span> после проверки</li>
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
						<span>от 300 000 ₽</span>
						<p>Вы сэкономите, устранив ошибки и недочеты перед проверкой и не попав под штрафы и закрытие клиники</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="introduction introduction--simple">
		<div class="container">
			<div class="introduction__head">
				<div class="introduction__info">
					<h2 class="h2 introduction__title">3 случая, когда вам понадобится аудит клиники</h2>
				</div>
			</div>
			<div class="introduction__body">
				<div class="introduction__list">
					<div class="introduction__item">
						<h3 class="h3 introduction__itemTitle">Готовитесь к плановой проверке</h3>
						<p class="introduction__itemText">На сайте прокуратуры появился план проверок на год. Вы хотите привести в порядок документы и исправить нарушения</p>
						<div class="introduction__img">
							<img src="<?php echo IMG_DIR ;?>/service-audit/audit-introduction-1.svg" loading="lazy" alt="">
						</div>
						<button type="button" class="button openPopup--audit-prepare introduction__button">Узнать больше</button>
					</div>
					<div class="introduction__item">
						<h3 class="h3 introduction__itemTitle">Покупаете готовый медицинский бизнес</h3>
						<p class="introduction__itemText">Хотите выявить несоответствия клиники требованиям СанПиН и избежать «скелетов в шкафу» </p>
						<div class="introduction__img">
							<img src="<?php echo IMG_DIR ;?>/service-audit/audit-introduction-2.svg" loading="lazy" alt="">
						</div>
						<button type="button" class="button openPopup--audit-buy introduction__button">Узнать больше</button>
					</div>
					<div class="introduction__item">
						<h3 class="h3 introduction__itemTitle">Поступила жалоба от пациента</h3>
						<p class="introduction__itemText">Грядет внеплановая проверка с перспективой серьезных штрафов</p>
						<div class="introduction__img">
							<img src="<?php echo IMG_DIR ;?>/service-audit/audit-introduction-3.svg" loading="lazy" alt="">
						</div>
						<button type="button" class="button openPopup--audit-violation introduction__button">Узнать больше</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part('include/popup/audit-prepare'); ?>
	<?php get_template_part('include/popup/audit-buy'); ?>
	<?php get_template_part('include/popup/audit-violation'); ?>
	<section class="promo">
		<div class="container">
			<div class="promo__wrapper">
				<div class="promo__item promo__item--advice">
					<h2 class="h2 promo__title">
						Не знаете: какие документы собрать или не уверены, что все журналы ведутся как надо?
					</h2>
					<p class="promo__text">
						Оставьте заявку на бесплатную консультацию, заполнив форму ниже. Мы проверим документы, укажем на ошибки и дадим свои рекомендации.
					</p>
					<div class="promo__img">
						<img src="<?php echo IMG_DIR ;?>/promo-left-bg.png" loading="lazy" alt="">
					</div>
					<button type="button" class="button button--filled openPopup--common promo__button">Бесплатная консультация</button>
				</div>
			</div>
		</div>
	</section>
	<section class="violation">
		<div class="container">
			<div class="violation__head">
				<h2 class="h2 violation__mainTitle">3 частых нарушения, которые влекут применение к клинике статей КоАП РФ </h2>
				<p class="text violation__mainText">Знаем, что будут требовать гос. органы: от и до исправим санитарно-эпидеомилогический, санитарно-технический вопросы и вопросы сбора и утилизации отходов</p>
			</div>
			<div class="violation__wrapper">
				<ul class="violation__list">
					<li class="violation__item">
						<h3 class="h3 violation__title">Нарушения в документообороте</h3>
						<p class="violation__text">Нет необходимых договоров и актов, нет паспорта и тех. отчета на вентиляцию, проблемы с медицинскими книжками у сотрудников и др.</p>
						<div class="violation__penalty">
							<p class="violation__text"><span>Штраф от 10 000 до 350 000 ₽</span></p>
							<span class="caption violation__caption">Ст. 6.1.1 КоАП, ст. 6.3 КоАП, ст. 6.35 КоАП, ст. 6.4. КоАП</span>
						</div>
					</li>
					<li class="violation__item">
						<h3 class="h3 violation__title">Оснощение не соответствует стандартам</h3>
						<p class="violation__text">Кабинеты оснащены не в соответствии со стандартами по приказу об оказании медицинской деятельности</p>
						<div class="violation__penalty">
							<p class="violation__text"><span>Штраф от 100 000 до 200 000 ₽</span> или административное приостановление деятельности на срок <span>до 90 суток</span></p>
							<span class="caption violation__caption">Ст. 14.1 КоАП</span>
						</div>
					</li>
					<li class="violation__item">
						<h3 class="h3 violation__title">Нарушены требования внутренней отделки</h3>
						<p class="violation__text">Нет пандуса, высота потолка меньше разрешённой, установлен потолок Armstrong и т.д.</p>
						<div class="violation__penalty">
							<p class="violation__text"><span>Штраф от 10 000 до 20 000 ₽</span></p>
							<span class="caption violation__caption">Ст. 6.4 КоАП</span>
						</div>
					</li>
				</ul>
				<div class="violation__footer">
					<h3 class="h3 violation__title">И еще две сотни подобных нарушений</h3>
					<div class="text violation__footerText">
						<ul>
							<li>Отходы не сортируются по классам</li>
							<li>Контейнер с отходами находится в проходной комнате</li>
							<li>Не предусмотрена входная группа для приёма маломобильных групп населения</li>
							<li>Не установлены запрещающие предупредительные знаки</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="formBlock">
		<div class="container">
			<div class="formBlock__wrapper formBlock__wrapper--single formBlock__wrapper--violation">
				<div class="formBlock__info">
					<h2 class="h2 formBlock__title">
						<span>Поможем «от» и «до»</span> исправить все нарушения вовремя
					</h2>
					<p class="formBlock__caption">Мы знаем, что будет требовать Роспотребнадзор и Росздравнадзор</p>
				</div>
				<div class="formBlock__body">
					<form class="form">
						<input type="hidden" class="vh" name="advice-from" value="Заявка с первой формы страницы Аудита">
						<?php get_template_part('include/form/advice'); ?>
					</form>
				</div>
			</div>
		</div>
	</section>
	<section class="steps">
		<div class="container">
			<h2 class="h2 steps__mainTitle">Помогаем не только пройти проверку, но и сопровождаем после нее - вплоть до вынесения постановлений</h2>
			<p class="text steps__mainText">Посмотрите, какие 6 этапов проходят наши клиенты во время аудита</p>
			<ul class="steps__list">
				<li class="steps__item">
					<p class="steps__order">1</p>
					<h3 class="h3 steps__title">Бесплатно оценим объем нарушений</h3>
					<p class="steps__text">Свяжемся с вами по видео-конференции и пройдемся по клинике вместе с вами, чтобы примерно оценить масштаб нарушений</p>
					<button type="button" class="button openPopup--common steps__button">
						Бесплатная оценка по видео
					</button>
				</li>
				<li class="steps__item">
					<p class="steps__order">2</p>
					<h3 class="h3 steps__title">Проведем репетицию проверки</h3>
					<p class="steps__text">Приедем с калькулятором КоАП. Проверим все - от входа с парковки клиники до самых уязвимых моментов</p>
				</li>
				<li class="steps__item">
					<p class="steps__order">3</p>
					<h3 class="h3 steps__title">Составим подробное ТЗ ответственному лицу</h3>
					<p class="steps__text">Готовим чек-листы и предписания с ссылками на КоАП. Даем все необходимые шаблоны, например, схему по обращению с мед. отходами и т.д.</p>
				</li>
				<li class="steps__item">
					<p class="steps__order">4</p>
					<h3 class="h3 steps__title">В течение месяца курируем изменения</h3>
					<p class="steps__text">Постоянно на связи в WhatsApp с ответственным лицом: отвечаем на вопросы, фиксируем фото и видео, проверяем исправления. <br><br>
					В итоге устраняем все нарушения вместе с ответственным лицом, а он обучается в процессе.</p>
				</li>
				<li class="steps__item">
					<p class="steps__order">5</p>
					<h3 class="h3 steps__title">Итоговая репетиция проверки с нами </h3>
					<p class="steps__text">За неделю до установленной даты проверки гос. органами выезжаем и снова проверяем все предписания. У вас будет время исправить мелкие недочеты.</p>
				</li>
				<li class="steps__item">
					<p class="steps__order">6</p>
					<h3 class="h3 steps__title">Сопровождаем после проверки</h3>
					<p class="steps__text">Проверим законность применения штрафов и поможем правильно отреагировать на все нарекания проверяющих</p>
				</li>
			</ul>
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
						<input type="hidden" class="vh" name="advice-from" value="Заявка со второй формы страницы Аудита">
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
						За 2021 году 19 клиник Москвы и Подмосковья прошли аудит и устранили нарушения перед проверкой с нашей помощью
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
	<?php get_template_part('include/advantage/common'); ?>
	<section class="formBlock">
		<div class="container">
			<div class="formBlock__wrapper formBlock__wrapper--single">
				<div class="formBlock__info">
					<p class="formBlock__caption">Сделайте первый шаг</p>
					<h2 class="h2 formBlock__title">
						Получите <span>бесплатную консультацию</span> и пошаговый план действий
					</h2>
				</div>
				<div class="formBlock__body">
					<form class="form">
						<input type="hidden" class="vh" name="advice-from" value="Заявка с третьей формы страницы Аудита">
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
	<?php get_template_part('include/why/common'); ?>
	<?php get_template_part('include/single/bottom'); ?>
</main>
<?php get_footer(); ?>