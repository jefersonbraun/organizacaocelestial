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
    function my_custom_post_clipe() {
		$labels = array(
			'name'               => _x( 'Clipes', 'post type general name' ),
			'singular_name'      => _x( 'Clipe', 'post type singular name' ),
			'all_items'          => __( 'Todos os Clipes' ),
			'view_item'          => __( 'Página do clipe' ),
			'search_items'       => __( 'Procurar Clipe' ),
			'not_found'          => __( 'Nenhum clip encontrado' ),
			'not_found_in_trash' => __( 'Nenhum clip encontrado na lixeira' ), 
			'parent_item_colon'  => '',
			'menu_name'          => 'Clipes'
		);
		$args = array(
			'labels'        => $labels,
			'description'   => 'Holds our products and product specific data',
			'public'        => true,
			'menu_position' => 5,
			'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
			'has_archive'   => true,
		);
		register_post_type( 'clipe', $args );
	}
	add_action( 'init', 'my_custom_post_clipe' );

	/* METABOX DO POST TYPE PARA LINK DO YOUTBE.  NÃO ESTÁ FUNCIONANDO! */
	
	add_action( 'load-post.php', 'youtube_embed_setup' );
	add_action( 'load-post-new.php', 'youtube_embed_setup' );
	
	/* Meta box setup function. */
	function youtube_embed_setup() {
	
		/* Add meta boxes on the 'add_meta_boxes' hook. */
		add_action( 'add_meta_boxes', 'youtube_embed' );
		/* Save post meta on the 'save_post' hook. */
		add_action( 'save_post', 'youtube_embed_save', 10, 2 );
	}
	
	/* Create one or more meta boxes to be displayed on the post editor screen. */
	function youtube_embed() {
	
		add_meta_box(
			'youtube-url',			// Unique ID
			esc_html__( 'URL do vídeo no Youtube', 'example' ),		// Title
			'youtube_embed_meta_box',		// Callback function
			'clipe',					// Admin page (or post type)
			'side',					// Context
			'default'					// Priority
		);
	}

	/* Display the post meta box. */
	function youtube_embed_meta_box( $object, $box ) { ?>
	
		<?php wp_nonce_field( basename( __FILE__ ), 'youtube_embed_nonce' ); ?>
	
		<p>
			<label for="smashing-post-class"><?php _e( "Insira a URL do vídeo no Youtube.", 'example' ); ?></label>
			<br />
			<input class="widefat" type="text" name="smashing-post-class" id="smashing-post-class" value="<?php echo esc_attr( get_post_meta( $object->ID, 'youtube_embed', true ) ); ?>" size="30" />
		</p>
	<?php }
	
	/* Save the meta box's post metadata. */
	function youtube_embed_save( $post_id, $post ) {
	
	/* Verify the nonce before proceeding. */
	if ( !isset( $_POST['youtube_embed_nonce'] ) || !wp_verify_nonce( $_POST['smashing_post_class_nonce'], basename( __FILE__ ) ) )
		return $post_id;
	
	/* Get the post type object. */
	$post_type = get_post_type_object( $post->post_type );
	
	/* Check if the current user has permission to edit the post. */
	if ( !current_user_can( $post_type->cap->edit_post, $post_id ) )
		return $post_id;
	
	/* Get the posted data and sanitize it for use as an HTML class. */
	$new_meta_value = ( isset( $_POST['youtube_embed'] ) ? sanitize_html_class( $_POST['youtube_embed'] ) : '' );
	
	/* Get the meta key. */
	$meta_key = 'youtube_embed';
	
	/* Get the meta value of the custom field key. */
	$meta_value = get_post_meta( $post_id, $meta_key, true );
	
	/* If a new meta value was added and there was no previous value, add it. */
	if ( $new_meta_value && '' == $meta_value )
		add_post_meta( $post_id, $meta_key, $new_meta_value, true );
	
	/* If the new meta value does not match the old value, update it. */
	elseif ( $new_meta_value && $new_meta_value != $meta_value )
		update_post_meta( $post_id, $meta_key, $new_meta_value );
	
	/* If there is no new meta value but an old value exists, delete it. */
	elseif ( '' == $new_meta_value && $meta_value )
		delete_post_meta( $post_id, $meta_key, $meta_value );
	}

	
?>