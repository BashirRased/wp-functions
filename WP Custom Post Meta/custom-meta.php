<?php
get_post_meta(
'$post_id = int, required',
'$key = string, optional',
'$single = bool, optional, false'
);
echo get_post_meta(get_the_ID(), $key, $single);