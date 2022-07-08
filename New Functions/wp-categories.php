<?php

/** Categories List */
$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC'
) );
 
foreach( $categories as $category ) {
    $category_link = sprintf( 
        '<a href="%1$s" alt="%2$s">%3$s</a>',
        esc_url( get_category_link( $category->term_id ) ),
        esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
        esc_html( $category->name )
    );
     
    echo '<p>' . sprintf( esc_html__( 'Category: %s', 'textdomain' ), $category_link ) . '</p> ';
    echo '<p>' . sprintf( esc_html__( 'Description: %s', 'textdomain' ), $category->description ) . '</p>';
    echo '<p>' . sprintf( esc_html__( 'Post Count: %s', 'textdomain' ), $category->count ) . '</p>';
}

