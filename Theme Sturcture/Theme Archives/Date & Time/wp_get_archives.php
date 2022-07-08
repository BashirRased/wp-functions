<?php
// WP Post Archive
wp_get_archives( array (

    'type'            =>  'monthly',
    // Values: 'daily', 'weekly', 'monthly', 'yearly', 'postbypost', or 'alpha'.

    'limit'           =>  0,
    // Values: (string|int) Number of links to limit the query to.

    'format'          =>  'html',
    // Values: 'link' (<link> tag), 'option' (<option> tag), 'html' (<li> tag), or a custom format.

    'before'          =>  '<ul>',
    'after'           =>  '</ul>',
    'show_post_count' =>  false,
    'echo'            =>  true,

    'order'           =>  'DESC',
    // Values: 'ASC', or 'DESC'.

    'post_type'       =>  'post',

    'year'            =>  get_query_var( 'year' ),
    'monthnum'        =>  get_query_var( 'monthnum' ),
    'day'             =>  get_query_var( 'day' ),
    'w'               =>  get_query_var( 'w' ),

    ) );
?>