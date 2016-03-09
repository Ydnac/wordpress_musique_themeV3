<?php
/**
 * The main template file
 */
?>
<?php
	global $redux_musique;
	$layout = $redux_musique['opt-homepage-layout']['enabled'];
	$slider_layout = $layout["slider"];
	$featured_layout = $layout["featured_video"];
?>
<?php get_header(); ?>
<?php if($slider_layout) :?>
<div class="row" id="home_slider">
	<div class="col-md-12">
		<div class="wrapper_bx">
		<?php 
			get_template_part( 'template-parts/home/slider', 'bx' );
		?>
		</div>
	</div>
</div>
<?php endif;?>
<div class="row">
	<div class="col-md-9">
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
	</div>
	<?php if($featured_layout) : ?>
	<div class="col-md-3">
		<?php get_template_part('template-parts/musique/module', 'video'); ?>			
	</div>
	<?php endif;?>
</div>
<?php get_footer();?>