<!-- Current User Image Show -->
<img src="<?php echo esc_url( get_avatar_url( wp_get_current_user() ) ); ?>" />

<!-- Author Name Show -->
<?php the_author( '', true ); ?>

<!-- Author Name Show -->
<?php esc_html_e( get_the_author( '', true ), 'text-domain'); ?>

<!-- Author Any Inforamtion Show -->
<?php the_author_meta( $field, $user_id ); ?>

<!-- Author Any Inforamtion Show -->
<?php esc_html_e( get_the_author_meta( $field, $user_id ), 'text-domain'); ?>

<!-- 
the_author_meta() field List:-
    01. ID
    02. first_name
    03. last_name
    04. display_name
    05. nickname
    06. description
    07. user_firstname
    08. user_lastname
    09. user_nicename
    10. user_email
    11. user_login
    12. user_pass
    13. user_registered
    14. user_description
    15. user_activation_key
    16. user_status
    17. user_url
    18. user_level
    19. admin_color
    20. aim
    21. comment_shortcuts
    22. jabber
    23. plugins_last_view
    24. plugins_per_page
    25. rich_editing
    26. syntax_highlighting
    27. yim
-->