<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 */
if (! function_exists ( 'musique_setup' )) :
	function musique_setup() {
		load_theme_textdomain( 'musique', get_template_directory() . '/languages' );
		register_nav_menus ( array (
				'primary_navigation' => __( 'Primary Navigation', 'musique' ),
				'footer_navigation' => __( 'Footer Navigation', 'musique' ) 
		) );
		
		add_theme_support ( 'custom-header' );
		add_theme_support ( 'post-thumbnails' );
		
		add_image_size ( 'preview', 450, 300, true );
		add_image_size ( 'cover', 450, 450, true );
		add_image_size ( 'normal', 750, 99999, false );
		
		
	}
endif;
add_action ( 'after_setup_theme', 'musique_setup' );

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 */
if (! function_exists ( 'musique_widgets_init' )) :
	function musique_widgets_init() {
		register_sidebar ( array (
				'name' => __ ( 'Primary Sidebar', 'musique' ),
				'id' => 'sidebar-1',
				'description' => __ ( 'Main sidebar that appears on the right.', 'musique' ),
				'before_widget' => '<div id="%1$s" class="panel panel-default"><div class="panel-heading">',
				'after_widget' => '</div></div>',
				'before_title' => '<h3 class="panel-title">',
				'after_title' => '</h3></div><div class="panel-body">' 
		) );
	}
endif;
add_action ( 'widgets_init', 'musique_widgets_init' );