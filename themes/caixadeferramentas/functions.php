<?php
/**
 * Caixa de Ferramentas functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Caixa_de_Ferramentas
 */

if ( ! function_exists( 'caixadeferramentas_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function caixadeferramentas_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Caixa de Ferramentas, use a find and replace
		 * to change 'caixadeferramentas' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'caixadeferramentas', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'caixadeferramentas' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'caixadeferramentas_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'caixadeferramentas_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function caixadeferramentas_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'caixadeferramentas_content_width', 640 );
}
add_action( 'after_setup_theme', 'caixadeferramentas_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function caixadeferramentas_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'caixadeferramentas' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'caixadeferramentas' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'caixadeferramentas_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function caixadeferramentas_scripts() {
	wp_enqueue_style( 'caixadeferramentas-style', get_stylesheet_uri() );

    wp_enqueue_script( 'font-awesome', '//use.fontawesome.com/releases/v5.0.13/js/all.js' );

    wp_enqueue_script( 'caixadeferramentas-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'caixadeferramentas-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'caixadeferramentas_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Tipos de post: sensibilização, referência, atividade

function create_post_types() {
  register_post_type( 'referencias',
    array(
      'labels' => array(
        'name' => __( 'Referências' ),
        'singular_name' => __( 'Referência' )
      ),
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_position' => 5,
      'taxonomies'  => array( 'category' ),
      'supports' => array('title', 'custom-fields'),
      'menu_icon' => "dashicons-format-quote"
    )
  );

  register_post_type( 'sensibilizacoes',
    array(
      'labels' => array(
        'name' => __( 'Sensibilizações' ),
        'singular_name' => __( 'Sensibilização' )
      ),
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_position' => 5,
      'taxonomies'  => array( 'category' ),
      'supports' => array('title', 'custom-fields'),
      'menu_icon' => 'dashicons-format-status'
    )
  );

  register_post_type( 'atividades',
    array(
      'labels' => array(
        'name' => __( 'Atividades' ),
        'singular_name' => __( 'Atividade' )
      ),
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_position' => 5,
      'taxonomies'  => array( 'category' ),
         'supports' => array('title', 'custom-fields'),
      'menu_icon' => 'dashicons-editor-textcolor'
    )
  );
  register_post_type( 'contextos',
    array(
      'labels' => array(
        'name' => __( 'Contextos' ),
        'singular_name' => __( 'Contexto' )
      ),
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_position' => 5,
      'taxonomies'  => array( 'category' ),
         'supports' => array('title', 'custom-fields'),
      'menu_icon' => 'dashicons-admin-site'
    )
  );
};

add_action( 'init', 'create_post_types' );

// Rename Posts to Aulas

function revcon_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Aulas';
    $submenu['edit.php'][5][0] = 'Aulas';
    $submenu['edit.php'][10][0] = 'Adicionar Aula';
}
function revcon_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Aulas';
    $labels->singular_name = 'Aula';
    $labels->add_new = 'Adicionar Aula';
    $labels->add_new_item = 'Adicionar Aula';
    $labels->edit_item = 'Editar Aula';
    $labels->new_item = 'Aula';
    $labels->view_item = 'Ver Aulas';
    $labels->search_items = 'Buscar Aulas';
    $labels->not_found = 'Não foram encontradas Aulas';
    $labels->not_found_in_trash = 'Não foram encontradas Aulas na Lixeira';
    $labels->all_items = 'Todas Aulas';
    $labels->menu_name = 'Aulas';
    $labels->name_admin_bar = 'Aula';
}
function revcon_change_ref_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['referencias']->labels;
    $labels->name = 'Referências';
    $labels->singular_name = 'Referência';
    $labels->add_new = 'Adicionar Referência';
    $labels->add_new_item = 'Adicionar Referência';
    $labels->edit_item = 'Editar Referência';
    $labels->new_item = 'Referência';
    $labels->view_item = 'Ver Referências';
    $labels->search_items = 'Buscar Referências';
    $labels->not_found = 'Não foram encontradas Referências';
    $labels->not_found_in_trash = 'Não foram encontradas Referências na Lixeira';
    $labels->all_items = 'Todas Referências';
    $labels->menu_name = 'Referências';
    $labels->name_admin_bar = 'Referência';
}
function revcon_change_sens_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['sensibilizacoes']->labels;
    $labels->name = 'Sensibilizações';
    $labels->singular_name = 'Sensibilização';
    $labels->add_new = 'Adicionar Sensibilização';
    $labels->add_new_item = 'Adicionar Sensibilização';
    $labels->edit_item = 'Editar Sensibilização';
    $labels->new_item = 'Sensibilização';
    $labels->view_item = 'Ver Sensibilizações';
    $labels->search_items = 'Buscar Sensibilizações';
    $labels->not_found = 'Não foram encontradas Sensibilizações';
    $labels->not_found_in_trash = 'Não foram encontradas Sensibilizações na Lixeira';
    $labels->all_items = 'Todas Sensibilizações';
    $labels->menu_name = 'Sensibilizações';
    $labels->name_admin_bar = 'Sensibilização';
}
function revcon_change_ativ_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['atividades']->labels;
    $labels->name = 'Atividades';
    $labels->singular_name = 'Atividade';
    $labels->add_new = 'Adicionar Atividade';
    $labels->add_new_item = 'Adicionar Atividade';
    $labels->edit_item = 'Editar Atividade';
    $labels->new_item = 'Atividade';
    $labels->view_item = 'Ver Atividades';
    $labels->search_items = 'Buscar Atividades';
    $labels->not_found = 'Não foram encontradas Atividades';
    $labels->not_found_in_trash = 'Não foram encontradas Atividades na Lixeira';
    $labels->all_items = 'Todas Atividades';
    $labels->menu_name = 'Atividades';
    $labels->name_admin_bar = 'Atividade';
}
function revcon_change_cont_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['contextos']->labels;
    $labels->name = 'Contextos';
    $labels->singular_name = 'Contexto';
    $labels->add_new = 'Adicionar Contexto';
    $labels->add_new_item = 'Adicionar Contexto';
    $labels->edit_item = 'Editar Contexto';
    $labels->new_item = 'Contexto';
    $labels->view_item = 'Ver Contextos';
    $labels->search_items = 'Buscar Contextos';
    $labels->not_found = 'Não foram encontrados Contextos';
    $labels->not_found_in_trash = 'Não foram encontrados Contextos na Lixeira';
    $labels->all_items = 'Todas Contextos';
    $labels->menu_name = 'Contextos';
    $labels->name_admin_bar = 'Contexto';
}
add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );
add_action( 'init', 'revcon_change_ref_object' );
add_action( 'init', 'revcon_change_sens_object' );
add_action( 'init', 'revcon_change_ativ_object' );
add_action( 'init', 'revcon_change_cont_object' );

// Change REST API response

function ag_filter_post_json($response, $post, $context) {

    $tags = wp_get_post_tags($post->ID);
    $post_categories = wp_get_post_categories($post->ID);
    $categories = get_categories();

    foreach ($tags as $tag) {
        $response->data['filter']['tag'][] = $tag->name;
    }
    foreach ($post_categories as $cat) {
    		$category = get_category( $cat );
    		$slug = str_replace("-","_",$category->slug);
        $response->data['filter']['cat'][] = $category->name;
    }
    if (get_post_type($post->ID) == 'post') {
        $response->data['tipo'] = 'Aula';
    } else if (get_post_type($post->ID) == 'sensibilizacoes') {
        $response->data['tipo'] = 'Sensibilização';
    } else if (get_post_type($post->ID) == 'atividades') {
        $response->data['tipo'] = 'Atividade';
    } else if (get_post_type($post->ID) == 'contextos') {
        $response->data['tipo'] = 'Contexto';
    } else if (get_post_type($post->ID) == 'referencias') {
        $response->data['tipo'] = 'Referência';
    } else {
        $response->data['tipo'] = 'Referência';
    }

    return $response;
}

add_filter( 'rest_prepare_post', 'ag_filter_post_json', 10, 3 );
add_filter( 'rest_prepare_referencias', 'ag_filter_post_json', 10, 3 );
add_filter( 'rest_prepare_atividades', 'ag_filter_post_json', 10, 3 );
add_filter( 'rest_prepare_sensibilizacoes', 'ag_filter_post_json', 10, 3 );
add_filter( 'rest_prepare_contextos', 'ag_filter_post_json', 10, 3 );

function ag_filter_category_json($response, $post, $context) {

    if ($response->data['parent'] != 0) {
        $response->data['pai'] = get_the_category_by_ID($response->data['parent']);
    }
    
    return $response;
}
add_filter( 'rest_prepare_category', 'ag_filter_category_json', 10, 3 );

