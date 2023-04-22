<?php
/*
	Template Name: Лиценизирование. вложенная страница
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
				<h2 class="h2 banner__title">Квалифицированное сопровождение на всех этапах, поможем решить все возникающие вопросы и сохранить нервую систему</h2>
				<ul class="list banner__list">
					<li class="list__item list__item--document">Подготовим <span>все документы</span> за вас</li>
					<li class="list__item list__item--team">Поможем <span>подобрать помещение</span></li>
					<li class="list__item list__item--gos">Пройдём <span>все проверки госорганов</span></li>
					<li class="list__item list__item--award"><span>Даём 100% гарантию</span> получения медлицензии </li>
				</ul>
			</div>
			<div class="banner__person">
				<div class="banner__personInfo">
					<p class="banner__personTitle">Наталья Иванова</p>
					<p class="banner__personText">Основатель консалтингового центра, юрист</p>
				</div>
				<div class="banner__personImg">
					<img src="<?php echo IMG_DIR ;?>/member.png" loading="lazy" alt="">
					<div class="banner__personMessage">
						В 100% случаев лицензия «под ключ» была оформлена с первого раза на бессрочный период действия
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="steps steps--license">
		<div class="container">
			<h2 class="h2 steps__mainTitle">Этапы получения лицензии</h2>
			<ul class="steps__list">
				<li class="steps__item">
					<p class="steps__order">1</p>
					<h3 class="h3 steps__title">Бесплатная консультация</h3>
					<p class="steps__text">На ней вы узнаете, чего вам не хватает для получения лицензии, как сэкономить и сможете задать свои вопросы.</p>
					<button type="button" class="button openPopup--common steps__button">
						Бесплатная консультация
					</button>
				</li>
				<li class="steps__item">
					<p class="steps__order">2</p>
					<h3 class="h3 steps__title">Подготовка документов</h3>
					<p class="steps__text">Соберем все необходимые докуенты: заявление о предоставлении лицензии, документы на ИП или юр.лицо и т.д. <span>На сбор и проверку у наших специалистов уходит от 2 до 7 дней.</span></p>
				</li>
				<li class="steps__item">
					<p class="steps__order">3</p>
					<h3 class="h3 steps__title">Подача документов</h3>
					<p class="steps__text"><span>Отправим документы в Росздравнадзор.</span> В ближайшее время они будут проверены и к вам вышлют проверяющих, которых примут наши специалисты.</p>
				</li>
				<li class="steps__item">
					<p class="steps__order">4</p>
					<h3 class="h3 steps__title">Прохождение проверок</h3>
					<p class="steps__text"><span>Сопровождаем проверку</span> на наличие нарушений и недостоверной информации в документах с надзорными органами.</p>
				</li>
				<li class="steps__item">
					<p class="steps__order">5</p>
					<h3 class="h3 steps__title">Выдача лицензии</h3>
					<p class="steps__text">После рассмотрения лицензионного дела (от 30 до 45 рабочих дней с момента регистрации заявления) вы получите лицензию на медицинскую деятельность. Она выдается на бумажном носителе, лично в руки или по почте. <span>Лицензия бессрочная!</span> (п. 15 ст. 100 ФЗ № 323).</p>
				</li>
			</ul>
		</div>
	</section>
	<section class="promo">
		<div class="container">
			<div class="promo__wrapper">
				<div class="promo__item promo__item--evaluation">
					<h2 class="h2 promo__title">
						Собираете документы для лицензирования?<br>
						<span>Проведем экспресс-анализ бесплатно!</span>
					</h2>
					<p class="promo__text">
						Оставьте заявку, и мы проверим документы и укажем на ошибки, если обнаружим их. <br>
						Вы сможете исправить их и избежать отказа.
					</p>
					<div class="promo__img">
						<img src="<?php echo IMG_DIR ;?>/promo-left-bg.png" loading="lazy" alt="">
					</div>
					<button type="button" class="button openPopup--analysis button--filled promo__button">Получить бесплатную оценку</button>
				</div>
				<?php get_template_part('include/promo/gift'); ?>
			</div>
		</div>
	</section>
	<?php get_template_part('include/promo/wheel'); ?>
	<section class="pricing">
		<div class="container">
			<div class="pricing__head">
				<h2 class="h2 pricing__title"><?php echo get_field('license-table')['title']; ?></h2>
				<div class="text pricing__info">
					<?php echo get_field('license-table')['text']; ?>
				</div>
			</div>
			<div class="expand expand--table">
				<div class="expand__body">
					<?php get_template_part('include/single/license-table') ?>
				</div>
				<button type="button" class="button expand__button">
					<span class="expand__buttonText--hide">Смотреть таблицу</span>
					<span class="expand__buttonText--open">Скрыть таблицу</span>
				</button>
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
	<section class="advantage">
		<div class="container">
			<div class="advantage__wrapper">
				<div class="advantage__info">
					<h2 class="h2 advantage__title">
						Наши заказчики не получили ни одного отказа за 11 лет работы
					</h2>
					<div class="text advantage__text">
						<p>В 100% случаев лицензия была оформлена с первого раза.</p>
						<p>Мы даем 4 вида гарантии в договоре.</p>
					</div>
				</div>
				<?php get_template_part('include/advantage/dialog'); ?>
			</div>
			<?php get_template_part('include/advantage/list'); ?>
		</div>
	</section>
	<section class="reviews">
		<div class="container">
			<div class="reviews__header">
				<div class="reviews__info">
					<h2 class="h2 reviews__title">80% наших клиентов пришли к нам по рекомендации. Посмотрите, что они говорят о нас</h2>
					<p class="text reviews__text">
						Мы сэкономили нашим заказчикам свыше 11,5 млн ₽ за 2021 год за счет быстрой работы, правильных проектов помещений и собственных ремонтно-строительных бригад
					</p>
				</div>
				<?php get_template_part('include/reviews/controls'); ?>
			</div>
			<?php get_template_part('include/reviews/body'); ?>
		</div>
	</section>
	<section class="formBlock">
		<div class="container">
			<div class="formBlock__wrapper formBlock__wrapper--single">
				<div class="formBlock__info">
					<p class="formBlock__caption">Сделайте первый шаг к оформлению лицензии </p>
					<h2 class="h2 formBlock__title">
						Получите <span>бесплатную консультацию</span> и пошаговый план действий
					</h2>
				</div>
				<div class="formBlock__body">
					<form class="form">
						<input type="hidden" class="vh" name="advice-from" value="Заявка с первой формы Лицензии">
						<?php get_template_part('include/form/advice'); ?>
					</form>
				</div>
			</div>
		</div>
	</section>
	<section class="why">
		<div class="container why__wrapper">
			<div class="why__info">
				<h2 class="h2 why__title">
					Почему мы?
				</h2>
				<div class="text why__text">
					<p>Все наши клиенты получили свои лицензии.</p>
					<p>Мы фиксируем в договоре сроки и каждый этап работы. Учитываем тысячи мелочей в каждом проекте. <span>Берем на себя 100%</span> задач от поиска помещения до получения лицензии</p>
				</div>
			</div>
			<?php get_template_part('include/why/list'); ?>
		</div>
	</section>
	<section class="sliderTeam">
		<div class="container">
			<div class="sliderTeam__head">
				<div class="sliderTeam__info">
					<h2 class="h2 sliderTeam__title">Наша команда узко специализируется на лицензировании медицинской деятельности</h2>
					<p class="text sliderTeam__text">Средний стаж всех архитекторов, проектировщиков и юристов - 5 лет.</p>
				</div>
				<?php get_template_part('include/sliderTeam/controls'); ?>
			</div>
		</div>
		<?php get_template_part('include/sliderTeam/body'); ?>
	</section>
	<section class="formBlock">
		<div class="container">
			<div class="formBlock__wrapper formBlock__wrapper--single">
				<div class="formBlock__info">
					<p class="formBlock__caption">Сделайте первый шаг к оформлению лицензии </p>
					<h2 class="h2 formBlock__title">
						Получите <span>бесплатную консультацию</span> и пошаговый план действий
					</h2>
				</div>
				<div class="formBlock__body">
					<form class="form">
						<input type="hidden" class="vh" name="advice-from" value="Заявка со второй формы Лицензии">
						<?php get_template_part('include/form/advice'); ?>
					</form>
				</div>
			</div>
		</div>
	</section>
	<section class="info">
		<div class="container">
			<div class="info__head">
				<h2 class="h2 info__mainTitle"><?php echo get_field('license-main')['title']; ?></h2>
				<div class="text info__content">
					<?php if(strlen(get_field('license-main')['text']) > 1400) { ?> 
						<div class="expand expand--first">
							<div class="expand__body">
								<?php echo get_field('license-main')['text']; ?>
							</div>
							<button type="button" class="button expand__button">
								<span class="expand__buttonText--hide">Читать дальше</span>
								<span class="expand__buttonText--open">Скрыть текст</span>
							</button>
						</div>
					<?php } else { ?>
						<?php echo get_field('license-main')['text']; ?>
					<?php } ?>
				</div>
			</div>
			<div class="info__item">
				<h3 class="h3 info__title"><?php echo get_field('license-block-1')['title']; ?></h3>
				<div class="info__content">
					<?php if(strlen(get_field('license-block-1')['text']) > 1400) { ?> 
						<div class="expand expand--first">
							<div class="expand__body">
								<?php echo get_field('license-block-1')['text']; ?>
							</div>
							<button type="button" class="button expand__button">
								<span class="expand__buttonText--hide">Читать дальше</span>
								<span class="expand__buttonText--open">Скрыть текст</span>
							</button>
						</div>
					<?php } else { ?>
						<?php echo get_field('license-block-1')['text']; ?>
					<?php } ?>
				</div>
			</div>
			<div class="info__item">
				<h3 class="h3 info__title"><?php echo get_field('license-block-2')['title']; ?></h3>
				<div class="info__content">
					<?php if(strlen(get_field('license-block-2')['text']) > 1400) { ?> 
						<div class="expand expand--first">
							<div class="expand__body">
								<?php echo get_field('license-block-2')['text']; ?>
							</div>
							<button type="button" class="button expand__button">
								<span class="expand__buttonText--hide">Читать дальше</span>
								<span class="expand__buttonText--open">Скрыть текст</span>
							</button>
						</div>
					<?php } else { ?>
						<?php echo get_field('license-block-2')['text']; ?>
					<?php } ?>
				</div>
			</div>
			<div class="info__item">
				<h3 class="h3 info__title"><?php echo get_field('license-block-3')['title']; ?></h3>
				<div class="info__content">
					<?php if(strlen(get_field('license-block-3')['text']) > 1400) { ?> 
						<div class="expand">
							<div class="expand__body">
								<?php echo get_field('license-block-3')['text']; ?>
							</div>
							<button type="button" class="button expand__button">
								<span class="expand__buttonText--hide">Читать дальше</span>
								<span class="expand__buttonText--open">Скрыть текст</span>
							</button>
						</div>
					<?php } else { ?>
						<?php echo get_field('license-block-3')['text']; ?>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
	<section class="formBlock">
		<div class="container">
			<div class="formBlock__wrapper formBlock__wrapper--single">
				<div class="formBlock__info">
					<p class="formBlock__caption">Сделайте первый шаг к оформлению лицензии </p>
					<h2 class="h2 formBlock__title">
						Получите <span>бесплатную консультацию</span> и пошаговый план действий
					</h2>
				</div>
				<div class="formBlock__body">
					<form class="form">
						<input type="hidden" class="vh" name="advice-from" value="Заявка с третьей формы Лицензии">
						<?php get_template_part('include/form/advice'); ?>
					</form>
				</div>
			</div>
		</div>
	</section>
	<section class="info">
		<div class="container">
			<h2 class="vh">Требования</h2>
			<div class="info__item">
				<h3 class="h3 info__title"><?php echo get_field('license-block-4')['title']; ?></h3>
				<div class="info__content">
					<?php if(strlen(get_field('license-block-4')['text']) > 1400) { ?> 
						<div class="expand expand--first">
							<div class="expand__body">
								<?php echo get_field('license-block-4')['text']; ?>
							</div>
							<button type="button" class="button expand__button">
								<span class="expand__buttonText--hide">Читать дальше</span>
								<span class="expand__buttonText--open">Скрыть текст</span>
							</button>
						</div>
					<?php } else { ?>
						<?php echo get_field('license-block-4')['text']; ?>
					<?php } ?>
				</div>
			</div>
			<div class="info__item">
				<h3 class="h3 info__title"><?php echo get_field('license-block-5')['title']; ?></h3>
				<div class="info__content">
					<?php if(strlen(get_field('license-block-5')['text']) > 1400) { ?> 
						<div class="expand expand--first">
							<div class="expand__body">
								<?php echo get_field('license-block-5')['text']; ?>
							</div>
							<button type="button" class="button expand__button">
								<span class="expand__buttonText--hide">Читать дальше</span>
								<span class="expand__buttonText--open">Скрыть текст</span>
							</button>
						</div>
					<?php } else { ?>
						<?php echo get_field('license-block-5')['text']; ?>
					<?php } ?>
				</div>
			</div>
			<div class="info__item">
				<h3 class="h3 info__title"><?php echo get_field('license-block-6')['title']; ?></h3>
				<div class="info__content">
					<?php if(strlen(get_field('license-block-6')['text']) > 1400) { ?> 
						<div class="expand">
							<div class="expand__body">
								<?php echo get_field('license-block-6')['text']; ?>
							</div>
							<button type="button" class="button expand__button">
								<span class="expand__buttonText--hide">Читать дальше</span>
								<span class="expand__buttonText--open">Скрыть текст</span>
							</button>
						</div>
					<?php } else { ?>
						<?php echo get_field('license-block-6')['text']; ?>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part('include/single/bottom'); ?>
</main>
<?php get_footer(); ?>