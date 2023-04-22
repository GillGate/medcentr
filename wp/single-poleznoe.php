<?php get_header(); ?>
<?php
	$post_id = get_the_ID();
?>
	<div class="article">
		<div class="container">
			<div class="article__wrapper">
				<main class="article__body">
					<p class="caption article__date"><?php the_time("d.m.Y"); ?></p>
					<h1 class="h1 article__title"><?php the_title(); ?></h1>
					<a href="/poleznoe/" class="article__back">Полезное</a>
					<div class="text article__content">
						<?php wpautop(the_content()); ?>
					</div>
				</main>
				<aside class="aside article__aside">
					<h2 class="h3 aside__title">Вам может быть интересно</h2>
					<div class="aside__list">
					<?php 
						$list = get_posts( [
								'post_type'   => 'poleznoe',
								'orderby'     => 'date',
								'order'       => 'desc',
								'numberposts' => 6
							] );

							foreach( $list as $post ){
								setup_postdata( $post );
					?>
						<?php if($post->ID !== $post_id) { ?>
							<article class="aside__item">
								<div class="aside__itemImg">
									<?php the_post_thumbnail(); ?>
								</div>
								<div class="aside__itemContent">
									<h3 class="aside__itemTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<p class="aside__itemDate"><?php the_time("d.m.Y"); ?></p>
								</div>
							</article>
						<?php } ?>
					<?php }
						wp_reset_postdata();
					?>
					</div>
					<h2 class="h3 aside__title">Наши услуги</h2>
					<div class="aside__serviceList">
						<a href="/liczenzirovanie-mediczinskoj-deyatelnosti/">Лицензирование</a>
						<a href="/sez-na-mediczinskuyu-deyatelnost/">СЭЗ на медицинскую деятельность</a>
						<a href="/arenda-mediczinskogo-oborudovaniya/">Аренда медицинского оборудования</a>
						<a href="/audit-klinik/">Аудит клиник и медучреждений</a>
					</div>
				</aside>
			</div>
		</div>
	</div>
<?php get_footer(); ?>