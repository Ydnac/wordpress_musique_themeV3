<?php
/**
 * The main template file
 */
?>
<div class="container">

<div class="row">
<?php get_header(); ?>
</div>

<div class="row">
	
	<div class="col-md-8">
		<?php if ( have_posts() ) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php
				get_template_part ( 'template-parts/content', get_post_format () );
				?>
			<?php endwhile; ?>
		<?php else : ?>
			<?php
			get_template_part ( 'template-parts/content', 'none' );
			?>
		<?php endif; ?>
	</div>
	
<div class="col-md-4">
<?php get_sidebar();?>
</div>

</div>

<?php get_footer();?>

</div>

