<?php
/*
	Template Name: Контакты
*/
?>
<?php get_header(); ?>
<section class="contacts">
	<div class="container">
		<h1 class="h1 contacts__mainTitle">Контакты</h1>
		<div class="contacts__wrapper">
			<div class="contacts__info">
				<div class="contacts__infoItem">
					<a href="tel:+84991106343" class="contacts__text">8 (499) 110-63-43</a>
					<a href="mailto:info@med-concept.ru" class="contacts__text">info@med-concept.ru</a>
				</div>
				<div class="contacts__infoItem">
					<div class="contacts__infoIcon">
						<svg width="30" height="26" viewBox="0 0 30 26" fill="#2D264B" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M10.3846 0C8.51774 0 6.64948 0.586346 5.07692 1.75882L1.69231 4.28235C0.626975 5.07665 0 6.32323 0 7.64706V20.8444C0 24.2289 3.88678 26.1609 6.61042 24.1302C7.7288 23.2963 9.05601 22.8795 10.3846 22.8795C11.7132 22.8795 13.0404 23.2963 14.1588 24.1302L14.3077 24.2412C15.8802 25.4137 17.7485 26 19.6154 26C21.4823 26 23.3505 25.4137 24.9231 24.2412L28.3077 21.7176C29.373 20.9233 30 19.6768 30 18.3529V5.1556C30 1.77107 26.1132 -0.160887 23.3896 1.86983C22.2712 2.70368 20.944 3.12049 19.6154 3.12049C18.2868 3.12049 16.9596 2.70368 15.8412 1.86983L15.6923 1.75882C14.1198 0.586346 12.2515 0 10.3846 0ZM6.46154 3.59412C7.29885 2.96983 8.2488 2.57042 9.23077 2.39583V20.6625C7.81156 20.8532 6.42954 21.3974 5.22581 22.2949C4.02348 23.1913 2.30769 22.3385 2.30769 20.8444V7.64706C2.30769 7.04532 2.59268 6.47869 3.07692 6.11765L6.46154 3.59412ZM15.5434 22.2949C14.3397 21.3974 12.9577 20.8532 11.5385 20.6625V2.39583C12.5204 2.57042 13.4704 2.96983 14.3077 3.59412L14.4566 3.70512C15.6603 4.60261 17.0423 5.14676 18.4615 5.33745V23.6042C17.4796 23.4296 16.5296 23.0302 15.6923 22.4059L15.5434 22.2949ZM23.5385 22.4059C22.7012 23.0302 21.7512 23.4296 20.7692 23.6042V5.33745C22.1884 5.14676 23.5705 4.60261 24.7742 3.70512C25.9765 2.80868 27.6923 3.66153 27.6923 5.1556V18.3529C27.6923 18.9547 27.4073 19.5213 26.9231 19.8824L23.5385 22.4059Z"/>
						</svg>
					</div>	
					<a href="#map" class="navigateLink contacts__text">
						<address class="contacts__text">
							129626, Москва, <br>
							ул. Павла Корчагина 2
						</address>
					</a>
				</div>
				<div class="contacts__infoItem">
					<?php get_template_part('include/social'); ?>
				</div>
				<div class="contacts__infoItem">
					<p class="caption contacts__caption">График работы</p>
					<p class="contacts__text">Пн – Пт: 9:00 – 20:00</p>
				</div>
			</div>
			<div class="contacts__form">
				<div class="contacts__formInfo">
					<h2 class="h2 contacts__formTitle">
						Задайте вопрос <br>
						и получите консультацию
					</h2>
					<p class="text contacts__formText">Мы всегда готовы помочь вам. Заполните форму ниже и наши специалисты свяжутся с вами в ближайшее рабочее время для консультации.</p>
				</div>
				<form class="contacts__formBody form form--single form--contacts">
					<div class="form__body">
						<label class="form__label">
							<input type="text" name="contacts-name" maxlength="70" class="form__input" placeholder="Имя">
						</label>
						<label class="form__label">
							<input type="tel" name="contacts-phone" maxlength="20" class="form__input" placeholder="Телефон">
						</label>
						<label class="form__label">
							<input type="email" name="contacts-email" maxlength="50" class="form__input" placeholder="Почта">
						</label>
						<label class="form__label">
							<textarea 
								name="contacts-question" 
								class="form__input form__textarea" 
								maxlength="300"
								placeholder="Ваш вопрос"
							></textarea>
						</label>
						<input type="hidden" class="vh" name="contacts-from" value="Заявка со страницы Контакты">
					</div>
					<button type="sumbit" class="button button--filled form__submit form__submit--contacts">Отправить</button>
					<p class="form__caption">Нажимая на кнопку, вы соглашаетесь с «​политикой конфиденциальности»</p>
				</form>
			</div>
		</div>
	</div>
</section>
<section class="map" id="map">
<!-- 		<iframe src="https://yandex.ru/map-widget/v1/-/CCUBQ4H99A" width="100%" height="600" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe> -->
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2242.0252461062128!2d37.65386701609028!3d55.81016209503378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b535c3a9a96f8d%3A0xa767ac9781e093ef!2z0YPQuy4g0J_QsNCy0LvQsCDQmtC-0YDRh9Cw0LPQuNC90LAsIDIsINCc0L7RgdC60LLQsCwgMTI5NjI2!5e0!3m2!1sru!2sru!4v1646907927376!5m2!1sru!2sru" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>
<?php get_footer(); ?>