<?php 
	
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size('medium');
	add_theme_support('custom-background');


	if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
    	// File does not exist... return an error.
    	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
	} else {
    	// File exists... require it.
    	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
	}

	function registrar_menu_navegacao() {
		registrar_nav_menu('header-menu', 'main_menu');
	}
	add_action('init', 'registrar_menu_navegacao');