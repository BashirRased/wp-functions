<?php
function prefix_assets_loaded(){
    
    // CSS file loaded
    wp_enqueue_style(
        '$handle = string, required',
        'prefix-name-css',
        
        '$src = string, optional',
        // root folder style.css
        get_stylesheet_uri(),
        // others css file loading
        get_template_directory_uri().'assets/style.css',
        
        '$deps = array()',
        
        '$ver =  string|bool|null, optional, false',
        // version
        time() == randam,
        '1.0.0',
        true == 1,
        false == 'WordPress Version',
        '' == 'WordPress Version',
        $theme_version = wp_get_theme()->get('Version'),
        
        '$media = , string, optional, all',
        'all'
    );
    
    // JS file loaded
    wp_enqueue_script(
        '$handle = string, required',
        'prefix-name-js',
        
        '$src = string, optional',
        // others css file loading
        get_template_directory_uri().'assets/custom.js',
        
        '$deps = string|array(), optional',
        array('jquery'),
        
        '$ver = string|bool|null, optional, false',
        // version
        time() == randam,
        '1.0.0',
        true == 1,
        false == 'WordPress Version',
        '' == 'WordPress Version',
        $theme_version = wp_get_theme()->get('Version'),
        
        '$in_footer = bool, optional, false',
        true
    );
}

// Assets load with public site
add_action('wp_enqueue_scripts', 'prefix_assets_loaded');

// Assets load with WordPress dashboard
add_action('admin_enqueue_scripts', 'prefix_assets_loaded');