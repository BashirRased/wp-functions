<?php
//   $wp_customize->add_setting( 'setting_id', array() );
//   $wp_customize->get_setting( 'setting_id', array() );
//   $wp_customize->remove_setting( 'setting_id', array() );

$wp_customize->add_setting( 'setting_id', array(
    'type'                  => 'theme_mod',
    'capability'            => 'edit_theme_options',
    'theme_supports'        => 'string',
    'default'               => '',
    'transport'             => 'refresh', // 'refresh' or 'postMessage'
    'validate_callback'     => '',
    'sanitize_callback'     => '',
    'sanitize_js_callback'  => '',
    'dirty'    => false,
));