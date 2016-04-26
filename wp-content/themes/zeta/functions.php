<?php
	function zeta_setup() {

		// Header
		add_theme_support( 'title-tag' );

		// Menu personalizado
		register_nav_menus();

		// Thumb
		add_theme_support( 'post-thumbnails' );

		// Thumbs-size
		add_image_size( 'thumbs-projeto', 343, 300, array('center', 'center') );
		add_image_size( 'thumbs-equipe', 215, 215, array('center', 'center') );

		// Thumbs Post Admin
		add_filter('manage_posts_columns', 'posts_columns', 5);
		add_action('manage_posts_custom_column', 'posts_custom_columns', 5, 2);
		add_filter('manage_pages_columns', 'posts_columns', 5);
		add_action('manage_pages_custom_column', 'posts_custom_columns', 5, 2);
	}
	add_action( 'after_setup_theme', 'zeta_setup' );

	function image_path($post_id){
		$imagem = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ));
	}


	function posts_columns($defaults){
		$defaults['admin_post_thumb'] = __('Image');
		return $defaults;
	}

	function posts_custom_columns($column_name, $id){
		if($column_name === 'admin_post_thumb'){
			echo the_post_thumbnail( array(125,80) );
		}
	}

	function thumb($options = array()){
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($options['id']), 'thumbnail_size' );

		if (empty($thumb)) {
			$thumb[0] = get_template_directory_uri().'/images/sem-imagem.jpg';
		}

		$data = explode('/', $thumb[0]);

		return site_url(). '/thumb/cache/' . $data[5] . '/' . $data[6] . '/' . $options['width'] . 'x' . $options['height'] . '/' . $data[7];
	}

	function thumb_image($options = array()){
		$data = explode('/', $options['image']);
		return site_url(). '/thumb/cache/' . $data[5] . '/' . $data[6] . '/' . $options['width'] . 'x' . $options['height'] . '/' . $data[7];
	}