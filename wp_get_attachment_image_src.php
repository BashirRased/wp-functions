<?php
wp_get_attachment_image_src( int $attachment_id, string|int[] $size = ‘thumbnail’, bool $icon = false );

Parameters

$attachment_id
intrequired
    Image attachment ID.
$size
string|int[]optional
    Image size. Accepts any registered image size name, or an array of width and height values in pixels (in that order). Default 'thumbnail'.

    Default:'thumbnail'
$icon
booloptional
    Whether the image should fall back to a mime type icon.

    Default:false

Return
array|false Array of image data, or boolean false if no image is available.

    0 string
    Image source URL.
    1 int
    Image width in pixels.
    2 int
    Image height in pixels.
    3 bool
    Whether the image is a resized image.

