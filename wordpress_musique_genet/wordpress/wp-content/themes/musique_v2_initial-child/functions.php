<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/css/mystyle.css' );
}

function musique_image_size() {
	add_image_size ( 'preview', 450, 300, true );
	add_image_size ( 'cover', 450, 450, true );
	add_image_size ( 'normal', 750, 99999, false );
}
add_action ( 'after_setup_theme', 'musique_image_size' );