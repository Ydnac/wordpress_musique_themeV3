<?php
function musique_artiste_type() {

	$labels = array(
		'name'                  => _x( 'Artists', 'Post Type General Name', 'musique' ),
		'singular_name'         => _x( 'Artist', 'Post Type Singular Name', 'musique' ),
		'menu_name'             => __( 'Artists', 'musique' ),
		'name_admin_bar'        => __( 'Artist', 'musique' ),
		'archives'              => __( 'All Archives Artist', 'musique' ),
		'parent_item_colon'     => __( 'Parent Artist:', 'musique' ),
		'all_items'             => __( 'All Artists', 'musique' ),
		'add_new_item'          => __( 'Add New Artist', 'musique' ),
		'add_new'               => __( 'Add New', 'musique' ),
		'new_item'              => __( 'New Item', 'musique' ),
		'edit_item'             => __( 'Edit Artist', 'musique' ),
		'update_item'           => __( 'Update Artist', 'musique' ),
		'view_item'             => __( 'View Artist', 'musique' ),
		'search_items'          => __( 'Search Artist', 'musique' ),
		'not_found'             => __( 'Not Artist found', 'musique' ),
		'not_found_in_trash'    => __( 'Not Artist found in Trash', 'musique' ),
		'featured_image'        => __( 'Featured Image', 'musique' ),
		'set_featured_image'    => __( 'Set featured image', 'musique' ),
		'remove_featured_image' => __( 'Remove featured image', 'musique' ),
		'use_featured_image'    => __( 'Use as featured image', 'musique' ),
		'insert_into_item'      => __( 'Insert into item', 'musique' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'musique' ),
		'items_list'            => __( 'Items list', 'musique' ),
		'items_list_navigation' => __( 'Items list navigation', 'musique' ),
		'filter_items_list'     => __( 'Filter items list', 'musique' ),
	);
	$args = array(
		'label'                 => __( 'Artist', 'musique' ),
		'description'           => __( 'Artist Label', 'musique' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-businessman',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'artist', $args );

}
add_action( 'init', 'musique_artiste_type', 0 );

function musique_video_type() {

	$labels = array(
			'name'                  => _x( 'Videos', 'Post Type General Name', 'musique' ),
			'singular_name'         => _x( 'Video', 'Post Type Singular Name', 'musique' ),
			'menu_name'             => __( 'Videos', 'musique' ),
			'name_admin_bar'        => __( 'Video', 'musique' ),
			'archives'              => __( 'All Archives Video', 'musique' ),
			'parent_item_colon'     => __( 'Parent Video:', 'musique' ),
			'all_items'             => __( 'All Videos', 'musique' ),
			'add_new_item'          => __( 'Add New Video', 'musique' ),
			'add_new'               => __( 'Add New', 'musique' ),
			'new_item'              => __( 'New Item', 'musique' ),
			'edit_item'             => __( 'Edit Video', 'musique' ),
			'update_item'           => __( 'Update Video', 'musique' ),
			'view_item'             => __( 'View Video', 'musique' ),
			'search_items'          => __( 'Search Video', 'musique' ),
			'not_found'             => __( 'Not Video found', 'musique' ),
			'not_found_in_trash'    => __( 'Not Video found in Trash', 'musique' ),
			'featured_image'        => __( 'Featured Image', 'musique' ),
			'set_featured_image'    => __( 'Set featured image', 'musique' ),
			'remove_featured_image' => __( 'Remove featured image', 'musique' ),
			'use_featured_image'    => __( 'Use as featured image', 'musique' ),
			'insert_into_item'      => __( 'Insert into item', 'musique' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'musique' ),
			'items_list'            => __( 'Items list', 'musique' ),
			'items_list_navigation' => __( 'Items list navigation', 'musique' ),
			'filter_items_list'     => __( 'Filter items list', 'musique' ),
	);
	$args = array(
			'label'                 => __( 'Video', 'musique' ),
			'description'           => __( 'Artist Video', 'musique' ),
			'labels'                => $labels,
			'supports'              => array( 'title','thumbnail'),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-video-alt2',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'post',
	);
	register_post_type( 'video', $args );

}
add_action( 'init', 'musique_video_type', 0 );

function concert_type() {

	$labels = array(
			'name'                  => _x( 'Concerts', 'Post Type General Name', 'musique' ),
			'singular_name'         => _x( 'Concert', 'Post Type Singular Name', 'musique' ),
			'menu_name'             => __( 'Concerts', 'musique' ),
			'name_admin_bar'        => __( 'Concert', 'musique' ),
			'archives'              => __( 'All Concerts Archives', 'musique' ),
			'parent_item_colon'     => __( 'Parent Concert:', 'musique' ),
			'all_items'             => __( 'All Concerts', 'musique' ),
			'add_new_item'          => __( 'Add New Concert', 'musique' ),
			'add_new'               => __( 'Add New', 'musique' ),
			'new_item'              => __( 'New Item', 'musique' ),
			'edit_item'             => __( 'Edit Concert', 'musique' ),
			'update_item'           => __( 'Update Concert', 'musique' ),
			'view_item'             => __( 'View Concert', 'musique' ),
			'search_items'          => __( 'Search Concert', 'musique' ),
			'not_found'             => __( 'Not Concert found', 'musique' ),
			'not_found_in_trash'    => __( 'Not Concert found in Trash', 'musique' ),
			'featured_image'        => __( 'Featured Image', 'musique' ),
			'set_featured_image'    => __( 'Set featured image', 'musique' ),
			'remove_featured_image' => __( 'Remove featured image', 'musique' ),
			'use_featured_image'    => __( 'Use as featured image', 'musique' ),
			'insert_into_item'      => __( 'Insert into item', 'musique' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'musique' ),
			'items_list'            => __( 'Items list', 'musique' ),
			'items_list_navigation' => __( 'Items list navigation', 'musique' ),
			'filter_items_list'     => __( 'Filter items list', 'musique' ),
	);
	$args = array(
			'label'                 => __( 'Concert', 'musique' ),
			'description'           => __( 'Concert', 'musique' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail', ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 10,
			'menu_icon'             => 'dashicons-format-audio',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'post',
	);
	register_post_type( 'concert', $args );

}
add_action( 'init', 'concert_type', 0 );