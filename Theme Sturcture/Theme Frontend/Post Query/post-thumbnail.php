<!-- Post Thumbnail Image Show -->
<div class="post" style="background-image: url(<?php the_post_thumbnail_url();?>)"></div>
<?php the_post_thumbnail($size, array('id' => 'id-name', 'class' => 'class-name', 'title' => 'Image Title',  'Alt' => 'Image Alt')); ?>

<!-- Post Thumbnail Image -->
<?php if ( has_post_thumbnail() ) {
	the_post_thumbnail('',array('class' => 'img-fluid', 'alt' => 'the_title();'));
		} else { ?>
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/No_Image_Available.jpg" alt="<?php the_title(); ?>" />
<?php } ?>

<!-- Custom Post Thumbnail Image -->
<?php if ( has_post_thumbnail() ) {
	the_post_thumbnail('gadgets_news',array('class' => 'img-fluid', 'alt' => 'the_title();'));
		} else { ?>
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/No_Image_Available.jpg" alt="<?php the_title(); ?>" />
<?php } ?>

<?php the_title_attribute( array(
        'before' => 'Permalink to: ',
        'after'  => '',
        'echo'   => true,
        'post'   => get_post()
    ));
?>