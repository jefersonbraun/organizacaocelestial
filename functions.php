<?php

	function register_my_menus() {
		register_nav_menus(
			array(
			'principal' => __( 'Principal' ),
			'redes' => __( 'Redes' )
			)
		);
	}
	add_action( 'init', 'register_my_menus' );

    function custom_excerpt_length( $length ) {
        return 28;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
    
    function new_excerpt_more( $more ) {
	return '...';
    }
    add_filter('excerpt_more', 'new_excerpt_more');

    add_theme_support( 'post-thumbnails' );
    
    /* POST TYPE PARA CLIPES */
	add_action( 'init', 'create_post_type' );
		function create_post_type() {
			register_post_type( 'clipe',
				array(
					'labels' => array(
						'name' => __( 'Clipes' ),
						'singular_name' => __( 'Clipe' )
					),
				'public' => true,
				'has_archive' => true,
				)
		);
	}

?>