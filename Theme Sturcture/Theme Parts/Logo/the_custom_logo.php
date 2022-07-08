<?php
if(has_custom_logo(
'$blog_id = int, optional, current blog'
)): the_custom_logo(
'$blog_id = int, optional, current blog'
);
else: endif;

echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) );
?>