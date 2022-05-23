<?php

function prefix_setting_page_new_option() {
    
    add_settings_section(
        'string $id',
        'string $title',
        'callable $callback',
        'string $page'
    );

    add_settings_field(
        '$id = string, required',
        '$title = string, required',
        '$callback = callable, required, register_setting_ID',
        '$page = string, required, (
            general, writing, reading, discussion, media, permalink, privacy , misc, options        
        )',
        '$section = string, optional, default',
        '$args = array(
            "label_for" => "string",
            "class" => "string"
        ), optional'
    );

    register_setting(
        '$option_group = string, required (general, writing, reading, discussion, media, permalink, privacy , misc, options )',
        '$option_name = string, required',
        '$args = array(
            "type" => "string",
            "description" => "string",
            "sanitize_callback" => "callback",
            "show_in_rest" => "bool/array()",
            "default" => "mixed"
        )'
    );
}
add_action('admin_init','prefix_setting_page_new_options');