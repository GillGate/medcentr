<?php
/*
	Template Name: Аренда. вложенная страница
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
				<p class="banner__caption">Предлагаем мед.технику</p>
				<h2 class="h2 banner__title">Для салонов красоты, медицинских центров и других организациям схожей профессиональной направленности</h2>
				<ul class="list banner__list">
					<li class="list__item list__item--shield-check"><span>Свыше 2000 единиц</span> оборудования на складе</li>
					<li class="list__item list__item--gos">Оборудование имеет <span>РУ Росздравнадзора и на 100% отвечает ГОСТу</span></li>
					<li class="list__item">Привезём, разгрузим и установим</li>
					<li class="list__item">После окончания аренды <span>сами вывезем</span></li>
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
						Подберём недостающее оборудование и передадим все необходимые документы
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="carousel">
		<div class="container">
			<div class="carousel__info">
				<h2 class="h2 carousel__infoTitle">Что вы получаете, арендуя оборудование у нас</h2>
				<p class="text carousel__infoText">Выбирая «Концепцию», вы выбираете надёжного партнёра, который поможет вам на любых этапах работы вашего объекта.</p>
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
				<div class="carousel__list">
					<?php foreach(getAdvantagesArenda() as $advantage) { ?>
						<div class="carousel__item">
							<h3 class="h3 carousel__title"><?php echo $advantage['title']; ?></h3>
							<div class="carousel__img">
								<?php echo $advantage['img']; ?>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
	<section class="promo">
		<div class="container">
			<div class="promo__wrapper promo__wrapper--arenda">
				<div class="promo__item promo__item--equipment">
					<h2 class="h2 promo__title">
						Подберем оборудование для медицинского центра <br>
						<span>с экономией до 80% бюджета</span>
					</h2>
					<div class="promo__img">
						<img src="<?php echo IMG_DIR ;?>/promo-left-bg.png" loading="lazy" alt="">
					</div>
					<button type="button" class="button button--filled openPopup--task promo__button">Подобрать оборудование</button>
				</div>
				<?php get_template_part('include/promo/gift'); ?>
			</div>
		</div>
	</section>
	<?php get_template_part('include/promo/wheel'); ?>
	<?php get_template_part('include/popup/task'); ?>
	<section class="pricing">
		<div class="container">
			<div class="pricing__head">
				<h2 class="h2 pricing__title"><?php echo get_field('table-block')['title']; ?></h2>
				<div class="text pricing__info">
					<p><strong><?php echo get_field('table-block')['text']; ?></strong></p>
				</div>
			</div>
			<div class="expand expand--table">
				<div class="expand__body">
					<div class="table pricing__table">
						<?php echo get_field('table-block')['table']; ?>
					</div>
				</div>
				<button type="button" class="button expand__button">
					<span class="expand__buttonText--hide">Смотреть таблицу</span>
					<span class="expand__buttonText--open">Скрыть таблицу</span>
				</button>
			</div>
		</div>
	</section>
	<?php 
		$table_2 = get_field('table-block-additional')['table'];
		$table_2_text = get_field('table-block-additional')['text'];
	?>
	<?php if(strlen($table_2) > 0) { ?>
	<section class="pricing">
		<div class="container">
			<div class="pricing__head <?php if(strlen($table_2_text) === 0) echo 'pricing__head--single'?>">
				<h2 class="h2 pricing__title"><?php echo get_field('table-block-additional')['title']; ?></h2>
				<div class="text pricing__info">
					<p><strong><?php echo $table_2_text; ?></strong></p>
				</div>
			</div>
			<?php if(strlen($table_2) > 500) { ?>
			<div class="expand expand--table">
				<div class="expand__body">
					<div class="table pricing__table">
						<?php echo $table_2; ?>
					</div>
				</div>
				<button type="button" class="button expand__button">
					<span class="expand__buttonText--hide">Смотреть таблицу</span>
					<span class="expand__buttonText--open">Скрыть таблицу</span>
				</button>
			</div>
			<?php } else { ?>
				<div class="table pricing__table">
					<?php echo $table_2; ?>
				</div>
			<?php } ?>
		</div>
	</section>
	<?php } ?>
	<?php 
		$table_3 = get_field('table-block-3')['table'];
		$table_3_text = get_field('table-block-3')['text'];
	?>
	<?php if(strlen($table_3) > 0) { ?>
	<section class="pricing">
		<div class="container">
			<div class="pricing__head <?php if(strlen($table_3_text) === 0) echo 'pricing__head--single'?>">
				<h2 class="h2 pricing__title"><?php echo get_field('table-block-3')['title']; ?></h2>
				<div class="text pricing__info">
					<p><strong><?php echo $table_3_text; ?></strong></p>
				</div>
			</div>
			<?php if(strlen($table_3) > 500) { ?>
			<div class="expand expand--table">
				<div class="expand__body">
					<div class="table pricing__table">
						<?php echo $table_3; ?>
					</div>
				</div>
				<button type="button" class="button expand__button">
					<span class="expand__buttonText--hide">Смотреть таблицу</span>
					<span class="expand__buttonText--open">Скрыть таблицу</span>
				</button>
			</div>
			<?php } else { ?>
				<div class="table pricing__table">
					<?php echo $table_3; ?>
				</div>
			<?php } ?>
		</div>
	</section>
	<?php } ?>
	<?php 
		$table_4 = get_field('table-block-4')['table'];
		$table_4_text = get_field('table-block-4')['text'];
	?>
	<?php if(strlen($table_4) > 0) { ?>
	<section class="pricing">
		<div class="container">
			<div class="pricing__head <?php if(strlen($table_4_text) === 0) echo 'pricing__head--single'?>">
				<h2 class="h2 pricing__title"><?php echo get_field('table-block-4')['title']; ?></h2>
				<div class="text pricing__info">
					<p><strong><?php echo $table_4_text; ?></strong></p>
				</div>
			</div>
			<?php if(strlen($table_4) > 500) { ?>
			<div class="expand expand--table">
				<div class="expand__body">
					<div class="table pricing__table">
						<?php echo $table_4; ?>
					</div>
				</div>
				<button type="button" class="button expand__button">
					<span class="expand__buttonText--hide">Смотреть таблицу</span>
					<span class="expand__buttonText--open">Скрыть таблицу</span>
				</button>
			</div>
			<?php } else { ?>
				<div class="table pricing__table">
					<?php echo $table_4; ?>
				</div>
			<?php } ?>
		</div>
	</section>
	<?php } ?>
	<?php 
		$table_5 = get_field('table-block-5')['table'];
		$table_5_text = get_field('table-block-5')['text'];
	?>
	<?php if(strlen($table_5) > 0) { ?>
	<section class="pricing">
		<div class="container">
			<div class="pricing__head <?php if(strlen($table_5_text) === 0) echo 'pricing__head--single'?>">
				<h2 class="h2 pricing__title"><?php echo get_field('table-block-5')['title']; ?></h2>
				<div class="text pricing__info">
					<p><strong><?php echo $table_5_text; ?></strong></p>
				</div>
			</div>
			<?php if(strlen($table_5) > 500) { ?>
			<div class="expand expand--table">
				<div class="expand__body">
					<div class="table pricing__table">
						<?php echo $table_5; ?>
					</div>
				</div>
				<button type="button" class="button expand__button">
					<span class="expand__buttonText--hide">Смотреть таблицу</span>
					<span class="expand__buttonText--open">Скрыть таблицу</span>
				</button>
			</div>
			<?php } else { ?>
				<div class="table pricing__table">
					<?php echo $table_5; ?>
				</div>
			<?php } ?>
		</div>
	</section>
	<?php } ?>
	<?php 
		$table_6 = get_field('table-block-6')['table'];
		$table_6_text = get_field('table-block-6')['text'];
	?>
	<?php if(strlen($table_7) > 0) { ?>
	<section class="pricing">
		<div class="container">
			<div class="pricing__head <?php if(strlen($table_6_text) === 0) echo 'pricing__head--single'?>">
				<h2 class="h2 pricing__title"><?php echo get_field('table-block-6')['title']; ?></h2>
				<div class="text pricing__info">
					<p><strong><?php echo $table_6_text; ?></strong></p>
				</div>
			</div>
			<?php if(strlen($table_6) > 500) { ?>
			<div class="expand expand--table">
				<div class="expand__body">
					<div class="table pricing__table">
						<?php echo $table_6; ?>
					</div>
				</div>
				<button type="button" class="button expand__button">
					<span class="expand__buttonText--hide">Смотреть таблицу</span>
					<span class="expand__buttonText--open">Скрыть таблицу</span>
				</button>
			</div>
			<?php } else { ?>
				<div class="table pricing__table">
					<?php echo $table_6; ?>
				</div>
			<?php } ?>
		</div>
	</section>
	<?php } ?>
	<?php 
		$table_7 = get_field('table-block-7')['table'];
		$table_7_text = get_field('table-block-7')['text'];
	?>
	<?php if(strlen($table_7) > 0) { ?>
	<section class="pricing">
		<div class="container">
			<div class="pricing__head <?php if(strlen($table_7_text) === 0) echo 'pricing__head--single'?>">
				<h2 class="h2 pricing__title"><?php echo get_field('table-block-7')['title']; ?></h2>
				<div class="text pricing__info">
					<p><strong><?php echo $table_7_text; ?></strong></p>
				</div>
			</div>
			<?php if(strlen($table_7) > 500) { ?>
			<div class="expand expand--table">
				<div class="expand__body">
					<div class="table pricing__table">
						<?php echo $table_7; ?>
					</div>
				</div>
				<button type="button" class="button expand__button">
					<span class="expand__buttonText--hide">Смотреть таблицу</span>
					<span class="expand__buttonText--open">Скрыть таблицу</span>
				</button>
			</div>
			<?php } else { ?>
				<div class="table pricing__table">
					<?php echo $table_7; ?>
				</div>
			<?php } ?>
		</div>
	</section>
	<?php } ?>
	<section class="pricing">
		<div class="container">
			<div class="pricing__head">
				<h2 class="h2 pricing__title">Стоимость аренды медицинского оборудования в Москве</h2>
				<div class="text pricing__info">
					<p>Цена на аренду медицинского оборудования формируется индивидуально и зависит</p>
					<ul>
						<li>от срока аренды</li>
						<li>от типа оборудования</li>
					</ul>
				</div>
			</div>
			<div class="expand expand--table">
				<div class="expand__body">
					<?php get_template_part('include/single/arenda-table'); ?>
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
	<section class="steps steps--fw">
		<div class="container">
			<h2 class="h2 steps__mainTitle">Этапы аренды оборудования</h2>
			<ul class="steps__list">
				<li class="steps__item">
					<p class="steps__order">1</p>
					<h3 class="h3 steps__title">Подбор под задачу</h3>
					<p class="steps__text">Подберём недостающее оборудование</p>
					<button type="button" class="button openPopup--task steps__button">
						Рассказать про задачу
					</button>
				</li>
				<li class="steps__item">
					<p class="steps__order">2</p>
					<h3 class="h3 steps__title">Доставка и установка</h3>
					<p class="steps__text">Привезём, разгрузим и установим заранее</p>
				</li>
				<li class="steps__item">
					<p class="steps__order">3</p>
					<h3 class="h3 steps__title">Передача документов</h3>
					<p class="steps__text">Передадим все необходимые документы</p>
				</li>
				<li class="steps__item">
					<p class="steps__order">4</p>
					<h3 class="h3 steps__title">Вывоз оборудования</h3>
					<p class="steps__text">После окончания аренды сами вывезем оборудование</p>
				</li>
			</ul>
		</div>
	</section>
	<section class="formBlock">
		<div class="container">
			<div class="formBlock__wrapper">
				<h2 class="h2 formBlock__title">
					<span>Нам уже доверились 120+ компаний</span> и остались довольны оборудованием и сотрудничеством
				</h2>
				<div class="formBlock__body">
					<form class="form">
						<input type="hidden" class="vh" name="advice-from" value="Заявка с первой формы страницы Аренды">
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
					<h2 class="h2 reviews__title">В 2021 году 19 клиник Москвы и Подмосковья повысили уровень услуг за счет аренды оборудования</h2>
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
					<p class="formBlock__caption">Сделайте первый шаг к оформлению аренды</p>
					<h2 class="h2 formBlock__title">
						Получите <span>бесплатную консультацию</span> и пошаговый план действий
					</h2>
				</div>
				<div class="formBlock__body">
					<form class="form">
						<input type="hidden" class="vh" name="advice-from" value="Заявка со второй формы страницы Аренды">
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
					<p class="text sliderTeam__text">Мы специализируемся на аренде оборудования для медицинской деятельности</p>
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
					<p>Все наши клиенты получили нужное оборудование в срок.</p>
					<p>Мы фиксируем в договоре сроки и каждый этап работы. Учитываем тысячи мелочей в каждом проекте. <span>Берем на себя 100% задач.</span></p>
				</div>
			</div>
			<?php get_template_part('include/why/list'); ?>
		</div>
	</section>
	<?php get_template_part('include/single/bottom'); ?>
</main>
<?php get_footer(); ?>