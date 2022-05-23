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

sprintf(
    // %2$s
);
// Parameter Values:
// =================
// 01. %% - Returns a percent sign
// 02. %b - Binary number
// 03. %c - The character according to the ASCII value
// 04. %d - Signed decimal number (negative, zero or positive)
// 05. %e - Scientific notation using a lowercase (e.g. 1.2e+2)
// 06.%E - Scientific notation using a uppercase (e.g. 1.2E+2)
// %u - Unsigned decimal number (equal to or greather than zero)
// %f - Floating-point number (local settings aware)
// %F - Floating-point number (not local settings aware)
// %g - shorter of %e and %f
// %G - shorter of %E and %f
// %o - Octal number
// %s - String
// %x - Hexadecimal number (lowercase letters)
// %X - Hexadecimal number (uppercase letters)
?>