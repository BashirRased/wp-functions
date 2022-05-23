Extra Pages:
============
1. Shop Page
2. Product Page
3. Cart Page
4. Checkout Page
5. My Account
6. Order received Page
7. Product Details Page

woocommerce add your plugin:
============================
01. copy the woocommerce plugin -> templates folder
02. paste your theme root folder
03. then paste folder rename woocommerce

shop page design:
=================
01. create woocommerce.php

woocommerce.php:
================
<?php 
// add woocommerce content
woocommerce_content();
?>

Functions.php:
==============
<?php
// woocommerce support
add_theme_support('woocommerce');

// Change number or products per row to 3
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}
add_filter('loop_shop_columns','loop_columns');

// woocommerce remove action
function rb_woo_remove(){
   remove_action('woocommerce_before_shop_loop','woocommerce_result_count',20,0);
    remove_action('woocommerce_before_shop_loop','woocommerce_catalog_ordering',30,0);
}
add_action('init','rb_woo_remove');

// woocommerce filter remove
add_filter('woocommerce_show_page_title','__return_false');
