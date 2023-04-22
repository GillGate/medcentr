<section class="popup popup--service">
	<div class="popup__wrapper">
		<button type="button" class="button--filled popup__close closePopup">
			<span class="vh">Закрыть</span>
			<img src="<?php echo IMG_DIR ;?>/plus.svg" width="19" height="19" alt="">
		</button>
		<div class="popup__content">
			<h2 class="h2 popup__title">Заполните форму для заказа услуги - <span>услуга</span></h2>
			<p class="text popup__text">Наш менеджер свяжется с Вами в ближайшее время.</p>
			<form class="form form--single form--popup popup__form">
				<div class="form__body">
					<label class="form__label">
						<input type="text" name="popup-service-client" maxlength="70" class="form__input" placeholder="Имя">
					</label>
					<label class="form__label">
						<input type="tel" name="popup-service-phone" maxlength="20" class="form__input" placeholder="Телефон">
					</label>
					<label class="form__label">
						<input type="email" name="popup-service-email" maxlength="50" class="form__input" placeholder="Почта">
					</label>
					<input type="hidden" class="vh" name="popup-service-name" value="">
				</div>
				<button type="submit" class="button button--filled form__submit form__submit--popup-service">Отправить</button>
				<p class="form__caption">Нажимая на кнопку, вы соглашаетесь с «​политикой конфиденциальности»</p>
			</form>
		</div>
	</div>
</section>