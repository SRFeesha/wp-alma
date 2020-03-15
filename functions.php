<?php
/**
 * Alma Digital functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Alma_Digital
 */

if ( ! function_exists( 'alma_wp_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function alma_wp_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Alma Digital, use a find and replace
		 * to change 'alma-wp' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'alma-wp', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'alma-wp' ),
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
		add_theme_support( 'custom-background', apply_filters( 'alma_wp_custom_background_args', array(
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
add_action( 'after_setup_theme', 'alma_wp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function alma_wp_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'alma_wp_content_width', 640 );
}
add_action( 'after_setup_theme', 'alma_wp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function alma_wp_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'alma-wp' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'alma-wp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'alma_wp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function alma_wp_scripts() {
	wp_enqueue_style( 'add_google_fonts', 'https://fonts.googleapis.com/css?family=Fira+Sans:400,400i,600,800&display=swap', false );

	wp_enqueue_style( 'alma-wp-style', get_stylesheet_uri() );

	wp_enqueue_script( 'alma-wp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'alma-wp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'alma_wp_scripts' );

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

/**
 * Register Alma Footer(s)
 */
function register_footer_menus() {
	register_nav_menus(
		array(
		'footer-left' => __( 'Footer Left' ),
		'footer-center' => __( 'Footer Center' ),
		'footer-right' => __( 'Footer Right' ),
		'footer-down' => __( 'Footer Down' )
		)
	);
}
add_action( 'init', 'register_footer_menus' );


/**
 *  Custom Post Type Start 
 * */
function cw_post_type() {
	register_post_type( 'case_study',
		// WordPress CPT Options Start
		array(
			'labels' => array(
				'name' => __('Portfolio'),
				'singular_name' => __('Case study'),
				'menu_name' => _x('Portfolio', 'admin menu'),
				'name_admin_bar' => _x('Portfolio', 'admin bar'),
				'add_new' => _x('Aggiungi case study', 'add new'),
				'add_new_item' => __('Aggiungi nuovo Case Study'),
				'new_item' => __('Nuovo case study'),
				'edit_item' => __('Modifica case study'),
				'view_item' => __('Vedi tutti i case studies'),
				'all_items' => __('Tutti i case study'),
				'search_items' => __('Cerca tra i case studies'),
				'not_found' => __('Nessun case study trovat')
			),
			'has_archive' => true,
			'public' => true,
			'rewrite' => array('slug' => 'portfolio'),
			'show_in_rest' => true,
			'query_var' => true,
			'hierarchical' => false,
			'supports' => array(
				'title', 
				'editor', 
				'author', 
				'thumbnail', 
				'excerpt', 
				'custom-fields', 
				'revisions', 
				'post-formats'
			)
		)
	);
}
     
add_action( 'init', 'cw_post_type' );


/** 
* Import GUTENBERG custom colors 
*/
function alma_color_palette_setup() {
	// Disable Custom Colors
	add_theme_support( 'disable-custom-colors' );
  
	// Editor Color Palette
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Blue 050', 'alma_wp' ),
			'slug'  => 'blue050',
			'color'	=> '#DCEEFB',
		),
		array(
			'name'  => __( 'Blue 100', 'alma_wp' ),
			'slug'  => 'blue100',
			'color'	=> '#B6E0FE',
		),
		array(
			'name'  => __( 'Blue 200', 'alma_wp' ),
			'slug'  => 'blue200',
			'color'	=> '#84C5F4',
		),
		array(
			'name'  => __( 'Blue 300', 'alma_wp' ),
			'slug'  => 'blue300',
			'color'	=> '#62B0E8',
		),
		array(
			'name'  => __( 'Blue 400', 'alma_wp' ),
			'slug'  => 'blue400',
			'color'	=> '#4098D7',
		),
		array(
			'name'  => __( 'Blue 500', 'alma_wp' ),
			'slug'  => 'blue500',
			'color'	=> '#2680C2',
		),
		array(
			'name'  => __( 'Blue 600', 'alma_wp' ),
			'slug'  => 'blue600',
			'color'	=> '#186FAF',
		),
		array(
			'name'  => __( 'Blue 700', 'alma_wp' ),
			'slug'  => 'blue700',
			'color'	=> '#0F609B',
		),
		array(
			'name'  => __( 'Blue 800', 'alma_wp' ),
			'slug'  => 'blue800',
			'color'	=> '#0A558C',
		),
		array(
			'name'  => __( 'Blue 900', 'alma_wp' ),
			'slug'  => 'blue900',
			'color'	=> '#003E6B',
		),

		array(
			'name'  => __( 'Error', 'alma_wp' ),
			'slug'  => 'error',
			'color'	=> '#911111',
		),
		array(
			'name'  => __( 'Warning', 'alma_wp' ),
			'slug'  => 'warning',
			'color'	=> '#CB6E17',
		),

		array(
			'name'  => __( 'Gray 050', 'alma_wp' ),
			'slug'  => 'gray050',
			'color'	=> '#F0F4F8',
		),
		array(
			'name'  => __( 'Gray 100', 'alma_wp' ),
			'slug'  => 'gray100',
			'color'	=> '#D9E2EC',
		),
		array(
			'name'  => __( 'Gray 200', 'alma_wp' ),
			'slug'  => 'gray200',
			'color'	=> '#BCCCDC',
		),
		array(
			'name'  => __( 'Gray 300', 'alma_wp' ),
			'slug'  => 'gray300',
			'color'	=> '#9FB3C8',
		),
		array(
			'name'  => __( 'Gray 400', 'alma_wp' ),
			'slug'  => 'gray400',
			'color'	=> '#829AB1',
		),
		array(
			'name'  => __( 'Gray 500', 'alma_wp' ),
			'slug'  => 'gray500',
			'color'	=> '#627D98',
		),
		array(
			'name'  => __( 'Gray 600', 'alma_wp' ),
			'slug'  => 'gray600',
			'color'	=> '#486581',
		),
		array(
			'name'  => __( 'Gray 700', 'alma_wp' ),
			'slug'  => 'gray700',
			'color'	=> '#334E68',
		),
		array(
			'name'  => __( 'Gray 800', 'alma_wp' ),
			'slug'  => 'gray800',
			'color'	=> '#243B53',
		),
		array(
			'name'  => __( 'Gray 900', 'alma_wp' ),
			'slug'  => 'gray900',
			'color'	=> '#102A43',
		),
	) );
}
add_action( 'after_setup_theme', 'alma_color_palette_setup' );