<?php
/**
 * The template for displaying the header
 */
?>
<!DOCTYPEhtml>
<html <?php language_attributes (); ?>>
<head>
	<meta charset="<?php bloginfo ( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
	<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
</head>
<body <?php body_class (); ?>>

<?php get_template_part('template-parts/menu'); ?>


