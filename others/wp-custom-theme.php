<!-- 07. WordPress Skip Link Text Add Code -->
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'text-domain' ); ?></a>

<!-- 08. Wordpress Dynamic Logo Add -->
<?php
if(has_custom_logo(
'$blog_id = int, optional, current blog'
)): the_custom_logo(
'$blog_id = int, optional, current blog'
);
else: endif;

if(has_custom_logo(
'$blog_id = int, optional, current blog'
)): echo get_custom_logo(
'$blog_id = int, optional, current blog'
);
else: endif;

echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) );
?>

<!-------------------------------------
// Post Loop For General Post
<?php while( have_posts() ) : the_post(); ?>
	// Autho Image
	<img src="<?php echo esc_url( get_avatar_url( wp_get_current_user() ) ); ?>" />

	// Tag Archive Links
	
	<?php single_tag_title(); ?>

<?php endwhile; ?>
-------------------------------------->

<!-------------------------------------
// Date Archive Link
<?php 
	$archive_year  = get_the_time('Y'); 
	$archive_month = get_the_time('m'); 
	$archive_day   = get_the_time('d'); 
?>
<a href="<?php echo get_day_link($archive_year, $archive_month, $archive_day); ?>"><?php the_date('j F Y'); ?></a>

<?php
	if ( is_day() ) {
		echo get_the_date('j F Y'); 
	}
	elseif ( is_month() ) {
		echo get_the_date('F - Y'); 
	}
	elseif ( is_year() ) {
		echo get_the_date('Y'); 
	}
?>
-------------------------------------->



// Customizer Meta Tag
<?php echo get_theme_mod('variable name here'); ?>

// Read More Function Add
<?php the_excerpt(); ?>



// Call Your Image,CSS,JS Files
<?php echo get_bloginfo('template_directory'); ?>/

<?php echo date('Y'); ?>

<?php the_category( ' ' ); ?>
<?php echo get_cat_name(7);?>
<?php echo get_category_link(7) ?>


// Search Form Keyword Result Show
<?php _e(''); echo '&quot;'.$s.'&quot;'; ?>

// Category List Show
<?php
	$args = array(
		'orderby' => 'slug',
		'parent' => 0
	);
	$categories = get_categories($args);
	foreach ($categories as $category) {
		echo '<li><a href="'.get_category_link($category->term_id).'" rel="bookmark"><i class="glyphicon glyphicon-asterisk">'.$category->name.'<i>'.$category->description.'</a></li>';
	}
?>

// Archive List Show
<?php wp_get_archives(array('type'=>'monthly','limit'=>12,'order'=>'ASC')); ?>

<?php $args = array(
	'type'=>'monthly',
	'limit'=>'',
	'format'=>'html',
	'before'=>'',
	'after'=>'',
	'show_post_count'=>false,
	'echo'=>1,
	'order'=>'DESC',
	'post_type'=>'post',
);
wp_get_archives($args); ?>

// Category Post Query
<?php
$tech = new WP_Query(array(
	'post_type' => 'post',
	'posts_per_page' => 4,
	'order' => 'DESC',
	'orderby' => 'title',
	'category_name' => 'Technology'
));
?>

// Random Post Query
<?php
$tech = new WP_Query(array(
	'post_type' => 'post',
	'posts_per_page' => 4,
	'order' => 'DESC',
	'orderby' => 'rand',
	'category_name' => 'Technology'
));
?>

// Relative Post Query
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

// Page Template Name:
/*
Template Name: Page Name
*/

// Comment Form Add
<?php comment_form(); ?>
<?php comments_template('',true); ?>

// This Code Add header.php for no reload website
<?php
if(is_singular() && comments_open() && get_option('thread_comments')){
	wp_enqueue_script('comment-reply');
}
?>

<!-- WP Sidebar Add Your Site -->
<?php dynamic_sidebar('Registration Sidebar ID'); ?>

<!-- Loads the comment template -->
<?php comments_template($file, $separate_comments); ?>
