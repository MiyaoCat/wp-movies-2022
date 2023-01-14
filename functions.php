<?php 
	
	function getFile($path) {
		return dirname(__FILE__) . '/' . $path;
	}
	
	// load css into the website's front-end
	function mytheme_enqueue_style() {
	    wp_enqueue_style( 'mytheme-style', get_stylesheet_uri() ); 
	}

	add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_style' );


	function register_my_menu() {
		register_nav_menu('header-menu',__( 'Header Menu' ));
	}

	add_action( 'init', 'register_my_menu' );

	