<?php

/**
 * For full documentation, please visit: http://docs.reduxframework.com/
 * For a more extensive sample-config file, you may look at:
 * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
 */
if (! class_exists ( 'Redux' )) {
	return;
}

// This is your option name where all the Redux data is stored.
$opt_name = "redux_musique";

/**
 * ---> SET ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 */

$theme = wp_get_theme (); // For use with some settings. Not necessary.

$args = array (
		'opt_name' => $opt_name,
		'use_cdn' => TRUE,
		'page_slug' => '_options',
		'page_title' => 'Music Theme Options',
		'update_notice' => TRUE,
		'intro_text' => '<p>Introduction Text</p>',
		'footer_text' => '<p>Footer Text</p>',
		'admin_bar' => TRUE,
		'menu_type' => 'menu',
		'menu_title' => 'Theme Options',
		'allow_sub_menu' => TRUE,
		'page_parent_post_type' => 'your_post_type',
		'customizer' => TRUE,
		'default_mark' => '*',
		'hints' => array (
				'icon_position' => 'right',
				'icon_size' => 'normal',
				'tip_style' => array (
						'color' => 'light' 
				),
				'tip_position' => array (
						'my' => 'top left',
						'at' => 'bottom right' 
				),
				'tip_effect' => array (
						'show' => array (
								'duration' => '500',
								'event' => 'mouseover' 
						),
						'hide' => array (
								'duration' => '500',
								'event' => 'mouseleave unfocus' 
						) 
				) 
		),
		'output' => TRUE,
		'output_tag' => TRUE,
		'settings_api' => TRUE,
		'cdn_check_time' => '1440',
		'compiler' => TRUE,
		'page_permissions' => 'manage_options',
		'save_defaults' => TRUE,
		'show_import_export' => TRUE,
		'transient_time' => '3600',
		'network_sites' => TRUE,
		'display_version' => '1.0',
		'display_name' => 'Music Theme Options' ,
		'dev_mode' => false
);

// SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
$args ['share_icons'] [] = array (
		'url' => 'https://github.com/ReduxFramework/ReduxFramework',
		'title' => 'Visit us on GitHub',
		'icon' => 'el el-github' 
);
// 'img' => '', // You can use icon OR img. IMG needs to be a full URL.

$args ['share_icons'] [] = array (
		'url' => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
		'title' => 'Like us on Facebook',
		'icon' => 'el el-facebook' 
);
$args ['share_icons'] [] = array (
		'url' => 'http://twitter.com/reduxframework',
		'title' => 'Follow us on Twitter',
		'icon' => 'el el-twitter' 
);
$args ['share_icons'] [] = array (
		'url' => 'http://www.linkedin.com/company/redux-framework',
		'title' => 'Find us on LinkedIn',
		'icon' => 'el el-linkedin' 
);

Redux::setArgs ( $opt_name, $args );

/*
 * ---> END ARGUMENTS
 */

/*
 * ---> START HELP TABS
 */

$tabs = array (
		array (
				'id' => 'redux-help-tab-1',
				'title' => __ ( 'Theme Information 1', 'admin_folder' ),
				'content' => __ ( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' ) 
		),
		array (
				'id' => 'redux-help-tab-2',
				'title' => __ ( 'Theme Information 2', 'admin_folder' ),
				'content' => __ ( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' ) 
		) 
);
Redux::setHelpTab ( $opt_name, $tabs );

// Set the help sidebar
$content = __ ( '<p>This is the sidebar content, HTML is allowed.</p>', 'admin_folder' );
Redux::setHelpSidebar ( $opt_name, $content );

/*
 * <--- END HELP TABS
 */

/*
 *
 * ---> START SECTIONS
 *
 */
Redux::setSection ( $opt_name, array (
		'title' => __ ( 'General', 'musique' ),
		'id' => 'general',
		'icon' => 'el el-adjust-alt',
		'fields' => array (
				array (
						'id' => 'opt-layout',
						'type' => 'image_select',
						'title' => __ ( 'Site Layout', 'musique' ),
						'options'  => array(
						        'container-fluid'      => array(
						            'alt'   => 'full-width', 
						            'img'   => ReduxFramework::$_url.'assets/img/1col.png'
						        ),
						        'container'      => array(
						            'alt'   => 'fixed-width', 
						            'img'   => ReduxFramework::$_url.'assets/img/3cm.png'
						        )
						    ),
						    'default' => 'container'
				)
		)
) );


Redux::setSection ( $opt_name, array (
		'title' => __ ( 'Front Page', 'musique' ),
		'id' => 'front',
		'desc' => __ ( 'Basic fields as subsections.', 'musique' ),
		'icon' => 'el el-home' 
) );

Redux::setSection ( $opt_name, array (
		'title' => __ ( 'Front Page', 'musique' ),
		'id' => 'frontpage',
		'subsection' => true,
		'fields' => array (
				array (
						'id' => 'opt-homepage-layout',
						'type' => 'sorter',
						'title' => __ ( 'Homepage Layout Manager' ),
						'desc' => __ ( 'Organize how you want the layout to appear on the homepage' ),
						'options' => array (
								'enabled' => array (
										'slider' => 'Slider',
										'featured_video' => 'Featured Video' 
								),
								'disabled' => array ()
						) 
				),
				array(
						'id'       => 'opt-featured-video',
						'type'     => 'select',
						'title'    => 'Select Featured Video',
						'data'     => 'posts',
						'args'     => array('post_type' => array('video')),
						'default'  => '',
				),				
		) 
) );

Redux::setSection ( $opt_name, array (
		'title' => __ ( 'Home Slider', 'musique' ),
		'id' => 'homeslider',
		'icon' => 'el el-picture',
		'fields' => array (
				array (
						'id' => 'opt-slides',
						'type' => 'slides',
						'title' => __ ( 'Images Slider', 'musique' ),
						'subtitle' => __ ( 'Unlimited slides with drag and drop sortings.', 'musique' ),
						'desc' => __ ( 'This field will store all slides values into a multidimensional array to use into a foreach loop.', 'musique' ),
						'placeholder' => array (
								'title' => __ ( 'This is a title', 'musique' ),
								'description' => __ ( 'Description Here', 'musique' ),
								'url' => __ ( 'Give us a link!', 'musique' ) 
						) 
				),
				array (
						'id' => 'opt-slides-options',
						'type' => 'info',
						'desc' => __ ( "Slider Settings", 'musique' ) 
				),
				array (
						'id' => 'opt-slider-size-width',
						'type' => 'slider',
						'title' => __ ( 'Slider Max Width', 'musique' ),
						"default" => "400",
						"min" => "100",
						"step" => "10",
						"max" => "600" 
				),
				array (
						'id' => 'opt-slider-min-slides',
						'type' => 'slider',
						'title' => __ ( 'Slider Min Slides', 'musique' ),
						"default" => "2",
						"min" => "1",
						"step" => "1",
						"max" => "4" 
				),
				array (
						'id' => 'opt-slider-max-slides',
						'type' => 'slider',
						'title' => __ ( 'Slider Max Slides', 'musique' ),
						"default" => "2",
						"min" => "1",
						"step" => "1",
						"max" => "5" 
				),
				array (
						'id' => 'opt-slider-margin-slides',
						'type' => 'slider',
						'title' => __ ( 'Slider Margin Slides', 'musique' ),
						"default" => "30",
						"min" => "10",
						"step" => "5",
						"max" => "60" 
				),
				array (
						'id' => 'opt-slider-pager-slides',
						'type' => 'switch',
						'title' => __ ( 'Slider Pager Slides', 'musique' ),
						"default" => false 
				),
				array (
						'id' => 'opt-slider-captions-slides',
						'type' => 'switch',
						'title' => __ ( 'Slider Captions Slides', 'musique' ),
						'subtitle' => __ ( '', 'musique' ),
						"default" => true 
				),
				array (
						'id' => 'opt-slider-move-slides',
						'type' => 'slider',
						'title' => __ ( 'Slider Move Slides', 'musique' ),
						"default" => "1",
						"min" => "1",
						"step" => "1",
						"max" => "3" 
				) 
		) 
) );

Redux::setSection ( $opt_name, array (
		'title' => __ ( 'Styling', 'musique' ),
		'id' => 'style',
		'desc' => __ ( 'Basic fields as subsections.', 'musique' ),
		'icon' => 'el el-brush'
) );

Redux::setSection ( $opt_name, array (
		'title' => __ ( 'Background', 'musique' ),
		'id' => 'background',
		'subsection' => true,
		'fields' => array (
				array (
						'id' => 'opt-background',
						'type' => 'background',
						'compiler' => array (
								'body'
						),
						'title' => __ ( 'Site Background', 'musique' ),
						'default' => array (
								'background-color' => '#1e73be'
						)
				),
				array (
						'id' => 'opt-container-background',
						'type' => 'background',
						'compiler' => array (
								'.container'
						),
						'title' => __ ( 'Container Background', 'musique' ),
						'default' => array (
								'background-color' => '#eee'
						)
				),
				array (
						'id' => 'opt-footer-background',
						'type' => 'background',
						'compiler' => array (
								'#footer'
						),
						'title' => __ ( 'Footer Background', 'musique' ),
						'default' => array (
								'background-color' => '#222'
						)
				)				
		)
) );

Redux::setSection ( $opt_name, array (
		'title' => __ ( 'Typography', 'musique' ),
		'id' => 'typo',
		'subsection' => true,
		'fields' => array (
				array (
						'id' => 'opt-typography',
						'type' => 'typography',
						'title' => __ ( 'Typography', 'musique' ),
						'google' => true,
						'font-backup' => true,
						'compiler' => array (
								'h3.panel-title'
						),
						'font-backup' => false,
						'text-align' => false,
						'units' => 'px',
						'subtitle' => __ ( 'Typography option with each property can be called individually.', 'musique' ),
						'default' => array (
								'color' => '#81d742',
								'font-style' => '700',
								'font-family' => 'La Belle Aurore',
								'google' => true,
								'font-size' => '24px',
								'line-height' => '18px'
						)
				)
		)
) );

Redux::setSection ( $opt_name, array (
		'title' => __ ( 'Color', 'musique' ),
		'id' => 'color',
		'subsection' => true,
		'fields' => array (
				array (
						'id' => 'opt-color-link-footer',
						'type' => 'color',
						'title' => __ ( 'Footer Link Color', 'musique' ),
						'compiler' => array (
								'#footer a'
						),
						'default' => "#FFFFFF"
				)
		)
) );

Redux::setSection ( $opt_name, array (
		'title' => __ ( 'Artist Page', 'musique' ),
		'id' => 'artist',
		'icon' => 'el el-mic',
		'fields' => array (
				array (
						'id' => 'opt-artist-videos-number',
						'type' => 'slider',
						'title' => __ ( 'Number of videos to display', 'musique' ),
						"default" => "1",
						"min" => "0",
						"step" => "1",
						"max" => "3"
				),
				array (
						'id' => 'opt-artist-videos-orderby',
						'type' => 'select',
						'title' => __ ( 'Sort Parameter', 'musique' ),
						'options'  => array(
					        'date' => 'By Date',
					        'title' => 'By Title',
					        'rand' => 'Random'
					    ),
					    'default'  => '2',
				)				
		)
) );

/*
 * <--- END SECTIONS
 */

add_filter ( 'redux/options/' . $opt_name . '/compiler', 'musique_compiler_action', 10, 3 );
if (! function_exists ( 'musique_compiler_action' )) {
	function musique_compiler_action($options, $css, $changed_values) {
		global $wp_filesystem;
		
		$filename = get_template_directory () . '/css/redux_musique.css';
		// echo $filename;
		if (empty ( $wp_filesystem )) {
			require_once (ABSPATH . '/wp-admin/includes/file.php');
			WP_Filesystem ();
		}
		
		if ($wp_filesystem) {
			$wp_filesystem->put_contents ( $filename, $css, FS_CHMOD_FILE );
		}
	}
}

    