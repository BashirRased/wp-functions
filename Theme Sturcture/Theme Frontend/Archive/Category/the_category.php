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

?>

<!-- Category name show with categroy link -->
<?php the_category( $separator, $parents, $post_id ); ?>

<!-- Signle category name show -->
<?php esc_html_e( get_cat_name( get_cat_ID( 'Category Name' ) ) );?>

<?php single_cat_title(); ?>

<!-- Signle category link Show -->
<?php echo get_category_link( get_cat_ID( 'Category Name' ) ) ?>

<!-- Signle category description Show -->
<?php category_description(); ?>