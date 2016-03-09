<?php
/**
 * The main template file
 */
?>
<div class="container">
<?php get_header(); ?>
<div class="row">
<?php if ( have_posts() ) : ?>
	<div class="col-md-8">
		<div class="row">
			<div class="col-md-12">
			<?php while (have_posts()) : the_post(); ?>
				<?php 
					get_template_part( 'template-parts/content', 'artist' );
				?>
			<?php endwhile; ?>
			</div>
		</div>
	</div>
<?php else : ?>
	<div class="col-md-12">
	<?php 
		get_template_part( 'template-parts/content', 'none' );
	?>
	</div>
<?php endif; ?>
</div>
<?php get_footer();?>
</div>