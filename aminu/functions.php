<?php
/**
 * aminu functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package aminu
 */

 if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function aminu_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on aminu, use a find and replace
		* to change 'aminu' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'aminu', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'aminu' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'aminu_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	add_theme_support('woocommerce');
}
add_action( 'after_setup_theme', 'aminu_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function aminu_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'aminu_content_width', 640 );
}
add_action( 'after_setup_theme', 'aminu_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function aminu_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'aminu' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'aminu' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'aminu_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function aminu_scripts() {
	wp_enqueue_style( 'aminu-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'aminu-style', 'rtl', 'replace' );

	wp_enqueue_script( 'aminu-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Admin Ajax
    wp_enqueue_script('custom-ajax-script', get_template_directory_uri() . '/js/custom-ajax.js', array('jquery'), '1.0', true);

	wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
    
    wp_localize_script('custom-ajax-script', 'ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php'),
		'nonce' => wp_create_nonce('xiuer2332sduy3629ws8sd8s9sdy'),
    ));
}
add_action( 'wp_enqueue_scripts', 'aminu_scripts' );

/**
 * Woocommerce Styles
 */
function my_disable_woocommerce_styles($styles) {
    unset($styles['woocommerce-general']);
    return $styles;
}
add_filter('woocommerce_enqueue_styles', 'my_disable_woocommerce_styles');

function matched_cart_items( $search_products ) {
    $count = 0; // Initializing

    if ( ! WC()->cart->is_empty() ) {
        // Loop though cart items
        foreach(WC()->cart->get_cart() as $cart_item ) {
            // Handling also variable products and their products variations
            $cart_item_ids = array($cart_item['product_id'], $cart_item['variation_id']);

            // Handle a simple product Id (int or string) or an array of product Ids 
            if( ( is_array($search_products) && array_intersect($search_products, $cart_item_ids) ) || !is_array($search_products) && in_array($search_products, $cart_item_ids))
                $count++; // incrementing items count
        }
    }
    return $count; // returning matched items count 
}

/**
 *  Admin ajax
 */
require get_template_directory() . '/inc/admin-ajax.php';


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

$include_files = [

	"src/ajax_product.php",

	"src/product.php",

  "src/woocommerce_filter.php",

	"src/woocommerce_hooks.php",

	"src/woocommerce_custom_checkout.php",

];


array_walk( $include_files, function ( $file ) {

	if ( ! locate_template( $file, true, true ) ) {

		trigger_error( sprintf( 'Could not find %s', $file ), E_USER_ERROR );

	}

} );



unset( $include_files );

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Theme Options',
        'menu_title'    => 'Theme Options',
        'menu_slug'     => 'theme-options',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}