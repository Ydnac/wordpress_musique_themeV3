<?php
if (! function_exists ( 'musique_scripts' )) :
	function musique_scripts() {
		wp_enqueue_script ( 'bootstrap-script', get_template_directory_uri () . '/bootstrap/dist/js/bootstrap.min.js', array (
				'jquery' 
		) );
		wp_enqueue_style ( 'bootstrap-style', get_template_directory_uri () . '/bootstrap/dist/css/bootstrap.css' );
		wp_enqueue_style ( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );
		wp_enqueue_style ( 'musique-style', get_template_directory_uri () . '/css/musique.css' );
		wp_enqueue_style ( 'options-style', get_template_directory_uri () . '/css/redux_musique.css' );
	}


endif;
add_action ( 'wp_enqueue_scripts', 'musique_scripts' );

function musique_sliders_scripts() {
	if (is_home ()) {
		wp_enqueue_script ( 'bxslider-script', get_template_directory_uri () . '/assets/js/jquery.bxslider/jquery.bxslider.js', array (
				'jquery' 
		) );
		wp_enqueue_style ( 'bxslider-style', get_template_directory_uri () . '/assets/js/jquery.bxslider/jquery.bxslider.css' );
		wp_enqueue_script ( 'mybxslider-script', get_template_directory_uri () . '/js/bxslider.js', array () );		
	}
}
add_action ( 'wp_enqueue_scripts', 'musique_sliders_scripts' );