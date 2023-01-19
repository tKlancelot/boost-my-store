<?php
/**
 * ecommerce-basic functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ecommerce-basic
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


function ecommerce_basic_setup() {

	load_theme_textdomain( 'ecommerce-basic', get_template_directory() . '/languages' );

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
			'menu-header' => esc_html__( 'Primary', 'ecommerce-basic' ),
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
}
add_action( 'after_setup_theme', 'ecommerce_basic_setup' );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ecommerce_basic_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ecommerce-basic' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ecommerce-basic' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ecommerce_basic_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ecommerce_basic_scripts() {
	wp_enqueue_style( 'ecommerce-basic-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'ecommerce-basic-main', get_template_directory_uri() . '/style.css', array(), _S_VERSION );
	wp_style_add_data( 'ecommerce-basic-style', 'rtl', 'replace' );

	wp_enqueue_script( 'ecommerce-basic-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'progress-bar-script', get_template_directory_uri() . '/js/progressbars.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'header-script', get_template_directory_uri() . '/js/header.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'checkout-script', get_template_directory_uri() . '/js/checkout.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'customizer', get_template_directory_uri() . '/js/customizer.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'splide-slide', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', array(), _S_VERSION, true );

	wp_enqueue_script('gsap', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js",[],'3.10.4',false);
    wp_enqueue_script('gsap-scroll-trigger', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js",[],'3.10.4',false);
    wp_enqueue_script('gsap-observer', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/Observer.min.js",[],'3.10.4',false);
    wp_enqueue_script('gsap-scrollTo', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollToPlugin.min.js",[],'3.10.4',false);

}
add_action( 'wp_enqueue_scripts', 'ecommerce_basic_scripts' );


// Change add to cart text on single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_add_to_cart_button_text_single' ); 
function woocommerce_add_to_cart_button_text_single() {
    return __( 'Je commande', 'woocommerce' ); 
}

// Change add to cart text on product archives page
add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_add_to_cart_button_text_archives' );  
function woocommerce_add_to_cart_button_text_archives() {
    return __( 'Je commande', 'woocommerce' );
}


/**
* Modifier le texte du bouton "Ajouter au panier" par le texte "Afficher le produit"
*/
// Premièrement, nous supprimer le bouton "Ajouter au panier"
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
 
// Deuxièmement, nous créons le bouton "Afficher le produit" 
add_action( 'woocommerce_after_shop_loop_item', 'wpt_custom_view_product_button', 10);
	function wpt_custom_view_product_button() {
	global $product;
	$link = $product->get_permalink();
	echo '<a href="' . $link . '" class="button wpt-custom-view-product-button">Afficher le produit</a>';
}

