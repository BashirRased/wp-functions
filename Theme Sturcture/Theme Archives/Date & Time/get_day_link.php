<?php
	// post publish time archive
	$day   = get_the_date('d');
	$month = get_the_date('m');
	$year  = get_the_date('Y');

	// currect time archive
	$day   = current_time('d');
	$month = current_time('m');
	$year  = current_time('Y');
?>
<a href="<?php echo esc_url ( get_day_link($year, $month, $day) ); ?>"><?php the_date('j F Y'); ?></a>

<?php
	if ( is_day() ) {
		echo get_the_date('j F Y'); 
	}
	elseif ( is_month() ) {
		echo get_the_date('F - Y'); 
	}
	elseif ( is_year() ) {
		echo get_the_date('Y'); 
	}
?>