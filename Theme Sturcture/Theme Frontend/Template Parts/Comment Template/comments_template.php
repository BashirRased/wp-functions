<?php comments_template($file, $separate_comments); ?>

<?php
// If comments are open or there is at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) {
    comments_template();
}
?>