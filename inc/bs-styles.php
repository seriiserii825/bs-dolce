<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
function bs_dolce_scripts() {
	wp_enqueue_style( 'bs-dolce-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'bs-dolce-bootstrap-css', get_template_directory_uri().'/css/bootstrap.css');
	wp_enqueue_style( 'bs-dolce-fonts-css', get_template_directory_uri() . '/css/fonts.css' );
	wp_enqueue_style( 'bs-dolce-style-css', get_template_directory_uri() . '/css/style.css' );


	wp_enqueue_script( 'bs-dolce-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Регистрация jQuery
	add_action( 'wp_enqueue_scripts', 'jquery_script_method' );
	function jquery_script_method() {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.min.js');
		wp_enqueue_script( 'jquery' );
	}

	wp_enqueue_script('bs-core-js', get_template_directory_uri().'/js/core.min.js', ['jquery'], null, true);
	wp_enqueue_script( 'bs-script-js', get_template_directory_uri() . '/js/script.js', [ 'jquery' ], null, true );
}
add_action( 'wp_enqueue_scripts', 'bs_dolce_scripts' );
