<?php
if (! function_exists ( 'musique_setup' )) :
	function musique_setup() {
		register_nav_menus ( array (
				'primary_navigation' => __( 'Primary Navigation', 'musique-v1' ),
				'footer_navigation' => __( 'Footer Navigation', 'musique-v1' ) 
		) );
		add_theme_support( 'custom-header' );
	}

endif;
add_action( 'after_setup_theme', 'musique_setup' );

if (! function_exists ( 'musique_widgets_init' )) :
	function musique_widgets_init() {
		register_sidebar ( array (
				'name' => __( 'Primary Sidebar', 'musique-v1' ),
				'id' => 'sidebar-1',
				'description' => __( 'Main sidebar that appears on the right.', 'musique' ),
				'before_widget' => '<div id="%1$s" class=""><div>',
				'after_widget' => '</div></div>',
				'before_title' => '<h1 class="hide-title">',
				'after_title' => '</h1>' 
		) );
	}

endif;
add_action( 'widgets_init', 'musique_widgets_init' );

if (! function_exists ( 'musique_scripts' )) :
	function musique_scripts() {
		wp_enqueue_script ( 'bootstrap-script', get_stylesheet_directory_uri () . '/bootstrap/dist/js/bootstrap.min.js', array (
				'jquery' 
		) );
		wp_enqueue_style ( 'bootstrap-style', get_stylesheet_directory_uri () . '/bootstrap/dist/css/bootstrap.css' );
		wp_enqueue_style ( 'musique-style', get_stylesheet_directory_uri () . '/css/musique.css' );
	}

endif;
add_action( 'wp_enqueue_scripts', 'musique_scripts' );
function musique_load_theme_textdomain() {
	load_theme_textdomain( 'musique-v1', get_template_directory() . '/languages' );
}
add_action ( 'after_setup_theme', 'musique_load_theme_textdomain' );
