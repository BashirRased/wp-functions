<?php
// Post Pagination.
the_posts_pagination(array(
    // Previous & Next Button Set
    'prev_text' => '<i class="fas fa-chevron-left"></i>',
    'next_text' => '<i class="fas fa-chevron-right"></i>',
    
    // Previous & Next Button Show/Hide (Values: true|false)
    // 'prev_next' => true,
    
    // You can set show total pages
    // 'total' => 7,
    // You can set currect class & aria-current your choice page number 
    // 'current' => 2,
    // You can set currect page aria-current value 
    // 'aria_current' => 'string',
    
    // Show/Hide All Pages (Values: false|true)
    // 'show_all' => false,
    // Show ... before last pages.
    // 'end_size' => 3,
    // Show ... currect page after & before pages.
    // 'mid_size' => 2,

    // <a> tag inside text
    // 'before_page_number' => '<span>',
    // 'after_page_number' => '</span>',

    // Set Page Number Link Without Home Url
    // 'base' => 'http://localhost/jhon-smith/%_%',
    // Set Page Number Link After Home Url Format
    // 'format' => '?paged=%#%',
    // Set Page Number Link After Format Value		
    // 'add_fragment' => '/string',
    // Page Number Show HTML Format (Values: plain(for <a> tag)|array|list(for <li> tag))
    // 'type' => 'list',
    // Values: false|true
    // 'add_args' => false,
));	