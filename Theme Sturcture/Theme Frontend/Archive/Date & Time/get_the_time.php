<!--
==================================
----- get_the_time structure -----
==================================
<?php get_the_time( $format, $post ); ?>

==========================================
----- get_the_time echo currect post -----
==========================================
<?php echo ( get_the_time( __( 'F Y', 'text-domain'), get_the_ID() ) ); ?>

<?php echo ( get_the_time( __( 'F Y', 'text-domain'), $post->ID ) ); ?>

===========================================
----- get_the_time echo specific post -----
===========================================
<?php echo ( get_the_time( __( 'F Y', 'text-domain'), 'post_id' ) ); ?>
->