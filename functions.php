<?php


function my_enqueue_scripts() {
	wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-2.1.4.min.js');
	wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

function style_theme(){
	wp_enqueue_style( 'style', get_stylesheet_uri());
	wp_enqueue_style( 'media.css', get_template_directory_uri() . '/assets/media.css');
	wp_enqueue_script( 'jquery.vide.min.js', get_template_directory_uri() .  '/js/jquery.vide.min.js');
	wp_enqueue_style( 'font-awesome.css', get_template_directory_uri() . '/assets/font-awesome.css');
	wp_enqueue_style( 'magnific-popup.css', get_template_directory_uri() . '/assets/magnific-popup.css');
	wp_enqueue_style( 'slick.css', get_template_directory_uri() . '/assets/slick.css');
	wp_enqueue_style( 'slick-theme.css', get_template_directory_uri() . '/assets/slick-theme.css');
	wp_enqueue_style( 'school.css', get_template_directory_uri() . '/pages/school.css');
	wp_enqueue_style( 'gallery.css', get_template_directory_uri() . '/pages/gallery.css');
	wp_enqueue_style( 'contact-info.css', get_template_directory_uri() . '/pages/contact-info.css');
	wp_enqueue_style( 'transparency.css', get_template_directory_uri() . '/pages/transparency.css');
	wp_enqueue_style( 'kinder.css', get_template_directory_uri() . '/pages/kinder.css');
	wp_enqueue_style( 'news.css', get_template_directory_uri() . '/pages/news.css');
	wp_enqueue_style( 'single.css', get_template_directory_uri() . '/pages/single.css');
}
add_action('wp_enqueue_scripts', 'style_theme');

function scripts_theme(){
	wp_enqueue_script( 'gallery.js', get_template_directory_uri() .  '/js/gallery.js');
	wp_enqueue_script( 'FontAwesome.js', get_template_directory_uri() .  '/js/FontAwesome.js');
	wp_enqueue_script( 'jquery.magnific-popup.min.js', get_template_directory_uri() .  '/js/jquery.magnific-popup.min.js');
	wp_enqueue_script( 'mobile-menu.js', get_template_directory_uri() .  '/js/mobile-menu.js');
	wp_enqueue_script( 'pages.js', get_template_directory_uri() .  '/js/pages.js');
	wp_enqueue_script( 'button-down-top.js', get_template_directory_uri() .  '/js/button-down-top.js');
	wp_enqueue_script( 'slick.min.js', get_template_directory_uri() .  '/js/slick.min.js');
}
add_action('wp_enqueue_scripts', 'scripts_theme');


function register_my_menus() {
	register_nav_menus(
	  array(
		'primary' => __( 'primary' ),
		'primary-2' => __( 'primary-2' ),
		'mobile' => __('mobile'),
	  )
	);
  }
	add_action( 'init', 'register_my_menus' );
	add_image_size( 'news_thumb_extra_small', 280, 280, 'true' );
	add_image_size( 'news_thumb', 320, 320, 'true' );
	add_image_size( 'news_thumb_tablet', 500, 400, 'true' );
	add_theme_support( 'post-thumbnails', array( 'post', 'team' ) );


add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){

	return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
}

the_posts_pagination( array(
	'end_size' => 2,
) ); 

	add_filter( 'excerpt_more', 'new_excerpt_more' );
    function new_excerpt_more( $more ){
	global $post;
	return '...';
}

add_filter( 'excerpt_length', function(){
	return 28;
   } );
	function new_submenu_class($menu) {    
    $menu = preg_replace('/ class="sub-menu"/','/ class="m-bar" /',$menu);        
    return $menu;      
}

add_filter('wp_nav_menu','new_submenu_class'); 



function add_menu_atts( $atts, $item, $args ) {
	$atts['class'] = 'bar';
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_atts', 10, 3 );

add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type('team', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Персонал', // основное название для типа записи
			'singular_name'      => 'Персонал', // название для одной записи этого типа
			'add_new'            => 'Додати працівника', // для добавления новой записи
			'add_new_item'       => 'Додати працівників', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редагування', // для редактирования типа записи
			'new_item'           => 'Новий працівник', // текст новой записи
			'view_item'          => 'Дивитися', // для просмотра записи этого типа.
			'search_items'       => 'Шукати працівників', // для поиска по этим типам записи
			'not_found'          => 'Не знайдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не знайдено в корзині', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Персонал', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true, // зависит от public
		'show_admin_column'   => true,
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-businessman', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title','editor', 'thumbnail', 'custom-fields'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array('categories_workers'),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}

// // хук для регистрации
// add_action( 'init', 'create_taxonomy' );
// function create_taxonomy(){
// 	register_taxonomy('workers', array('team'), array(
// 		'label'                 => '', // определяется параметром $labels->name
// 		'labels'                => array(
// 			'name'              => 'Категорії Працівнивників',
// 			'singular_name'     => 'Категорія Працівнивника',
// 			'search_items'      => 'Шукати Категорію',
// 			'all_items'         => 'Всі Категорії',
// 			'view_item '        => 'Дивитися Категорію',
// 			'parent_item'       => 'Parent Категорії',
// 			'parent_item_colon' => 'Parent Категорії:',
// 			'edit_item'         => 'Змінити Категорію',
// 			'update_item'       => 'Обновити Категорію',
// 			'add_new_item'      => 'Додати Нову Категорію',
// 			'new_item_name'     => 'Нове Ім"я для категорії',
// 			'menu_name'         => 'Категорії Працівнивників',
// 		),
// 		'description'           => '', // описание таксономии
// 		'public'                => true,
// 		'publicly_queryable'    => null, // равен аргументу public
// 		'show_in_nav_menus'     => true, // равен аргументу public
// 		'show_ui'               => true, // равен аргументу public
// 		'show_in_menu'          => true, // равен аргументу show_ui
// 		'show_tagcloud'         => true, // равен аргументу show_ui
// 		'show_in_rest'          => null, // добавить в REST API
// 		'rest_base'             => $workers, // $taxonomy
// 		'hierarchical'          => true,
// 		//'update_count_callback' => '_update_post_term_count',
// 		'rewrite'               => true,
// 		//'query_var'             => $taxonomy, // название параметра запроса
// 		'capabilities'          => array('manage_categories', 'edit_posts'),
// 		'meta_box_cb'           => 'post_categories_meta_box', // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
// 		'show_admin_column'     => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
// 		'_builtin'              => false,
// 		'show_in_quick_edit'    => true, // по умолчанию значение show_ui
// 	) );
// }

// add_action( 'init', 'post_tag_for_pages' );
// function post_tag_for_pages(){
// 	register_taxonomy_for_object_type( 'workers', 'team');
// }

// show_admin_bar(false);





