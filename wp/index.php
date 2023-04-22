<?php get_header(); ?>
<div class="article">
	<div class="container">
		<h1 class="article__title"><?php the_title(); ?></h1>
		<div class="text">
			<?php the_content(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>