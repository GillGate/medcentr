<section class="popup popup--kp">
	<div class="popup__wrapper">
		<button type="button" class="button--filled popup__close closePopup">
			<span class="vh">Закрыть</span>
			<img src="<?php echo IMG_DIR ;?>/plus.svg" width="19" height="19" alt="">
		</button>
		<div class="popup__content">
			<h2 class="h2 popup__title">Заполните форму</h2>
			<p class="text popup__text">Наш менеджер свяжется с Вами в ближайшее время.</p>
			<form class="form form--single form--popup popup__form" enctype="multipart/form-data">
				<div class="form__body">
					<label class="form__label">
						<input type="text" name="popup-kp-name" class="form__input" placeholder="Имя">
					</label>
					<label class="form__label">
						<input type="tel" name="popup-kp-phone" class="form__input" placeholder="Телефон">
					</label>
					<label class="form__label">
						<input type="email" name="popup-kp-email" class="form__input" placeholder="Почта">
					</label>
					<label class="form__label form__label--file">
						<p><span>Прикрепите файл с КП</span> (pdf, docx, jpeg, png)</p>
						<input type="file" name="popup-kp-file" id="popup-kp-file" accept=".pdf, .docx, .jpg, .jpeg, .png" class="vh">
					</label>
				</div>
				<button type="submit" class="button button--filled form__submit form__submit--popup-kp">Отправить</button>
				<p class="form__caption">Нажимая на кнопку, вы соглашаетесь с «​политикой конфиденциальности»</p>
			</form>
		</div>
	</div>
</section>