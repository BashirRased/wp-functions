<?php
    if (has_nav_menu('header-menu')) {
        wp_nav_menu(array(
            'theme_location'        => 'header-menu',
            'container'             => 'nav',
            // 'container_class'       => 'container',
            // 'container_id'          => '',
            // 'container_aria_label'  => '',
            // 'menu'                  => 'ul',
            // 'menu_class'            => 'menu',
            // 'menu_id'               => '',
            // 'fallback_cb'           => 'wp_page_menu|false',
            // 'before'  => '',
            // 'after'  => '',
            // 'link_before'  => '',
            // 'link_after'  => 'header_menu',
            // 'echo'  => true,
            // 'depth'  => '0',
            // 'walker'  => 'header_menu',
            // 'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            // 'item_spacing'  => ''
        ));
    }
?>