<!-- WP Custom Logo -->
<?php if(has_custom_logo()):?>
    <div><?php the_custom_logo();?></div>
<?php endif;?>

<?php if(has_custom_logo()):
    $image = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full');
?>
    <div><?php echo $image;?></div>
<?php endif;?>