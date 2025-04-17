<?php
make_bangla_number ( $str ) {
    $English_Number = array( 0, 1, 2, 3, 4, 5, 6, 7, 8, 9 );
    $Bangla_Number = array( ‘০’, ‘১’, ‘২’, ‘৩’, ‘৪’, ‘৫’, ‘৬’, ‘৭’, ‘৮’, ‘৯’ );
    $Convert = str_replace ( $English_Number, $Bangla_Number, $str );
    return $Convert;
}
add_filter ( 'get_the_time' , 'make_bangla_number' );
add_filter ( 'the_date' , 'make_bangla_number' );
add_filter ( 'get_the_date' , 'make_bangla_number' );
add_filter ( 'comments_number' , 'make_bangla_number' );
add_filter ( 'get_comment_date' , 'make_bangla_number' );
add_filter ( 'get_comment_time' , 'make_bangla_number' );