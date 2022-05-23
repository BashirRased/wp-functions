<?php comments_number(string $zero = false, string $one = false, string $more = false, int|WP_Post $post_id) ?>

Parameters #Parameters
======================
01. $zero
(string) (Optional) Text for no comments.
Default value: false

02. $one
(string) (Optional) Text for one comment.
Default value: false

03. $more
(string) (Optional) Text for more than one comment.
Default value: false

04. $post_id
(int|WP_Post) (Optional) Post ID or WP_Post object. Default is the global $post.


<?php
    printf( // WPCS: XSS OK.
        esc_html(_nx(
            'One thought on &ldquo;%2$s&rdquo;',
            '%1$s thoughts on &ldquo;%2$s&rdquo;',
            get_comments_number(),
            'comments title',
            'nano-progga'
        )),
        number_format_i18n( get_comments_number() ),
        '<span>' . get_the_title() . '</span>'
    );
?>

<?php
    
    $comments_number = absint( get_comments_number() );

    if ( ! have_comments() ) {
        _e( 'Leave a comment', 'twentytwenty' );
    }

    elseif ( 1 === $comments_number ) {
        /* translators: %s: Post title. */
        printf( _x( 'One reply on &ldquo;%s&rdquo;', 'comments title', 'twentytwenty' ), get_the_title() );
    }

    else {
        printf(
            /* translators: 1: Number of comments, 2: Post title. */
            _nx(
				'%1$s reply on &ldquo;%2$s&rdquo;',
				'%1$s replies on &ldquo;%2$s&rdquo;',
				$comments_number,
				'comments title',
				'twentytwenty'
            ),
            number_format_i18n( $comments_number ),
            get_the_title()
        );
    }

?>
