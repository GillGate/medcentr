<?php get_header(); ?>
<?php $order = $_GET['sort'] ?? 'desc'; ?>
	<section class="catalog">
		<div class="container">
			<h1 class="h1 catalog__title">
				Каталог
			</h1>
			<form class="catalog__filter">
				<select name="sort" class="catalog__select">
					<option 
						<?php if($order === 'desc') { ?>
							selected
						<?php } ?>
						value="desc">По убыванию</option>
						<option 
						<?php if($order === 'asc') { ?>
							selected
						<?php } ?>
						value="asc">По возрастанию</option>
				</select>
			</form>
			<h2 class="vh">Список товаров</h2>
			<div class="catalog__wrapper">
				<div class="catalog__list">
					<?php
						global $post;

						$page = get_query_var('paged');

						$offset = 0;
						$post_count = 12;

						if($page !== 0) {
							$offset = $page * $post_count  - $post_count;
						}

						$catalog = get_posts( [
							'post_type'   => 'product',
							'orderby'     => 'date',
							'order'       => "$order",
							'posts_per_page' => $post_count,
							'offset'		 => $offset
						] );

						foreach( $catalog as $post ){
							setup_postdata( $post );
							$product = get_fields(); 
					?>
						<div class="product catalog__item <?php if($product['product-full-price'] !== '') echo 'product--discount' ?>">
							<div class="product__head">
								<p class="product__caption"><?php echo $product['product-model']; ?></p>
								<h3 class="h3 product__title"><?php echo the_title(); ?></h3>
							</div>
							<div class="product__img">
								<?php echo the_post_thumbnail(); ?>
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
								<a href="<?php the_permalink(); ?>" class="button product__button">Подробнее</a>
							</div>
						</div>
					<?php } wp_reset_postdata(); ?>
				</div>
				<div class="catalog__pagination">
					<?php the_posts_pagination([
						'prev_text'    => __('Предыдущая'),
						'next_text'    => __('Следующая'),
					]); ?>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>