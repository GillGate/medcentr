<?php get_header(); ?>
<main class="case blog">
	<div class="container">
		<h1 class="h1 case__mainTitle">Полезное</h1>
		<div class="case__list">
			<?php
				global $post;

				$page = get_query_var('paged');

				$offset = 0;
				$post_count = 12;

				if($page !== 0) {
					$offset = $page * $post_count  - $post_count;
				}

				$catalog = get_posts( [
					'post_type'   => 'poleznoe',
					'orderby'     => 'date',
					'order'       => 'desc',
					'posts_per_page' => $post_count,
					'offset'		 => $offset
				] );

				foreach( $catalog as $post ){
					setup_postdata( $post );
					$article = get_fields(); 
			?>
				<article class="case__item">
						<div class="case__head">
							<div class="case__img">
								<?php the_post_thumbnail(); ?>
							</div>
							<div class="case__overlay">
								<p class="case__caption">
									Опубликовано: <?php the_time("d.m.Y"); ?>
								</p>
							</div>
						</div>
						<div class="case__body">
							<h2 class="h2 case__title"><?php the_title(); ?></h2>
							<div class="case__text">
								<?php the_excerpt(); ?>
							</div>
								<a href="<?php the_permalink(); ?>" target="_blank" rel="noopener" class="case__link blog__link">Читать далее</a>
						</div>
					</article>
				<?php }
				wp_reset_postdata();
			?>
		</div>
		<div class="blog__pagination">
			<?php the_posts_pagination([
				'prev_text'    => __('Предыдущая'),
				'next_text'    => __('Следующая'),
			]); ?>
		</div>
	</div>
</main>
<?php get_footer(); ?>