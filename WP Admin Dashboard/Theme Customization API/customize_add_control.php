<?php
//   $wp_customize->add_control( 'setting_id', array() );
//   $wp_customize->get_control( 'setting_id', array() );
//   $wp_customize->remove_control( 'setting_id', array() );

$wp_customize->add_control( 'setting_id', array(
    'instance_number'   => 0,
    'manager'           => '',
    'id'                => 'control_id',
    'settings'          => '',
    'setting'           => 'default',
    'capability'        => '',
    'priority'          => 10,
    'section'           => '',
    'label'             => '',
    'description'       => __( 'Control Description Text', 'text-domain'),
    'choices'           => array(),
    'input_attrs'       => array(),
    'allow_addition'    => false,
    'json'              => array(),
    'type'              => 'text', // 'text', 'checkbox', 'textarea', 'radio', 'select', and 'dropdown-pages'.
    'active_callback'   => array()
));