<?php

if ( ! function_exists( 'prefix_customize_register' ) ) {

    function prefix_customize_register( $wp_customize ) {

        // Customize Panel Options
        $wp_customize->add_panel( 'panel_id', array(
            'title' => __( 'Panel Title Text', 'text-domain' )
        ));
       
        // Customize Section Options
        $wp_customize->add_section( 'section_id', array(
            'panel' => 'panel_id',
            'title' => __( 'Section Title Text', 'text-domain' ),
        ));
       
        // Customize Setting Options
        // $wp_customize->add_setting( 'setting_id', array() );
        // $wp_customize->get_setting( 'setting_id', array() );
        // $wp_customize->remove_setting( 'setting_id', array() );
        $wp_customize->add_setting( 'setting_id', array(
            'type'                  => 'theme_mod',
            'capability'            => 'edit_theme_options',
            'theme_supports'        => 'string',
            'default'               => '',
            'transport'             => 'refresh', // 'refresh' or 'postMessage'
            'validate_callback'     => '',
            'sanitize_callback'     => '',
            'sanitize_js_callback'  => '',
            'dirty'                 => false,
        ));
       
        // Customize Control Options
        $wp_customize->add_control( 'setting_id', array(
            'id' => 'control_id',
            'section' => 'section_id',
            'type' => 'text',
        ));
    }
    
}
add_action( 'customize_register','prefix_customize_register' );

// Frontend Usage
echo get_theme_mod('variable_name');