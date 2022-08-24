<?php
function social_media_share_btn () {
    if ( is_singular() || is_home() ){
        // Get Current Post URL 
        $Post_URL = get_permalink();

        // Get Current Post Title 
        $Post_Title = str_replace( ' ', '%20', get_the_title() );

        // Get Current Post Thumbnail 
        $Post_Thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );

        // Share Button 
        $Facebook_URL = 'https://www.facebook.com/sharer/sharer.php?u='.$Post_URL;
        $Twitter_URL ='https://twitter.com/intent/tweet?text='.$Post_Title.'&amp;url='.$Post_URL.'&amp;via=Bashir_Rased';
        $Buffer_URL ='https://www.facebook.com/sharer/sharer.php?u='.$Post_URL;
        $WhatsUP_URL ='https://www.facebook.com/sharer/sharer.php?u='.$Post_URL;
        $Pinterest_URL ='https://www.facebook.com/sharer/sharer.php?u='.$Post_Thumbnail;

    }
}
add_filter( 'the_content', 'social_media_share_btn');