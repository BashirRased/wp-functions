<?php

get_the_terms(
    '$post = int|WP_Post, Required',
    '$taxonomy = string, Required'
);

get_the_terms( get_the_ID(), 'taxonomy-name' );

?>