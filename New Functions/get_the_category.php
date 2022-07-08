<?php
$categories = get_the_category( get_the_ID() );

// display category all values
foreach ($categories as $category) {
   $output      = $category->term_id;
   $output     .= $category->name;
   $output     .= $category->slug;
   $output     .= $category->term_group;
   $output     .= $category->term_taxonomy_id;
   $output     .= $category->taxonomy;
   $output     .= $category->description;
   $output     .= $category->parent;
   $output     .= $category->count;
   $output     .= $category->object_id;
   $output     .= $category->filter;
   $output     .= $category->raw;
   $output     .= $category->cat_ID;
   $output     .= $category->category_count;
   $output     .= $category->category_description;
   $output     .= $category->cat_name;
   $output     .= $category->category_nicename;
   $output     .= $category->category_parent;
}


foreach ($categories as $category) {
    
    //display parent category list
    if( !$category->parent ){
        $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '" >' . $category->name.'</a>,';
    }

    //display child category list
    elseif( $category->parent ){
        $output .= $category->name;
    }
}