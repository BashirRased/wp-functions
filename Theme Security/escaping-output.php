<!-- For HTML Tag Inside Text -->
<?php esc_html_e("output","text-domain"); ?>

<!-- For HTML Attributes Inside URL -->
<?php echo esc_url("output"); ?>

<!-- For HTML Attributes Inside Unchangleable Text -->
<?php echo esc_attr("output"); ?>

<!-- For HTML Attributes Inside Changleable Text -->
<?php echo esc_attr("output","text-domain"); ?>


<a href="#" onclick="<?php echo esc_js('output'); ?>">
    <?php esc_html_e("Click Me","text-domain"); ?>
</a>
<textarea><?php echo esc_textarea("output","text-domain"); ?></textarea>

<?php
wp_kses_post($variable);

?>