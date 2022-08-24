<!-- Post Start Codes -->
<article id="post-<?php the_ID(); ?>" <?php post_class("rb-single-blog"); ?>></article>

<?php
    query_posts(array( 
        
        // Post Show Format
        'orderby'=>'ID', // Post Show With Post ID
        'orderby'=>'title', // Post Show With Title Name
        'orderby'=>'name', // Post Show With Slug Name
        'orderby'=>'author', // Post Show With Author
        'orderby'=>'date', // Post Show With Date
        'orderby'=>'modified', // Post Show With Last Modified Date
        'orderby'=>'parent', // Post Show With Parent ID
        'orderby'=>'rand', // Post Show With Random Order
        'orderby'=>'comment_count', // Post Show With Number of Comments
        'orderby'=>'none', // Post Without orderby
        
        // Post Show Serial
        'orderby'=>'ASC', //ascending values (1, 2, 3; a, b, c).
        'orderby'=>'DESC', //descending values (3, 2, 1; c, b, a).
        'orderby' => 'menu_order',
        'orderby' => 'meta_value',        
        
        // Post Author
        'author'            => '1,2,3,', // Author ID
        'author_name'       => 'Bashir Rased', // User Nicename
        'author__in'        => array(2,6), // Author ID
        'author__not_in'    => array(2,6), // Author ID
        
        // Post Category
        'cat' => 5, // Category ID
        'category_name' => 'staff, news', // Category Slug
        'category_name' => 'staff+news', // Category Slug
        'category__and' => array(2,6), // Category ID
        'category__in' => array(2,6), // Category ID
        'category__not_in' => array(2,6), // Category ID
        
        // Post Tag
        'tag' => 'cooking', // Tag Slug
        'tag_id' => 5, // Tag ID
        'tag__and' => array(2,6), // Tag ID
        'tag__in' => array(2,6), // Tag ID
        'tag__not_in' => array(2,6), // Tag ID
        'tag_slug__and' => array('red','blue'), // Tag Slug
        'tag_slug__in' => array('red','blue'), // Tag Slug
        
        'posts_per_page' => -1
        
    ));
?>

<!-- General Post Loop -->
<?php 
	if(have_posts()) : 
		while(have_posts()) : the_post(); ?>
<p>Post Content Add Here...</p>
<?php	endwhile;
		else:
		echo esc_html__('No Posts Found','toumpa');
	endif;
    wp_reset_postdata();
?>

<!-- Custom Post Loop -->
<?php 
	$custom_post_1 = new WP_Query(array('post_type'=>'slider'));
    if($custom_post_1->have_posts()) : 
		while($custom_post_1->have_posts()) : $custom_post_1->the_post(); ?>
<p>Post Content Add Here...</p>
<?php	endwhile;
		else:
		echo esc_html__('No Posts Found','toumpa');
	endif;
    wp_reset_postdata(); 
?>