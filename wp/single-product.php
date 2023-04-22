<?php get_header(); ?>
<?php
	$product_id = get_the_ID();
	$fields = get_fields();
?>
	<section class="productItem <?php if($fields['product-full-price'] !== '') echo 'productItem--discount' ?>">
		<div class="container">
			<h1 class="h1 productItem__title--mobile">Каталог</h1>
			<div class="productItem__head">
				<div class="productItem__img productItem__img--desktop">
					<?php the_post_thumbnail(); ?>
				</div>
				<div class="productItem__info">
					<h2 class="h2 productItem__title"><?php the_title(); ?></h2>
					<div class="productItem__img productItem__img--mobile">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="productItem__pay">
						<?php if($fields['product-price'] !== '') { ?>
							<p class="product__price productItem__price">
								<?php if($fields['product-full-price'] !== '') { ?>
									<span><?php echo $fields['product-full-price']; ?> ₽</span>
								<?php } ?>
								<?php echo $fields['product-price']; ?>  ₽
							</p>
						<?php } ?>
						<ul class="productItem__payments">
							<li class="productItem__paymentsItem">
								<img src="<?php echo IMG_DIR ;?>/payments-mc.svg" width="32" height="32" alt="MasterCard">
							</li>
							<li class="productItem__paymentsItem">
								<img src="<?php echo IMG_DIR ;?>/payments-visa.svg" width="32" height="32" alt="Visa">
							</li>
							<li class="productItem__paymentsItem">
								<img src="<?php echo IMG_DIR ;?>/payments-ae.svg" width="32" height="32" alt="American Express">
							</li>
							<li class="productItem__paymentsItem">
								<img src="<?php echo IMG_DIR ;?>/payments-paypal.svg" width="32" height="32" alt="PayPal">
							</li>
							<li class="productItem__paymentsItem">
								<img src="<?php echo IMG_DIR ;?>/payments-dc.svg" width="32" height="32" alt="Diners Club">
							</li>
							<li class="productItem__paymentsItem">
								<img src="<?php echo IMG_DIR ;?>/payments-discover.svg" width="92" height="32" alt="Discover">
							</li>
						</ul>
					</div>
					<div class="text productItem__description">
						<?php the_content(); ?>
					</div>
					<div class="productItem__offer">
						<div class="productItem__offerInfo">
							<h2 class="h3 productItem__title--h3">Оставьте заявку на покупку</h2>
							<p class="productItem__offerText">
								Мы свяжемся с вами в ближайшее время для обсуждения деталей.
							</p>
						</div>
						<button class="button openPopup--product productItem__offerBtn">Заказать оборудование</button>
					</div>
				</div>
			</div>
			<div class="productItem__section productItem__props">
				<h2 class="h2 productItem__title productItem__sectionTitle">Свойства</h2>
				<div class="productItem__sectionInfo">
					<div class="productItem__sectionElement">
						<h3 class="h3 h3 productItem__title--h3"><?php echo $fields['product-model']; ?> имеет все необходимые функции</h3>
						<div class="productItem__sectionContent">
							<ul>
								<li><?php echo $fields['product-props']['product-props-1']; ?></li>
								<li><?php echo $fields['product-props']['product-props-2']; ?></li>
								<li><?php echo $fields['product-props']['product-props-3']; ?></li>
								<li><?php echo $fields['product-props']['product-props-4']; ?></li>
							</ul>
						</div>
					</div>
					<?php if($fields['product-under-props']['product-under-props-text'] !== '') { ?>
						<div class="productItem__sectionCaption">
							<?php if($fields['product-under-props']['product-under-props-img']) { ?>
								<div class="productItem__sectionIcon">
									<img src="<?php echo $fields['product-under-props']['product-under-props-img']; ?>" width="46" height="46" alt="">
								</div>
							<?php } ?>
							<p><?php echo $fields['product-under-props']['product-under-props-text']; ?></p>
						</div>
					<?php } ?>
				</div>
			</div>
			<?php if(
				$fields['product-adv']['product-adv-1']['product-adv-title'] !== '' &&
				$fields['product-adv']['product-adv-1']['product-adv-text'] !== ''
			) { ?>
				<div class="productItem__section productItem__advantages">
					<h2 class="h2 productItem__title productItem__sectionTitle">Подробности</h2>
					<div class="productItem__sectionInfo">
						<?php foreach($fields['product-adv'] as $adv) { 
							if($adv['product-adv-title'] !== '') { ?>
								<div class="productItem__sectionElement">
									<h3 class="h3 productItem__title--h3"><?php echo $adv['product-adv-title'];?></h3>
									<div class="productItem__sectionContent">
										<?php echo $adv['product-adv-text'];?>
									</div>
								</div>
							<?php }  
						} ?>
						<div class="productItem__sectionCaption">
							<p><?php echo $fields['product-under-adv'];?></p>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</section>
	<?php get_template_part('include/form/orange'); ?>
	<section class="similar">
		<div class="container">
			<div class="similar__head">
				<h2 class="h2 productItem__title similar__title">Похожее оборудование</h2>
				<div class="slider__controls similar__controls similar__controls--desktop">
					<button class="slider__button similar__button similar__button--prev">
						<span class="vh">Назад</span>
						<svg width="22" height="16" viewBox="0 0 22 16" fill="#848498" xmlns="http://www.w3.org/2000/svg">
							<path d="M5.34005 1.08414C5.7078 0.719657 6.30138 0.722305 6.66586 1.09005C7.03034 1.4578 7.02769 2.05138 6.65995 2.41586L4.45624 4.6C3.56187 5.48642 2.94837 6.09647 2.53324 6.61338C2.39833 6.78137 2.29308 6.92925 2.21135 7.0625L21 7.0625C21.5178 7.0625 21.9375 7.48223 21.9375 8C21.9375 8.51777 21.5178 8.9375 21 8.9375L2.21135 8.9375C2.29307 9.07075 2.39833 9.21863 2.53324 9.38662C2.94837 9.90353 3.56187 10.5136 4.45624 11.4L6.65995 13.5841C7.02769 13.9486 7.03034 14.5422 6.66586 14.9099C6.30138 15.2777 5.7078 15.2803 5.34005 14.9159L3.09663 12.6924C2.25166 11.8549 1.56108 11.1705 1.07132 10.5607C0.562035 9.92652 0.193367 9.28284 0.0948868 8.5102C0.0732956 8.34081 0.0625 8.17041 0.0625 8C0.0625 7.82959 0.0732956 7.65919 0.0948868 7.4898C0.193367 6.71716 0.562035 6.07348 1.07132 5.43932C1.56108 4.82948 2.25167 4.14505 3.09665 3.30761L5.34005 1.08414Z"/>
						</svg>
					</button>
					<button class="slider__button similar__button similar__button--next">
						<span class="vh">Вперёд</span>
						<svg width="22" height="16" viewBox="0 0 22 16" fill="#848498" xmlns="http://www.w3.org/2000/svg">
							<path d="M16.6599 1.08414C16.2922 0.719657 15.6986 0.722305 15.3341 1.09005C14.9697 1.4578 14.9723 2.05138 15.3401 2.41586L17.5438 4.6C18.4381 5.48642 19.0516 6.09647 19.4668 6.61338C19.6017 6.78137 19.7069 6.92925 19.7887 7.0625L1 7.0625C0.482233 7.0625 0.0625 7.48223 0.0625 8C0.0625 8.51777 0.482233 8.9375 1 8.9375L19.7887 8.9375C19.7069 9.07075 19.6017 9.21863 19.4668 9.38662C19.0516 9.90353 18.4381 10.5136 17.5438 11.4L15.3401 13.5841C14.9723 13.9486 14.9697 14.5422 15.3341 14.9099C15.6986 15.2777 16.2922 15.2803 16.6599 14.9159L18.9034 12.6924C19.7483 11.8549 20.4389 11.1705 20.9287 10.5607C21.438 9.92652 21.8066 9.28284 21.9051 8.5102C21.9267 8.34081 21.9375 8.17041 21.9375 8C21.9375 7.82959 21.9267 7.65919 21.9051 7.4898C21.8066 6.71716 21.438 6.07348 20.9287 5.43932C20.4389 4.82948 19.7483 4.14505 18.9034 3.30761L16.6599 1.08414Z"/>
						</svg>
					</button>
				</div>
			</div>
			<div class="similar__list">
				<?php foreach(getCatalog() as $product) { ?>
					<?php if($product['id'] !== $product_id) { ?>
						<div class="similar__item">
							<div class="product <?php if($product['product-full-price'] !== '') echo 'product--discount' ?>">
								<div class="product__head">
									<p class="product__caption"><?php echo $product['product-model']; ?></p>
									<h3 class="h3 product__title"><?php echo $product['title']; ?></h3>
								</div>
								<div class="product__img">
									<?php echo $product['img']; ?>
								</div>
								<ul class="product__props">
									<li class="product__propsItem"><?php echo $product['product-props']['product-props-1']; ?></li>
									<li class="product__propsItem"><?php echo $product['product-props']['product-props-2']; ?></li>
									<li class="product__propsItem"><?php echo $product['product-props']['product-props-3']; ?></li>
									<li class="product__propsItem"><?php echo $product['product-props']['product-props-4']; ?></li>
								</ul>
								<div class="product__bottom">
								<p class="product__price">
										<?php if($product['product-full-price'] !== '') { ?>
											<span><?php echo $product['product-full-price']; ?> ₽</span>
										<?php } ?>
										<?php if($product['product-price'] !== '') { ?>
											<?php echo $product['product-price']; ?>  ₽
										<?php } ?>
									</p>
									<a href="<?php echo $product['link']; ?>" class="button product__button">Подробнее</a>
								</div>
							</div>
						</div>
					<?php } ?>
				<?php } ?>
			</div>
			<div class="slider__controls similar__controls similar__controls--mobile">
				<button class="slider__button similar__button similar__button--prev">
					<span class="vh">Назад</span>
					<svg width="22" height="16" viewBox="0 0 22 16" fill="#848498" xmlns="http://www.w3.org/2000/svg">
						<path d="M5.34005 1.08414C5.7078 0.719657 6.30138 0.722305 6.66586 1.09005C7.03034 1.4578 7.02769 2.05138 6.65995 2.41586L4.45624 4.6C3.56187 5.48642 2.94837 6.09647 2.53324 6.61338C2.39833 6.78137 2.29308 6.92925 2.21135 7.0625L21 7.0625C21.5178 7.0625 21.9375 7.48223 21.9375 8C21.9375 8.51777 21.5178 8.9375 21 8.9375L2.21135 8.9375C2.29307 9.07075 2.39833 9.21863 2.53324 9.38662C2.94837 9.90353 3.56187 10.5136 4.45624 11.4L6.65995 13.5841C7.02769 13.9486 7.03034 14.5422 6.66586 14.9099C6.30138 15.2777 5.7078 15.2803 5.34005 14.9159L3.09663 12.6924C2.25166 11.8549 1.56108 11.1705 1.07132 10.5607C0.562035 9.92652 0.193367 9.28284 0.0948868 8.5102C0.0732956 8.34081 0.0625 8.17041 0.0625 8C0.0625 7.82959 0.0732956 7.65919 0.0948868 7.4898C0.193367 6.71716 0.562035 6.07348 1.07132 5.43932C1.56108 4.82948 2.25167 4.14505 3.09665 3.30761L5.34005 1.08414Z"/>
					</svg>
				</button>
				<button class="slider__button similar__button similar__button--next">
					<span class="vh">Вперёд</span>
					<svg width="22" height="16" viewBox="0 0 22 16" fill="#848498" xmlns="http://www.w3.org/2000/svg">
						<path d="M16.6599 1.08414C16.2922 0.719657 15.6986 0.722305 15.3341 1.09005C14.9697 1.4578 14.9723 2.05138 15.3401 2.41586L17.5438 4.6C18.4381 5.48642 19.0516 6.09647 19.4668 6.61338C19.6017 6.78137 19.7069 6.92925 19.7887 7.0625L1 7.0625C0.482233 7.0625 0.0625 7.48223 0.0625 8C0.0625 8.51777 0.482233 8.9375 1 8.9375L19.7887 8.9375C19.7069 9.07075 19.6017 9.21863 19.4668 9.38662C19.0516 9.90353 18.4381 10.5136 17.5438 11.4L15.3401 13.5841C14.9723 13.9486 14.9697 14.5422 15.3341 14.9099C15.6986 15.2777 16.2922 15.2803 16.6599 14.9159L18.9034 12.6924C19.7483 11.8549 20.4389 11.1705 20.9287 10.5607C21.438 9.92652 21.8066 9.28284 21.9051 8.5102C21.9267 8.34081 21.9375 8.17041 21.9375 8C21.9375 7.82959 21.9267 7.65919 21.9051 7.4898C21.8066 6.71716 21.438 6.07348 20.9287 5.43932C20.4389 4.82948 19.7483 4.14505 18.9034 3.30761L16.6599 1.08414Z"/>
					</svg>
				</button>
			</div>
		</div>
	</section>
	<section class="popup popup--product">
		<div class="popup__wrapper">
			<button type="button" class="button--filled popup__close closePopup">
				<span class="vh">Закрыть</span>
				<img src="<?php echo IMG_DIR ;?>/plus.svg" width="19" height="19" alt="">
			</button>
			<div class="popup__content">
				<div class="popup__product">
					<div class="popup__productImg">
						<?php the_post_thumbnail(); ?>
					</div>
					<p class="popup__productName"><?php the_title(); ?></p>
				</div>
				<h2 class="h2 popup__title">Заполните форму для заказа или аренды оборудования</h2>
				<p class="text popup__text">Наш менеджер свяжется с Вами в ближайшее время.</p>
				<form class="form form--single form--popup popup__form">
					<div class="form__body">
						<label class="form__label">
							<input type="text" name="popup-product-person" class="form__input" placeholder="Имя">
						</label>
						<label class="form__label">
							<input type="tel" name="popup-product-phone" class="form__input" placeholder="Телефон">
						</label>
						<label class="form__label">
							<input type="email" name="popup-product-email" class="form__input" placeholder="Почта">
						</label>
						<label class="vh form__label">
							<input type="hidden" name="popup-product-name" value="<?php the_title(); ?>">
						</label>
						<label class="vh form__label">
							<input type="hidden" name="popup-product-link" value="<?php the_permalink(); ?>">
						</label>
					</div>
					<button type="button" class="button button--filled form__submit form__submit--popup-product">Отправить</button>
					<p class="form__caption">Нажимая на кнопку, вы соглашаетесь с «​политикой конфиденциальности»</p>
				</form>
			</div>
		</div>
	</section>
<?php get_footer(); ?>