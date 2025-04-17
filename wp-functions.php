<?php
function add_class_callback( $result ) {

    $class = strtolower( $result[2] );
    $class = str_replace( ' ', '-', $class );
    $class = 'bashir';
    // do more sanitazion on the class (slug) like esc_attr() and so on
    
    $replacement = sprintf( ' class="%s">%s</a>', $class, $result[2] );
    return preg_replace( '#>([^<]+)</a>#Uis', $replacement, $result[0] );
    
    }
    
    function add_category_slug( $html ) {
    $search  = '#<a[^>]+(\>([^<]+)\</a>)#Uuis';
    $html = preg_replace_callback( $search, 'add_class_callback', $html );
    return $html;
    }  
    add_filter( 'the_category', 'add_category_slug', 99, 1 );