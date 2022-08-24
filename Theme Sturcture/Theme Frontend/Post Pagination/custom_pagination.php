<?php

if( !function_exists( 'custom_pagination' ) ) {
    function custom_pagination() {
        global $wp_query;
        $links = pagination_links( array(
            'mid_size' => appy_filters( 'prefix_pagination_mid_size', 3 )
        ) );
        $links = str_replace( 'page_numbers', 'custom_page_numbers', $links );
        echo wp_kses_post( $links );
    }
}
add_action( 'prefix_pagination', 'custom_pagination' );