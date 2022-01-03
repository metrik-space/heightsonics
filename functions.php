<?php

/**
 * dasa functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dasa
 */
// ADD CUSTOM CSS & SCRIPTS
function metrik_includes()
{
	wp_enqueue_style('global-styles', get_template_directory_uri() . '/assets/css/dist/global/manifest.css', []);
	wp_enqueue_style('home-styles', get_template_directory_uri() . '/assets/css/dist/home/manifest.css', []);
	
	wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/dist/scripts.min.js', ['jquery'], true);

	wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri() . '/assets/js/vendor/jquery-3.6.0.min.js', [], '3.6.0', true);

	wp_enqueue_style('featherlight-styles', '//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css');
	wp_enqueue_script('featherlight', '//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js', array('jquery'));

	wp_enqueue_style('slick-styles', get_template_directory_uri() . '/assets/css/dist/vendor/slick.css');
	wp_enqueue_style('slicktheme-styles', get_template_directory_uri() . '/assets/css/dist/vendor/slick-theme.css');
	wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/vendor/slick.min.js', ['jquery'], true);

	wp_enqueue_script('particlesJS', 'https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js');

	
}
add_action('wp_enqueue_scripts', 'metrik_includes', 20);

function woocommerce_support()
{
	add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'woocommerce_support');

remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
add_filter('woocommerce_product_tabs', 'woo_remove_product_tabs', 98);

remove_action('woocommerce_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);


add_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);

remove_action('woocommerce_variable_add_to_cart', 'woocommerce_variable_add_to_cart', 30);
add_action('woocommerce_simple_add_to_cart', 'woocommerce_simple_add_to_cart', 30);

// Price 
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
add_action('woocommerce_single_product_summary', 'price', 30);

add_filter('wc_add_to_cart_message', 'customBasketMessage', 10, 2);
function customBasketMessage($message, $productName)
{
	$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
	return "<div class='addToCart'><p>Item Added to the Basket</p><a href=" . 	$root  . "cart/>View Basket</a></div>";
}


// remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
// add_action( 'woocommerce_before_single_product_summary', 'print_image', 5 );



function woo_remove_product_tabs($tabs)
{
	unset($tabs['description']);          // Remove the description tab
	unset($tabs['reviews']);          // Remove the reviews tab
	unset($tabs['additional_information']);   // Remove the additional information tab
	return $tabs;
}


