<?php
function social_media_share_btn ($content) {
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
        $Buffer_URL ='https://www.bufferapp.com/add?url='.$Post_URL.'&amp;text='.$Post_Title;
        $WhatsApp_URL ='whatsapp://send?text='.$Post_Title.' '.$Post_URL;
        $Pinterest_URL ='https://pinterest.com/pin/create/button/?url='.$Post_URL.'&amp;media='.$Post_Thumbnail[0];

        // Add Content Button
        $content = '<div>';
        $content .= '<a href="'.$Facebook_URL.'">Facebook</a>';
        $content .= '<a href="'.$Twitter_URL.'">Twitter</a>';
        $content .= '<a href="'.$Buffer_URL.'">Buffer</a>';
        $content .= '<a href="'.$WhatsApp_URL.'">WhatsApp</a>';
        $content .= '<a href="'.$Pinterest_URL.'">Pinterest</a>';
        $content .= '</div>';

        return $content;
    }
    else {
        return $content;
    }
}
add_filter( 'the_content', 'social_media_share_btn');