<?php echo get_theme_mod('variable name here'); ?>
<?php the_field("service_icon"); ?>

<?php 
/*
Template Name: Bashir Rased
Template Post Type: post
*/
?>

    
Post (Post Type: ‘post’)
Page (Post Type: ‘page’)
Attachment (Post Type: ‘attachment’)
Revision (Post Type: ‘revision’)
Navigation menu (Post Type: ‘nav_menu_item’)
    
Post thumbnail sizes:
=====================
//Default WordPress
the_post_thumbnail('thumbnail');     // Thumbnail (150 x 150 hard cropped)
the_post_thumbnail('medium');        // Medium resolution (300 x 300 max height 300px)
the_post_thumbnail('medium_large');  // Medium Large (added in WP 4.4) resolution (768 x 0 infinite height)
the_post_thumbnail('large');         // Large resolution (1024 x 1024 max height 1024px)
the_post_thumbnail('full');          // Full resolution (original size uploaded)
 
//With WooCommerce
the_post_thumbnail('shop_thumbnail'); // Shop thumbnail (180 x 180 hard cropped)
the_post_thumbnail('shop_catalog');   // Shop catalog (300 x 300 hard cropped)
the_post_thumbnail('shop_single');    // Shop single (600 x 600 hard cropped)


img.wp-post-image
img.attachment-thumbnail
img.attachment-medium
img.attachment-large
img.attachment-full


///
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 

1
2
	
echo $term->name; // will show the name
echo $term->slug; // will show the slug

You can use it for the all of the following values:

    term_id
    name
    slug
    term_group
    term_taxonomy_id
    taxonomy
    description
    parent
    count




<!-------------------------------------
// Search Query
<?php the_search_query(); ?>

// Comment Form
<?php comment_form(); ?>

// Comments List
<?php wp_list_comments(); ?>

// Pagination
<?php the_posts_pagination( array(
	'prev_text' => __( '<i class="fas fa-long-arrow-alt-left"></i>', 'rbblogone' ),
	'next_text' => __( '<i class="fas fa-long-arrow-alt-right"></i>', 'rbblogone' ),
	'mid_size' => 2
) ); ?>

// Post Edit Add index.php
<?php edit_post_link('Edit This Post','<div>','</div>','','rb-meta-post-edit'); ?>

-------------------------------------->





<?php

//post views echo
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}

//post views setup
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
    
?>


<?php setPostViews(get_the_ID());?> <?php echo getPostViews(get_the_ID());?>

<?php
//post views
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
//post view setup
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}


function wpse53364() {
    if( is_single() ) {
		setPostViews(get_the_ID());
    }
}
add_action( 'wp_head', 'wpse53364' );
?>


<?php
	$post_tag_id = wp_get_post_tags($post->ID);
	
	if($post_tag_id){
		$tag = $post_tag_id[0]->term_id;
		$arg = array(
			'tag_in'			=> array($tag),
			'post__not_in'		=> array($post->ID),
			'posts_per_page'	=> 3,
			'caller_get_posts'	=> 1
		);
		$My_query = new WP_Query($arg);
		
		if($My_query->have_posts()){
			while($My_query->have_posts()) : $My_query->the_post(); ?>
		
		
		<?php
		endwhile;
		}
	}
	?>


<?php

//Comment Form Input Positive Change
function rb_comment_field($rb_comment){
	$comment_field = $rb_comment['comment'];
	unset($rb_comment['comment']);
	$rb_comment['comment'] = $comment_field;
	return $rb_comment;
}
add_filter('comment_form_fields','rb_comment_field');

//Comment Form Input Remove
function comment_field_remove($comment_field){
	unset($comment_field['author']); // Remove Name Field
	unset($comment_field['url']); // Remove Website Field

	return $comment_field;
}
add_action('comment_form_fields','comment_field_remove');

// Basic Shortcode Register for YouTube Video
function youtube_shortcode($atts,$content=null){
	extract(shortcode_atts(array("video_id"=>'',"width"='',"height"=>''),$atts));
	?>
	<iframe width="<?php echo $width; ?>" height="<?php echo height; ?>" src="https://www.youtube.com/embed/<?php echo $video_id; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<?php
}
add_shortcode('youtube','youtube_shortcode');
// [youtube video_id="nDre9I5ovLU" width="100%" height="500"][/youtube]
?>


