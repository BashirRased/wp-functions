<?php
if( has_custom_logo ( $blog_id )):
    the_custom_logo( $blog_id );
endif;
?>

<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>

<?php if(has_custom_logo()):
    $image = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full');
?>
    <div><?php echo $image;?></div>
<?php endif;?>

