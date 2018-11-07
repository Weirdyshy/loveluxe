<?php
/**
 * itheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package itheme
 */

if ( ! function_exists( 'itheme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function itheme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on itheme, use a find and replace
		 * to change 'itheme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'itheme', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'itheme' ),
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
		add_theme_support( 'custom-background', apply_filters( 'itheme_custom_background_args', array(
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
add_action( 'after_setup_theme', 'itheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function itheme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'itheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'itheme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function itheme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'itheme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'itheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );



	register_sidebar( array(
    'name'         => __( 'Right Hand Sidebar' ),
    'id'           => 'right-sidebar',
    'description'  => __( 'Widgets in this area will be shown on the right-hand side.' ),
    'before_title' => '<h1>',
    'after_title'  => '</h1>',
) );



}
add_action( 'widgets_init', 'itheme_widgets_init' );








/**
 * Enqueue scripts and styles.
 */
function itheme_scripts() {

	// CSS 
	wp_enqueue_style( 'itheme-style', get_stylesheet_uri()   );

	

	// Bootstrap CSS
	wp_register_style('bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
	wp_enqueue_style('bootstrap-css');


	wp_enqueue_style( 'itheme-style-custom' , get_template_directory_uri() . '/custom.css' , array(), rand(111,9999), 'all');
	wp_enqueue_script( 'itheme-navigation', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), '20151215', true );
	// JS


	// ARCHIVE PRODUCT 
	// wp_enqueue_style('archive-product', get_template_directory_uri() .'woocommerce/archive-product.php');
	 wp_enqueue_style('archive-product');

	 // single product 
	 wp_enqueue_style('content-single-product');
	 wp_register_script('content-single-product.js', get_template_directory_uri() . '/js/woocommerce/content-single-product.js');
	 wp_enqueue_script('content-single-product.js');
	
	wp_enqueue_script( 'itheme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'itheme-shoppingcart', get_template_directory_uri() . '/js/shoppingcart.js', array(), '20151215', true );
	wp_enqueue_script( 'itheme-myaccount', get_template_directory_uri() . '/js/myaccount.js', array(), '20151215', true );


 	wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
	wp_register_style('bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css');

	// Animsition
	wp_register_style('animsition-css', get_template_directory_uri() . '/css/animsition/animsition.min.css');
	wp_enqueue_style('animsition-css');
	wp_register_script('animsition-js', get_template_directory_uri() . '/js/js/animsition.min.js');
	wp_enqueue_script('animsition-js');

	wp_enqueue_script( 'itheme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'itheme_scripts' );

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


function addcart_script() {
	    wp_enqueue_script( 'add_cart_script', get_template_directory_uri() . '/js/addToCart.js', array('jquery'), '1.0.0', true );
	    wp_localize_script( 'add_cart_script', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

}
add_action( 'wp_enqueue_scripts', 'addcart_script' );




// After setup theme hook adds WC support
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' ); // <<<< here
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


/**
 * Change number of products that are displayed per page (shop page)
 */
add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  $cols = 12;
  return $cols;
}