<!--
==================================
----- get_the_date structure -----
==================================
<?php get_the_date( $format, $post ); ?>

==========================================
----- get_the_date echo currect post -----
==========================================
<?php echo ( get_the_date( __( 'F Y', 'text-domain'), get_the_ID() ) ); ?>

<?php echo ( get_the_date( __( 'F Y', 'text-domain'), $post->ID ) ); ?>

===========================================
----- get_the_date echo specific post -----
===========================================
<?php echo ( get_the_date( __( 'F Y', 'text-domain'), 'post_id' ) ); ?>
->