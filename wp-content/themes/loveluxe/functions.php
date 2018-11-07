<?php
/**
 * loveluxe functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package loveluxe
 */

if ( ! function_exists( 'loveluxe_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function loveluxe_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on loveluxe, use a find and replace
		 * to change 'loveluxe' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'loveluxe', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'loveluxe' ),
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
		add_theme_support( 'custom-background', apply_filters( 'loveluxe_custom_background_args', array(
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
add_action( 'after_setup_theme', 'loveluxe_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function loveluxe_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'loveluxe_content_width', 640 );
}
add_action( 'after_setup_theme', 'loveluxe_content_width', 0 );








// ADD THEME SUPPORT (search box)
add_theme_support('html5', array('search-form'));

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function loveluxe_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'loveluxe' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'loveluxe' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'loveluxe_widgets_init' );









/**
 * Enqueue scripts and styles.
 */
function loveluxe_scripts() {

	wp_enqueue_style( 'slick-slider-css', 'http://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css');
    wp_enqueue_style( 'slick-theme', 'http://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css');

	 wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
	 wp_register_style('bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css');
	 
	 
	 
     wp_register_style('full-slider', get_template_directory_uri() . '/css/full-slider.css');
	 wp_register_style('content-single-product', get_template_directory_uri() . '/css/woocommerce/content-single-product.css');
	 wp_register_style('archive-product', get_template_directory_uri() . '/css/woocommerce/archive-product.css');
	
	wp_register_style('font-awesome.min', 'http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
	 wp_register_style('glyphicons', 'http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css');
	

		
	 wp_enqueue_style('bootstrap');
	 wp_enqueue_style('bootstrap.min');
	 wp_enqueue_style('full-slider');
	 wp_enqueue_style('content-single-product');
	 wp_enqueue_style('archive-product');
	 wp_enqueue_style('font-awesome.min');
	 wp_enqueue_style('glyphicons');
	
	 wp_register_script('recaptcha', '//www.google.com/recaptcha/api.js');
	 wp_enqueue_script('recaptcha');
	
	 wp_register_script('slick.min', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.js');
	 wp_register_script('jquery-min', '//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js');
     wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js');
	 wp_register_script('bootstrap.min.js', get_template_directory_uri() . '/js/bootstrap.min.js');
	 wp_register_script('bootstrap.js', get_template_directory_uri() . '/js/bootstrap.js');
	 wp_register_script('jquery-ui.js', '//code.jquery.com/ui/1.12.1/jquery-ui.js');
	 wp_register_script('content-single-product.js', get_template_directory_uri() . '/js/woocommerce/content-single-product.js');
	 wp_register_script('jquery-migrate.min', '//cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.2.1/jquery-migrate.min.js');
	
	 wp_enqueue_script('slick.min');
	 wp_enqueue_script('jquery-min');
     wp_enqueue_script('jquery');
	 wp_enqueue_script('bootstrap.min.js');
	 wp_enqueue_script('bootstrap.js');
	 wp_enqueue_script('jquery-ui.js');
	 wp_enqueue_script('content-single-product.js');
	 wp_enqueue_script('jquery-migrate.min');



	wp_enqueue_style( 'loveluxe-style', get_stylesheet_uri() );

	wp_enqueue_script( 'loveluxe-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'loveluxe-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'loveluxe_scripts' );

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


// After setup theme hook adds WC support
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' ); // <<<< here
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


 //CUSTOMIZING WOOCOMMERCE SINGLE PRODUCT PAGE

// REMOVE STARS RATING

remove_action('woocommerce_single_product)summary','woocommerce_template_single_rating',10);

// REMOVE TABS FUNCTION FROM ACTION HOOK
//remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs',10);

//REMOVE RELATED PRODUCTS FUNCTION FROM HOOK
//remove_action('woocommerce_after_single_product_summary','woocommerce_output_related_products',20);


 remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );



/**
 * Remove product data tabs
 */
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

   // unset( $tabs['description'] );      	// Remove the description tab
    unset( $tabs['reviews'] ); 			// Remove the reviews tab
    unset( $tabs['additional_information'] );  	// Remove the additional information tab

    return $tabs;
}


// limit na column 

add_filter( 'projects_loop_columns', 'jk_projects_columns', 99 );
function jk_projects_columns( $cols ) {
	$cols = 3;
	return $cols;
}


add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

add_filter ( 'woocommerce_product_thumbnails_columns', 'bbloomer_change_gallery_columns' );

function bbloomer_change_gallery_columns() {
     return 1; 
}

add_action('wp_logout','auto_redirect_after_logout');
function auto_redirect_after_logout(){
wp_redirect( home_url() );
exit();
}





/* 12 data per page*/
add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 12 );

function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  $cols = 12;
  return $cols;
}

/**
 * Change number of related products output
 */ 
function woo_related_products_limit() {
  global $product;
	
	$args['posts_per_page'] = 6;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
  function jk_related_products_args( $args ) {
	$args['posts_per_page'] = 4; // 4 related products
	$args['columns'] = 2; // arranged in 2 columns
	return $args;
}


function get_stock_variations_from_product(){
    global $product;
    $variations = $product->get_available_variations();
    foreach($variations as $variation){
         $variation_id = $variation['variation_id'];
         $variation_obj = new WC_Product_variation($variation_id);
         $stock = $variation_obj->get_stock_quantity();
    }
}

function quantity_inputs_for_woocommerce_loop_add_to_cart_link( $html, $product ) {
	if ( $product && $product->is_type( 'simple' ) && $product->is_purchasable() && $product->is_in_stock() && ! $product->is_sold_individually() ) {
		$html = '<form action="' . esc_url( $product->add_to_cart_url() ) . '" class="cart" method="post" enctype="multipart/form-data">';
		$html .= woocommerce_quantity_input( array(), $product, false );
		$html .= '<button type="submit" class="button alt">' . esc_html( $product->add_to_cart_text() ) . '</button>';
		$html .= '</form>';
	}
	return $html;
}


function add_cart_single_ajax() {
	$product_id = $_POST['product_id'];
	$quantity = $_POST['quantity'];

    WC()->cart->add_to_cart( $product_id, $quantity);

	$items = WC()->cart->get_cart();
	global $woocommerce;
	$item_count = $woocommerce->cart->cart_contents_count; ?>

	<span class="item-count"><?php echo $item_count; ?></span>

	<h4>Shopping Bag</h4>

	<?php foreach($items as $item => $values) { 
		$_product = $values['data']->post; ?>
		
		<div class="dropdown-cart-wrap">
			<div class="dropdown-cart-left">
				<?php 
                    echo get_the_post_thumbnail( $values['product_id'], 'thumbnail' ); 
                 ?>
			</div>

			<div class="dropdown-cart-right">
            <span style="font-weight: 300; font-size: 12px;"><?php echo $_product->post_title; ?></span>
                      <?php
                        global $woocommerce;
                        $currency = get_woocommerce_currency_symbol();
                        $price = get_post_meta( $values['product_id'], '_regular_price', true);
                        $sale = get_post_meta( $values['product_id'], '_sale_price', true);
                        
                        if($sale) {
                      ?>
                      <span style="font-weight: 400; font-size: 12px;"><p class="price"><?php echo $values['quantity']; ?> x <del><?php echo $currency; echo $price; ?></del> <?php echo $currency; echo $sale; ?></span>
                      <?php
                        } elseif($price) {
                      ?>
                      <span style="font-weight: 400; font-size: 12px;"><p class="price"><?php echo $values['quantity']; ?> x <?php echo $currency; echo $price; ?></span>   
                      <?php } ?>     
			</div>

			<div class="clear"></div>
		</div>
	<?php } ?>

	<div class="dropdown-cart-wrap dropdown-cart-subtotal">
		<div class="dropdown-cart-left">
			<h6>Subtotal</h6>
		</div>

		<div class="dropdown-cart-right">
			<h6><?php echo WC()->cart->get_cart_total(); ?></h6>
		</div>

		<div class="clear"></div>
	</div>

	<?php $cart_url = $woocommerce->cart->get_cart_url();
	$checkout_url = $woocommerce->cart->get_checkout_url(); ?>

	<div class="dropdown-cart-wrap dropdown-cart-links">
		<div class="dropdown-cart-left dropdown-cart-link">
			<a href="<?php echo $cart_url; ?>">View Cart</a>
		</div>

		<div class="dropdown-cart-right dropdown-checkout-link">
			<a href="<?php echo $checkout_url; ?>">Checkout</a>
		</div>

		<div class="clear"></div>
	</div>

	<?php die();
}

add_action('wp_ajax_add_cart_single_ajax', 'add_cart_single_ajax');
add_action('wp_ajax_nopriv_add_cart_single_ajax', 'add_cart_single_ajax');
