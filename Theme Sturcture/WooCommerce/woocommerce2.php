<?php

// Change to text up Sale! text
function wc_custom_replace_sale_text( $rbwoo ) {
return str_replace( __( 'Sale!', 'woocommerce' ), __( 'Offer', 'rb-woocommerce' ), $rbwoo );
}
add_filter('woocommerce_sale_flash','wc_custom_replace_sale_text');

// Change number or products per row to 3
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 6; // 3 products per row
	}
}
add_filter('loop_shop_columns', 'loop_columns');
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 10;' ), 20 );

// custom_woocommerce_template_loop_add_to_cart
function custom_woocommerce_product_add_to_cart_text() {
	global $product;
	
	$product_type = $product->product_type;
	
	switch ( $product_type ) {
		case 'external':
			return __( 'Buy product', 'rb-woocommerce' );
		break;
		case 'grouped':
			return __( 'View products', 'rb-woocommerce' );
		break;
		case 'simple':
			return __( 'Add to cart', 'rb-woocommerce' );
		break;
		case 'variable':
			return __( 'Select options', 'rb-woocommerce' );
		break;
		default:
			return __( 'Read more', 'rb-woocommerce' );
	}
}
add_filter( 'woocommerce_product_add_to_cart_text' , 'custom_woocommerce_product_add_to_cart_text' );


// Change woocommerce defaults breadcrumb
function flipmart_woocommerce_breadcrumbs() {
    return array(
        'delimiter'   => ' &#47; ',
        'wrap_before' => '<div class="breadcrumb-inner"><ul class="list-inline list-unstyled">',
        'wrap_after'  => '</ul></div>',
        'before'      => '',
        'after'       => '',
        'home'        => _x( 'Home', 'breadcrumb', 'rb-woocommerce' ),
    );
}
add_filter( 'woocommerce_breadcrumb_defaults', 'flipmart_woocommerce_breadcrumbs' );

// WooCommerce custom catalog ordering 
add_filter( 'woocommerce_catalog_orderby', 'flipmart_custom_woocommerce_catalog_orderby' );
function flipmart_custom_woocommerce_catalog_orderby( $sortby ) {
	$sortby['menu_order'] = 'Position';
	$sortby['price'] = 'Price:Lowest first';
	$sortby['price-desc'] = 'Price:HIghest first';
	unset($sortby['popularity']);
	unset($sortby['date']);
	unset($sortby['rating']);
	
	return $sortby;
}

File Location: WooCommerce Plugin Folder/includes/wc-template-functions.php
$catalog_orderby_options = apply_filters(
	'woocommerce_catalog_orderby', array(
		'menu_order' => __( 'Default sorting', 'woocommerce' ),
		'popularity' => __( 'Sort by popularity', 'woocommerce' ),
		'rating'     => __( 'Sort by average rating', 'woocommerce' ),
		'date'       => __( 'Sort by latest', 'woocommerce' ),
		'price'      => __( 'Sort by price: low to high', 'woocommerce' ),
		'price-desc' => __( 'Sort by price: high to low', 'woocommerce' ),
	)
);

// Add remove woocommerce defaults functions
add_action( 'init', 'flipmart_add_remove_woocommerce_defaults_functions' );
function flipmart_add_remove_woocommerce_defaults_functions() {
	
	// Shop page
	remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
}