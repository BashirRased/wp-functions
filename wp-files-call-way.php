<?php
get_header('filename'); // Ex: header-filename.php
get_header(); // Ex: header.php
get_footer();
get_sidebar();
get_search_form();
get_template_part('foldername/filename1'); // Ex: template-parts/content.php
get_template_part('foldername/filename1','filename2'); // Ex: template-parts/content-none.php

echo esc_url(get_template_directory_uri().'/filename.extansion');
echo esc_url(home_url('/'));
echo esc_url(home_url('/wp-admin/nav-menus.php'));