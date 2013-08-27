<?php

    function custom_excerpt_length( $length ) {
        return 28;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length' );

    add_theme_support( 'post-thumbnails' ); 

?>