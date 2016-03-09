<?php
/**
 * The main template file
 */
?>
<div class="container">
<?php get_header(); ?>
		<?php if ( have_posts() ) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php 
					get_template_part( 'template-parts/content', get_post_format() );
				?>
			<?php endwhile; ?>
		<?php else : ?>
			<?php 
				get_template_part( 'template-parts/content', 'none' );
			?>
		<?php endif; ?>
		<?php get_sidebar();?>
<?php get_footer();?>
</div>