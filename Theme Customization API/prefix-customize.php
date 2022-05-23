<?php
// add_action('customize_register','prefix_customize_register');
// function prefix_customize_register( $prefix_customize ) {
//   $prefix_customize->add_panel();
//   $prefix_customize->get_panel();
//   $prefix_customize->remove_panel();
 
//   $prefix_customize->add_section();
//   $prefix_customize->get_section();
//   $prefix_customize->remove_section();
 
//   $prefix_customize->add_setting();
//   $prefix_customize->get_setting();
//   $prefix_customize->remove_setting();
 
//   $prefix_customize->add_control();
//   $prefix_customize->get_control();
//   $prefix_customize->remove_control();
// }

// https://developer.wordpress.org/themes/customize-api/customizer-objects/

/*
Panel & Section Priority Values:
================================
Site Title & Tagline (title_tagline)    => 20
Colors (colors)                         => 40
Header Image (header_image)             => 60
Background Image (background_image)     => 80
Menus (Panel) (nav_menus)               => 100
Widgets (Panel) (widgets)               => 110
Static Front Page (static_front_page)   => 120
default                                 => 160
Additional CSS (custom_css)             => 200
*/
function prefix_customize_register($prefix_customize) {

    // Customize Panel Options
    $prefix_customize->add_panel('panel_id', array(
        // 'priority' => 160,
        // 'capability' => 'edit_theme_options',
        // 'theme_supports' => 'string',
        'title' => __('Panel Title Text', 'text-domain'),
        // 'description' => __('Description Text', 'text-domain'),
        // 'type' => 'string',
        // 'active_callback' => array(),

    ));
   
    // Customize Section Options
    $prefix_customize->add_section('section_id', array(
        // 'priority' => 10,
        'panel' => 'panel_id',
        // 'capability' => 'edit_theme_options',
        // 'theme_supports' => 'string',
        'title' => __('Section Title Text', 'text-domain'),
        // 'type' => 'string',
        // 'active_callback' => array(),
        // 'description_hidden' => false,
    ) );
   
    // Customize Setting Options
    $prefix_customize->add_setting('setting_id', array(
        // 'type' => 'theme_mod',
        // 'capability' => 'edit_theme_options',
        // 'theme_supports' => 'string',
        // 'default' => 'string',
        // 'transport' => 'refresh', // or postMessage
        // 'validate_callback' => '',

        'sanitize_callback' => 'sanitize_text_field',
        /* Sanitize Callback Values:
            sanitize_email
            sanitize_file_name
            sanitize_html_class
            sanitize_key
            sanitize_meta
            sanitize_mime_type
            sanitize_option
            sanitize_sql_orderby
            sanitize_text_field
            sanitize_title
            sanitize_title_for_query
            sanitize_title_with_dashes
            sanitize_user
            esc_url_raw
            wp_filter_post_kses
            wp_filter_nohtml_kses
        */

        // 'sanitize_js_callback' => '', // Basically to_json.
        // 'dirty' => ''
    ));
   
    // Customize Control Options
    $prefix_customize->add_control('setting_id', array(
        // 'instance_number' => 'int',
        // 'manager' => 'int',
        // 'id' => 'control_id',
        // 'settings' => array(),
        // 'setting' => 'setting_id',
        // 'capability' => 'add_setting',
        // 'priority' => 10,
        'section' => 'section_id',
        // 'label' => 'string',
        // 'description' => 'string',
        // 'choices' => 'radio|select',
        // 'input_attrs' => array(),
        // 'allow_addition' => 'bool - dropdown-pages control',
        // 'json' => array(),

        'type' => 'number', // Type Values: text, hidden, number, range, url, tel, email, search, time, date, datetime, and week.

        // 'active_callback' => array(),
    ));
}
add_action('customize_register','prefix_customize_register');
