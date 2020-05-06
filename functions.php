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
	
	wp_enqueue_script( 'alma-wp-gsap', get_template_directory_uri() . '/inc/animation/gsap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'alma-wp-gsap-css-rule', get_template_directory_uri() . '/inc/animation/CSSRulePlugin.min.js', array(), '20151215', true );

	wp_enqueue_script( 'alma-wp-scroll-magic', get_template_directory_uri() . '/inc/animation/ScrollMagic.min.js', array(), '20151215', true );
	wp_enqueue_script( 'alma-wp-scroll-magic-debug', get_template_directory_uri() . '/inc/animation/debug.addIndicators.min.js', array(), '20151215', true );

	wp_enqueue_script( 'alma-wp-gsap-sm', get_template_directory_uri() . '/inc/animation/animation.gsap.min.js', array(), '20151215', true );
		
	// load the horizontal-slider only when needed
	if( is_page( array ( 'home', 'homepage', 'chi-siamo', 'who-we-are', 'cosa-facciamo', 'what-we-do' ) )){
		wp_enqueue_script( 'alma-wp-horizontal-slider', get_template_directory_uri() . '/js/horizontal-slider.js', array(), '20151215', true );
	}
	
	wp_enqueue_script( 'alma-wp-animation-home', get_template_directory_uri() . '/js/animation-home.js', array(), '20151215', true );

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
			'taxonomies' => array('post_tag'),
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

/**
 * Import Gutenberg custom fonts
 */
add_theme_support( 'editor-font-sizes', array(
    array(
        'name' => __( 'Small', 'alma_wp' ),
        'size' => 14,
        'slug' => 'small'
    ),
    array(
        'name' => __( 'Regular', 'alma_wp' ),
        'size' => 16,
        'slug' => 'regular'
    ),
    array(
        'name' => __( 'Big', 'alma_wp' ),
        'size' => 20,
        'slug' => 'big'
    ),
    array(
        'name' => __( 'Bigger', 'alma_wp' ),
        'size' => 24,
        'slug' => 'bigger'
    )
) );


/*
* Function for post duplication. Dups appear as drafts. User is redirected to the edit screen
*/
function rd_duplicate_post_as_draft(){
	global $wpdb;
	if (! ( isset( $_GET['post']) || isset( $_POST['post'])  || ( isset($_REQUEST['action']) && 'rd_duplicate_post_as_draft' == $_REQUEST['action'] ) ) ) {
		wp_die('No post to duplicate has been supplied!');
	}

	/*
	* Nonce verification
	*/
	if ( !isset( $_GET['duplicate_nonce'] ) || !wp_verify_nonce( $_GET['duplicate_nonce'], basename( __FILE__ ) ) )
		return;

	/*
	* get the original post id
	*/
	$post_id = (isset($_GET['post']) ? absint( $_GET['post'] ) : absint( $_POST['post'] ) );
	/*
	* and all the original post data then
	*/
	$post = get_post( $post_id );

	/*
	* if you don't want current user to be the new post author,
	* then change next couple of lines to this: $new_post_author = $post->post_author;
	*/
	$current_user = wp_get_current_user();
	$new_post_author = $current_user->ID;

	/*
	* if post data exists, create the post duplicate
	*/
	if (isset( $post ) && $post != null) {

		/*
		* new post data array
		*/
		$args = array(
		'comment_status' => $post->comment_status,
		'ping_status'    => $post->ping_status,
		'post_author'    => $new_post_author,
		'post_content'   => $post->post_content,
		'post_excerpt'   => $post->post_excerpt,
		'post_name'      => $post->post_name,
		'post_parent'    => $post->post_parent,
		'post_password'  => $post->post_password,
		'post_status'    => 'draft',
		'post_title'     => $post->post_title,
		'post_type'      => $post->post_type,
		'to_ping'        => $post->to_ping,
		'menu_order'     => $post->menu_order
		);

		/*
		* insert the post by wp_insert_post() function
		*/
		$new_post_id = wp_insert_post( $args );

		/*
		* get all current post terms ad set them to the new post draft
		*/
		$taxonomies = get_object_taxonomies($post->post_type); // returns array of taxonomy names for post type, ex array("category", "post_tag");
		foreach ($taxonomies as $taxonomy) {
		$post_terms = wp_get_object_terms($post_id, $taxonomy, array('fields' => 'slugs'));
		wp_set_object_terms($new_post_id, $post_terms, $taxonomy, false);
		}

		/*
		* duplicate all post meta just in two SQL queries
		*/
		$post_meta_infos = $wpdb->get_results("SELECT meta_key, meta_value FROM $wpdb->postmeta WHERE post_id=$post_id");
		if (count($post_meta_infos)!=0) {
		$sql_query = "INSERT INTO $wpdb->postmeta (post_id, meta_key, meta_value) ";
		foreach ($post_meta_infos as $meta_info) {
			$meta_key = $meta_info->meta_key;
			if( $meta_key == '_wp_old_slug' ) continue;
			$meta_value = addslashes($meta_info->meta_value);
			$sql_query_sel[]= "SELECT $new_post_id, '$meta_key', '$meta_value'";
		}
		$sql_query.= implode(" UNION ALL ", $sql_query_sel);
		$wpdb->query($sql_query);
		}


		/*
		* finally, redirect to the edit post screen for the new draft
		*/
		wp_redirect( admin_url( 'post.php?action=edit&post=' . $new_post_id ) );
		exit;
	} else {
		wp_die('Post creation failed, could not find original post: ' . $post_id);
	}
}
add_action( 'admin_action_rd_duplicate_post_as_draft', 'rd_duplicate_post_as_draft' );
	   
/*
* Add the duplicate link to action list for post_row_actions
*/
function rd_duplicate_post_link( $actions, $post ) {
	if (current_user_can('edit_posts')) {
		$actions['duplicate'] = '<a href="' . wp_nonce_url('admin.php?action=rd_duplicate_post_as_draft&post=' . $post->ID, basename(__FILE__), 'duplicate_nonce' ) . '" title="Duplicate this item" rel="permalink">Duplicate</a>';
	}
	return $actions;
}
add_filter( 'post_row_actions', 'rd_duplicate_post_link', 10, 2 );


	  
// ----------
// Custom Gutenberg environment	  
// ----------
function alma_gutenberg_css(){
	add_theme_support( 'editor-styles' ); // if you don't add this line, your stylesheet won't be added
	add_editor_style( 'style-editor.css' ); // tries to include style-editor.css directly from your theme folder
}

add_action( 'after_setup_theme', 'alma_gutenberg_css' );



// Add the possibility to get a wide or full image size
add_theme_support( 'align-wide' );



// add support for SVG
function add_file_types_to_uploads($file_types){
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes );
	return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');
 
function alma_wp_get_post_category() {
	/* translators: used between list items, there is a space after the comma */
	// $categories_list = get_the_category_list( esc_html__( ', ', 'alma-wp' ) );
	$category = get_the_category()[0]->name;
	// echo ($categories_list[0]->name);

	if ( $category ) {
		/* translators: 1: list of categories. */
		printf( '<span class="cat-links has-gray-500-color">' . esc_html__( '%1$s', 'alma-wp' ) . '</span>', $category ); // WPCS: XSS OK.
	}
}

function alma_wp_get_post_category_w_link() {
	/* translators: used between list items, there is a space after the comma */
	// $categories_list = get_the_category_list( esc_html__( ', ', 'alma-wp' ) );
	$category = get_the_category()[0];
	$categoryLink = get_category_link( $category->term_id );
	// echo ($categories_list[0]->name);

	if ( $category ) {
		/* translators: 1: list of categories. */
		printf( '<span class="cat-links has-gray-500-color"><a href="' . esc_html__( '%1$s', 'alma-wp') . '">' . esc_html__( '%2$s', 'alma-wp' ) . '</a></span>', $categoryLink, $category->name ); // WPCS: XSS OK.
	}
}


function alma_wp_get_related_posts( $post_id, $related_count, $args = array() ) {
	$args = wp_parse_args( (array) $args, array(
		'orderby' => 'rand',
		'return'  => 'query', // Valid values are: 'query' (WP_Query object), 'array' (the arguments array)
	) );

	$related_args = array(
		'post_type'      => get_post_type( $post_id ),
		'posts_per_page' => $related_count,
		'post_status'    => 'publish',
		'post__not_in'   => array( $post_id ),
		'orderby'        => $args['orderby'],
		'tax_query'      => array()
	);

	$post       = get_post( $post_id );
	$taxonomies = get_object_taxonomies( $post, 'names' );

	
	foreach ( $taxonomies as $taxonomy ) {
		$terms = get_the_terms( $post_id, $taxonomy );
		if ( empty( $terms ) ) {
			continue;
		}
		$term_list                   = wp_list_pluck( $terms, 'slug' );
		$related_args['tax_query'][] = array(
			'taxonomy' => $taxonomy,
			'field'    => 'slug',
			'terms'    => $term_list
		);
		var_dump($terms[0]->slug);
	}

	if ( count( $related_args['tax_query'] ) > 1 ) {
		$related_args['tax_query']['relation'] = 'OR';
	}

	if ( $args['return'] == 'query' ) {
		return new WP_Query( $related_args );
	} else {
		return $related_args;
	}
}



	