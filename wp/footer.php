<footer class="footer">
	<div class="container">
		<h2 class="vh">Подвал</h2>
		<div class="footer__wrapper">
			<div class="footer__info">
				<a href="/" class="footer__logo">
					<span class="vh">Консалтинговый центр "Концепция"</span>
					<img src="<?php echo IMG_DIR ;?>/logo.png" width="320" height="70" loading="lazy" alt="">
				</a>
				<div class="footer__details">
					<p class="footer__caption">Реквизиты</p>
					<ul class="footer__list">
						<li class="footer__item">ООО «Аймед»</li>
						<li class="footer__item">ИНН 7720379868</li>
						<li class="footer__item">ОГРН 1177746436416</li>
					</ul>
				</div>
				<div class="footer__social">
					<?php get_template_part('include/social'); ?>
				</div>
			</div>
			<ul class="footer__nav">
				<li class="footer__navItem">
					<h3 class="h3 footer__title">Компания</h3>
					<ul class="footer__list">
						<li class="footer__item">
							<a href="/about/">О компании</a>
						</li>
						<li class="footer__item">
							<a href="/cases/">Кейсы</a>
						</li>
						<li class="footer__item">
							<a href="/poleznoe/">Блог</a>
						</li>
						<li class="footer__item">
							<a href="/contact/">Контакты</a>
						</li>
						<li class="footer__item">
							<a href="/policy/">Политика конфиденциальности</a>
						</li>
					</ul>
				</li>
				<li class="footer__navItem">
					<h3 class="h3 footer__title">Услуги</h3>
					<ul class="footer__list">
						<li class="footer__item">
							<a href="/liczenzirovanie-mediczinskoj-deyatelnosti/">Лицензирование</a>
						</li>
						<li class="footer__item">
							<a href="/sez-na-mediczinskuyu-deyatelnost/">Получение СЭЗ</a>
						</li>
						<li class="footer__item">
							<a href="/arenda-mediczinskogo-oborudovaniya/">Аренда медоборудования</a>
						</li>
						<li class="footer__item">
							<a href="/audit-klinik/">Аудит клиник</a>
						</li>
						<li class="footer__item">
							<a href="/remont/">Проектирование</a>
						</li>
						<li class="footer__item">
							<a href="/remont/">Ремонт помещений</a>
						</li>
						<li class="footer__item">
							<a href="/cleaning/">Клининг</a>
						</li>
						<li class="footer__item">
							<a href="/catalog/">Каталог</a>
						</li>
					</ul>
				</li>
				<li class="footer__navItem footer__navItem--contacts">
					<h3 class="h3 footer__title">Контакты</h3>
					<div class="footer__navInfo">
						<p class="footer__caption">Телефон</p>
						<a href="tel:+84991106343">8 (499) 110-63-43</a>
					</div>
					<div class="footer__navInfo">
						<p class="footer__caption">Email</p>
						<a href="mailto:info@med-concept.ru">
							info<br>
							@med-concept.ru
						</a>
					</div>
					<div class="footer__navInfo">
						<p class="footer__caption">Адрес</p>
						<address>
							129626, Москва, ул. Павла Корчагина 2
						</address>
					</div>
					<div class="footer__navInfo">
						<p class="footer__caption">График работы</p>
						Пн – Пт: 9:00 – 20:00
					</div>
				</li>
			</ul>
		</div>
	</div>
</footer>
<?php get_template_part('include/popup/analysis'); ?>
<?php get_template_part('include/popup/problem'); ?>
<?php get_template_part('include/popup/thanks'); ?>
<script>
	const themeRoot = "<?php echo THEME_ROOT ?>";
</script>
<?php wp_footer(); ?>
</body>
</html>