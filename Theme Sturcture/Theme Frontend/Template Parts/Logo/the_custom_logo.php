<?php
if( has_custom_logo ( $blog_id )):
    the_custom_logo( $blog_id );
endif;
?>

<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>