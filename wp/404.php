<?php get_header(); ?>
<section class="notFound">
	<div class="container notFound__wrapper">
		<div class="notFound__img notFound__img--desktop">
			<img src="<?php echo IMG_DIR ;?>/404.svg" width="478" height="428" loading="lazy" alt="">
		</div>
		<div class="notFound__body">
			<span class="h1 notFound__error">404</span>
			<h1 class="h2 notFound__title">Страница не существует</h1>
			<div class="notFound__img notFound__img--mobile">
				<img src="<?php echo IMG_DIR ;?>/404.svg" width="478" height="428" loading="lazy" alt="">
			</div>
			<p class="notFound__text">Возможно она была удалена, или перенесена в другое место. Вернитесь на главную страницу и попробуйте найти её вручную</p>
			<a href="/" class="button notFound__button">Вернуться на главную</a>
		</div>
	</div>
</section>
<?php get_footer(); ?>