<?php
register_taxonomy(
'$taxonomy(register_taxonomy_ID_name) = string, required (must not exceed 32 characters)',
'$object_type = string/array(
    post,
    page,
    attachment,
    revision,
    nav_menu_item,
    custom_css,
    customize_changeset,
    custom_post
)',
'$args = array(
    "labels" => array(),
    "description" => "string",
    "public" => "bool",
    "publicly_queryable" => "bool",
    "hierarchical" => "bool, false",
    "show_ui" => "bool, true",
    "show_in_menu" => "bool, true",
    "show_in_nav_menus" => "bool, true",
    "show_in_rest" => "bool",
    "rest_base" => "string",
    "rest_controller_class" => "string",
    "show_tagcloud" => "bool, true",
    "show_in_quick_edit" => "bool, true",
    "show_admin_column" => "bool, false",
    "meta_box_cb" => "bool/callable",
    "meta_box_sanitize_cb" => "callable",
    "capabilities" => "array(
        "manage_terms" => "string, manage_categories",
        "edit_terms" => "string, manage_categories",
        "delete_terms" => "string, manage_categories",
        "assign_terms" => "string, edit_posts"
    )",
    "rewrite" => "array(
        "slug" => "string, $taxonomy key",
        "with_front" => "bool, true",
        "hierarchical" => "bool, false",
        "ep_mask" => "int, EP_NONE"
    )",
    "query_var" => "string/bool",
    "update_count_callback" => "callable",
    "default_term" => "array(
        "name" => "string, term",
        "slug" => "string, term",
        "description" => "string, term"
    )",
    "sort" => "bool",
    "args" => "array()",
    "_builtin" => "bool, false"
)'
);