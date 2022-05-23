<?php

// Prefix With File Directory
define('RB_BLOG_ONE_VERSION','1.0.5');
define('RB_THEME_WP_CSS',get_stylesheet_uri());
define('RB_THEME_URL',get_template_directory_uri());
define('RB_THEME_CSS',RB_THEME_URL.'/assets/css/');
define('RB_THEME_JS',RB_THEME_URL.'/assets/js/');
define('RB_THEME_IMG',RB_THEME_URL.'/assets/img/');

// Include CSS & JS Files
function rb_css_js_file_adds(){
    
    // Normalize v8.0.1
	wp_enqueue_style('google-fonts','//fonts.googleapis.com/css?family=Poppins:100,300,600&display=swap','','1.0.0','all');
    
    // Normalize v8.0.1
	wp_enqueue_style('normalize',RB_THEME_CSS.'normalize-8.0.1.min.css','','8.0.1','all');
    
    // Font Awesome v5.13.0
	wp_enqueue_style('font-awesome',RB_THEME_CSS.'font-awesome-5.13.0.min.css','','5.13.0','all');
    wp_enqueue_style('font-awesome-brands',RB_THEME_CSS.'font-awesome-brands-5.13.0.min.css','','5.13.0','all');
    wp_enqueue_style('font-awesome-solid',RB_THEME_CSS.'font-awesome-solid-5.13.0.min.css','','5.13.0','all');
    
    // Owl.Carousel-2 v2.3.4
	wp_enqueue_style('owl.carousel',RB_THEME_CSS.'owl.carousel-2.3.4.min.css','','2.3.4','all');
    wp_enqueue_style('owl.theme.default',RB_THEME_CSS.'owl.theme.default-2.3.4.min.css','','2.3.4','all');
    
    // Fancybox-3 v3.5.7
	wp_enqueue_style('fancybox-3',RB_THEME_CSS.'jquery.fancybox-3.5.7.min.css','','3.5.7','all');
    
    // Bootstrap 4 v4.4.1
	wp_enqueue_style('bootstrap',RB_THEME_CSS.'bootstrap-4.4.1.min.css','','4.4.1','all');
    
    // Type v1.0.0
	wp_enqueue_style('rb-type',RB_THEME_CSS.'type.css','','1.0.0','all');
    
    // Template CSS v1.0.0
	wp_enqueue_style('rb-style',RB_THEME_CSS.'style.css','','1.0.0','all');
    wp_enqueue_style('rb-responsive',RB_THEME_CSS.'responsive.css','','1.0.0','all');

	// Main Style
	wp_enqueue_style('wp-stylesheet',RB_THEME_WP_CSS,'','1.0.0','all');
    
    // html5shim conditional js
	wp_enqueue_script('html5shim',RB_THEME_JS.'html5shiv-printshiv-3.7.3.min.js', array(),'3.7.3',false);
	wp_script_add_data('html5shim','conditional','lt IE 9');
	
    // respond conditional js
	wp_enqueue_script('respond',RB_THEME_JS.'respond-1.4.2.min.js',array(),'1.4.2',false);
	wp_script_add_data('respond','conditional','lt IE 9');
    
    // Modernizr v2.8.3
	wp_enqueue_script('modernizr',RB_THEME_JS.'modernizr-2.8.3.min.js',array('jquery'),'2.8.3',true);
    
    // Owl.Carousel-2 v2.3.4
	wp_enqueue_script('owl.carousel',RB_THEME_JS.'owl.carousel-2.3.4.min.js',array('jquery'),'2.3.4',true);
    
    // IsoTope v3.0.6
	wp_enqueue_script('isotope',RB_THEME_JS.'isotope.pkgd-3.0.6.min.js',array('jquery'),'3.0.6',true);
    
    // Imagesloaded v4.1.4
	wp_enqueue_script('imagesloaded',RB_THEME_JS.'imagesloaded.pkgd-4.1.4.min.js',array('jquery'),'4.1.4',true);
    
    // Fancybox-3 v3.5.7
	wp_enqueue_script('fancybox-3',RB_THEME_JS.'jquery.fancybox-3.5.7.min.js',array('jquery'),'3.5.7',true);
    
    // jQuery.Appear v1.0.0
    wp_enqueue_script('jquery.appear-js',RB_THEME_JS.'jquery.appear.js',array('jquery'),'1.0.0',true);
    
    // Type JS v1.0.0
	wp_enqueue_script('type',RB_THEME_JS.'type.js',array('jquery'),'1.0.0',true);
    
    // Bootstrap 4 v4.4.1
	wp_enqueue_script('popper',RB_THEME_JS.'popper-1.16.0.min.js',array('jquery'),'1.16.0',true);
    wp_enqueue_script('bootstrap',RB_THEME_JS.'bootstrap-4.4.1.min.js',array('jquery'),'4.4.1',true);
    
    // Custom v1.0.0	
    wp_enqueue_script('custom',RB_THEME_JS.'custom.js',array('jquery'),'1.0.0',true);
    
}
add_action('wp_enqueue_scripts','rb_css_js_file_adds');
add_action('admin_enqueue_scripts','tmb_admin_css_js_file_adds');

// after theme setup
if (!function_exists('rb_theme_setup')) :
function rb_theme_setup(){

	// Website Title-Slug
	add_theme_support('title-tag');
    
    // Set content-width.
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 580;
	}
    
    // Logo Image Register
	add_theme_support('custom-logo',array(
		'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title','site-description')
	));
    
    // Logo Image Setup
    the_custom_logo();    
    
    // Post Thumbnails
	add_theme_support('post-thumbnails');
    
    // Menu Register
    register_nav_menus(array(
        'header_menu' => __('Header Menu','kingnews'),
        'social_icons_menu'  => __('Social Icons Menu','kingnews'),
    ));
    
    // Menu Setup Your PHP File
    wp_nav_menu(array(
        'menu'            => '',
        'container'       => 'div',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'item_spacing'    => 'preserve',
        'depth'           => 0,
        'walker'          => '',
        'theme_location'  => ''
    ));
    
    // Add Image Size
    add_image_size($name, $width, $height, array('left/right/center','top/bottom/center'));
    add_image_size('rb-portfolio-one-blog-img', 220, 220, array('center','center'));
    
}
endif;
add_action('after_setup_theme', 'rb_theme_setup');

// widget register
function rb_sidebar_add(){
	register_sidebar(array(
		'name' 			=> __('Right Sidebar', 'rbblogone'),
		'description' 	=> __('You may add your Right Sidebar Widgets Here', 'rbblogone'),
		'id' 			=> 'right-sidebar',
		'before_widget' => '<div>',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h4>',
		'after_title' 	=> '</h4>'
	));
    
    // Widget Setup Your PHP File
    dynamic_sidebar('right-sidebar');  
    
}
add_action('widgets_init', 'rb_sidebar_add');

// Custom Post Type
function wpdocs_codex_book_init() {
    $labels = array(
        'name'                  => _x('Books','Post type general name', 'textdomain' ),
        'singular_name'         => _x('Book','Post type singular name', 'textdomain' ),
        'menu_name'             => _x('Books','Admin Menu text','textdomain' ),
        'name_admin_bar'        => _x('Book','Add New on Toolbar','textdomain' ),
        'add_new'               => __('Add New','textdomain'), // sub-menu
        'add_new_item'          => __('Add New Book','textdomain'), // edit page
        'new_item'              => __('New Book','textdomain' ),
        'edit_item'             => __('Edit Book','textdomain' ),
        'view_item'             => __('View Book','textdomain' ),
        'all_items'             => __('All Books','textdomain' ),
        'search_items'          => __('Search Books','textdomain' ),
        'parent_item_colon'     => __('Parent Books:','textdomain' ),
        'not_found'             => __('No books found.','textdomain' ),
        'not_found_in_trash'    => __('No books found in Trash.','textdomain' ),
        'featured_image'        => _x('Book Cover Image','Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Book archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'Books list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'Books list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    ); 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'book' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-cart',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    ); 
    register_post_type('book',$args);     
    
    // Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Genres', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Genre', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Genres', 'textdomain' ),
		'all_items'         => __( 'All Genres', 'textdomain' ),
		'parent_item'       => __( 'Parent Genre', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Genre:', 'textdomain' ),
		'edit_item'         => __( 'Edit Genre', 'textdomain' ),
		'update_item'       => __( 'Update Genre', 'textdomain' ),
		'add_new_item'      => __( 'Add New Genre', 'textdomain' ),
		'new_item_name'     => __( 'New Genre Name', 'textdomain' ),
		'menu_name'         => __( 'Genre', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'genre' ),
	);

	register_taxonomy( 'genre', array( 'book' ), $args );
    
    // Add new taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name'                       => _x( 'Writers', 'taxonomy general name', 'textdomain' ),
		'singular_name'              => _x( 'Writer', 'taxonomy singular name', 'textdomain' ),
		'search_items'               => __( 'Search Writers', 'textdomain' ),
		'popular_items'              => __( 'Popular Writers', 'textdomain' ),
		'all_items'                  => __( 'All Writers', 'textdomain' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Writer', 'textdomain' ),
		'update_item'                => __( 'Update Writer', 'textdomain' ),
		'add_new_item'               => __( 'Add New Writer', 'textdomain' ),
		'new_item_name'              => __( 'New Writer Name', 'textdomain' ),
		'separate_items_with_commas' => __( 'Separate writers with commas', 'textdomain' ),
		'add_or_remove_items'        => __( 'Add or remove writers', 'textdomain' ),
		'choose_from_most_used'      => __( 'Choose from the most used writers', 'textdomain' ),
		'not_found'                  => __( 'No writers found.', 'textdomain' ),
		'menu_name'                  => __( 'Writers', 'textdomain' ),
	);

	$args = array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array('slug' => 'writer'),
	);

	register_taxonomy('writer', 'book', $args);
} 
add_action('init','wpdocs_codex_book_init');

if( file_exists( dirname( __FILE__ ) . '/gallery.php' ) ) {
	require_once( dirname( __FILE__ ) . '/gallery.php' );
}