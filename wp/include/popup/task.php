<section class="popup popup--task">
	<div class="popup__wrapper">
		<button type="button" class="button--filled popup__close closePopup">
			<span class="vh">Закрыть</span>
			<img src="<?php echo IMG_DIR ;?>/plus.svg" width="19" height="19" alt="">
		</button>
		<div class="popup__content">
			<h2 class="h2 popup__title">Расскажите о задаче, и мы подберем Вам нужное оборудование</h2>
			<p class="text popup__text">Наш менеджер свяжется с Вами в ближайшее время.</p>
			<form class="form form--single form--popup popup__form">
				<input type="hidden" name="popup-extended-from" class="vh" value="Заявка о задаче">
				<?php get_template_part('include/form/popup-extended'); ?>
			</form>
		</div>
	</div>
</section>