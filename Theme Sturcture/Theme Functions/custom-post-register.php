<?php
register_post_type(
    '$post_type = string, required',
    array(
        'label' => 'string',
        'labels' => array(
            'name' => array('Posts', 'Pages'),
            'singular_name (Admin bar show singular name)' => array('Post', 'Page'),
            'add_new (Add Create New/Edit Post)' => 'string',
            'add_new_item (Add Create New Post Page Title)' => 'string',
            'edit_item' => 'string',
            'new_item' => 'string',
            'view_item (Admin bar show extra view custom post link)' => 'string',
            'view_items' => 'string',
            'search_items (Search custom post button text)' => 'string',
            'not_found (Search custom post and nothing found message.)' => 'string',
            'not_found_in_trash (Custom post trash is emtry message.)' => 'string',
            'parent_item_colon' => 'string',
            'all_items (Custom post all items show sub-menu name)' => 'string',
            'archives' => 'string',
            'attributes' => 'string',
            'insert_into_item' => 'string',
            'uploaded_to_this_item' => 'string',
            'featured_image (Custom post featured image title text)' => 'string',
            'set_featured_image (Custom post featured image button text)' => 'string',
            'remove_featured_image (Custom post featured image remove button text)' => 'string',
            'use_featured_image' => 'string',
            'menu_name' => 'string',
            'filter_items_list' => 'string',
            'filter_by_date' => 'string',
            'items_list_navigation' => 'string',
            'items_list' => 'string',
            'item_published' => 'string',
            'item_published_privately' => 'string',
            'item_reverted_to_draft' => 'string',
            'item_scheduled' => 'string',
            'item_updated' => 'string',
            'item_link' => 'string',
            'item_link_description' => 'string',
        ),
        'description' => 'string',
        'public (Custom post show)' => 'bool, false',
        'hierarchical' => 'bool',
        'exclude_from_search' => 'bool',
        'publicly_queryable' => 'bool',
        'show_ui' => 'bool',
        'show_in_menu' => 'string/bool',
        'show_in_nav_menus (Show menu in nav menu area)' => 'bool, true',
        'show_in_admin_bar (Show menu with admin bar)' => 'bool, true',
        'show_in_rest' => 'bool',
        'rest_base' => 'string',
        'rest_controller_class' => 'string',
        'menu_position (Menu position set)' => 'int',
        'menu_icon (Menu icon set)' => 'string',
        'capability_type' => 'string',
        'capabilities' => 'string',
        'map_meta_cap' => 'bool',
        'supports' => array(
            'title', 'editor', 'comments', 'revisions', 'trackbacks', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields', 'post-formats'
        ),
        'register_meta_box_cb' => 'callable',
        'taxonomies' => array(),
        'has_archive' => 'string/bool',
        'rewrite (bool/array)(custom post slug)' => array(
            'slug' => 'string',
            'with_front' => 'bool',
            'feeds' => 'bool',
            'pages' => 'bool',
            'ep_mask' => 'int'
        ),
        'query_var' => 'string/bool',
        'can_export' => 'bool',
        'delete_with_user' => 'bool',
        'template' => array(),
        'template_lock' => 'string/false',
        '_builtin' => 'bool',
        '_edit_link' => 'string'
    )
);