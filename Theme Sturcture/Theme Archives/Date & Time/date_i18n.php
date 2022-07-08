
<!--
===============================
----- date_i18n structure -----
===============================
<?php date_i18n( $format, $timestamp_with_offset, $gmt ); ?>

===============================
----- date_i18n echo date -----
===============================
<?php esc_html_e ( date_i18n( get_option( 'date_format' ), current_time( 'timestamp' ) ), 'text-domain' ); ?>

===============================
----- date_i18n echo time -----
===============================
<?php esc_html_e ( date_i18n( get_option( 'time_format' ), current_time( 'timestamp' ) ), 'text-domain' ); ?>

=========================================
----- date_i18n echo copyright date -----
=========================================
<?php
echo date_i18n(
    /* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
    _x( 'Y', 'copyright date format', 'text-domain' )
);
?>
->