<?php

if ( ! function_exists( 'custom_breadcrumbs' ) ) {

    function custom_breadcrumbs() {

    }

};
add_action( 'prefix_breadcrumbs', 'custom_breadcrumbs');