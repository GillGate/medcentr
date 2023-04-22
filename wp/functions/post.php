<?php 
	register_post_type('product', [
		'label'  => null,
		'labels' => [
			'name'               => 'Товары', // основное название для типа записи
			'singular_name'      => 'Товар', // название для одной записи этого типа
			'add_new'            => 'Добавить новый товар', // для добавления новой записи
			'add_new_item'       => 'Добавить новый товар', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактировать товар', // для редактирования типа записи
			'new_item'           => '', // текст новой записи
			'view_item'          => 'Посмотреть список', // для просмотра записи этого типа.
			'search_items'       => 'Найти', // для поиска по этим типам записи
			'not_found'          => 'Товары не найдены', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => '', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Товары', // название меню
		],
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_icon'           => 'dashicons-products',
		'hierarchical'        => false,
		'has_archive'		  => true,
		'supports'            => [ 'title', 'editor', 'thumbnail']
	] );

	register_post_type('poleznoe', [
		'label'  => null,
		'labels' => [
			'name'               => 'Полезное', // основное название для типа записи
			'singular_name'      => 'Блог', // название для одной записи этого типа
			'add_new'            => 'Добавить новый пост', // для добавления новой записи
			'add_new_item'       => 'Добавить новый пост', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактировать пост', // для редактирования типа записи
			'new_item'           => '', // текст новой записи
			'view_item'          => 'Посмотреть список', // для просмотра записи этого типа.
			'search_items'       => 'Найти', // для поиска по этим типам записи
			'not_found'          => 'Посты не найдены', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => '', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Блог', // название меню
		],
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_icon'           => 'dashicons-welcome-write-blog',
		'hierarchical'        => false,
		'has_archive'		  => true,
		'supports'            => [ 'title', 'editor', 'thumbnail']
	] );

	register_post_type('partners', [
		'label'  => null,
		'labels' => [
			'name'               => 'Партнёры', // основное название для типа записи
			'singular_name'      => 'Партнёры', // название для одной записи этого типа
			'add_new'            => 'Добавить нового партнёра', // для добавления новой записи
			'add_new_item'       => 'Добавить нового партнёра', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактировать партнёра', // для редактирования типа записи
			'new_item'           => '', // текст новой записи
			'view_item'          => 'Посмотреть список партнёров', // для просмотра записи этого типа.
			'search_items'       => 'Найти', // для поиска по этим типам записи
			'not_found'          => 'Партнёров не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => '', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Партнёры', // название меню
		],
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_icon'           => 'dashicons-businessman',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'thumbnail']
	] );

	register_post_type('reviews', [
		'label'  => null,
		'labels' => [
			'name'               => 'Отзывы', // основное название для типа записи
			'singular_name'      => 'Отзывы', // название для одной записи этого типа
			'add_new'            => 'Добавить новый отзыв', // для добавления новой записи
			'add_new_item'       => 'Добавить новый отзыв', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактировать отзыв', // для редактирования типа записи
			'new_item'           => '', // текст новой записи
			'view_item'          => 'Посмотреть список отзывов', // для просмотра записи этого типа.
			'search_items'       => 'Найти', // для поиска по этим типам записи
			'not_found'          => 'Отзывы не найдены', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => '', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Отзывы', // название меню
		],
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_icon'           => 'dashicons-format-status',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail']
	] );

	register_post_type('team', [
		'label'  => null,
		'labels' => [
			'name'               => 'Команда', // основное название для типа записи
			'singular_name'      => 'Команда', // название для одной записи этого типа
			'add_new'            => 'Добавить нового сотрудника', // для добавления новой записи
			'add_new_item'       => 'Добавить нового сотрудника', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактировать сотрудника', // для редактирования типа записи
			'new_item'           => '', // текст новой записи
			'view_item'          => 'Посмотреть список', // для просмотра записи этого типа.
			'search_items'       => 'Найти', // для поиска по этим типам записи
			'not_found'          => 'Сотрудники не найдены', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => '', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Команда', // название меню
		],
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_icon'           => 'dashicons-groups',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'thumbnail']
	] );

	register_post_type('cases', [
		'label'  => null,
		'labels' => [
			'name'               => 'Кейсы', // основное название для типа записи
			'singular_name'      => 'Кейсы', // название для одной записи этого типа
			'add_new'            => 'Добавить новый кейс', // для добавления новой записи
			'add_new_item'       => 'Добавить новый кейс', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактировать кейс', // для редактирования типа записи
			'new_item'           => '', // текст новой записи
			'view_item'          => 'Посмотреть список кейсов', // для просмотра записи этого типа.
			'search_items'       => 'Найти', // для поиска по этим типам записи
			'not_found'          => 'Кейсов не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => '', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Кейсы', // название меню
		],
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_icon'           => 'dashicons-format-video',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor']
	] );

	register_post_type('slider-arenda', [
		'label'  => null,
		'labels' => [
			'name'               => 'Преимущества аренды', // основное название для типа записи
			'singular_name'      => 'Преимущества аренды', // название для одной записи этого типа
			'add_new'            => 'Добавить новое преимущество', // для добавления новой записи
			'add_new_item'       => 'Добавить новое преимущество', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактировать преимущество', // для редактирования типа записи
			'new_item'           => '', // текст новой записи
			'view_item'          => 'Посмотреть список', // для просмотра записи этого типа.
			'search_items'       => 'Найти', // для поиска по этим типам записи
			'not_found'          => 'Преимущества не найдены', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => '', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Преимущества аренды', // название меню
		],
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_icon'           => 'dashicons-format-gallery',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'thumbnail']
	] );

	register_post_type('slider-sez', [
		'label'  => null,
		'labels' => [
			'name'               => 'Виды СЭЗ', // основное название для типа записи
			'singular_name'      => 'Вди СЭЗ', // название для одной записи этого типа
			'add_new'            => 'Добавить новый вид', // для добавления новой записи
			'add_new_item'       => 'Добавить новый вид', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактировать вид', // для редактирования типа записи
			'new_item'           => '', // текст новой записи
			'view_item'          => 'Посмотреть список', // для просмотра записи этого типа.
			'search_items'       => 'Найти', // для поиска по этим типам записи
			'not_found'          => 'Виды не найдены', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => '', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Виды СЭЗ', // название меню
		],
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_icon'           => 'dashicons-format-gallery',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail']
	] );

	register_post_type('slider-remont', [
		'label'  => null,
		'labels' => [
			'name'               => 'Преимущества проектирования', // основное название для типа записи
			'singular_name'      => 'Преимущество проектирования', // название для одной записи этого типа
			'add_new'            => 'Добавить новое преимущество', // для добавления новой записи
			'add_new_item'       => 'Добавить новое преимущество', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактировать преимущество', // для редактирования типа записи
			'new_item'           => '', // текст новой записи
			'view_item'          => 'Посмотреть список', // для просмотра записи этого типа.
			'search_items'       => 'Найти', // для поиска по этим типам записи
			'not_found'          => 'Преимущества не найдены', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => '', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Преимущества проектирования', // название меню
		],
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_icon'           => 'dashicons-format-gallery',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail']
	] );

	function getPartners() {
		$args = [
			'post_type'   => 'partners',
			'orderby'     => 'date',
			'order'       => 'ASC',
			'numberposts' => -1,
		];

		$partners = [];

		foreach (get_posts($args) as $post) {
			$partner = get_fields($post->ID);
			$partner['img'] = get_the_post_thumbnail($post->ID);

			$partners[] = $partner;
		}

		return $partners;
	}

	function getReviews() {
		$args = [
			'post_type'   => 'reviews',
			'orderby'     => 'date',
			'order'       => 'ASC',
			'numberposts' => -1,
		];

		$reviews = [];

		foreach (get_posts($args) as $post) {
			$review = get_fields($post->ID);

			$review['name'] = $post->post_title;
			$review['text'] = $post->post_content;
			$review['img'] = get_the_post_thumbnail($post->ID);

			$reviews[] = $review;
		}

		return $reviews;
	}

	function getTeam() {
		$args = [
			'post_type'   => 'team',
			'orderby'     => 'date',
			'order'       => 'ASC',
			'numberposts' => -1,
		];

		$team = [];

		foreach (get_posts($args) as $post) {
			$member = get_fields($post->ID);

			$member['name'] = $post->post_title;
			$member['img'] = get_the_post_thumbnail($post->ID);

			$team[] = $member;
		}

		return $team;
	}

	function getCases() {
		$args = [
			'post_type'   => 'cases',
			'orderby'     => 'date',
			'order'       => 'ASC',
			'numberposts' => -1,
		];

		$cases = [];

		foreach (get_posts($args) as $post) {
			$case = get_fields($post->ID);

			$case['title'] = $post->post_title;
			$case['text'] = $post->post_content;

			$cases[] = $case;
		}

		return $cases;
	}

	function getAdvantagesArenda() {
		$args = [
			'post_type'   => 'slider-arenda',
			'orderby'     => 'date',
			'order'       => 'ASC',
			'numberposts' => -1,
		];

		$slider = [];

		foreach (get_posts($args) as $post) {

			$adv['title'] = $post->post_title;
			$adv['img'] = get_the_post_thumbnail($post->ID);

			$slider[] = $adv;
		}

		return $slider;
	}

	function getTypesSez() {
		$args = [
			'post_type'   => 'slider-sez',
			'orderby'     => 'date',
			'order'       => 'ASC',
			'numberposts' => -1,
		];

		$types = [];

		foreach (get_posts($args) as $post) {

			$type['title'] = $post->post_title;
			$type['text'] = $post->post_content;
			$type['img'] = get_the_post_thumbnail($post->ID);

			$types[] = $type;
		}

		return $types;
	}

	function getAdvantagesRemont() {
		$args = [
			'post_type'   => 'slider-remont',
			'orderby'     => 'date',
			'order'       => 'ASC',
			'numberposts' => -1,
		];

		$slider = [];

		foreach (get_posts($args) as $post) {

			$adv['title'] = $post->post_title;
			$adv['text'] = $post->post_content;
			$adv['img'] = get_the_post_thumbnail($post->ID);

			$slider[] = $adv;
		}

		return $slider;
	}

	function getCatalog() {
		$args = [
			'post_type'   => 'product',
			'orderby'     => 'date',
			'order'       => 'ASC',
			'numberposts' => 8,
		];

		$catalog = [];

		foreach (get_posts($args) as $post) {
			$product = get_fields($post->ID);

			$product['id'] = $post->ID;
			$product['title'] = $post->post_title;
			$product['description'] = $post->post_content;
			$product['img'] = get_the_post_thumbnail($post->ID);
			$product['link'] = get_post_permalink($post->ID);

			$catalog[] = $product;
		}

		return $catalog;
	}

	function getBlogItems() {
		$args = [
			'post_type'   => 'poleznoe',
			'orderby'     => 'date',
			'order'       => 'ASC',
			'numberposts' => 5,
		];

		$list = [];

		foreach (get_posts($args) as $post) {
			$item['title'] = $post->post_title;
			$item['date'] = $post->post_date;
			$item['img'] = get_the_post_thumbnail($post->ID);

			$list[] = $product;
		}

		return $list;
	}