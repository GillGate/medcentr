<div class="reviews__slider">
	<?php foreach(getReviews() as $review) { ?>
		<div class="review" 
			data-service="<?php echo $review['review-service']['value']; ?>" 
			data-score="<?php echo $review['review-score']; ?>"
		>
			<div class="review__user">
				<div class="review__picture">
					<?php echo $review['img']; ?>
				</div>
				<div class="review__userData">
					<h3 class="review__name"><?php echo $review['name']; ?></h3>
					<p class="review__service">
						<?php echo $review['review-service']['label']; ?>
					</p>
				</div>
			</div>
			<div class="review__message">
				<p class="review__name"><?php echo explode(' ', $review['name'])[0]; ?> пишет, что...</p>
				<div class="text review__text">
					<?php echo wpautop($review['text']); ?>
				</div>
				<div class="review__bottom">
					<a href="<?php echo $review['review-screenshot']; ?>" target="_blank" rel="noopener" class="review__original">Смотреть скриншот отзыва</a>
					<div class="review__score">
						Оценка <br>
						клиента
						<div class="review__scoreImg"></div>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
</div>
<div class="slider__dots reviews__dots"></div>
<div class="slider__controls reviews__controls reviews__controls--mobile">
	<button class="slider__button reviews__button reviews__button--prev">
		<span class="vh">Назад</span>
		<svg width="22" height="16" viewBox="0 0 22 16" fill="#848498" xmlns="http://www.w3.org/2000/svg">
			<path d="M5.34005 1.08414C5.7078 0.719657 6.30138 0.722305 6.66586 1.09005C7.03034 1.4578 7.02769 2.05138 6.65995 2.41586L4.45624 4.6C3.56187 5.48642 2.94837 6.09647 2.53324 6.61338C2.39833 6.78137 2.29308 6.92925 2.21135 7.0625L21 7.0625C21.5178 7.0625 21.9375 7.48223 21.9375 8C21.9375 8.51777 21.5178 8.9375 21 8.9375L2.21135 8.9375C2.29307 9.07075 2.39833 9.21863 2.53324 9.38662C2.94837 9.90353 3.56187 10.5136 4.45624 11.4L6.65995 13.5841C7.02769 13.9486 7.03034 14.5422 6.66586 14.9099C6.30138 15.2777 5.7078 15.2803 5.34005 14.9159L3.09663 12.6924C2.25166 11.8549 1.56108 11.1705 1.07132 10.5607C0.562035 9.92652 0.193367 9.28284 0.0948868 8.5102C0.0732956 8.34081 0.0625 8.17041 0.0625 8C0.0625 7.82959 0.0732956 7.65919 0.0948868 7.4898C0.193367 6.71716 0.562035 6.07348 1.07132 5.43932C1.56108 4.82948 2.25167 4.14505 3.09665 3.30761L5.34005 1.08414Z"/>
		</svg>
	</button>
	<button class="slider__button reviews__button reviews__button--next">
		<span class="vh">Вперёд</span>
		<svg width="22" height="16" viewBox="0 0 22 16" fill="#848498" xmlns="http://www.w3.org/2000/svg">
			<path d="M16.6599 1.08414C16.2922 0.719657 15.6986 0.722305 15.3341 1.09005C14.9697 1.4578 14.9723 2.05138 15.3401 2.41586L17.5438 4.6C18.4381 5.48642 19.0516 6.09647 19.4668 6.61338C19.6017 6.78137 19.7069 6.92925 19.7887 7.0625L1 7.0625C0.482233 7.0625 0.0625 7.48223 0.0625 8C0.0625 8.51777 0.482233 8.9375 1 8.9375L19.7887 8.9375C19.7069 9.07075 19.6017 9.21863 19.4668 9.38662C19.0516 9.90353 18.4381 10.5136 17.5438 11.4L15.3401 13.5841C14.9723 13.9486 14.9697 14.5422 15.3341 14.9099C15.6986 15.2777 16.2922 15.2803 16.6599 14.9159L18.9034 12.6924C19.7483 11.8549 20.4389 11.1705 20.9287 10.5607C21.438 9.92652 21.8066 9.28284 21.9051 8.5102C21.9267 8.34081 21.9375 8.17041 21.9375 8C21.9375 7.82959 21.9267 7.65919 21.9051 7.4898C21.8066 6.71716 21.438 6.07348 20.9287 5.43932C20.4389 4.82948 19.7483 4.14505 18.9034 3.30761L16.6599 1.08414Z"/>
		</svg>
	</button>
</div>