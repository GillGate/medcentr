<?php get_header(); ?>
<section class="intro">
	<div class="intro__video">
		<video autoplay muted loop src="<?php echo IMG_DIR ;?>/home/home-intro-bg.mp4"></video>
	</div>
	<div class="container intro__wrapper">
		<div class="intro__info">
			<h1 class="h1 intro__title">
				<span>Консалтинговый центр</span>
				«Концепция»
			</h1>
			<ul class="list intro__list">
				<li class="list__item list__item--shield">За 11 лет открыли <span>более 500</span> медицинских центров</li>
				<li class="list__item list__item--award">Даём <span>100% гарантию</span> получения мед.лицензии</li>
				<li class="list__item list__item--dollar">Сэкономили <span>свыше 110 млн</span> рублей своим клиентам</li>
				<li class="list__item list__item--document">Сроки и каждый этап работы фиксируем в <span>договоре</span></li>
			</ul>
		</div>
		<div class="intro__offer">
			<div class="intro__offerItem">
				<p class="h3 intro__offerTitle">Медицинская лицензия</p>
				<p class="intro__offerText">В рассрочку под 0% с гарантией оформления!</p>
				<button type="button" class="button openPopup--common intro__offerBtn">Бесплатная консультация</button>
			</div>
			<div class="intro__offerItem">
				<p class="h3 intro__offerTitle">Подбор помещения и персонала</p>
				<p class="intro__offerText">Для вашего медицинского бизнеса, аренда медоборудования.</p>
				<button type="button" class="button openPopup--common intro__offerBtn">Бесплатная консультация</button>
			</div>
		</div>
	</div>
</section>
<section class="greeting">
	<div class="container greeting__wrapper">
		<div class="greeting__img">
			<img src="<?php echo IMG_DIR ;?>/greeting.svg" loading="lazy" alt="">
		</div>
		<h2 class="h2 greeting__title">
			Знакомьтесь - это главврач Мария и бизнесмен Леонид.<br>
			Они планируют открыть медицинскую клинику
		</h2>
	</div>
</section>
<?php get_template_part('include/service'); ?>
<?php get_template_part('include/proposition'); ?>
<?php get_template_part('include/advantage'); ?>
<section class="stages">
	<div class="container">
		<div class="stages__header">
			<div class="stages__headerImg">
				<img src="<?php echo IMG_DIR ;?>/stages-intro.svg" width="550" height="400" loading="lazy" alt="">
			</div>
			<div class="stages__headerDialog">
				<h2 class="stages__headerTitle">Какие этапы можно пройти с вами на пути к открытию клиники?</h2>
			</div>
		</div>
		<div class="stages__list">
			<div class="stage stage--first">
				<div class="stage__info">
					<p class="stage__order">1 этап из 6</p>
					<h3 class="h2 stage__title">Брендирование и поиск помещения</h3>
					<p class="text stage__caption">Запустим оба процесса параллельно, чтобы сэкономить Ваше время</p>
					<ul class="list stage__list">
						<li class="list__item list__item--home"><span>Найдем помещение</span> с агентом по медицинской недвижимости</li>
						<li class="list__item"><span>Все проверим</span> - от метража кабинетов и высоты потолков до соблюдения норм пожарной безопасности, вентиляции и освещения</li>
						<li class="list__item list__item--document">Проведем <span>аудит документов</span></li>
						<li class="list__item list__item--message">Подключим <span>сопровождение переговоров</span> с собственником, осведомив о намерениях перепланировки в соответствии с СанПиН</li>
					</ul>
				</div>
				<div class="stage__img">
					<img src="<?php echo IMG_DIR ;?>/stage-1.svg" width="420" loading="lazy" alt="">
				</div>
			</div>
			<div class="stage stage--second">
				<div class="stage__info">
					<p class="stage__order">2 этап из 6</p>
					<h3 class="h2 stage__title">Проектирование клиники</h3>
					<p class="text stage__caption">Учтем не только нормы и требования, но и эффективность работы персонала и комфорт пациентов</p>
					<ul class="list stage__list">
						<li class="list__item list__item--pen">
							<h4><span>Создаем проект будущей клиники.</span></h4>
							<p>Спроектируем архитектурную, конструктивную часть, инженерные системы и дизайн-проект клиники, а также проекты систем вентиляции и электроснабжения</p>
						</li>
						<li class="list__item list__item--safe">
							<h4><span>Согласовываем проект с Роспотребнадзором.</span></h4>
							<p>Наш главный специалист отдела проектирования открыла 11 клиник разных масштабов и профилей, в том числе клинику с МРТ на 2500м², поэтому трудностей на этом этапе не возникает</p>
						</li>
					</ul>
					<a href="/remont/" class="button stage__button">Подробнее</a>
				</div>
				<div class="stage__img">
					<img src="<?php echo IMG_DIR ;?>/stage-2.svg" width="573" height="416" loading="lazy" alt="">
				</div>
			</div>
			<div class="stage">
				<div class="stage__info">
					<p class="stage__order">3 этап из 6</p>
					<h3 class="h2 stage__title">Ремонтно-строительные работы</h3>
					<p class="text stage__caption">Подготовим помещение для оказания медицинских услуг в соответствии с СанПиН ЛПУ</p>
					<ul class="list stage__list">
						<li class="list__item">Вентиляция</li>
						<li class="list__item">Электрика</li>
						<li class="list__item">СКУД</li>
						<li class="list__item">Водоснабжение</li>
						<li class="list__item">Пожарная безопасность</li>
					</ul>
					<a href="/remont/" class="button stage__button">Подробнее</a>
				</div>
				<div class="stage__img">
					<img src="<?php echo IMG_DIR ;?>/stage-3.svg" width="450" height="440" loading="lazy" alt="">
				</div>
			</div>
			<div class="stage">
				<div class="stage__info">
					<p class="stage__order">4 этап из 6</p>
					<h3 class="h2 stage__title">Снабжение медицинским оборудованием (аренда и покупка)</h3>
					<p class="text stage__caption">Сдаем оборудование в аренду в срок от 1 дня. Менеджер помогает на основании проекта сформировать запросы к дистрибьюторам</p>
					<ul class="list stage__list">
						<li class="list__item">На основании приказов-стандартов оснащения медицинских кабинетов</li>
						<li class="list__item">По утверждённым профилям</li>
					</ul>
					<a href="/arenda-mediczinskogo-oborudovaniya/" class="button stage__button">Подробнее</a>
				</div>
				<div class="stage__img">
					<img src="<?php echo IMG_DIR ;?>/stage-4.svg" width="560" height="490" loading="lazy" alt="">
				</div>
			</div>
			<div class="stage">
				<div class="stage__info">
					<p class="stage__order">5 этап из 6</p>
					<h3 class="h2 stage__title">Получение СЭЗ</h3>
					<p class="text stage__caption">Получение СЭЗ под ключ. 100% гарантия получения!</p>
					<ul class="list stage__list">
						<li class="list__item list__item--document">Готовим пакет документов, журналов, регистрируем заявление в территориальном РПН</li>
						<li class="list__item">Выезжаем на объект и помогаем подготовиться к внеплановой выездной проверке. Репетируем проверку</li>
						<li class="list__item">Выезжаем на проверку Роспотребнадзором и лично отвечаем на все вопросы проверяющих</li>
						<li class="list__item">Вы получили СЭЗ!</li>
					</ul>
					<a href="/sez-na-mediczinskuyu-deyatelnost/" class="button stage__button">Подробнее</a>
				</div>
				<div class="stage__img">
					<img src="<?php echo IMG_DIR ;?>/stage-5.svg" width="510" height="530" loading="lazy" alt="">
				</div>
			</div>
			<div class="stages__info stages__info--between">
				<h2 class="stages__infoTitle">
					До открытия клиники осталось всего<br>
					<span>15 рабочих дней!</span>
				</h2>
				<div class="stages__infoImg">
					<img src="<?php echo IMG_DIR ;?>/stages-between.svg" width="495" height="272" loading="lazy" alt="">
				</div>
			</div>
			<div class="stage stage--finale">
				<div class="stage__info">
					<p class="stage__order">6 - заключительный этап</p>
					<h3 class="h2 stage__title">Получение лицензии на медицинскую деятельность</h3>
					<p class="text stage__caption">Наши заказчики не получили ни одного отказа за 11 лет работы. В 100% случаев лицензия была оформлена с первого раза</p>
					<ul class="list stage__list">
						<li class="list__item">Проведем опись оборудования по стандартам оснащения</li>
						<li class="list__item">Обработаем документы, доказывающие права собственности или владения, использования помещений, оборудования, инструментов</li>
						<li class="list__item">Проверим регистрационные удостоверения и маркировки</li>
						<li class="list__item">Работаем с персоналом по штатному расписанию, проверяем документы об образовании и компетенции занимаемой должности</li>
						<li class="list__item">Сопровождаем проверку надзорными органами</li>
					</ul>
					<a href="/liczenzirovanie-mediczinskoj-deyatelnosti/" class="button stage__button">Подробнее</a>
				</div>
				<div class="stage__img">
					<img src="<?php echo IMG_DIR ;?>/stage-6.svg" width="400" height="530" loading="lazy" alt="">
				</div>
			</div>
			<div class="stages__info stages__info--ready">
				<div class="stages__infoImg">
					<img src="<?php echo IMG_DIR ;?>/stages-ready.svg" width="512" height="576" loading="lazy" alt="">
				</div>
				<div class="stages__infoContent">
					<h2 class="stages__infoTitle">
						<span>Готово!</span> Назначаем дату торжественного открытия Вашей клиники
					</h2>
					<div class="stages__gift">
						<p class="stages__giftTitle">В подарок</p>
						<p class="stages__giftText">Съемка фуршета и <a href="/cleaning/">клининг</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="formBlock">
	<div class="container">
		<div class="formBlock__wrapper">
			<h2 class="h2 formBlock__title">
				Получите <span>бесплатную консультацию</span> и пошаговый план действий
			</h2>
			<div class="formBlock__body">
				<form class="form">
					<input type="hidden" class="vh" name="advice-from" value="Заявка с главной страницы">
					<?php get_template_part('include/form/advice'); ?>
				</form>
			</div>
		</div>
	</div>
</section>
<section class="stages">
	<div class="container">
		<div class="stages__header stages__header--additional">
			<div class="stages__headerDialog">
				<h2 class="stages__headerTitle">А как быть с проверками Роспотребнадзором? Вы поможете к ним подготовиться?</h2>
			</div>
			<div class="stages__headerImg">
				<img src="<?php echo IMG_DIR ;?>/stages-question.svg" width="562" height="422" loading="lazy" alt="">
			</div>
		</div>
		<div class="stage stage--additional">
			<div class="stage__info">
				<p class="stage__order">Дополнительный этап</p>
				<h3 class="h2 stage__title">Проводим аудит клиник и готовим к плановым и внеплановым проверкам</h3>
				<p class="text stage__caption">Мы знаем, что будет требовать Роспотребнадзор. <br>
				«От» и «до» исправим <span>санитарно-эпидеомилогические, санитарно-технические вопросы и вопросы сбора и утилизации отходов.</span></p>
				<ul class="list stage__list">
					<li class="list__item">Проверим и подготовим недостающие документы</li>
					<li class="list__item">Проведем лекцию для работников и выявим ошибки в работе</li>
					<li class="list__item">Поможем исправить выявленные нарушения до проверки</li>
					<li class="list__item">Будем сопровождать после проверки влоть до вынесения постановлений</li>
					<li class="list__item">Проверим законность применения штрафов и поможем оспорить постановления в судебном порядке</li>
				</ul>
				<a href="/audit-klinik/" class="button stage__button">Подробнее</a>
			</div>
			<div class="stage__img">
				<img src="<?php echo IMG_DIR ;?>/stage-7.svg" width="420" loading="lazy" alt="">
			</div>
		</div>
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
<section class="formBlock formBlock--orange formBlock--home">
	<div class="container">
		<div class="formBlock__wrapper formBlock__wrapper--home">
			<div class="formBlock__body">
				<h2 class="h2 formBlock__title">
					Остались вопросы?
				</h2>
				<p class="formBlock__text">
					Оставьте заявку, и мы проведём бесплатную консультацию по всем интересующим вас вопросам.
				</p>
				<form class="form form--white">
					<div class="form__body">
						<label class="form__label" data-error="">
							<input type="text" name="advice-home-name" maxlength="70" class="form__input" placeholder="Имя">
						</label>
						<label class="form__label" data-error="">
							<input type="email" name="advice-home-email" maxlength="50" class="form__input" placeholder="Почта">
						</label>
						<input type="hidden" class="vh" name="advice-home-from" value="Заявка с подвала главной страницы">
					</div>
					<button type="sumbit" class="button button--filled form__submit form__submit--advice-home">Отправить</button>
					<p class="form__caption">Нажимая на кнопку, вы соглашаетесь с «​политикой конфиденциальности»</p>
				</form>
			</div>
			<div class="formBlock__img">
				<img src="<?php echo IMG_DIR ;?>/formBlock-home.png" loading="lazy" alt="">
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>