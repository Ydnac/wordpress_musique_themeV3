<?php
/**
 * The main template file
 */
?>
<?php get_header(); ?>
<div class="row">
	<div class="col-md-12">
	<?php if ( have_posts() ) : ?>
		<h3>Les artistes du genre <?php echo $wp_query->queried_object->name; ?></h3>
		<?php while (have_posts()) : the_post(); ?>
			<div class="col-xs-6 col-md-3">
			<?php 
				get_template_part( 'template-parts/musique/content', 'artist2' );
			?>
			</div>
		<?php endwhile; ?>
	<?php else : ?>
		<?php 
			get_template_part( 'template-parts/content', 'none' );
		?>
	<?php endif; ?>
	</div>
</div>
<?php get_footer();?>
