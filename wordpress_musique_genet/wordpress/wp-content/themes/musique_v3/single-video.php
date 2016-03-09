<?php
/**
 * The main template file
 */
?>
<?php get_header(); ?>
<div class="row">
<?php if ( have_posts() ) : ?>
	<div class="col-md-12">
		<?php while (have_posts()) : the_post(); ?>
			<?php 
				get_template_part( 'template-parts/musique/content', 'video_single' );
			?>
		<?php endwhile; ?>
		</div>
	</div>
<?php else : ?>
	<div class="col-md-12">
	<?php 
		get_template_part( 'template-parts/content', 'none' );
	?>
	</div>
<?php endif; ?>
<?php get_footer();?>