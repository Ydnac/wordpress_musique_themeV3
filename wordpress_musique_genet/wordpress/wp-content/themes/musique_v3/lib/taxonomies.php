<?php
function musique_style_taxonomy() {

	$labels = array(
			'name'                       => _x( 'Music Styles', 'Taxonomy General Name', 'musique' ),
			'singular_name'              => _x( 'Music Style', 'Taxonomy Singular Name', 'musique' ),
			'menu_name'                  => __( 'Music Styles', 'musique' ),
			'all_items'                  => __( 'All Music Styles', 'musique' ),
			'parent_item'                => __( 'Parent Music Styles', 'musique' ),
			'parent_item_colon'          => __( 'Parent Music Styles:', 'musique' ),
			'new_item_name'              => __( 'New Music Style Name', 'musique' ),
			'add_new_item'               => __( 'Add New Music Style', 'musique' ),
			'edit_item'                  => __( 'Edit Music Style', 'musique' ),
			'update_item'                => __( 'Update Music Style', 'musique' ),
			'view_item'                  => __( 'View Item', 'musique' ),
			'separate_items_with_commas' => __( 'Separate Music Styles with commas', 'musique' ),
			'add_or_remove_items'        => __( 'Add or remove Music Styles', 'musique' ),
			'choose_from_most_used'      => __( 'Choose from the most used Music Style', 'musique' ),
			'popular_items'              => __( 'Popular Music Styles', 'musique' ),
			'search_items'               => __( 'Search Music Styles', 'musique' ),
			'not_found'                  => __( 'Not Music Styles Found', 'musique' ),
			'no_terms'                   => __( 'No items', 'musique' ),
			'items_list'                 => __( 'Items list', 'musique' ),
			'items_list_navigation'      => __( 'Items list navigation', 'musique' ),
	);
	$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
	);
	register_taxonomy( 'musique_style', array( 'artist' ), $args );

}
add_action( 'init', 'musique_style_taxonomy', 0 );

function concert_location_taxonomy() {

	$labels = array(
			'name'                       => _x( 'Concert Locations', 'Taxonomy General Name', 'musique' ),
			'singular_name'              => _x( 'Concert Location', 'Taxonomy Singular Name', 'musique' ),
			'menu_name'                  => __( 'Concert Locations', 'musique' ),
			'all_items'                  => __( 'All Concert Locations', 'musique' ),
			'parent_item'                => __( 'Parent Concert Locations', 'musique' ),
			'parent_item_colon'          => __( 'Parent Concert Locations:', 'musique' ),
			'new_item_name'              => __( 'New Concert Location Name', 'musique' ),
			'add_new_item'               => __( 'Add New Concert Location', 'musique' ),
			'edit_item'                  => __( 'Edit Concert Location', 'musique' ),
			'update_item'                => __( 'Update Concert Location', 'musique' ),
			'view_item'                  => __( 'View Item', 'musique' ),
			'separate_items_with_commas' => __( 'Separate Concert Locations with commas', 'musique' ),
			'add_or_remove_items'        => __( 'Add or remove Concert Locations', 'musique' ),
			'choose_from_most_used'      => __( 'Choose from the most used Concert Location', 'musique' ),
			'popular_items'              => __( 'Popular Concert Locations', 'musique' ),
			'search_items'               => __( 'Search Concert Locations', 'musique' ),
			'not_found'                  => __( 'Not Concert Locations Found', 'musique' ),
			'no_terms'                   => __( 'No items', 'musique' ),
			'items_list'                 => __( 'Items list', 'musique' ),
			'items_list_navigation'      => __( 'Items list navigation', 'musique' ),
	);
	$args = array(
			'labels'                     => $labels,
			'hierarchical'               => false,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
	);
	register_taxonomy( 'concert_location', array( 'concert' ), $args );

}
add_action( 'init', 'concert_location_taxonomy', 0 );

function concert_date_taxonomy() {

	$labels = array(
			'name'                       => _x( 'Concert Dates', 'Taxonomy General Name', 'musique' ),
			'singular_name'              => _x( 'Concert Date', 'Taxonomy Singular Name', 'musique' ),
			'menu_name'                  => __( 'Concert Dates', 'musique' ),
			'all_items'                  => __( 'All Concert Dates', 'musique' ),
			'parent_item'                => __( 'Parent Concert Dates', 'musique' ),
			'parent_item_colon'          => __( 'Parent Concert Dates:', 'musique' ),
			'new_item_name'              => __( 'New Concert Date Name', 'musique' ),
			'add_new_item'               => __( 'Add New Concert Date', 'musique' ),
			'edit_item'                  => __( 'Edit Concert Date', 'musique' ),
			'update_item'                => __( 'Update Concert Date', 'musique' ),
			'view_item'                  => __( 'View Item', 'musique' ),
			'separate_items_with_commas' => __( 'Separate Concert Dates with commas', 'musique' ),
			'add_or_remove_items'        => __( 'Add or remove Concert Dates', 'musique' ),
			'choose_from_most_used'      => __( 'Choose from the most used Concert Date', 'musique' ),
			'popular_items'              => __( 'Popular Concert Dates', 'musique' ),
			'search_items'               => __( 'Search Concert Dates', 'musique' ),
			'not_found'                  => __( 'Not Concert Dates Found', 'musique' ),
			'no_terms'                   => __( 'No items', 'musique' ),
			'items_list'                 => __( 'Items list', 'musique' ),
			'items_list_navigation'      => __( 'Items list navigation', 'musique' ),
	);
	$args = array(
			'labels'                     => $labels,
			'hierarchical'               => false,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
	);
	register_taxonomy( 'concert_date', array( 'concert' ), $args );

}
add_action( 'init', 'concert_date_taxonomy', 0 );