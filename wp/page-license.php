<?php
/*
	Template Name: Лиценизирование мед. деятельности
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
				<h2 class="h2 pricing__title">Стоимость оформления лицензии на меддеятельность в Москве</h2>
				<div class="text pricing__info">
					<p>Цена на медицинскую лицензию формируется индивидуально и зависит</p>
					<ul>
						<li>от количества лицензируемых кабинетов</li>
						<li>необходимости в полном сопровождении при получении лицензии, включая внеплановые выездные проверки</li>
						<li>общей готовности соискателя к лицензированию</li>
					</ul>
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
				<h2 class="h2 info__mainTitle">Требования для получения лицензии на медицинскую деятельность</h2>
				<div class="text info__content">
					<p>Чтобы получить лицензию, соискатель должен направить или представить в лицензирующий госорган оформленное по установленному образцу заявление с перечислением видов оказываемых услуг. К нему прикладываются копии ряда документов. Перечень документации приводится в п. 1 ст. 9 ФЗ «О лицензировании отдельных видов деятельности».</p>
				</div>
			</div>
			<div class="info__item">
				<h3 class="h3 info__title">Кто выдаёт медицинскую лицензию?</h3>
				<div class="info__content">
					<div class="info__cardList">
						<div class="info__card">
							<p class="info__cardText">Юр. лицам и ИП с местом регистрации в <span>г. Москве</span></p>
							<h4 class="h3 info__cardTitle">Департамент здравоохранения города Москвы</h4>
						</div>
						<div class="info__card">
							<p class="info__cardText">Юр. лицам и ИП с местом регистрации в <span>Московской обл.</span></p>
							<h4 class="h3 info__cardTitle">Министерство здравоохранения Московской области</h4>
						</div>
						<div class="info__card">
							<p class="info__cardText">Бюджетным учреждениям</p>
							<h4 class="h3 info__cardTitle">Федеральная служба по надзору в сфере здравоохранения и социального развития (Росздравнадзор)</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="info__item">
				<h3 class="h3 info__title">Нормативно-правовая база</h3>
				<div class="info__content">
					<ul>
						<li>Федеральный закон о лицензировании отдельных видов деятельности N 99-ФЗ от 4.05.2011.</li>
						<li>Постановление Правительства РФ от 16.04.2012 г. № 291 «О лицензировании медицинской деятельности».</li>
						<li>Федеральный закон от 22.11.2011 № 323-ФЗ «Об основах охраны и здоровья граждан в РФ».</li>
						<li>Приказ Минздрава России от 11.03.2013г. №121-Н «Об утверждении требований к организации и выполнению работ (услуг) при оказании медицинской помощи».</li>
					</ul>
				</div>
			</div>
			<div class="info__item">
				<h3 class="h3 info__title">Документы для подачи заявления на получение медицинской лицензии</h3>
				<div class="info__content">
					<div class="expand">
						<div class="expand__body">
							<ul>
								<li>Документы, которые удостоверяют, что соискатель вправе распоряжаться зданиями, помещениями, оборудованием или иным материально-техническим обеспечением, которое необходимо для ведения медицинской деятельности.</li>
								<li>Документы о наличии профильного образования, в том числе послевузовского, и повышении квалификации. Дополнительно предоставляется документация с подтверждением стажа руководителя юр. лица или его заместителя.</li>
								<li>Документы об образовании штатных или привлекаемых на законных основаниях специалистов, которые осуществляют те или иные работы.</li>
								<li>Документы об образовании и стаже ИП.</li>
								<li>Регистрационные удостоверения и сертификаты соответствия на медтехнику.</li>
								<li>Документы об образовании и квалификации сотрудников для обслуживания медтехники. Допускается представить договор с фирмой, которая располагает лицензией на ведение соответствующего вида деятельности.</li>
								<li>Санитарно-эпидемиологическое заключение.</li>
							</ul>
							<p>
								Копии перечисленных документов заверяются у нотариуса. Если какие-то бумаги не заверены, вместе с ксерокопиями предъявляются оригиналы на внеплановой выездной проверке. Лицензирующий орган не вправе требовать документацию, которая не предусматривается положением о лицензировании медицинской деятельности.
							</p>
						</div>
						<button type="button" class="button expand__button">
							<span class="expand__buttonText--hide">Читать дальше</span>
							<span class="expand__buttonText--open">Скрыть текст</span>
						</button>
					</div>
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
			<h2 class="caption info__caption">Требования</h2>
			<div class="info__item">
				<h3 class="h3 info__title">К помещениям для осуществления медицинской деятельности</h3>
				<div class="info__content">
					<div class="expand expand--first">
						<div class="expand__body expand__body">
							<ul>
								<li>Документы, которые удостоверяют, что соискатель вправе распоряжаться зданиями, помещениями, оборудованием или иным материально-техническим обеспечением, которое необходимо для ведения медицинской деятельности.</li>
								<li>Документы о наличии профильного образования, в том числе послевузовского, и повышении квалификации. Дополнительно предоставляется документация с подтверждением стажа руководителя юр. лица или его заместителя.</li>
								<li>Документы об образовании штатных или привлекаемых на законных основаниях специалистов, которые осуществляют те или иные работы.</li>
								<li>Документы об образовании и стаже ИП.</li>
								<li>Регистрационные удостоверения и сертификаты соответствия на медтехнику.</li>
								<li>Документы об образовании и квалификации сотрудников для обслуживания медтехники. Допускается представить договор с фирмой, которая располагает лицензией на ведение соответствующего вида деятельности.</li>
								<li>Санитарно-эпидемиологическое заключение.</li>
							</ul>
							<p>
								Копии перечисленных документов заверяются у нотариуса. Если какие-то бумаги не заверены, вместе с ксерокопиями предъявляются оригиналы на внеплановой выездной проверке. Лицензирующий орган не вправе требовать документацию, которая не предусматривается положением о лицензировании медицинской деятельности.
							</p>
						</div>
						<button type="button" class="button expand__button">
							<span class="expand__buttonText--hide">Читать дальше</span>
							<span class="expand__buttonText--open">Скрыть текст</span>
						</button>
					</div>
				</div>
			</div>
			<div class="info__item">
				<h3 class="h3 info__title">К оснащению помещения для оказания медицинских услуг</h3>
				<div class="info__content">
					<p>
						На каждый вид медицинской деятельности есть приказ оказания медицинских услуг по выбранному профилю, в котором содержатся порядки оснащения с перечнем необходимого оборудования.  В настоящий момент система осуществления медицинской деятельности регламентируется ФЗ № 99-ФЗ от 04.05.11 г. и постановлением РФ от 16.04.12 г. № 291. Если у соискателя лицензии не хватает мед. оборудования, наша компания предоставляет в аренду недостающие позиции на любой срок.
					</p>
				</div>
			</div>
			<div class="info__item">
				<h3 class="h3 info__title">К персоналу для осуществления медицинской деятельности</h3>
				<div class="info__content">
					<div class="expand">
						<div class="expand__body">
							<p>
								На сотрудников медицинского учреждения заводятся личные дела с включением следующих документов:
							</p>
							<ul>
								<li>диплом о среднем или высшем образовании;</li>
								<li>ординатура/интернатура;</li>
								<li>сертификаты и свидетельства, которые подтверждают повышение квалификации или прохождение профессиональных курсов;</li>
								<li>медкнижка;</li>
								<li>трудовой договор;</li>
								<li>должностные инструкции;</li>
								<li>правила ТБ с личной подписью.</li>
							</ul>
						</div>
						<button type="button" class="button expand__button">
							<span class="expand__buttonText--hide">Читать дальше</span>
							<span class="expand__buttonText--open">Скрыть текст</span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part('include/single/bottom'); ?>
</main>
<?php get_footer(); ?>