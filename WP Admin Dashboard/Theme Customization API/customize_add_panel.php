<?php
//   $wp_customize->add_panel( 'panel_id', array() );
//   $wp_customize->get_panel( 'panel_id', array() );
//   $wp_customize->remove_panel( 'panel_id', array() );

$wp_customize->add_panel( 'panel_id', array(
    'priority'          => 160,
    'capability'        => 'edit_theme_options',
    'theme_supports'    => 'string',
    'title'             => __( 'Panel Title Text', 'text-domain' ),
    'description'       => __( 'Panel Description Text', 'text-domain' ),
    'type'              => 'string',
    'active_callback'   => array(),
));