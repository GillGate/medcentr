<?php
/*
	Template Name: Кейсы
*/
?>
<?php get_header(); ?>
<?php get_template_part('include/popup/video'); ?>
<main class="case">
	<div class="container">
		<h1 class="h1 case__mainTitle">Кейсы</h1>
		<div class="case__list">
			<?php foreach(getCases() as $case) { ?>
				<article class="case__item">
					<div class="case__head">
						<div class="case__img">
							<img src="<?php echo $case['case-preview']; ?>" width="640" height="300" loading="lazy" alt="">
						</div>
						<div class="case__overlay">
							<?php if($case['case-logo']) { ?>
								<div class="case__logo">
									<img src="<?php echo $case['case-logo']; ?>" width="120" height="40" loading="lazy" alt="">
								</div>
							<?php } ?>
							<?php if($case['case-caption'] !== '') { ?>
								<p class="case__caption"><?php echo $case['case-caption']; ?></p>
							<?php } ?>
							<button class="case__play" data-video="<?php echo $case['case-video']; ?>">
								<span class="vh">Открыть</span>
								<img src="<?php echo IMG_DIR ;?>/icon-play.svg" width="44" height="44" alt="">
							</button>
						</div>
					</div>
					<div class="case__body">
						<h2 class="h2 case__title">Открытие клиники пластической хирургии и косметологии «Mont Blanc»</h2>
						<p class="case__text">28 января 2020 года состоялось торжественное открытие Госпиталя Мира, многопрофильного медицинского центра.</p>
						<?php if($case['case-link'] !== '') { ?>
							<a href="<?php echo $case['case-link']; ?>" target="_blank" rel="noopener" class="case__link">Сайт клиники</a>
						<?php } ?>
					</div>
				</article>
			<?php } ?>
		</div>
	</div>
</main>
<?php get_footer(); ?>