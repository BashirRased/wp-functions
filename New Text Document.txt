<?php
the_post_navigation(
	array(
		'prev_text' => '<i class="fa-solid fa-angle-left"></i> %title',
		'next_text' => '%title <i class="fa-solid fa-angle-right"></i>',
		
		// 'in_same_term' => 'true',
		// 'excluded_terms' => '',

		// 'taxonomy' => 'category',

		// 'screen_reader_text' => 'Post navigation',

		// Aria label with .post-navigation
		// 'aria_label' => 'Posts',

		// Class with nav.navigation
		'class' => 'prefix-post-navigation'
	)
);
?>