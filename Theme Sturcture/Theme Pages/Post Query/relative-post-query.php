<?php
$tags = wp_get_post_tags($post->ID);
if($tags){
	$first_tag = $tags[0]->term_id;
	$my_query = new WP_Query(array(
		'tag__in' => array($first_tag),
		'post__not_in' => array($post->ID),
		'posts_per_page' => 5,
		'caller_get_posts' => 1
	));

	if($my_query->have_posts()){
		while($my_query->have_posts()) : $my_query->the_post();?>
//code add here...
<?php
	endwhile;
	}
	wp_reset_query();
}
?>