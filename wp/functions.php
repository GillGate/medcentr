<?php 
	
	define('THEME_ROOT', get_template_directory_uri());
	define('CSS_DIR', THEME_ROOT . '/css');
	define('JS_DIR', THEME_ROOT . '/js');
	define('IMG_DIR', THEME_ROOT . '/img');

	add_action('wp_enqueue_scripts', function() {
		wp_enqueue_style('main-style', CSS_DIR . '/style.min.css');
		wp_enqueue_style('dev-style', CSS_DIR . '/dev.css');
		wp_enqueue_style('theme-style', get_stylesheet_uri());

		wp_deregister_script('jquery');
		wp_enqueue_script('all', JS_DIR . '/all.js', [], null, true);
		wp_enqueue_script('dev', JS_DIR . '/dev.js', [], null, true);
	});

	add_filter('show_admin_bar', '__return_false');

	add_action('after_setup_theme', function() {
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
	});

	function true_remove_default_image_sizes( $sizes ) {
		unset( $sizes['thumbnail']); // отключаем миниатюры
		unset( $sizes['medium']); // отключаем средний размер
		unset( $sizes['large']); // отключаем крупный размер
		return $sizes;
	}
	 
	add_filter('intermediate_image_sizes_advanced', 'true_remove_default_image_sizes');

	add_action( 'init', 'register_post_types' );
	function register_post_types(){
		include_once('functions/post.php');
	}