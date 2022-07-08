<?php
//   $wp_customize->add_section( 'section_id', array() );
//   $wp_customize->get_section( 'section_id', array() );
//   $wp_customize->remove_section( 'section_id', array() );

$wp_customize->add_section( 'section_id', array(
    'priority'              => 160,
    'panel'                 => 'string',
    'capability'            => 'edit_theme_options',
    'theme_supports'        => 'string',
    'title'                 => __( 'Panel Title Text', 'text-domain' ),
    'description'           => __( 'Panel Description Text', 'text-domain' ),
    'type'                  => 'string',
    'active_callback'       => array(),
    'description_hidden'    => false,
));