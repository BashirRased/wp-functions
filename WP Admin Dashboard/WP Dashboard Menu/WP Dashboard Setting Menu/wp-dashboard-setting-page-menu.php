<?php

if ( ! function_exists( 'prefix_setting_page_new_option' ) ) {

    function prefix_setting_page_new_option() {
    
        add_settings_section(
            'register_setting_id',
            __( 'Section Title Text', 'text-domain' ),
            'callable',
            'add_options_page' // 'general', 'reading', 'writing', 'discussion', 'media', 'permalink', 'privacy' & cutom.
        );
    
        add_settings_field(
            'field_id',
            __( 'Field Title Text', 'text-domain' ),
            'register_setting_id',
            'add_options_page', // 'general', 'reading', 'writing', 'discussion', 'media', 'permalink', 'privacy' & cutom.
            'default',
            array(
                "label_for" => "string",
                "class" => "string"
            )
        );
    
        register_setting(
            '$option_group', // 'general', 'reading', 'writing', 'discussion', 'media', 'permalink', 'privacy' & cutom.
            '$option_name',
            array(
                "type" => "string", // 'string', 'boolean', 'integer', 'number', 'array', and 'object'.
                "description" => "string",
                "sanitize_callback" => "sanitize_text_field",
                "show_in_rest" => "",
                "default" => ""
            )
        );
    }

}
add_action( 'admin_init', 'prefix_setting_page_new_options' );