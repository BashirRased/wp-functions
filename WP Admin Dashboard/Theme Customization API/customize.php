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
        $wp_customize->add_setting( 'setting_id', array(
            'sanitize_callback' => 'sanitize_text_field'
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